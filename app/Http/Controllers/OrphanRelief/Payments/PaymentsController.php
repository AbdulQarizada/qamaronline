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
use Illuminate\Support\Facades\Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

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
        $payments =   SponsorPayment::paginate(100);
        return view('OrphansRelief.Payment.All', ['datas' => $payments, 'PageInfo' => $PageInfo, 'provinces' => $provinces,]);
    }

    public function Paid()
    {
        $PageInfo = 'Paid';
        $provinces = Location::whereNull("Parent_ID")->get();
        $payments =   SponsorPayment::where('sponsor_payments.IsPaid', '=', 1) -> paginate(100);
        return view('OrphansRelief.Payment.All', ['datas' => $payments, 'PageInfo' => $PageInfo, 'provinces' => $provinces,]);
    }

    public function Due()
    {
        $PageInfo = 'Due';
        $provinces = Location::whereNull("Parent_ID")->get();
        $payments =   SponsorPayment::where('sponsor_payments.IsPaid', '!=', 1) -> paginate(100);
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

        $mypayments =  SponsorPayment::where("Email", "=", Auth::user()->email)
          ->paginate(100);
        return view('OrphansRelief.Payment.MyPayment', ['datas' => $mypayments]);
    }

    // status
    public function Reciept(SponsorPayment $data)
    {
        $payments =   SponsorPayment::where("orphan_payments.id", "=", $data->id)->get();
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
        return view('OrphansRelief.Payment.Checkout', ['datas' => $cart->items, 'totalPrice' => $cart->totalPrice]);
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
        }
        return view('OrphansRelief.Payment.Checkout', ['datas' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }



    public function StorePayment(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('AllGridOrphans');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


        // search if he is not already a sponsor
        $userid = User::where('email', '=', request('Email'))->first();
        if (!$userid) {

            Stripe::setApiKey(env('STRIPE_SECRET'));
            try {
                $AmountInCents = $request->input('Amount') * 100;
                $charge = Charge::create(array(
                  "amount" => $AmountInCents,
                  "currency" => "usd",
                  "source" => $request->input('stripeToken'), // obtained with Stripe.js
                  "description" => "Orphan Sponsorship"
                ));
            }
            catch (\Exception $e) {
                return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
            }

            try {
                $RandomPassword = Str::random(8);
                $NewUser = User::create([
                  'FullName' => request('FullName'),
                  'email' => request('Email'),
                  'password' => Hash::make($RandomPassword),
                  'Profile' => 'avatar-1.png',
                  'IsActive' => 1,
                  'IsEmployee' => 0,
                  'IsOrphanSponsor' => 1,
                ]);
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',
                ]);
            }

            // Create Sponsor Card
            try {
                $Card_ID = SponsorCard::create([
                  'Sponsor_ID' => $NewUser -> id,
                  'CardNumber' => Hash::make(request('CardNumber')),
                  'CardLastFourDigit' => substr(request('CardNumber'), -4),
                  'ValidMonth' => Hash::make(request('ValidMonth')),
                  'ValidYear' => Hash::make(request('ValidYear')),
                  'CVV' => Hash::make(request('CVV')),
                  'IsActive' => 1


                ]);
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorCardTry',
                ]);
            }

            // Create Sponsor Payment
            try {
                SponsorPayment::create([
                  'SubscriptionType' => request('SubscriptionType'),
                  'Amount' => request('Amount'),
                  'FullName' => request('FullName'),
                  'Email' => request('Email'),
                  'Card_ID' => $Card_ID->id,
                  'ChargeID' => $charge->id,
                  'Sponsor_ID' => $NewUser -> id,
                  'IsPaid' => 1
                ]);
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',
                ]);
            }

            // Create Sponsor User


            // Assign Oprhan to that Sponsor
            try {
                foreach ($oldCart->items as $item) {
                    $orphanid = Orphan::where('id', '=', $item['item']['id'])->first();
                    if (request('SubscriptionType') == 'Montly') {
                        SponsorSubscription::create([
                         'Orphan_ID' => $orphanid->id,
                         'Sponsor_ID' => $NewUser -> id,
                         'Amount' => 40,
                         'Type' => request('SubscriptionType'),
                         'Card_ID' => $Card_ID->id,
                         'Email' => request('Email'),
                         'StartDate' => now(),
                         'EndDate' => now()->addMonth(),
                         'IsActive' => 1,
                       ]);
                    }
                    if (request('SubscriptionType') == 'Yearly') {
                        SponsorSubscription::create([
                         'Orphan_ID' => $orphanid->id,
                         'Sponsor_ID' => $NewUser -> id,
                         'Amount' => 480,
                         'Type' => request('SubscriptionType'),
                         'Card_ID' => $Card_ID->id,
                         'Email' => request('Email'),
                         'StartDate' => now(),
                         'EndDate' => now()->addYear(),
                         'IsActive' => 1,
                       ]);
                    }
                }
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',
                ]);
            }

            // Send Confirmation Email to Sponsor
            try {
                $details = ['Email' => request('Email'), 'Password' => $RandomPassword, 'Amount' => request('Amount'),'FullName' => request('FullName')];
                Mail::to(request('Email'))->send(new NewSponsorConfirmation($details));
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',
                ]);
            }
            Session::forget('cart');
            return redirect()->route('AllGridOrphans')->with('done', 'Congratulations on successfully sponsoring an orphan!
      We have sent you an email, which contains username, password and a link to login to our system.
      You can login to the dashboard and keep tracking your sponsorship.
      We welcome you to Qamar Family!');
        }
        // see if there is alreay user
        else {

            // Stripe Pyament
            Stripe::setApiKey(env('STRIPE_SECRET'));
            try {
                $AmountInCents = $request->input('Amount') * 100;
                $charge = Charge::create(array(
                  "amount" => $AmountInCents,
                  "currency" => "usd",
                  "source" => $request->input('stripeToken'), // obtained with Stripe.js
                  "description" => "Orphan Sponsorship"
                ));
            }
            catch (\Exception $e) {
                return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
            }

            // Create Sponsor Card
            try {
                $Card_ID = SponsorCard::create([
                  'Sponsor_ID' => $userid -> id,
                  'CardNumber' => Hash::make(request('CardNumber')),
                  'CardLastFourDigit' => substr(request('CardNumber'), -4),
                  'ValidMonth' => Hash::make(request('ValidMonth')),
                  'ValidYear' => Hash::make(request('ValidYear')),
                  'CVV' => Hash::make(request('CVV')),
                  'IsActive' => 1
                ]);
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',
                ]);
            }

            // Create Sponsor Payment
            try {
                SponsorPayment::create([
                  'SubscriptionType' => request('SubscriptionType'),
                  'Amount' => request('Amount'),
                  'FullName' => request('FullName'),
                  'Email' => request('Email'),
                  'Card_ID' => $Card_ID->id,
                  'ChargeID' => $charge->id,
                  'Sponsor_ID' => $userid -> id,
                  'IsPaid' => 1
                ]);
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',
                ]);
            }

            // Assign Oprhan to that Sponsor
            try {
                $userid = User::where('email', '=', request('Email'))->first();
                foreach ($oldCart->items as $item) {
                    $orphanid = Orphan::where('id', '=', $item['item']['id'])->first();
                    if (request('SubscriptionType') == 'Montly') {
                        SponsorSubscription::create([
                         'Orphan_ID' => $orphanid->id,
                         'Amount' => 40,
                         'Type' => request('SubscriptionType'),
                         'Card_ID' => $Card_ID->id,
                         'Email' => request('Email'),
                         'StartDate' => now(),
                         'EndDate' => now()->addMonth(),
                         'Sponsor_ID' => $userid -> id,
                         'Email' => request('Email'),
                         'IsActive' => 1,
                       ]);
                    }
                    if (request('SubscriptionType') == 'Yearly') {
                        SponsorSubscription::create([
                          'Orphan_ID' => $orphanid->id,
                          'Amount' => 480,
                          'Type' => request('SubscriptionType'),
                          'Card_ID' => $Card_ID->id,
                          'Email' => request('Email'),
                          'StartDate' => now(),
                          'EndDate' => now()->addYear(),
                          'Sponsor_ID' => $userid -> id,
                          'Email' => request('Email'),
                          'IsActive' => 1,
                        ]);
                    }
                }
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',
                ]);
            }

            // Send Confirmation Email to Sponsor
            try {
                $details = ['Email' => request('Email'), 'Amount' => request('Amount'),'FullName' => request('FullName')];
                Mail::to(request('Email'))->send(new SponsorConfirmation($details));
            }
            catch (\Exception $e) {
                ErrorLog::create([
                  'Message' =>  $e->getMessage(),
                  'From' => 'PaymentContorller:StorePayment: SponsorPaymentTry',
                ]);
            }

            Session::forget('cart');
            return redirect()->route('AllGridOrphans')->with('done', 'Congratulations on successfully sponsoring an orphan!
      Please use your previous email and password to login to our dashboard at https://online.qamarcharity.org.
      You can login to the dashboard and keep tracking your sponsorship.
      We welcome you to Qamar Family!');
        }
    }
}
