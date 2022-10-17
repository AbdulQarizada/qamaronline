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
    ->join('users as d', 'scholarships.Created_By', '=', 'd.id')

    ->select(['scholarships.*', 'a.Name as ScholarshipType', 'b.Name as Country', 'd.FirstName as UFirstName', 'd.LastName as ULastName','d.Job as UJob',])

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
      'Created_By' => auth()->user()->id,

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
    $applicants =   Application::join('look_ups as a', 'applications.ScholarshipType_ID', '=', 'a.id')
    -> join('locations as b', 'applications.CurrentProvince_ID', '=', 'b.id')
    -> join('locations as c', 'applications.CurrentDistrict_ID', '=', 'c.id')

    -> select(['applications.*', 'a.Name as ScholarshipType', 'b.Name as CurrentProvince','c.Name as CurrentDistrict',])

    -> get();
  return view('Education.Application.All', compact('applicants'));
  }

  public function ApprovedApplicants()
  {
    $applicants =   Application::join('look_ups as a', 'applications.ScholarshipType_ID', '=', 'a.id')
    -> join('locations as b', 'applications.CurrentProvince_ID', '=', 'b.id')
    -> join('locations as c', 'applications.CurrentDistrict_ID', '=', 'c.id')
    -> where("Status", "=", 'Approved')
    -> select(['applications.*', 'a.Name as ScholarshipType', 'b.Name as CurrentProvince','c.Name as CurrentDistrict',])

    -> get();
  return view('Education.Application.All', compact('applicants'));
  }
  
  public function RejectedApplicants()
  {
    $applicants =   Application::join('look_ups as a', 'applications.ScholarshipType_ID', '=', 'a.id')
    -> join('locations as b', 'applications.CurrentProvince_ID', '=', 'b.id')
    -> join('locations as c', 'applications.CurrentDistrict_ID', '=', 'c.id')
    -> where("Status", "=", 'Rejected')
    -> select(['applications.*', 'a.Name as ScholarshipType', 'b.Name as CurrentProvince','c.Name as CurrentDistrict',])

    -> get();
  return view('Education.Application.All', compact('applicants'));
  }

  public function PendingApplicants()
  {
    $applicants =   Application::join('look_ups as a', 'applications.ScholarshipType_ID', '=', 'a.id')
    -> join('locations as b', 'applications.CurrentProvince_ID', '=', 'b.id')
    -> join('locations as c', 'applications.CurrentDistrict_ID', '=', 'c.id')
    -> where("Status", "=", 'Pending')
    -> select(['applications.*', 'a.Name as ScholarshipType', 'b.Name as CurrentProvince','c.Name as CurrentDistrict',])

    -> get();
  return view('Education.Application.All', compact('applicants'));
  }



   // status
   public function Status(Application $data)
   {
 
     $applicants =   Application::where("applications.id", "=", $data->id)
 
 
 
       ->join('locations as a', 'applications.CurrentProvince_ID', '=', 'a.id')
       ->join('locations as b', 'applications.CurrentDistrict_ID', '=', 'b.id')
       ->join('look_ups as c', 'applications.Country_ID', '=', 'c.id')
       ->join('look_ups as d', 'applications.Gender_ID', '=', 'd.id')
       ->join('look_ups as e', 'applications.Language_ID', '=', 'e.id')
      //  ->join('look_ups as f', 'applications.CurrentJob_ID', '=', 'f.id')
      //  ->join('look_ups as g', 'applications.FutureJob_ID', '=', 'g.id')
      //  ->join('look_ups as h', 'applications.EducationLevel_ID', '=', 'h.id')
      //  ->join('look_ups as i', 'applications.RelativeRelationship_ID', '=', 'i.id')
       ->join('look_ups as j', 'applications.FamilyStatus_ID', '=', 'j.id')
       ->join('look_ups as k', 'applications.Tribe_ID', '=', 'k.id')
       ->join('look_ups as l', 'applications.IncomeStreem_ID', '=', 'l.id')
 
 
       ->select(
         'applications.*',
         'a.Name as Province',
         'b.Name as District',
         'c.Name as Country',
         'd.Name as Gender',
         'e.Name as Language',
        //  'f.Name as CurrentJob',
        //  'g.Name as FutureJob',
        //  'h.Name as EducationLevel',
        //  'i.Name as RelativeRelationship',
         'j.Name as FamilyStatus',
         'k.Name as Tribe',
         'l.Name as IncomeStreem'
       )
 
       ->get();
     //  $qamarcarecards  = $data;
 
     return view('Education.Application.Status',  ['datas' => $applicants]);
   }
 
   public function Approve(Application $data)
   {
 
     $data->update([
 
       'Status' => 'Approved',
       'Status_By' => auth()->user()->id
 
 
     ]);
     return redirect()->route('ApprovedApplicantsEducation')->with('toast_success', 'Record Approved Successfully!');
   }
 
   public function Reject(Application $data)
   {
 
     $data->update([
       'Status_By' => auth()->user()->id,
 
       'Status' => 'Rejected'
 
     ]);
     return redirect()->route('RejectedApplicantsEducation')->with('toast_error', 'Record Rejected Successfully!');
   }
 
 
   public function ReInitiate(Application $data)
   {
 
     $data->update([
       'Status_By' => auth()->user()->id,
 
       'Status' => 'Pending'
 
     ]);
     return redirect()->route('PendingApplicantsEducation')->with('toast_warning', 'Record Re-Initiated Successfully!');
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
    $dt = new Carbon();
    $after = $dt->subYears(22)->format('Y-m-d');
    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      // 'LastName' => 'required|max:255',
      'TazkiraID' => 'required|max:255|unique:applications',
      'DOB'=> 'required|date|after:' . $after,
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
      'Email'=> 'required|max:255|unique:applications',
      'CurrentProvince_ID'=> 'required|max:10',
      'CurrentDistrict_ID'=> 'required|max:10',
      'CurrentVillage'=> 'required|max:255',
      // 'Facebook'=> 'required|max:255',
      // 'Telegram'=> 'required|max:255',
      // 'Twitter'=> 'required|max:255',
      'RelativeRelationship_ID'=> 'required|max:10',
      'RelativeName'=> 'required|max:255',
      'RelativeNumber'=> 'required|max:10',


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

      'WhyChosenPersonalStatement'=> 'required',
      'WhyChosenTHisCountryPersonalStatement'=> 'required',
      'PlanAfterGraduationPersonalStatement'=> 'required',

      'ScholarshipType_ID'=> 'required|max:10',
      'Scholarship_ID'=> 'required|max:10',
      'PrefernceOneScholarshipModule_ID'=> 'required|max:10',
      'PrefernceTwoScholarshipModule_ID'=> 'required|max:10',
      'PrefernceThreeScholarshipModule_ID'=> 'required|max:10',
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
      'RelativeRelationship_ID' => request('RelativeRelationship_ID'),
      'RelativeName' => request('RelativeName'),
      'RelativeNumber' => request('RelativeNumber'),

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


      
      'WhyChosenPersonalStatement' => request('WhyChosenPersonalStatement'),
      'WhyChosenTHisCountryPersonalStatement' => request('WhyChosenTHisCountryPersonalStatement'),
      'PlanAfterGraduationPersonalStatement' => request('PlanAfterGraduationPersonalStatement'),
      'ScholarshipType_ID' => request('ScholarshipType_ID'),
      'Scholarship_ID' => request('Scholarship_ID'),
      'PrefernceOneScholarshipModule_ID' => request('PrefernceOneScholarshipModule_ID'),
      'PrefernceTwoScholarshipModule_ID' => request('PrefernceTwoScholarshipModule_ID'),
      'PrefernceThreeScholarshipModule_ID' => request('PrefernceThreeScholarshipModule_ID'),



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
