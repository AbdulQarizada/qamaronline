<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Scholarship;
use App\Models\Application;

use App\Models\ScholarshipModule;
use App\Models\Location;

use App\Models\LookUp;


use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth', ['except' => ['CreateApplication', 'StoreApplication', 'SuccessApplication']]);
  }

  // index
  public function Index()
  {

    return view('Education.Index');
  }

  public function AllScholarship()
  {
    $scholarships =   Scholarship::join('look_ups as a', 'scholarships.ScholarshipType_ID', '=', 'a.id')
    ->join('look_ups as b', 'scholarships.Country_ID', '=', 'b.id')
    ->select(['scholarships.*', 'a.Name as ScholarshipType', 'b.Name as Country',])

    -> get();
  return view('Education.Scholarship.All', compact('scholarships'));
  }





  
  // create
  public function CreateScholarship()
  {

    $countries =   LookUp::where("Parent_Name", "=", "Country")->get();
    $scholarshiptypes =   LookUp::where("Parent_Name", "=", "ScholarshipType")->get();
    // $tribes =   LookUp::where("Parent_Name", "=", "Tribe")->get();
    // $languages =   LookUp::where("Parent_Name", "=", "Language")->get();
    // $currentjobs =   LookUp::where("Parent_Name", "=", "CurrentJob")->get();
    // $futurejobs =   LookUp::where("Parent_Name", "=", "FutureJob")->get();
    // $educationlevels =   LookUp::where("Parent_Name", "=", "EducationLevel")->get();
    // $relationships =   LookUp::where("Parent_Name", "=", "RelativeRelationship")->get();
    // $incomestreams =   LookUp::where("Parent_Name", "=", "IncomeStream")->get();
    // $familystatus =   LookUp::where("Parent_Name", "=", "FamilyStatus")->get();
    // $whatqamarcandos =   LookUp::where("Parent_Name", "=", "WhatQamarCanDo")->get();
    // $provinces = Location::whereNull("Parent_ID")->get();






    return view('Education.Scholarship.Create', ['countries' => $countries, 'scholarshiptypes' => $scholarshiptypes,]);
  }

  public function StoreScholarship(Request $request)
  {

    $validator = $request->validate([
      'ScholarshipName' => 'bail|required|max:255',
      'ScholarshipType_ID' => 'required|max:255',
      'Country_ID' => 'required|max:10',
      'StartDate' => 'required|max:255',
      'EndDate' => 'required|max:255',
      'Seats' => 'required|max:255',

    //   'Profile' => 'required|max:255',
    //   'DOB' => 'required|max:255',
    //   'Gender_ID' => 'required|max:255',
    //   'Language_ID' => 'required|max:255',
    //   'CurrentJob_ID' => 'required|max:255',
    //   'FutureJob_ID' => 'required|max:255',
    //   'EducationLevel_ID' => 'required|max:255',
    //   'PrimaryNumber' => 'required|max:10',
      // 'SecondaryNumber' => 'required|max:10',
    //   'RelativeNumber' => 'required|max:10',
    //   'Province_ID' => 'required|max:255',
    //   'District_ID' => 'required|max:255',
    //   'Village' => 'required|max:255',
      // 'Email' => 'required|email|max:255',
    //   'FatherName' => 'required|max:255',
    //   'FatherNameLocal' => 'required|max:255',

      // 'SpuoseName' => 'required|max:255',
    //   'EldestSonAge' => 'required|max:255',
    //   'MonthlyFamilyIncome' => 'required|max:10',
    //   'MonthlyFamilyExpenses' => 'required|max:10',
    //   'NumberFamilyMembers' => 'required|max:10',
    //   'IncomeStreem_ID' => 'required|max:255',
    //   'LevelPoverty' => 'required|max:255',
      // 'Tazkira' => 'required|max:255',

    //   'RelativeNumber' => 'required|max:10',
    //   'RelativeRelationship_ID' => 'required|max:255',
    //   'RelativeName' => 'required|max:255',
    //   'FamilyStatus_ID' => 'required|max:255',
    //   'Country_ID' => 'required|max:255',
    //   'Tribe_ID' => 'required|max:255',

    ]);


    //    if ($validator->fails()) {
    //     $error = $validator->errors()->first();
    //  }



    Scholarship::create([
      'ScholarshipName' => request('ScholarshipName'),
      'ScholarshipType_ID' => request('ScholarshipType_ID'),
      'Country_ID' => request('Country_ID'),
      'StartDate' => request('StartDate'),
      'EndDate' => request('EndDate'),
      'Seats' => request('Seats'),
    //   'DOB' => request('DOB'),
    //   'QCC' => request('QCC'),
    //   'Gender_ID' => request('Gender_ID'),
    //   'Language_ID' => request('Language_ID'),
    //   'CurrentJob_ID' => request('CurrentJob_ID'),
    //   'FutureJob_ID' => request('FutureJob_ID'),
    //   'EducationLevel_ID' => request('EducationLevel_ID'),
    //   'QamarSupport_ID' => request('QamarSupport_ID'),
    //   'PrimaryNumber' => request('PrimaryNumber'),
    //   'SecondaryNumber' => request('SecondaryNumber'),
    //   'RelativeNumber' => request('RelativeNumber'),
    //   'Province_ID' => request('Province_ID'),
    //   'District_ID' => request('District_ID'),
    //   'Village' => request('Village'),
    //   'Email' => request('Email'),
    //   'FatherName' => request('FatherName'),
    //   'FatherNameLocal' => request('FatherNameLocal'),

    //   'MaritalStatus' => request('MaritalStatus'),
    //   'SpuoseName' => request('SpuoseName'),
    //   'EldestSonAge' => request('EldestSonAge'),
    //   'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
    //   'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
    //   'NumberFamilyMembers' => request('NumberFamilyMembers'),
    //   'IncomeStreem_ID' => request('IncomeStreem_ID'),
    //   'LevelPoverty' => request('LevelPoverty'),
    //   'Tazkira' => request('Tazkira'),
      'Status' => 'Pending',
      'Created_By' => auth()->user()->name,

    //   'RelativeNumber' => request('RelativeNumber'),
    //   'RelativeRelationship_ID' => request('RelativeRelationship_ID'),
    //   'RelativeName' => request('RelativeName'),
    //   'FamilyStatus_ID' => request('FamilyStatus_ID'),
    //   'Country_ID' => request('Country_ID'),
    //   'Tribe_ID' => request('Tribe_ID'),
      'Owner' => 1,



    ]);

    return redirect()->route('AllScholarshipEducation')->with('toast_success', 'Record Created Successfully!');
  }

  // Delete
  public function DeleteScholarship(Scholarship $data)
  {

    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }


  public function ActiveScholarship()
  {
    $mytime = Carbon::now()->format('Y-m-d');
    $scholarships =   Scholarship::join('look_ups as a', 'scholarships.ScholarshipType_ID', '=', 'a.id')
    ->join('look_ups as b', 'scholarships.Country_ID', '=', 'b.id')
    ->select(['scholarships.*', 'a.Name as ScholarshipType', 'b.Name as Country',])
    -> where("EndDate", ">", $mytime)
    -> get();
  return view('Education.Scholarship.All', compact('scholarships'));
  }


  public function ClosedScholarship()
  {
    $mytime = Carbon::now()->format('Y-m-d');

    $scholarships =   Scholarship::join('look_ups as a', 'scholarships.ScholarshipType_ID', '=', 'a.id')
    ->join('look_ups as b', 'scholarships.Country_ID', '=', 'b.id')
    ->select(['scholarships.*', 'a.Name as ScholarshipType', 'b.Name as Country',])
    -> where("EndDate", "<", $mytime)
    -> get();
  return view('Education.Scholarship.All', compact('scholarships'));
  }



  public function CreateScholarshipModule(Request $request)
  {
    
     $validator = $request->validate([
    'Parent_ID' => 'bail|required|max:255',
    'ModuleName' => 'required|max:255',


     ]);
   

   
     ScholarshipModule::create([
        'Parent_ID' => request('Parent_ID'),
        'ModuleName' => request('ModuleName'),




        ]);

       return redirect()->route('AllScholarshipEducation')->with('toast_success', 'Record Created Successfully!');

    




  }


  
  public function AllApplicant()
  {
    $applicants =   Application::
    // join('look_ups as a', 'scholarships.ScholarshipType_ID', '=', 'a.id')
    // ->join('look_ups as b', 'scholarships.Country_ID', '=', 'b.id')
    // ->select(['scholarships.*', 'a.Name as ScholarshipType', 'b.Name as Country',])

    get();
  return view('Education.Application.All', compact('applicants'));
  }

 
  // create
  public function CreateApplication()
  {

    $countries =   LookUp::where("Parent_Name", "=", "Country")->get();
    $genders =   LookUp::where("Parent_Name", "=", "Gender")->get();
    $tribes =   LookUp::where("Parent_Name", "=", "Tribe")->get();
    $languages =   LookUp::where("Parent_Name", "=", "Language")->get();
    $currentjobs =   LookUp::where("Parent_Name", "=", "CurrentJob")->get();
    $futurejobs =   LookUp::where("Parent_Name", "=", "FutureJob")->get();
    $educationlevels =   LookUp::where("Parent_Name", "=", "EducationLevel")->get();
    $relationships =   LookUp::where("Parent_Name", "=", "RelativeRelationship")->get();
    $incomestreams =   LookUp::where("Parent_Name", "=", "IncomeStream")->get();
    $familystatus =   LookUp::where("Parent_Name", "=", "FamilyStatus")->get();
    $whatqamarcandos =   LookUp::where("Parent_Name", "=", "WhatQamarCanDo")->get();
    $englishproficiencys =   LookUp::where("Parent_Name", "=", "EnglishProficiency")->get();
    $scholarshiptypes =   LookUp::where("Parent_Name", "=", "ScholarshipType")->get();
    $provinces = Location::whereNull("Parent_ID")->get();




    return view('Education.Application.Create', ['scholarshiptypes' => $scholarshiptypes,'englishproficiencys' => $englishproficiencys,'countries' => $countries,'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);


  }

  public function StoreApplication(Request $request)
  {

    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      // 'LastName' => 'required|max:255',
      'TazkiraID' => 'required|max:255',
      'DOB'=> 'required|max:255',
      'Gender_ID'=> 'required|max:10',
      'Country_ID'=> 'required|max:10',
      'Tribe_ID'=> 'required|max:10',
      'Language_ID'=> 'required|max:10',
      'FatherName'=> 'required|max:255',
      'MotherName'=> 'required|max:255',
      'MonthlyFamilyIncome'=> 'required|max:10',
      'MonthlyFamilyExpenses'=> 'required|max:10',
      'NumberFamilyMembers'=> 'required|max:10',
      'IncomeStreem_ID'=> 'required|max:10',
      'FamilyStatus_ID'=> 'required|max:10',
      'MaritalStatus'=> 'required|max:255',

      'Profile'=> 'required|max:255',
      'Tazkira'=> 'required|max:255',





      'PrimaryNumber'=> 'required|max:10',
      // 'SecondaryNumber'=> 'required|max:10',
      'Email'=> 'required|max:255',
      'CurrentProvince_ID'=> 'required|max:10',
      'CurrentDistrict_ID'=> 'required|max:10',
      'CurrentVillage'=> 'required|max:255',
      // 'Facebook'=> 'required|max:255',
      // 'Telegram'=> 'required|max:255',
      // 'Twitter'=> 'required|max:255',






      'SchoolName'=> 'required|max:255',
      'SchoolProvince_ID'=> 'required|max:10',
      'SchoolDistrict_ID'=> 'required|max:10',
      'SchoolPercentage'=> 'required|max:10',
      'SchoolGraduationDate'=> 'required|max:255',
      'EnglishProficiency_ID'=> 'required|max:10',

      // documents
      'SchoolDiploma'=> 'required|max:255',
      'SchoolTranscript'=> 'required|max:255',
      'EnglishDiploma'=> 'required|max:255',



      



      // 'OraganizationName'=> 'required|max:255',
      // 'Position'=> 'required|max:255',
      // 'OrganizationStartDate'=> 'required|max:255',
      // 'OrganizationEndDate'=> 'required|max:255',

   
      // 'WorkExperienceLetter'=> 'required|max:10',
      // 'Resume'=> 'required|max:10',


      
      'PersonalStatement'=> 'required|max:10',
      'ScholarshipType_ID'=> 'required|max:10',
      'Scholarship_ID'=> 'required|max:10',
      'ScholarshipModule_ID'=> 'required|max:10',

    ]);



    Application::create([

      'FirstName' => request('FirstName'),
      'LastName'  => request('LastName'),
      'TazkiraID'  => request('TazkiraID'),
      'DOB' => request('DOB'),
      'Gender_ID' => request('Gender_ID'),
      'Country_ID' => request('Country_ID'),
      'Tribe_ID' => request('Tribe_ID'),
      'Language_ID' => request('Language_ID'),
      'FatherName' => request('FatherName'),
      'MotherName' => request('MotherName'),
      'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
      'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
      'NumberFamilyMembers' => request('NumberFamilyMembers'),
      'IncomeStreem_ID' => request('IncomeStreem_ID'),
      'FamilyStatus_ID' => request('FamilyStatus_ID'),
      'MaritalStatus' => request('MaritalStatus'),

      // documents
      'Profile' => request('Profile'),
      'Tazkira' => request('Tazkira'),





      'PrimaryNumber' => request('PrimaryNumber'),
      'SecondaryNumber' => request('SecondaryNumber'),
      'Email' => request('Email'),
      'CurrentProvince_ID' => request('CurrentProvince_ID'),
      'CurrentDistrict_ID' => request('CurrentDistrict_ID'),
      'CurrentVillage' => request('CurrentVillage'),
      'Facebook' => request('Facebook'),
      'Telegram' => request('Telegram'),
      'Twitter' => request('Twitter'),






      'SchoolName' => request('SchoolName'),
      'SchoolProvince_ID' => request('SchoolProvince_ID'),
      'SchoolDistrict_ID' => request('SchoolDistrict_ID'),
      'SchoolPercentage' => request('SchoolPercentage'),
      'SchoolGraduationDate' => request('SchoolGraduationDate'),
      'EnglishProficiency_ID' => request('EnglishProficiency_ID'),

      // documents
      'SchoolDiploma' => request('SchoolDiploma'),
      'SchoolTranscript' => request('SchoolTranscript'),
      'EnglishDiploma' => request('EnglishDiploma'),



      



      'OraganizationName' => request('OraganizationName'),
      'Position' => request('Position'),
      'OrganizationStartDate' => request('OrganizationStartDate'),
      'OrganizationEndDate' => request('OrganizationEndDate'),

      // documents
      'WorkExperienceLetter' => request('WorkExperienceLetter'),
      'Resume' => request('Resume'),


      
      'PersonalStatement' => request('PersonalStatement'),
      'ScholarshipType_ID' => request('ScholarshipType_ID'),
      'Scholarship_ID' => request('Scholarship_ID'),
      'ScholarshipModule_ID' => request('ScholarshipModule_ID'),



      'Status' => 'Pending',
      'Owner' => 1,



    ]);

    return redirect()->route('SuccessApplicationEducation')->with('toast_success', 'Record Created Successfully!');
  }


    // success applicant
    public function SuccessApplication()
    {
  
      return view('Education.Application.Success');
    }




  // Delete
  public function DeleteApplication(Application $data)
  {

    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }

}
