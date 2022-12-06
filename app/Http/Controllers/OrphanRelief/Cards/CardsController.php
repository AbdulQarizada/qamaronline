<?php

namespace App\Http\Controllers\OrphanRelief\Cards;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SponsorCard;
use Illuminate\Support\Facades\Hash;
use App\Models\Location;
use App\Models\User;

class CardsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Card
    // list
    public function All()
    {
        $PageInfo = 'All';
        $provinces = Location::whereNull("Parent_ID")->get();
        $cards =   SponsorCard::with('user')
        -> join('users as d', 'sponsor_cards.Created_By', '=', 'd.id')
        -> select(['sponsor_cards.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->paginate(100);
        return view('OrphansRelief.Card.All', ['datas' => $cards, 'PageInfo' => $PageInfo, 'provinces' => $provinces,]);
    }

    public function Active()
    {
        $PageInfo = 'Active';
        $provinces = Location::whereNull("Parent_ID")->get();
        $cards =   SponsorCard::with('user')
        -> join('users as d', 'sponsor_cards.Created_By', '=', 'd.id')
        -> select(['sponsor_cards.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        -> where("sponsor_cards.IsActive", "=", 1)
        -> paginate(100);
        return view('OrphansRelief.Card.All', ['datas' => $cards, 'PageInfo' => $PageInfo, 'provinces' => $provinces]);
    }

    public function InActive()
    {
        $PageInfo = 'InActive';
        $provinces = Location::whereNull("Parent_ID")->get();
        $cards =   SponsorCard::with('user')
        -> join('users as d', 'sponsor_cards.Created_By', '=', 'd.id')
        -> select(['sponsor_cards.*', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        -> where("sponsor_cards.IsActive", "!=", 1)
        -> paginate(100);
        return view('OrphansRelief.Card.All', ['datas' => $cards, 'PageInfo' => $PageInfo, 'provinces' => $provinces]);
    }


    public function Activate(SponsorCard $data)
    {
        $data->update([
            'IsActive' => 1,
            'IsActive_By' => auth()->user()->id,
        ]);
        return back() -> with('toast_success', 'Card Activated Successfully!');
    }

    public function DeActivate(SponsorCard $data)
    {
        $data->update([
            'IsActive' => 0,
            'IsActive_By' => auth()->user()->id,
        ]);
        return back() -> with('toast_error', 'Card De-Activated Successfully!');
    }

    // create
    public function Create()
    {
        $sponsors = User::where("IsOrphanSponsor", "=", 1)->where("IsActive", "=", 1)->get();
        return view('OrphansRelief.Card.Create', ['sponsors' => $sponsors]);
    }

    public function Store(Request $request)
    {

        $validator = $request -> validate([
            'Sponsor_ID' => 'bail|required|max:255',
            'CardNumber' => 'required|numeric',
            'ValidMonth' => 'required|numeric|max:255',
            'ValidYear' => 'required|numeric|max:255',
            'CVV' => 'required|numeric',

        ]);

        SponsorCard::create([
            'Sponsor_ID' => request('Sponsor_ID'),
            'CardNumber' => Hash::make(request('CardNumber')),
            'CardLastFourDigit' => substr(request('CardNumber'), -4),
            'ValidMonth' => Hash::make(request('ValidMonth')),
            'ValidYear' => Hash::make(request('ValidYear')),
            'CVV' => Hash::make(request('CVV')),
            'IsActive' => 1,
            'Created_By' => auth()->user()->id,
            'Owner' => 1,
        ]);

        return redirect()->route('AllCard')->with('toast_success', 'Record Created Successfully!');
    }

    // update
    public function Edit(SponsorCard $data)
    {
        $sponsors = User::where("IsOrphanSponsor", "=", 1)->where("IsActive", "=", 1)->get();
        return view('OrphansRelief.Card.Edit', ['data' => $data, 'sponsors' => $sponsors]);
    }

    public function Update(SponsorCard $data, Request $request)
    {
        $validator = $request->validate([
            'Sponsor_ID' => 'bail|required|max:255',
            'CardNumber' => 'required|numeric',
            'ValidMonth' => 'required|numeric|max:255',
            'ValidYear' => 'required|numeric|max:255',
            'CVV' => 'required|numeric|max:255',
        ]);
        $data->update([
            'Sponsor_ID' => request('Sponsor_ID'),
            'CardNumber' => Hash::make(request('CardNumber')),
            'CardLastFourDigit' => substr(request('CardNumber'), -4),
            'ValidMonth' => Hash::make(request('ValidMonth')),
            'ValidYear' => Hash::make(request('ValidYear')),
            'CVV' => Hash::make(request('CVV')),

        ]);
        return redirect()->route('AllCard')->with('toast_success', 'Record Edited Successfully!');
    }

    // Delete
    public function Delete(SponsorCard $data)
    {
        $data->delete();
        return back() -> with('success', 'Record deleted successfully');
    }


    public function GetCardAjax(Request $request)
    {
        $id = $request->data;
        $card =   SponsorCard::select('id', 'CardLastFourDigit')
        -> where("Sponsor_ID", "=", $id)
        -> where("IsActive", "=", 1)
        -> get();
        return response()->json($card);
    }
}
