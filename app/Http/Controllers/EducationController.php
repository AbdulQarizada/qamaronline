<?php

namespace App\Http\Controllers;


use App\Models\Scholarship;
use App\Models\Location;
use App\Models\LookUp;


use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth', ['except' => ['Verify', 'Search']]);
  }

  // index
  public function Index()
  {

    return view('Education.Index');
  }

  public function AllScholarship()
  {
    $scholarships =   Scholarship::
    // join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
    // ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
    // ->join('LookUp as c','qamar_care_cards.Education_ID', '=', 'c.id')
    // ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName',])

    get();
  return view('Education.Scholarship.All', compact('scholarships'));
  }

  public function AllApplicant()
  {

    return view('Education.AllApplicant');
  }




  
  // create
  public function CreateScholarship()
  {

    $countries =   LookUp::where("Parent_Name", "=", "Country")->get();
    $scholarshiptypes =   LookUp::where("Parent_Name", "=", "ScholarshipType")->get();
    $tribes =   LookUp::where("Parent_Name", "=", "Tribe")->get();
    $languages =   LookUp::where("Parent_Name", "=", "Language")->get();
    $currentjobs =   LookUp::where("Parent_Name", "=", "CurrentJob")->get();
    $futurejobs =   LookUp::where("Parent_Name", "=", "FutureJob")->get();
    $educationlevels =   LookUp::where("Parent_Name", "=", "EducationLevel")->get();
    $relationships =   LookUp::where("Parent_Name", "=", "RelativeRelationship")->get();
    $incomestreams =   LookUp::where("Parent_Name", "=", "IncomeStream")->get();
    $familystatus =   LookUp::where("Parent_Name", "=", "FamilyStatus")->get();
    $whatqamarcandos =   LookUp::where("Parent_Name", "=", "WhatQamarCanDo")->get();
    $provinces = Location::whereNull("Parent_ID")->get();






    return view('Education.Scholarship.Create', ['countries' => $countries,'whatqamarcandos' => $whatqamarcandos, 'scholarshiptypes' => $scholarshiptypes, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
  }

  public function StoreScholarship(Request $request)
  {

    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'FirstNameLocal' => 'required|max:255',

      // 'LastName' => 'required|max:255',
      'TazkiraID' => 'required|max:10',
      'QamarSupport_ID' => 'required|max:255',
      'MaritalStatus' => 'required|max:255',
      'Profile' => 'required|max:255',
      'DOB' => 'required|max:255',
      'Gender_ID' => 'required|max:255',
      'Language_ID' => 'required|max:255',
      'CurrentJob_ID' => 'required|max:255',
      'FutureJob_ID' => 'required|max:255',
      'EducationLevel_ID' => 'required|max:255',
      'PrimaryNumber' => 'required|max:10',
      // 'SecondaryNumber' => 'required|max:10',
      'RelativeNumber' => 'required|max:10',
      'Province_ID' => 'required|max:255',
      'District_ID' => 'required|max:255',
      'Village' => 'required|max:255',
      // 'Email' => 'required|email|max:255',
      'FatherName' => 'required|max:255',
      'FatherNameLocal' => 'required|max:255',

      // 'SpuoseName' => 'required|max:255',
      'EldestSonAge' => 'required|max:255',
      'MonthlyFamilyIncome' => 'required|max:10',
      'MonthlyFamilyExpenses' => 'required|max:10',
      'NumberFamilyMembers' => 'required|max:10',
      'IncomeStreem_ID' => 'required|max:255',
      'LevelPoverty' => 'required|max:255',
      // 'Tazkira' => 'required|max:255',

      'RelativeNumber' => 'required|max:10',
      'RelativeRelationship_ID' => 'required|max:255',
      'RelativeName' => 'required|max:255',
      'FamilyStatus_ID' => 'required|max:255',
      'Country_ID' => 'required|max:255',
      'Tribe_ID' => 'required|max:255',

    ]);


    //    if ($validator->fails()) {
    //     $error = $validator->errors()->first();
    //  }



    Scholarship::create([
      'FirstName' => request('FirstName'),
      'FirstNameLocal' => request('FirstNameLocal'),

      
      'LastName' => request('LastName'),
      'LastNameLocal' => request('LastNameLocal'),


      'TazkiraID' => request('TazkiraID'),
      'Profile' => request('Profile'),
      'DOB' => request('DOB'),
      'QCC' => request('QCC'),
      'Gender_ID' => request('Gender_ID'),
      'Language_ID' => request('Language_ID'),
      'CurrentJob_ID' => request('CurrentJob_ID'),
      'FutureJob_ID' => request('FutureJob_ID'),
      'EducationLevel_ID' => request('EducationLevel_ID'),
      'QamarSupport_ID' => request('QamarSupport_ID'),
      'PrimaryNumber' => request('PrimaryNumber'),
      'SecondaryNumber' => request('SecondaryNumber'),
      'RelativeNumber' => request('RelativeNumber'),
      'Province_ID' => request('Province_ID'),
      'District_ID' => request('District_ID'),
      'Village' => request('Village'),
      'Email' => request('Email'),
      'FatherName' => request('FatherName'),
      'FatherNameLocal' => request('FatherNameLocal'),

      'MaritalStatus' => request('MaritalStatus'),
      'SpuoseName' => request('SpuoseName'),
      'EldestSonAge' => request('EldestSonAge'),
      'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
      'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
      'NumberFamilyMembers' => request('NumberFamilyMembers'),
      'IncomeStreem_ID' => request('IncomeStreem_ID'),
      'LevelPoverty' => request('LevelPoverty'),
      'Tazkira' => request('Tazkira'),
      'Status' => 'Pending',
      'Created_By' => auth()->user()->name,

      'RelativeNumber' => request('RelativeNumber'),
      'RelativeRelationship_ID' => request('RelativeRelationship_ID'),
      'RelativeName' => request('RelativeName'),
      'FamilyStatus_ID' => request('FamilyStatus_ID'),
      'Country_ID' => request('Country_ID'),
      'Tribe_ID' => request('Tribe_ID'),
      'Owner' => 1,



    ]);

    return redirect()->route('AllQamarCareCard')->with('toast_success', 'Record Created Successfully!');
  }




}
