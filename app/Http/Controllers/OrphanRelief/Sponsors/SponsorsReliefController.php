<?php

namespace App\Http\Controllers\OrphanRelief\Sponsors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class SponsorsReliefController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth');
  }

  // index
  public function Index()
  {

    return view('OrphansRelief.Index');
  }


  // Sponsor
  // list
  public function All()
  {
    $PageInfo = 'All';
    $sponsors =   User::where("users.IsOrphanSponsor", "=", 1)
    ->leftjoin('users as a', 'users.Created_By', '=', 'a.id')
    ->select('users.*','a.FirstName as UFirstName', 'a.LastName as ULastName', 'a.Job as UJob')
    -> get();
    return view('OrphansRelief.Sponsor.All', ['datas' => $sponsors, 'PageInfo' => $PageInfo]);
  }

  public function Active()
  {
    $PageInfo = 'Active';
    $sponsors =   User::where("users.IsOrphanSponsor", "=", 1)
    -> leftjoin('users as a', 'users.Created_By', '=', 'a.id')
    -> select('users.*','a.FirstName as UFirstName', 'a.LastName as ULastName', 'a.Job as UJob')
    -> where("users.IsActive", "=", 1)
    -> get();
    return view('OrphansRelief.Sponsor.All', ['datas' => $sponsors, 'PageInfo' => $PageInfo]);
  }

  public function InActive()
  {
    $PageInfo = 'InActive';
    $sponsors =   User::where("users.IsOrphanSponsor", "=", 1)
    -> leftjoin('users as a', 'users.Created_By', '=', 'a.id')
    -> select('users.*','a.FirstName as UFirstName', 'a.LastName as ULastName', 'a.Job as UJob')
    -> where("users.IsActive", "!=", 1)
    -> get();
    return view('OrphansRelief.Sponsor.All', ['datas' => $sponsors, 'PageInfo' => $PageInfo]);
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

    $sponsors =   User::where("users.id", "=", $data->id)->get();
    return view('OrphansRelief.Sponsor.Status',  ['datas' => $sponsors]);
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