<?php

namespace App\Http\Controllers\OrphanRelief\Sponsors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Orphan;
use App\Models\Location;
use App\Models\User;

class SponsorsReliefController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  // Sponsor
  // list
  public function All()
  {
    $PageInfo = 'All';
    $provinces = Location::whereNull("Parent_ID")->get();
    $sponsors =   User::where("users.IsOrphanSponsor", "=", 1)
    -> leftjoin('users as a', 'users.Created_By', '=', 'a.id')
    -> select('users.*','a.FirstName as UFirstName', 'a.LastName as ULastName', 'a.Job as UJob')
    -> withCount('orphan')
    -> paginate(100);
    return view('OrphansRelief.Sponsor.All', ['datas' => $sponsors, 'PageInfo' => $PageInfo,'provinces' => $provinces]);
  }

  public function Active()
  {
    $PageInfo = 'Active';
    $provinces = Location::whereNull("Parent_ID")->get();
    $sponsors =   User::where("users.IsOrphanSponsor", "=", 1)
    -> leftjoin('users as a', 'users.Created_By', '=', 'a.id')
    -> select('users.*','a.FirstName as UFirstName', 'a.LastName as ULastName', 'a.Job as UJob')
    -> where("users.IsActive", "=", 1)
    -> paginate(100);
    return view('OrphansRelief.Sponsor.All', ['datas' => $sponsors, 'PageInfo' => $PageInfo,'provinces' => $provinces]);
  }

  public function InActive()
  {
    $PageInfo = 'InActive';
    $provinces = Location::whereNull("Parent_ID")->get();
    $sponsors =   User::where("users.IsOrphanSponsor", "=", 1)
    -> leftjoin('users as a', 'users.Created_By', '=', 'a.id')
    -> select('users.*','a.FirstName as UFirstName', 'a.LastName as ULastName', 'a.Job as UJob')
    -> where("users.IsActive", "!=", 1)
    -> paginate(100);
    return view('OrphansRelief.Sponsor.All', ['datas' => $sponsors, 'PageInfo' => $PageInfo,'provinces' => $provinces]);
  }


  // create
  public function Create()
  {
    return view('OrphansRelief.Sponsor.Create');
  }

  public function Store(Request $request)
  {

    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'LastName' => 'required|max:255',
      'FullName' => 'required|max:255',
      'email' => 'required||unique:users|max:255',
      'password' => 'required|max:255',
      'Profile' => 'required|max:255',
      'PrimaryNumber' => 'required|max:10',
    ]);
    User::create([
      'FirstName' => request('FirstName'),
      'LastName' => request('LastName'),
      'FullName' => request('FullName'),
      'email' => request('email'),
      'Profile' => request('Profile'),
      'password' => Hash::make(request('password')),
      'PrimaryNumber' => request('PrimaryNumber'),
      'SecondaryNumber' => request('SecondaryNumber'),
      'IsOrphanSponsor' => 1,
      'IsActive' => 0,
      'Created_By' => auth()->user()->id,
      'Owner' => 1,
    ]);

    return redirect()->route('AllSponsor')->with('toast_success', 'Record Created Successfully!');
  }

  // update
  public function Edit(User $data)
  {

    return view('OrphansRelief.Sponsor.Edit', ['data' => $data]);
  }

  public function Update(User $data)
  {
    $data->update([
      'FirstName' => request('FirstName'),
      'LastName' => request('LastName'),
      'FullName' => request('FullName'),
      'email' => request('email'),
      'Profile' => request('Profile'),
      'PrimaryNumber' => request('PrimaryNumber'),
      'SecondaryNumber' => request('SecondaryNumber'),

    ]);
    return redirect()->route('AllSponsor')->with('toast_success', 'Record Edited Successfully!');
  }


  // Delete
  public function Delete(User $data)
  {
    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }


  // status
  public function Status(User $data)
  {
    $sponsors =   User::where("users.id", "=", $data->id)->first();
    $orphans = $sponsors->orphan()->paginate(17);
    return view('OrphansRelief.Sponsor.Status',  ['data' => $sponsors, 'orphans' => $orphans]);
  }

  public function Activate(User $data)
  {
    $data->update([
      'IsActive' => 1,
    ]);
    return redirect()->route('ActiveSponsor')->with('toast_success', 'user Activated Successfully!');
  }

  public function DeActivate(User $data)
  {
    $data->update([
      'IsActive' => 0
    ]);
    return redirect()->route('InActiveSponsor')->with('toast_error', 'User De-Activated Successfully!');
  }

  public function ResetPassword(Request $request, User $data)
  {
    $validator = $request->validate([
      'password' => 'bail|required|max:255',

    ]);
    $data->update([
      'password' => Hash::make(request('password')),
    ]);
    return redirect()->route('AllSponsor')->with('toast_success', 'Password reset Successfully!');
  }

}
