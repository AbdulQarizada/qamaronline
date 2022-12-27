<?php

namespace App\Http\Controllers\OrphanRelief\Payments;

use App\Http\Controllers\Controller;
use App\Mail\OrphanRelief\Sponsor\NewSponsorConfirmation;
use App\Mail\OrphanRelief\Sponsor\SponsorConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Cart;
use App\Models\Orphan;
use App\Models\SponsorPayment;
use App\Models\ErrorLog;
use App\Models\SponsorCard;
use App\Models\SponsorSubscription;
use Illuminate\Support\Facades\Hash;
use App\Models\Location;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;
use Carbon\Carbon;


class PaymentsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['except' => ['Checkout', 'AddToCart', 'RemoveFromCart', 'StorePayment']]);
  }

  // Payment
  // list
  public function All()
  {
    $PageInfo = 'All';
    $provinces = Location::whereNull("Parent_ID")->get();
    $payments =   SponsorPayment::with('user') -> orderBy('id', 'DESC') -> paginate(100);
    return view('OrphansRelief.Payment.All', ['datas' => $payments, 'PageInfo' => $PageInfo, 'provinces' => $provinces,]);
  }

  public function Paid()
  {
    $PageInfo = 'Paid';
    $provinces = Location::whereNull("Parent_ID")->get();
    $payments =   SponsorPayment::with('user') ->where('sponsor_payments.IsPaid', '=', 1)-> orderBy('id', 'DESC') ->paginate(100);
    return view('OrphansRelief.Payment.All', ['datas' => $payments, 'PageInfo' => $PageInfo, 'provinces' => $provinces,]);
  }

  public function Due()
  {
    $PageInfo = 'Due';
    $provinces = Location::whereNull("Parent_ID")->get();
    $payments =   SponsorPayment::with('user') ->where('sponsor_payments.IsPaid', '!=', 1)-> orderBy('id', 'DESC') ->paginate(100);
    return view('OrphansRelief.Payment.All', ['datas' => $payments, 'PageInfo' => $PageInfo, 'provinces' => $provinces,]);
  }

  public function MakeItPaid(SponsorPayment $data)
  {
    $data->update([
      'IsPaid' => 1,
      'Status_By' => auth()->user()->id,
    ]);
    return redirect()->route('PaidPayment')->with('toast_success', 'Payment is Paid Successfully!');
  }

  public function MakeItDue(SponsorPayment $data)
  {
    $data->update([
      'IsPaid' => 0,
      'Status_By' => auth()->user()->id,
    ]);
    return redirect()->route('DuePayment')->with('toast_error', 'Payment is Dued Successfully!');
  }

  public function MyPayments()
  {
    $mypayments =  SponsorPayment::where("Sponsor_ID", "=", Auth::user()->id)->paginate(100);
    return view('OrphansRelief.Payment.MyPayment', ['datas' => $mypayments]);
  }

  // status
  public function Reciept(SponsorPayment $data)
  {
    $payments =   SponsorPayment::where("id", "=", $data->id)->get();
    return view('OrphansRelief.Payment.Reciept', ['datas' => $payments,]);
  }


  // orphan cart

  public function Checkout()
  {
    if (!Session::has('cart')) {
      return view('OrphansRelief.Orphan.AllGrid');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $total = $cart->totalPrice;
    return view('OrphansRelief.Payment.Checkout',  ['datas' => $cart->items, 'totalPrice' => $cart->totalPrice]);
  }



  public function AddToCart(Request $request, $id)
  {
    $product = Orphan::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);
    $request->session()->put('cart', $cart);
    return redirect()->route('CheckoutPayment');
  }



  public function RemoveFromCart($id)
  {
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->removeItem($id);
    if (count($cart->items) > 0) {
      Session::put('cart', $cart);
    } else {
      Session::forget('cart');
      return redirect()->route('AllGridOrphans');
    }
    return redirect()->route('CheckoutPayment');
  }



  public function StorePayment(Request $request)
  {
    if (!Session::has('cart')) {
      return redirect()->route('AllGridOrphans');
    }

    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);


    // search if he is not already a sponsor
    $user = User::where('email', '=', request('Email'))->first();
    if (!$user) {
      Stripe::setApiKey(env('STRIPE_SECRET'));

      // Create customer in Strip===========================================================================================
      try {
        $customer = Customer::create([
          'source' => $request->input('stripeToken'),
          'email' => request('Email'),
        ]);
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: CustomerTry']);
        return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
      }
      // Charge Customer=====================================================================================================
      try {
        $AmountInCents = $request->input('Amount') * 100;
        $charge = Charge::create(array(
          "amount" => $AmountInCents,
          "currency" => "usd",
          "description" => "Orphan Sponsorship",
          'customer' => $customer->id,
        ));
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: ChargeTry']);
        return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
      }
      // Create User for Sponsor=============================================================================================
      try {
        $RandomPassword = Str::random(8);
        $NewUser = User::create([
          'FullName' => request('FullName'),
          'email' => request('Email'),
          'password' => Hash::make($RandomPassword),
          'Profile' => 'avatar.jpg',
          'IsActive' => 1,
          'IsOrphanSponsor' => 1,
        ]);
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry']);
      }
      // Create Sponsor Card=================================================================================================
      try {
        $Card_ID = SponsorCard::create([
          'Sponsor_ID' => $NewUser->id,
          'StripeCustomer_ID' => $customer->id,
          'CardLastFourDigit' => substr(request('CardNumber'), -4),
          'IsActive' => 1
        ]);
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorCardTry']);
      }
      // Create Sponsor Payment==============================================================================================
      try {
        SponsorPayment::create([
          'SubscriptionType' => request('SubscriptionType'),
          'Amount' => request('Amount'),
          'FullName' => request('FullName'),
          'Email' => request('Email'),
          'Card_ID' => $Card_ID->id,
          'ChargeID' => $charge->id,
          'Sponsor_ID' => $NewUser->id,
          'IsPaid' => 1
        ]);
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry']);
      }
      // Assign Oprhan to that Sponsor=======================================================================================
      try {
        foreach ($oldCart->items as $item) {
          $orphan = Orphan::where('id', '=', $item['item']['id'])->first();
          if (request('SubscriptionType') == 'Monthly') {
            SponsorSubscription::create([
              'Orphan_ID' => $orphan->id,
              'Sponsor_ID' => $NewUser->id,
              'Amount' => request('Amount'),
              'Type' => request('SubscriptionType'),
              'Card_ID' => $Card_ID->id,
              'StartDate' => now(),
              'EndDate' => now()->addMonth(),
              'IsActive' => 1,
            ]);
          }
          if (request('SubscriptionType') == 'Yearly') {
            SponsorSubscription::create([
              'Orphan_ID' => $orphan->id,
              'Sponsor_ID' => $NewUser->id,
              'Amount' => request('Amount'),
              'Type' => request('SubscriptionType'),
              'Card_ID' => $Card_ID->id,
              'StartDate' => now(),
              'EndDate' => now()->addYear(),
              'IsActive' => 1,
            ]);
          }
        }
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry']);
      }
      // Send Confirmation Email to Sponsor=====================================================================================
      try {
        $details = ['Email' => request('Email'), 'Password' => $RandomPassword, 'Amount' => request('Amount'), 'FullName' => request('FullName')];
        Mail::to(request('Email'))->send(new NewSponsorConfirmation($details));
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry']);
      }
      Session::forget('cart');
      return redirect()->route('AllGridOrphans')->with('done', 'Congratulations on successfully sponsoring an orphan!
      We have sent you an email, which contains username, password and a link to login to our system.
      You can login to the dashboard and keep tracking your sponsorship.
      We welcome you to Qamar Family!');
    } else { //################################################################# - ELSE if user is there

      // Stripe Pyament
      Stripe::setApiKey(env('STRIPE_SECRET'));
      $UserCard = $user->card()->where('IsActive', '=', 1)->where('CardLastFourDigit', '=', substr(request('CardNumber'), -4))->first();
      if ($UserCard) { //################ - if the user has already a card - ###
        // Charge Customer=========================================================================================================
        try {
          $AmountInCents = $request->input('Amount') * 100;
          $charge = Charge::create(array(
            "amount" => $AmountInCents,
            "currency" => "usd",
            "description" => "Orphan Sponsorship",
            'customer' => $UserCard->StripeCustomer_ID,
          ));
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: ChargeTry']);
          return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
        }

        // Create Sponsor Payment=========================================================================================================
        try {
          SponsorPayment::create([
            'SubscriptionType' => request('SubscriptionType'),
            'Amount' => request('Amount'),
            'FullName' => request('FullName'),
            'Email' => request('Email'),
            'Card_ID' => $UserCard->id,
            'ChargeID' => $charge->id,
            'Sponsor_ID' => $user->id,
            'IsPaid' => 1
          ]);
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',]);
        }

        // Assign Oprhan to that Sponsor=========================================================================================================
        try {
          foreach ($oldCart->items as $item) {
            $orphan = Orphan::where('id', '=', $item['item']['id'])->first();
            if (request('SubscriptionType') == 'Monthly') {
              SponsorSubscription::create([
                'Orphan_ID' => $orphan->id,
                'Amount' => request('Amount'),
                'Type' => request('SubscriptionType'),
                'Card_ID' => $UserCard->id,
                'StartDate' => now(),
                'EndDate' => now()->addMonth(),
                'Sponsor_ID' => $user->id,
                'IsActive' => 1,
              ]);
            }
            if (request('SubscriptionType') == 'Yearly') {
              SponsorSubscription::create([
                'Orphan_ID' => $orphan->id,
                'Amount' => request('Amount'),
                'Type' => request('SubscriptionType'),
                'Card_ID' => $UserCard->id,
                'StartDate' => now(),
                'EndDate' => now()->addYear(),
                'Sponsor_ID' => $user->id,
                'IsActive' => 1,
              ]);
            }
          }
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry']);
        }

        // Send Confirmation Email to Sponsor===============================================================================
        try {
          $details = ['Email' => request('Email'), 'Amount' => request('Amount'), 'FullName' => request('FullName')];
          Mail::to(request('Email'))->send(new SponsorConfirmation($details));
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry']);
        }

        Session::forget('cart');
        return redirect()->route('AllGridOrphans')->with('done', 'Congratulations on successfully sponsoring an orphan!
      Please use your previous email and password to login to our dashboard at https://online.qamarcharity.org.
      You can login to the dashboard and keep tracking your sponsorship.
      We welcome you to Qamar Family!');
      } else { //################################################################# - ELSE if card is not saved
        // Create customer in Strip=====================================================================================
        try {
          $customer = Customer::create([
            'source' => $request->input('stripeToken'),
            'email' => request('Email'),
          ]);
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: CustomerTry']);
          return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
        }


        // Charge Customer==============================================================================================
        try {
          $AmountInCents = $request->input('Amount') * 100;
          $charge = Charge::create(array(
            "amount" => $AmountInCents,
            "currency" => "usd",
            "description" => "Orphan Sponsorship",
            'customer' => $customer->id,
          ));
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: ChargeTry']);
          return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
        }

        // Create Sponsor Card============================================================================================
        try {
          $Card_ID = SponsorCard::create([
            'Sponsor_ID' => $user->id,
            'StripeCustomer_ID' => $customer->id,
            'CardLastFourDigit' => substr(request('CardNumber'), -4),
            'IsActive' => 1
          ]);
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorCardTry']);
        }
        // Create Sponsor Payment=========================================================================================
        try {
          SponsorPayment::create([
            'SubscriptionType' => request('SubscriptionType'),
            'Amount' => request('Amount'),
            'FullName' => request('FullName'),
            'Email' => request('Email'),
            'Card_ID' => $Card_ID->id,
            'ChargeID' => $charge->id,
            'Sponsor_ID' => $user->id,
            'IsPaid' => 1
          ]);
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',]);
        }

        // Assign Oprhan to that Sponsor====================================================================================
        try {
          foreach ($oldCart->items as $item) {
            $orphan = Orphan::where('id', '=', $item['item']['id'])->first();
            if (request('SubscriptionType') == 'Monthly') {
              SponsorSubscription::create([
                'Orphan_ID' => $orphan->id,
                'Amount' => request('Amount'),
                'Type' => request('SubscriptionType'),
                'Card_ID' => $Card_ID->id,
                'StartDate' => now(),
                'EndDate' => now()->addMonth(),
                'Sponsor_ID' => $user->id,
                'IsActive' => 1,
              ]);
            }
            if (request('SubscriptionType') == 'Yearly') {
              SponsorSubscription::create([
                'Orphan_ID' => $orphan->id,
                'Amount' => request('Amount'),
                'Type' => request('SubscriptionType'),
                'Card_ID' => $Card_ID->id,
                'StartDate' => now(),
                'EndDate' => now()->addYear(),
                'Sponsor_ID' => $user->id,
                'IsActive' => 1,
              ]);
            }
          }
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorAssingOrphanTry']);
        }


        // Send Confirmation Email to Sponsor===============================================================================
        try {
          $details = ['Email' => request('Email'), 'Amount' => request('Amount'), 'FullName' => request('FullName')];
          Mail::to(request('Email'))->send(new SponsorConfirmation($details));
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry']);
        }

        Session::forget('cart');
        return redirect()->route('AllGridOrphans')->with('done', 'Congratulations on successfully sponsoring an orphan!
      Please use your previous email and password to login to our dashboard at https://online.qamarcharity.org.
      You can login to the dashboard and keep tracking your orphans.
      We welcome you to Qamar Family!');
      }
    }
  }


  public function Recuring()
  {
    $PageInfo = 'All';
    $provinces = Location::whereNull("Parent_ID")->get();
    Stripe::setApiKey(env('STRIPE_SECRET'));
    $EndedSubscriptions = SponsorSubscription::with('user') -> where("EndDate", "<", Carbon::now())
      ->where("IsActive", "=", 1)
      ->get();

    foreach ($EndedSubscriptions as $EndedSubscription) {
      // if the user has Card Id saved
      if ($EndedSubscription->Card_ID != null) {
        $ActiveCard = SponsorCard::where("Sponsor_ID", "=", $EndedSubscription->Sponsor_ID)-> where("IsActive", "=", 1)->first();
        // if there is an active card avalibale
        if ($ActiveCard != null) {
          // Charge Customer==============================================================================================
          try {
            $AmountInCents = $EndedSubscription->Amount * 100;
            $charge = Charge::create(array(
              "amount" => $AmountInCents,
              "currency" => "usd",
              "description" => "Orphan Sponsorship",
              'customer' => $ActiveCard->StripeCustomer_ID,
            ));
          } catch (\Exception $e) {
            ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: ChargeTry']);
            SponsorPayment::create([
              'SubscriptionType' => $EndedSubscription->Type,
              'Amount' => $EndedSubscription->Amount,
              'Card_ID' => $EndedSubscription->Card_ID,
              'Sponsor_ID' => $EndedSubscription->Sponsor_ID,
              'IsPaid' => 0,
              'Remarks' => $e->getMessage()
            ]);
            return redirect()->route('AllPayment');
          }
          // Create Sponsor Payment=========================================================================================
          try {
            SponsorPayment::create([
              'SubscriptionType' => $EndedSubscription->Type,
              'Amount' => $EndedSubscription->Amount,
              'Card_ID' => $EndedSubscription->Card_ID,
              'ChargeID' => $charge->id,
              'Sponsor_ID' => $EndedSubscription->Sponsor_ID,
              'IsPaid' => 1,
              'Remarks' => "Payment is successfull"
            ]);
          } catch (\Exception $e) {
            ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',]);
          }
          // Assign Oprhan to that Sponsor====================================================================================
          try {
            if ($EndedSubscription->Type == 'Monthly') {
              $EndedSubscription->update([
                'EndDate' => Carbon::parse($EndedSubscription->EndDate)->addMonth(),
              ]);
            }
            if ($EndedSubscription->Type == 'Yearly') {
              $EndedSubscription->update([
                'EndDate' => Carbon::parse($EndedSubscription->EndDate)->addYear(),
              ]);
            }
          } catch (\Exception $e) {
            ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorAssingOrphanTry']);
          }
        // Send Confirmation Email to Sponsor===============================================================================
        try {
          $details = ['Email' => $EndedSubscription -> user -> email, 'Amount' => $EndedSubscription->Amount, 'FullName' => $EndedSubscription -> user -> FullName];
          Mail::to($EndedSubscription -> user -> email)->send(new SponsorConfirmation($details));
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry']);
        }

        } else {
          try {
            SponsorPayment::create([
              'SubscriptionType' => $EndedSubscription->Type,
              'Amount' => $EndedSubscription->Amount,
              'Card_ID' => $EndedSubscription->Card_ID,
              'Sponsor_ID' => $EndedSubscription->Sponsor_ID,
              'IsPaid' => 0,
              'Remarks' => "No Active Card Found"
            ]);
          } catch (\Exception $e) {
            ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTryIFNOACTIVECARD',]);
          }
        }
      } else {
        try {
          SponsorPayment::create([
            'SubscriptionType' => $EndedSubscription->Type,
            'Amount' => $EndedSubscription->Amount,
            'Card_ID' => $EndedSubscription->Card_ID,
            'Sponsor_ID' => $EndedSubscription->Sponsor_ID,
            'IsPaid' => 0,
            'Remarks' => "No Card Found"
          ]);
        } catch (\Exception $e) {
          ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'PaymentContorller:StorePayment: SponsorPaymentTryIFNoCard',]);
        }
      }
    }
    $payments =   $payments =   SponsorPayment::with('user') -> orderBy('id', 'DESC') ->paginate(100);
    return view('OrphansRelief.Payment.All', ['datas' => $payments, 'PageInfo' => $PageInfo, 'provinces' => $provinces,]);
  }
}
