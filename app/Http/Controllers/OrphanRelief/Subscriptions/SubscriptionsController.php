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
use Illuminate\Support\Facades\Mail;
use App\Mail\OrphanRelief\Sponsor\SponsorConfirmation;


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
      ->select(['sponsor_subscriptions.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->paginate(100);
    return view('OrphansRelief.Subscription.All', ['datas' => $SponsorSubscription, 'PageInfo' => $PageInfo, 'provinces' => $provinces, 'sponsors' => $sponsors]);
  }

  public function Active()
  {
    $PageInfo = 'Active';
    $sponsors = User::where("IsOrphanSponsor", "=", "1")->where("IsActive", "=", 1)->get();
    $provinces = Location::whereNull("Parent_ID")->get();
    $SponsorSubscription =   SponsorSubscription::with('user')
      ->join('users as d', 'sponsor_subscriptions.Created_By', '=', 'd.id')
      ->select(['sponsor_subscriptions.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("sponsor_subscriptions.IsActive", "=", 1)
      ->paginate(100);
    return view('OrphansRelief.Subscription.All', ['datas' => $SponsorSubscription, 'PageInfo' => $PageInfo, 'provinces' => $provinces, 'sponsors' => $sponsors]);
  }

  public function InActive()
  {
    $PageInfo = 'InActive';
    $sponsors = User::where("IsOrphanSponsor", "=", "1")->where("IsActive", "=", 1)->get();
    $provinces = Location::whereNull("Parent_ID")->get();
    $SponsorSubscription =   SponsorSubscription::with('user')
      ->join('users as d', 'sponsor_subscriptions.Created_By', '=', 'd.id')
      ->select(['sponsor_subscriptions.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("sponsor_subscriptions.IsActive", "!=", 1)
      ->paginate(100);
    return view('OrphansRelief.Subscription.All', ['datas' => $SponsorSubscription, 'PageInfo' => $PageInfo, 'provinces' => $provinces, 'sponsors' => $sponsors]);
  }


  public function Activate(SponsorSubscription $data)
  {
    $data->update([
      'IsActive' => 1,
      'IsActive_By' => auth()->user()->id,

    ]);
    return back()->with('toast_success', 'Subscription Activated Successfully!');
  }

  public function DeActivate(SponsorSubscription $data)
  {
    $data->update([
      'IsActive' => 0,
      'IsActive_By' => auth()->user()->id,
    ]);
    return back()->with('toast_error', 'Subscription De-Activated Successfully!');
  }

  // create
  public function Create()
  {
    $sponsors = User::where("IsOrphanSponsor", "=", "1")->where("IsActive", "=", "1")->get();
    $orphans =   Orphan::WhereDoesntHave('user', function ($query) {
      $query->where('sponsor_subscriptions.IsActive', 1);
    })->get();
    return view('OrphansRelief.Subscription.Create', ['sponsors' => $sponsors, 'orphans' => $orphans]);
  }

  public function Store(Request $request)
  {

    $validator = $request->validate([
      'Sponsor_ID' => 'bail|required|max:255',
      'Orphan_ID' => 'required|max:255',
      'StartDate' => 'required|max:255',
      'EndDate' => 'required|max:255',

    ]);

    // Check if the orphan has active sponsorship
    $orphans =   SponsorSubscription::where("Orphan_ID", "=", request('Orphan_ID'))->where("IsActive", "=", 1)->first();

    if (!$orphans) {
      SponsorSubscription::create([
        'Orphan_ID' => request('Orphan_ID'),
        'Sponsor_ID' => request('Sponsor_ID'),
        'StartDate' => request('StartDate'),
        'EndDate' => request('EndDate'),
        'IsActive' => 1,
      ]);
      return back()->with('toast_success', 'Record Created Successfully!');
    } else {
      return back()->with('toast_warning', 'This orphan has already an active sponsor!');
    }
  }


  // add subscription by user
  public function StoreByUser(Request $request)
  {
    $validator = $request->validate([
      'Sponsor_ID' => 'bail|required|max:255',
      'Orphan_ID' => 'required|max:255',
      'SubscriptionType' => 'required|max:255',
      'Card_ID' => 'required|max:255',
    ]);

    // Stripe Pyament
    Stripe::setApiKey(env('STRIPE_SECRET'));
    $UserCard = SponsorCard::where('IsActive', '=', 1)->where('id', '=', request('Card_ID'))->first();

    if (request('SubscriptionType') == 'Monthly') {
      // Charge Customer=========================================================================================================
      try {
        $AmountInCents = 41.2 * 100;
        $charge = Charge::create(array(
          "amount" => $AmountInCents,
          "currency" => "usd",
          "description" => "Orphan Sponsorship",
          'customer' => $UserCard->StripeCustomer_ID,
        ));
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'SubscriptionContorller:StoreByUser: ChargeTry']);
        return back()->with('error', $e->getMessage());
      }
      // Create Sponsor Payment=========================================================================================================
      try {
        SponsorPayment::create([
          'SubscriptionType' => request('SubscriptionType'),
          'Amount' => 41.2,
          'FullName' => Auth::user() -> FullName,
          'Email' => Auth::user() -> email,
          'Card_ID' => $UserCard->id,
          'ChargeID' => $charge->id,
          'Sponsor_ID' => request('Sponsor_ID'),
          'IsPaid' => 1
        ]);
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'SubscriptionContorller:StoreByUser: SponsorPaymentTry',]);
      }
      // Assign Oprhan to that Sponsor====================================================================================
      try {
        SponsorSubscription::create([
          'Orphan_ID' => request('Orphan_ID'),
          'Amount' => 41.2,
          'Type' => request('SubscriptionType'),
          'Card_ID' => request('Card_ID'),
          'StartDate' => now(),
          'EndDate' => now()->addMonth(),
          'Sponsor_ID' => request('Sponsor_ID'),
          'IsActive' => 1,
        ]);
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'SubscriptionContorller:StoreByUser: SponsorAssingOrphanMonthlyTry']);
      }
      // Send Confirmation Email to Sponsor===============================================================================
      try {
        $details = ['Email' => request('Email'), 'Amount' => 41.2, 'FullName' => request('FullName')];
        Mail::to(request('Email'))->send(new SponsorConfirmation($details));
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'SubscriptionContorller:StoreByUser: SponsorPaymentTry']);
      }
      return back() ->with('done', 'Congratulations on successfully sponsoring an orphan!
      We are happy to have you at  Qamar Family!');
    }

    if (request('SubscriptionType') == 'Yearly') {
      // Charge Customer=========================================================================================================
      try {
        $AmountInCents = 494.4 * 100;
        $charge = Charge::create(array(
          "amount" => $AmountInCents,
          "currency" => "usd",
          "description" => "Orphan Sponsorship",
          'customer' => $UserCard->StripeCustomer_ID,
        ));
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'SubscriptionContorller:StoreByUser: ChargeTry']);
        return back()->with('error', $e->getMessage());
      }
      // Create Sponsor Payment=========================================================================================================
      try {
        SponsorPayment::create([
          'SubscriptionType' => request('SubscriptionType'),
          'Amount' => 494.4,
          'FullName' => Auth::user() -> FullName,
          'Email' => Auth::user() -> email,
          'Card_ID' => $UserCard->id,
          'ChargeID' => $charge->id,
          'Sponsor_ID' => request('Sponsor_ID'),
          'IsPaid' => 1
        ]);
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'SubscriptionContorller:StoreByUser: SponsorPaymentTry',]);
      }
      // Assign Oprhan to that Sponsor====================================================================================
      try {
        SponsorSubscription::create([
          'Orphan_ID' => request('Orphan_ID'),
          'Amount' => 494.4,
          'Type' => request('SubscriptionType'),
          'Card_ID' => request('Card_ID'),
          'StartDate' => now(),
          'EndDate' => now()->addYear(),
          'Sponsor_ID' => request('Sponsor_ID'),
          'IsActive' => 1,
        ]);
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'SubscriptionContorller:StoreByUser: SponsorAssingOrphanMonthlyTry']);
      }
      // Send Confirmation Email to Sponsor===============================================================================
      try {
        $details = ['Email' => request('Email'), 'Amount' => 494.4, 'FullName' => request('FullName')];
        Mail::to(request('Email'))->send(new SponsorConfirmation($details));
      } catch (\Exception $e) {
        ErrorLog::create(['Message' =>  $e->getMessage(), 'From' => 'SubscriptionContorller:StoreByUser: SponsorPaymentTry']);
      }
      return back() ->with('done', 'Congratulations on successfully sponsoring an orphan!
      We are happy to have you at  Qamar Family!');
    }
  }

  // update
  public function Edit(SponsorSubscription $data)
  {
    $sponsors = User::where("IsOrphanSponsor", "=", 1)->where("IsActive", "=", 1)->get();
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
}
