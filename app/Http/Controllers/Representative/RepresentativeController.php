<?php

namespace App\Http\Controllers\Representative;

use App\Http\Controllers\Controller;
use App\Models\LookUp;
use App\Models\Representative;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class RepresentativeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => ['Create', 'Store', 'Success']]);
  }

  public function All()
  {
    $PageInfo = 'All';
    $Countries =   Representative::select('Country')->distinct()->get();
    $Representatives =   Representative::join('look_ups as a', 'representatives.Gender_ID', '=', 'a.id')
      ->select(['representatives.*', 'a.Name as Gender'])
      ->paginate(100);
    return view('Representative.All', ['datas' => $Representatives, 'PageInfo' => $PageInfo, 'Countries' => $Countries]);
  }
  // create
  public function Create()
  {
    $genders =   LookUp::where("Parent_Name", "=", "Gender")->get();
    return view('Representative.Create', ['genders' => $genders]);
  }

  public function Store(Request $request)
  {
    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'DOB' => 'required|date',
      'Gender_ID' => 'required|max:10',
      // Contact
      'PrimaryNumber' => 'required|max:10',
      'Email' => 'required|max:255|unique:representatives',
      // Questions
      'WeeklyHours' => 'required',
      'WhatYouOffer' => 'required',
      'MediaPresence' => 'required',
      // documents
      // 'Resume' => 'required',
      'Profile' => 'required',
      'Passport' => 'required',

    ]);

    $ip = $request->ip();
    $currentUserInfo = Location::get($ip);
    Representative::create([
      'FirstName' => request('FirstName'),
      'LastName'  => request('LastName'),
      'DOB' => request('DOB'),
      'Gender_ID' => request('Gender_ID'),
      'Country' => $currentUserInfo->countryName,
      'City' => $currentUserInfo->cityName,
      'PrimaryNumber' => request('PrimaryNumber'),
      'SecondaryNumber' => request('SecondaryNumber'),
      'Address' => request('Address'),
      'Email' => request('Email'),
      'WeeklyHours' => request('WeeklyHours'),
      'WhatYouOffer' => request('WhatYouOffer'),
      'MediaPresence' => request('MediaPresence'),

      'Resume' => request('Resume'),
      'Profile' => request('Profile'),
      'Passport' => request('Passport'),
      'Owner' => 1,
    ]);
    return redirect()->route('SuccessRepresentative');
  }

  // success
  public function Success()
  {
    return view('Representative.Success');
  }

  // Delete
  public function Delete(Representative $data)
  {
    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }

  public function Search($data)
  {
    $PageInfo = $data;
    $Countries =   Representative::select('Country')->distinct()->get();
    $Representatives =   Representative::join('look_ups as a', 'representatives.Gender_ID', '=', 'a.id')
      ->select(['representatives.*', 'a.Name as Gender'])
      ->where('Country', '=', $data)
      ->paginate(100);
    return view('Representative.All', ['datas' => $Representatives, 'PageInfo' => $PageInfo, 'Countries' => $Countries]);
  }
}
