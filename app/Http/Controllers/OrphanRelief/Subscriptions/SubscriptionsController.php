<?php

namespace App\Http\Controllers\OrphanRelief\Subscriptions;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Orphan;
use App\Models\SponsorCard;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SponsorSubscription;

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
          'Type' => 'required|max:255',
          'Amount' => 'required|max:255',
          'Card_ID' => 'required|max:255',
          'StartDate' => 'required|max:255',
          'EndDate' => 'required|max:255',
        ]);

        SponsorSubscription::create([
         'Sponsor_ID' => request('Sponsor_ID'),
         'Orphan_ID' => request('Orphan_ID'),
         'Type' => request('Type'),
         'Amount' => request('Amount'),
         'Card_ID' => request('Card_ID'),
         'Email' => request('Email'),
         'StartDate' => request('StartDate'),
         'EndDate' => request('EndDate'),
         'IsActive' => 1,
         'Created_By' => auth()->user()->id,
         'Owner' => 1,
       ]);

        return redirect()->route('AllSubscription') -> with('toast_success', 'Record Created Successfully!');
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


}
