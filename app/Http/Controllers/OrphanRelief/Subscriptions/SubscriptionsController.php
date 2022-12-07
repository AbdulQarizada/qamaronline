<?php

namespace App\Http\Controllers\OrphanRelief\Subscriptions;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Orphan;
use App\Models\SponsorCard;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SponsorSubscription;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Support\Facades\Hash;
use App\Models\ErrorLog;
use App\Models\SponsorPayment;
use Illuminate\Support\Facades\Auth;


class SubscriptionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Subscription
    // list
    public function All()
    {
        $PageInfo = 'All';
        $sponsors = User::where("IsOrphanSponsor", "=", "1")->where("IsActive", "=", 1)->get();
        $provinces = Location::whereNull("Parent_ID")->get();
        $SponsorSubscription =   SponsorSubscription::join('users as d', 'sponsor_subscriptions.Created_By', '=', 'd.id')
        -> select(['sponsor_subscriptions.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        -> paginate(100);
        return view('OrphansRelief.Subscription.All', ['datas' => $SponsorSubscription, 'PageInfo' => $PageInfo, 'provinces' => $provinces,'sponsors' => $sponsors]);
    }

    public function Active()
    {
        $PageInfo = 'Active';
        $sponsors = User::where("IsOrphanSponsor", "=", "1")->where("IsActive", "=", 1)->get();
        $provinces = Location::whereNull("Parent_ID")->get();
        $SponsorSubscription =   SponsorSubscription::with('user')
        -> join('users as d', 'sponsor_subscriptions.Created_By', '=', 'd.id')
        -> select(['sponsor_subscriptions.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        -> where("sponsor_subscriptions.IsActive", "=", 1)
        -> paginate(100);
        return view('OrphansRelief.Subscription.All', ['datas' => $SponsorSubscription, 'PageInfo' => $PageInfo,'provinces' => $provinces,'sponsors' => $sponsors]);
    }

    public function InActive()
    {
        $PageInfo = 'InActive';
        $sponsors = User::where("IsOrphanSponsor", "=", "1")->where("IsActive", "=", 1)->get();
        $provinces = Location::whereNull("Parent_ID")->get();
        $SponsorSubscription =   SponsorSubscription::with('user')
        -> join('users as d', 'sponsor_subscriptions.Created_By', '=', 'd.id')
        -> select(['sponsor_subscriptions.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        -> where("sponsor_subscriptions.IsActive", "!=", 1)
        -> paginate(100);
        return view('OrphansRelief.Subscription.All', ['datas' => $SponsorSubscription, 'PageInfo' => $PageInfo,'provinces' => $provinces,'sponsors' => $sponsors]);
    }


    public function Activate(SponsorSubscription $data)
    {
        $data->update([
          'IsActive' => 1,
          'IsActive_By' => auth()->user()->id,

        ]);
        return back() -> with('toast_success', 'Subscription Activated Successfully!');
    }

    public function DeActivate(SponsorSubscription $data)
    {
        $data->update([
          'IsActive' => 0,
          'IsActive_By' => auth()->user()->id,
        ]);
        return back() -> with('toast_error', 'Subscription De-Activated Successfully!');
    }

    // create
    public function Create()
    {
        $sponsors = User::where("IsOrphanSponsor", "=", "1")->where("IsActive", "=", "1")->get();
        $orphans =   Orphan::WhereDoesntHave('user', function($query) {   $query->where('sponsor_subscriptions.IsActive', 1);  }) -> get();
        return view('OrphansRelief.Subscription.Create', ['sponsors' => $sponsors, 'orphans' => $orphans]);
    }

    public function Store(Request $request)
    {

        $validator = $request->validate([
          'Sponsor_ID' => 'bail|required|max:255',
          'Orphan_ID' => 'required|max:255',
          'SubscriptionType' => 'required|max:255',
          'Card_ID' => 'required|max:255',
          'StartDate' => 'required|max:255',
        ]);

      if (request('SubscriptionType') == 'Monthly') {
        SponsorSubscription::create([
          'Orphan_ID' => request('Orphan_ID'),
          'Sponsor_ID' => request('Sponsor_ID'),
          'Amount' => 41.2,
          'Type' => request('SubscriptionType'),
          'Card_ID' => request('Card_ID'),
          'StartDate' => now(),
          'EndDate' => now()->addMonth(),
          'IsActive' => 1,
        ]);
        return back() -> with('toast_success', 'Record Created Successfully!');
      }
      if (request('SubscriptionType') == 'Yearly') {
        SponsorSubscription::create([
          'Orphan_ID' => request('Orphan_ID'),
          'Sponsor_ID' => request('Sponsor_ID'),
          'Amount' => 494.4,
          'Type' => request('SubscriptionType'),
          'Card_ID' => request('Card_ID'),
          'StartDate' => now(),
          'EndDate' => now()->addYear(),
          'IsActive' => 1,
        ]);
        return back() -> with('toast_success', 'Record Created Successfully!');
      }

    }

    // update
    public function Edit(SponsorSubscription $data)
    {
        $sponsors = User::where("IsOrphanSponsor", "=", 1) -> where("IsActive", "=", 1) -> get();
        $orphans =   Orphan::get();
        $cards =   SponsorCard::get();
        return view('OrphansRelief.Subscription.Edit', ['data' => $data, 'sponsors' => $sponsors, 'orphans' => $orphans, 'cards' => $cards]);
    }

    public function Update(SponsorSubscription $data)
    {
        $data->update([
         'Sponsor_ID' => request('Sponsor_ID'),
         'Orphan_ID' => request('Orphan_ID'),
         'Type' => request('Type'),
         'Amount' => request('Amount'),
         'Card_ID' => request('Card_ID'),
         'Email' => request('Email'),
         'StartDate' => request('StartDate'),
         'EndDate' => request('EndDate'),

        ]);
        return redirect()->route('AllSubscription')->with('toast_success', 'Record Edited Successfully!');
    }

    // Delete
    public function Delete(SponsorSubscription $data)
    {
        $data->delete();
        return back()->with('success', 'Record deleted successfully');
    }

     // Delete
     public function AddSubscriptionBySponsor(Request $request)
     {

        $Card = SponsorCard::Where(Auth::user() -> id) -> Where("IsActive", "=", 1) -> first();

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
                $orphanid = Orphan::where('id', '=', request('Orphan_ID'))->first();
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
