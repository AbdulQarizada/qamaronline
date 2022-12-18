<?php

namespace App\Http\Controllers\Volunteer;

use App\Http\Controllers\Controller;
use App\Models\LookUp;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class VolunteerController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => ['Create', 'Store', 'Success']]);
  }

  public function All()
  {
    $PageInfo = 'All';
    $Countries =   Volunteer::get();
    $Volunteers =   Volunteer::join('look_ups as a', 'volunteers.Gender_ID', '=', 'a.id')
    -> join('look_ups as b', 'volunteers.InterestedDepartment_ID', '=', 'b.id')
      ->select(['volunteers.*', 'a.Name as Gender', 'b.Name as InterestedDepartment'])
      ->paginate(100);
      $ip = '125.213.211.95';
      $currentUserInfo = Location::get($ip);

    return view('Volunteer.All', ['datas' => $Volunteers, 'PageInfo' => $PageInfo, 'Countries' => $Countries, 'currentUserInfo' => $currentUserInfo]);
  }
  // create
  public function Create()
  {
    $genders =   LookUp::where("Parent_Name", "=", "Gender")->get();
    $InterestedDepartments =   LookUp::where("Parent_Name", "=", "VolunteerInterestedDepartment")->get();
    return view('Volunteer.Create', ['genders' => $genders, 'InterestedDepartments' => $InterestedDepartments]);
  }

  public function Store(Request $request)
  {
    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'DOB' => 'required|date',
      'Gender_ID' => 'required|max:10',
      // Contact
      'PrimaryNumber' => 'required|max:10',
      'Email' => 'required|max:255|unique:volunteers',
      // Questions
      'InterestedDepartment_ID' => 'required',
      'Reason' => 'required',
      // documents
      'Resume' => 'required|max:255',
    ]);

    $ip = $request->ip();
    $currentUserInfo = Location::get($ip);
    Volunteer::create([
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
      'InterestedDepartment_ID' => request('InterestedDepartment_ID'),
      'Reason' => request('Reason'),
      'Resume' => request('Resume'),
      'Owner' => 1,
    ]);
    return redirect()->route('SuccessVolunteer');
  }

  // success
  public function Success()
  {
    return view('Volunteer.Success');
  }


}
