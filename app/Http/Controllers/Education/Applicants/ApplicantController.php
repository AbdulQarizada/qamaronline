<?php

namespace App\Http\Controllers\Education\Applicants;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\LookUp;
use App\Models\ScholarshipApplicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth', ['except' => ['Create', 'Store', 'Success']]);
  }

  // index
  public function Index()
  {

    return view('Education.Index');
  }


    // create
    public function Create()
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
      return view('Education.Applicant.Create', ['scholarshiptypes' => $scholarshiptypes,'englishproficiencys' => $englishproficiencys,'countries' => $countries,'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
    }

    public function Store(Request $request)
    {
      $dt = new Carbon();
      $after = $dt->subYears(22)->format('Y-m-d');
      $validator = $request->validate([
        'Scholarship_ID'=> 'required|max:10',
        'FirstName' => 'bail|required|max:255',
        'TazkiraID' => 'required|max:255|unique:scholarship_applicants',
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
        // Contact
        'PrimaryNumber'=> 'required|max:10',
        'Email'=> 'required|max:255|unique:scholarship_applicants',
        'CurrentProvince_ID'=> 'required|max:10',
        'CurrentDistrict_ID'=> 'required|max:10',
        'CurrentVillage'=> 'required|max:255',
        'RelativeRelationship_ID'=> 'required|max:10',
        'RelativeName'=> 'required|max:255',
        'RelativeNumber'=> 'required|max:10',
         // School
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
        // Questions
        'WhyChosenPersonalStatement'=> 'required',
        'WhyChosenTHisCountryPersonalStatement'=> 'required',
        'PlanAfterGraduationPersonalStatement'=> 'required',
        'ScholarshipType_ID'=> 'required|max:10',
        'PrefernceOneScholarshipModule_ID'=> 'required|max:10',
        'PrefernceTwoScholarshipModule_ID'=> 'required|max:10',
        'PrefernceThreeScholarshipModule_ID'=> 'required|max:10',
      ]);



      ScholarshipApplicant::create([
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
        // Contact
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
         // School
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
        // Experience
        'OraganizationName' => request('OraganizationName'),
        'Position' => request('Position'),
        'OrganizationStartDate' => request('OrganizationStartDate'),
        'OrganizationEndDate' => request('OrganizationEndDate'),
        // documents
        'WorkExperienceLetter' => request('WorkExperienceLetter'),
        'Resume' => request('Resume'),
        // Questions
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
      return redirect()->route('SuccessApplication')->with('toast_success', 'Record Created Successfully!');
    }

      // success
      public function Success()
      {
        return view('Education.Applicant.Success');
      }


   // status
   public function Status(ScholarshipApplicant $data)
   {

     $applicants =   ScholarshipApplicant::where("scholarship_applicants.id", "=", $data->id)
       ->join('locations as a', 'scholarship_applicants.CurrentProvince_ID', '=', 'a.id')
       ->join('locations as b', 'scholarship_applicants.CurrentDistrict_ID', '=', 'b.id')
       ->join('look_ups as c', 'scholarship_applicants.Country_ID', '=', 'c.id')
       ->join('look_ups as d', 'scholarship_applicants.Gender_ID', '=', 'd.id')
       ->join('look_ups as e', 'scholarship_applicants.Language_ID', '=', 'e.id')
       ->join('look_ups as i', 'scholarship_applicants.RelativeRelationship_ID', '=', 'i.id')
       ->join('look_ups as j', 'scholarship_applicants.FamilyStatus_ID', '=', 'j.id')
       ->join('look_ups as k', 'scholarship_applicants.Tribe_ID', '=', 'k.id')
       ->join('look_ups as l', 'scholarship_applicants.IncomeStreem_ID', '=', 'l.id')


       ->select(
         'scholarship_applicants.*',
         'a.Name as Province',
         'b.Name as District',
         'c.Name as Country',
         'd.Name as Gender',
         'e.Name as Language',
         'i.Name as RelativeRelationship',
         'j.Name as FamilyStatus',
         'k.Name as Tribe',
         'l.Name as IncomeStreem'
       )
       ->first();
     return view('Education.Applicant.Status',  ['data' => $applicants]);
   }

   public function ReInitiate(ScholarshipApplicant $data)
   {
     $data->update([
       'Status_By' => auth()->user()->id,
       'Status' => 'AppliedApplicant'
     ]);
     return redirect()->route('StatusScholarship', ['data' => $data -> Scholarship_ID])->with('toast_warning', 'Record Re-Initiated Successfully!');
   }


   public function SelecteForInterview(ScholarshipApplicant $data)
   {
     $data->update([
       'Status' => 'SelectedForInterview',
       'Status_By' => auth()->user()->id
     ]);
     return redirect()->route('StatusScholarship', ['data' => $data -> Scholarship_ID])->with('toast_success', 'Record Selected For Interview Successfully!');
   }

   public function Finalize(ScholarshipApplicant $data)
   {
     $data->update([
       'Status' => 'FinalizedApplicant',
       'Status_By' => auth()->user()->id
     ]);
     return redirect()->route('StatusScholarship', ['data' => $data -> Scholarship_ID])->with('toast_success', 'Finalized Applicant Successfully!');
   }

   public function AcceptedOffer(ScholarshipApplicant $data)
   {
     $data->update([
       'Status' => 'AcceptedOffer',
       'Status_By' => auth()->user()->id
     ]);
     return redirect()->route('StatusScholarship', ['data' => $data -> Scholarship_ID])->with('toast_success', 'Accepted Offer Successfully!');
   }

   public function Reject(ScholarshipApplicant $data)
   {
     $data->update([
       'Status_By' => auth()->user()->id,
       'Status' => 'Rejected'
     ]);
     return redirect()->route('StatusScholarship', ['data' => $data -> Scholarship_ID])->with('toast_error', 'Record Rejected Successfully!');
   }

}
