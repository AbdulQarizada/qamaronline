<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\QamarCareCard;
use App\Models\AssignCareCardServices;
use App\Models\ServiceType;
use App\Models\ServiceProviders;
use Auth;

use App\Models\Location;
use App\Models\LookUp;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class CareCardController extends Controller
{





  public function __construct()
  {
    $this->middleware('auth', ['except' => ['Verify', 'Search']]);
  }



  // index
  public function Index()
  {

    return view('CardCard.Index');
  }


  public function IndexCareCardOperations()
  {

    return view('CardCard.Operations.Index');
  }



  public function IndexCareCardServices()
  {

    return view('CardCard.Services.Index');
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
    $provinces = Location::whereNull("Parent_ID")->get();






    return view('QamarCardCard.CareCardOperations.Create', ['countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
  }

  public function Store(Request $request)
  {

    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'FirstNameLocal' => 'required|max:255',

      // 'LastName' => 'required|max:255',
      'TazkiraID' => 'required|unique:qamar_care_cards|max:10',
      'QamarSupport_ID' => 'required|max:255',
      'MaritalStatus' => 'required|max:255',
      'Profile' => 'required',
      'DOB' => 'required|max:255',
      'Gender_ID' => 'required|max:255',
      'Language_ID' => 'required|max:255',
      'CurrentJob_ID' => 'required|max:255',
      'FutureJob_ID' => 'required|max:255',
      'EducationLevel_ID' => 'required|max:255',
      'PrimaryNumber' => 'required|max:10',
      'SecondaryNumber' => 'required|max:10',
      'RelativeNumber' => 'required|max:10',
      'Province_ID' => 'required|max:255',
      'District_ID' => 'required|max:255',
      'Village' => 'required|max:255',
      // 'Email' => 'required|email|max:255',
      'FatherName' => 'required|max:255',
      'FatherNameLocal' => 'required|max:255',

      // 'SpuoseName' => 'required|max:255',
      // 'SpuoseTazkiraID' => 'unique:qamar_care_cards|max:255',
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



    QamarCareCard::create([
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
      'SpuoseTazkiraID' => request('SpuoseTazkiraID'),
      'EldestSonAge' => request('EldestSonAge'),
      'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
      'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
      'NumberFamilyMembers' => request('NumberFamilyMembers'),
      'IncomeStreem_ID' => request('IncomeStreem_ID'),
      'LevelPoverty' => request('LevelPoverty'),
      'Tazkira' => request('Tazkira'),
      'Status' => 'Pending',
      'Created_By' => auth()->user()->id,

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

















  // update
  public function Edit(QamarCareCard $data)
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
    $provinces = Location::whereNull("Parent_ID")->get();
    $districts = Location::get();
    return view('QamarCardCard.CareCardOperations.Edit', ['data' => $data, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'districts' => $districts, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);

    // return view('QamarCardCard.Edit', ['data' => $data]);
  }

  public function Update(QamarCareCard $data)
  {

    $data->update([

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
      'SpuoseTazkiraID' => request('SpuoseTazkiraID'),
      'EldestSonAge' => request('EldestSonAge'),
      'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
      'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
      'NumberFamilyMembers' => request('NumberFamilyMembers'),
      'IncomeStreem_ID' => request('IncomeStreem_ID'),
      'LevelPoverty' => request('LevelPoverty'),
      'Tazkira' => request('Tazkira'),
      'Status' => 'Pending',
      'Created_By' => auth()->user()->id,

      'RelativeNumber' => request('RelativeNumber'),
      'RelativeRelationship_ID' => request('RelativeRelationship_ID'),
      'RelativeName' => request('RelativeName'),
      'FamilyStatus_ID' => request('FamilyStatus_ID'),
      'Country_ID' => request('Country_ID'),
      'Tribe_ID' => request('Tribe_ID'),
      'Owner' => 1,

    ]);
    // $qamarcarecards =   QamarCareCard::all();
    return redirect()->route('AllQamarCareCard')->with('toast_success', 'Record Edited Successfully!');
  }















  // Delete
  public function Delete(QamarCareCard $data)
  {

    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }








  public function FoodPack()
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
    $provinces = Location::whereNull("Parent_ID")->get();
    $districts = Location::get();

    $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Status", "=", 'Released')
      ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
      ->orWhere("qamar_care_cards.Owner", "=", Auth::user()->IsManager)

      ->get();

    return view('QamarCardCard.FoodPack', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);

    // return view('QamarCardCard.All', compact('qamarcarecards'));
  }



  // list
  public function All()
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
    $provinces = Location::whereNull("Parent_ID")->get();
    $districts = Location::get();

    if(Auth::user()->IsManager == 1 )
    {
    $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->get();
    }
    else
    {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
      ->get();
    }
    return view('QamarCardCard.CareCardOperations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);


  }


  // public function AllAjax()
  // {

  //   $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
  //     ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
  //     ->join('look_ups as c','qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
  //     ->join('users as d','qamar_care_cards.Created_By', '=', 'd.id')
  //     ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
  //     ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
  //     ->orWhere("qamar_care_cards.Owner", "=", Auth::user()->IsManager);

  //     return datatables($qamarcarecards)->make(true);
  // }


  public function Approved()
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
    $provinces = Location::whereNull("Parent_ID")->get();
    $districts = Location::get();

    if(Auth::user()->IsManager == 1 )
    {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Status", "=", 'Approved')
      ->get();
    }

    else
    {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])

      ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
      ->where("qamar_care_cards.Status", "=", 'Approved')
      ->get();
    }
    return view('QamarCardCard.CareCardOperations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);

  }


  public function Rejected()
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
    $provinces = Location::whereNull("Parent_ID")->get();
    $districts = Location::get();

    if(Auth::user()->IsManager == 1 )
    {
    $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.CareCardOperations.Status", "=", 'Rejected')
      ->get();
    }
    else
    {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Status", "=", 'Rejected')
      ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
      ->get();
    }
    return view('QamarCardCard.CareCardOperations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);

  }





  public function Pending()
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
    $provinces = Location::whereNull("Parent_ID")->get();
    $districts = Location::get();

    if(Auth::user()->IsManager == 1 )
    {
    $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Status", "=", 'Pending')
      ->get();
    }
    else
    {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Status", "=", 'Pending')
      ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
      ->get();
    }
    return view('QamarCardCard.CareCardOperations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);

    // return view('QamarCardCard.All', compact('qamarcarecards'));
  }


  public function Released()
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
    $provinces = Location::whereNull("Parent_ID")->get();
    $districts = Location::get();

    if(Auth::user()->IsManager == 1 )
    {
    $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Status", "=", 'Released')
      ->get();
    }
    else
    {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Status", "=", 'Released')
      ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
      ->get();

    }
    return view('QamarCardCard.CareCardOperations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);

    // return view('QamarCardCard.All', compact('qamarcarecards'));
  }






  // status
  public function Status(QamarCareCard $data)
  {

    $qamarcarecards =   QamarCareCard::where("qamar_care_cards.id", "=", $data->id)



      ->join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.Country_ID', '=', 'c.id')
      ->join('look_ups as d', 'qamar_care_cards.Gender_ID', '=', 'd.id')
      ->join('look_ups as e', 'qamar_care_cards.Language_ID', '=', 'e.id')
      ->join('look_ups as f', 'qamar_care_cards.CurrentJob_ID', '=', 'f.id')
      ->join('look_ups as g', 'qamar_care_cards.FutureJob_ID', '=', 'g.id')
      ->join('look_ups as h', 'qamar_care_cards.EducationLevel_ID', '=', 'h.id')
      ->join('look_ups as i', 'qamar_care_cards.RelativeRelationship_ID', '=', 'i.id')
      ->join('look_ups as j', 'qamar_care_cards.FamilyStatus_ID', '=', 'j.id')
      ->join('look_ups as k', 'qamar_care_cards.Tribe_ID', '=', 'k.id')
      ->join('look_ups as l', 'qamar_care_cards.IncomeStreem_ID', '=', 'l.id')


      ->select(
        'qamar_care_cards.*',
        'a.Name as Province',
        'b.Name as District',
        'c.Name as Country',
        'd.Name as Gender',
        'e.Name as Language',
        'f.Name as CurrentJob',
        'g.Name as FutureJob',
        'h.Name as EducationLevel',
        'i.Name as RelativeRelationship',
        'j.Name as FamilyStatus',
        'k.Name as Tribe',
        'l.Name as IncomeStreem'
      )

      ->get();
    //  $qamarcarecards  = $data;

    return view('QamarCardCard.CareCardOperations.Status',  ['datas' => $qamarcarecards]);
  }

  public function Approve(QamarCareCard $data)
  {

    $data->update([

      'Status' => 'Approved',
      'Status_By' => auth()->user()->id


    ]);
    return redirect()->route('ApprovedQamarCareCard')->with('toast_success', 'Record Approved Successfully!');
  }

  public function Reject(QamarCareCard $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Rejected'

    ]);
    return redirect()->route('RejectedQamarCareCard')->with('toast_error', 'Record Rejected Successfully!');
  }


  public function ReInitiate(QamarCareCard $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Pending'

    ]);
    return redirect()->route('PendingQamarCareCard')->with('toast_success', 'Record Re-Initiated Successfully!');
  }




  public function Release(QamarCareCard $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Released'

    ]);
    return redirect()->route('ReleasedQamarCareCard')->with('toast_success', 'The card has been Released!');
  }




  // print

  public function Printing(QamarCareCard $data)
  {


    return view('QamarCardCard.CareCardOperations.Printing', compact('data'));
  }

  public function Print(QamarCareCard $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Printed'

    ]);
    return redirect()->route('PrintedQamarCareCard')->with('toast_success', 'The card has been Printed!');
  }

  public function Printed()
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
    $provinces = Location::whereNull("Parent_ID")->get();
    $districts = Location::get();

    if(Auth::user()->IsManager == 1 )
    {

    $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
    ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
    ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
    ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
    ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
    ->where("qamar_care_cards.Status", "=", 'Printed')
    ->get();
    }
    else{
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
      ->where("qamar_care_cards.Status", "=", 'Printed')
      ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
      ->get();
    }
    return view('QamarCardCard.CareCardOperations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);

  }





  // services

  public function AssigningService()
  {
    $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      // ->join('LookUp as c','qamar_care_cards.Education_ID', '=', 'c.id')
      ->join('look_ups as j', 'qamar_care_cards.FamilyStatus_ID', '=', 'j.id')

      ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'j.Name as FamilyStatus',])
      ->where("Status", "=", 'Released')
      ->get();



    return view('QamarCardCard.AssigningService', compact('qamarcarecards'));
  }




  public function AssignedServices(AssignCareCardServices $data)
  {
    // $qamarcarecards =   AssignCareCardServices::where("Status", "=", 'Pending')->get();

    $qamarcarecards =   AssignCareCardServices::join('locations as a', 'assign_care_card_services.ServiceProvince_ID', '=', 'a.id')
      ->join('locations as b', 'assign_care_card_services.ServiceDistrict_ID', '=', 'b.id')
      ->join('qamar_care_cards as c', 'assign_care_card_services.Assignee_ID', '=', 'c.id')
      ->join('service_providers as d', 'assign_care_card_services.ServiceProvider_ID', '=', 'd.id')
      ->select([
        'assign_care_card_services.*',
        'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.LevelPoverty', 'c.FirstName as BFirstName', 'c.LastName as BLastName', 'c.QCC as BQCC',
        'c.PrimaryNumber as BPrimaryNumber', 'c.SecondaryNumber as BSecondaryNumber', 'c.RelativeNumber as BRelativeNumber',

        'd.FirstName as SPFirstName', 'd.LastName as SPLastName', 'd.QCC as SPQCC',
        'd.PrimaryNumber as SPPrimaryNumber', 'd.SecondaryNumber as SPSecondaryNumber',

      ])
      //  ->where("assign_care_card_services.Status", "=", 'Pending')
      ->get();


    return view('QamarCardCard.AssignedService', compact('qamarcarecards'));
  }



  // public function RecievedServices(QamarCareCard $data)
  // {
  //   $qamarcarecards =   AssignCareCardServices::where("Status", "=", 'Recieved')->get();
  //   return view('QamarCardCard.AssigningService', compact('qamarcarecards'));
  // }

  // public function RejectedServices(QamarCareCard $data)
  // {
  //   $qamarcarecards =   AssignCareCardServices::where("Status", "=", 'Rejected')->get();
  //   return view('QamarCardCard.AssigningService', compact('qamarcarecards'));
  // }




  public function AssignToService(QamarCareCard $data)
  {
    $users =   User::all();
    $provinces = Location::whereNull("Parent_ID")->get();
    $servicetypes = ServiceType::all();
    $serviceproviders = null;
    $qamarcarecards =   QamarCareCard::where("qamar_care_cards.id", "=", $data->id)



      ->join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      // ->join('look_ups as c','qamar_care_cards.Country_ID', '=', 'c.id')
      // ->join('look_ups as d','qamar_care_cards.Gender_ID', '=', 'd.id')
      // ->join('look_ups as e','qamar_care_cards.Language_ID', '=', 'e.id')
      // ->join('look_ups as f','qamar_care_cards.CurrentJob_ID', '=', 'f.id')
      // ->join('look_ups as g','qamar_care_cards.FutureJob_ID', '=', 'g.id')
      // ->join('look_ups as h','qamar_care_cards.EducationLevel_ID', '=', 'h.id')
      // ->join('look_ups as i','qamar_care_cards.RelativeRelationship_ID', '=', 'i.id')
      ->join('look_ups as j', 'qamar_care_cards.FamilyStatus_ID', '=', 'j.id')
      // ->join('look_ups as k','qamar_care_cards.Tribe_ID', '=', 'k.id')
      // ->join('look_ups as l','qamar_care_cards.IncomeStreem_ID', '=', 'l.id')


      ->select(
        'qamar_care_cards.*',
        'a.Name as Province',
        'b.Name as District',
        // 'c.Name as Country',
        // 'd.Name as Gender',
        // 'e.Name as Language',
        // 'f.Name as CurrentJob',
        // 'g.Name as FutureJob',
        // 'h.Name as EducationLevel',
        // 'i.Name as RelativeRelationship',
        'j.Name as FamilyStatus',
        // 'k.Name as Tribe',
        // 'l.Name as IncomeStreem'
      )

      ->get();


    return view('QamarCardCard.AssignToService', ['serviceproviders' => $serviceproviders, 'datas' => $qamarcarecards, 'users' => $users, 'provinces' => $provinces, 'servicetypes' => $servicetypes]);
  }


  public function FindServiceProvider(QamarCareCard $data)
  {
    $users =   User::all();
    $provinces = Location::whereNull("Parent_ID")->get();
    $servicetypes = ServiceType::all();
    $qamarcarecards =   QamarCareCard::where("qamar_care_cards.id", "=", $data->id)



      ->join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
      ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
      // ->join('look_ups as c','qamar_care_cards.Country_ID', '=', 'c.id')
      // ->join('look_ups as d','qamar_care_cards.Gender_ID', '=', 'd.id')
      // ->join('look_ups as e','qamar_care_cards.Language_ID', '=', 'e.id')
      // ->join('look_ups as f','qamar_care_cards.CurrentJob_ID', '=', 'f.id')
      // ->join('look_ups as g','qamar_care_cards.FutureJob_ID', '=', 'g.id')
      // ->join('look_ups as h','qamar_care_cards.EducationLevel_ID', '=', 'h.id')
      // ->join('look_ups as i','qamar_care_cards.RelativeRelationship_ID', '=', 'i.id')
      ->join('look_ups as j', 'qamar_care_cards.FamilyStatus_ID', '=', 'j.id')
      // ->join('look_ups as k','qamar_care_cards.Tribe_ID', '=', 'k.id')
      // ->join('look_ups as l','qamar_care_cards.IncomeStreem_ID', '=', 'l.id')


      ->select(
        'qamar_care_cards.*',
        'a.Name as Province',
        'b.Name as District',
        // 'c.Name as Country',
        // 'd.Name as Gender',
        // 'e.Name as Language',
        // 'f.Name as CurrentJob',
        // 'g.Name as FutureJob',
        // 'h.Name as EducationLevel',
        // 'i.Name as RelativeRelationship',
        'j.Name as FamilyStatus',
        // 'k.Name as Tribe',
        // 'l.Name as IncomeStreem'
      )

      ->get();


    //  select('service_providers.id','FirstName', 'LastName', 'QCC', 'Profile', 'Discount', 'NumberOfFree','j.Name as ServiceType')


    $serviceproviders =   ServiceProviders::select(
      'service_providers.*',
      'service_providers.id',
      'a.Name as ServiceProvince',
      'a.id as ServiceProvince_ID',
      'b.Name as ServiceDistrict',
      'b.id as ServiceDistrict_ID',
      'c.Name as Profession',
      'd.Name as ServiceType',

      'service_providers.ServiceType_ID as RequestedService_ID'

    )
      ->join('locations as a', 'service_providers.ProvinceService_ID', '=', 'a.id')
      ->join('locations as b', 'service_providers.DistrictService_ID', '=', 'b.id')
      ->join('look_ups as c', 'service_providers.Profession_ID', '=', 'c.id')
      ->join('service_types as d', 'service_providers.ServiceType_ID', '=', 'd.id')


      ->where("ServiceType_ID", "=", request('RequestedService_ID'))
      ->where("ProvinceService_ID", "=", request('Province_ID'))
      ->where("DistrictService_ID", "=", request('District_ID'))
      ->where("Status", "=", "Approved")
      ->get();

    $final = 0;

    foreach ($serviceproviders as $serviceprovider) {
      $numberoffrees = AssignCareCardServices::where("IsFree", "=", "1")
        ->where("assign_care_card_services.ServiceProvider_ID", "=", $serviceprovider->id)
        ->get();
    }
    $final = $numberoffrees;



    return view('QamarCardCard.AssignToService', ['totalnumberoffrees' => $final, 'serviceproviders' => $serviceproviders, 'datas' => $qamarcarecards, 'users' => $users, 'provinces' => $provinces, 'servicetypes' => $servicetypes]);
  }


  public function AssignService(Request $request)
  {

    $validator = $request->validate([
      'Assignee_ID' => 'required|max:255',
      'RequestedService_ID' => 'required|max:255',
      'ServiceProvince_ID' => 'required|max:255',
      'ServiceDistrict_ID' => 'required|max:255',
      'ServiceProvider_ID' => 'required|max:255',

    ]);


    //    if ($validator->fails()) {
    //     $error = $validator->errors()->first();
    //  }



    AssignCareCardServices::create([
      'Assignee_ID' => request('Assignee_ID'),
      'RequestedService_ID' => request('RequestedService_ID'),

      'ServiceProvider_ID' => request('ServiceProvider_ID'),
      'ServiceProvince_ID' => request('ServiceProvince_ID'),
      'ServiceDistrict_ID' => request('ServiceDistrict_ID'),
      'Discount' => request('Discount'),

      'IsFree' => request('IsFree'),
      //   'Gender' => request('Gender'),
      //   'Language' => request('Language'),
      //   'CurrentJob' => request('CurrentJob'),
      //   'FutureJob' => request('FutureJob'),
      //   'EducationLevel' => request('EducationLevel'),
      //   'PrimaryNumber' => request('PrimaryNumber'),
      //   'SecondaryNumber' => request('SecondaryNumber'),
      //   'EmergencyNumber' => request('EmergencyNumber'),
      //   'Province' => request('Province'),
      //   'District' => request('District'),
      //   'Village' => request('Village'),
      //   'Email' => request('Email'),
      //   'FatherName' => request('FatherName'),
      //   'SpuoseName' => request('SpuoseName'),
      //   'EldestSonAge' => request('EldestSonAge'),
      //   'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
      //   'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
      //   'NumberFamilyMembers' => request('NumberFamilyMembers'),
      //   'IncomeStreem' => request('IncomeStreem'),
      //   'LevelPoverty' => request('LevelPoverty'),
      //  'Tazkira' => request('Tazkira'),
      'Status' => 'Pending',
      'Created_By' => auth()->user()->id,

      // 'RelativeNumber' => request('RelativeNumber'),
      // 'RelativeRelationship' => request('RelativeRelationship'),
      // 'RelativeName' => request('RelativeName'),
      // 'FamilyStatus' => request('FamilyStatus'),
      // 'Country' => request('Country'),
      // 'Tribe' => request('Tribe'),
      'Owner' => 1,



    ]);

    return redirect()->route('AssignedServicesQamarCareCard')->with('toast_success', 'Record Assign Successfully!');
  }



  // update
  public function ServiceEdit(AssignCareCardServices $data)
  {
    $users =   User::all();


    return view('QamarCardCard.ServiceEdit', ['data' => $data,  'users' => $users]);
  }

  public function ServiceUpdate(AssignCareCardServices $data)
  {

    $data->update([

      'FirstName' => request('FirstName'),
      'LastName' => request('LastName'),
      'Email' => request('Email'),
      'PNumber' => request('PNumber'),
      'SNumber' => request('SNumber'),
      'Province' => request('Province'),
      'District' => request('District')

    ]);
    $qamarcarecards =   QamarCareCard::all();
    return view('QamarCardCard.All', compact('qamarcarecards'));
  }




  public function ServiceDeleteDelete(AssignCareCardServices $data)
  {

    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }

  public function ServiceReleased(AssignCareCardServices $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Recieved'

    ]);
    return redirect()->route('RecievedServicesQamarCareCard')->with('toast_warning', 'The card has been Printed!');
  }


  // public function ServiceReject(AssignCareCardServices $data )
  // {

  //   $data -> update([
  //     'Status_By' => auth()->user()->name,

  //     'Status' => 'Rejected'

  //   ]);
  //   return redirect()->route('RecievedServicesQamarCareCard')->with('toast_warning', 'The card has been Printed!');
  // }






  // service Provider
  public function ServiceProviders()
  {

    $serviceproviders =   ServiceProviders::join('locations as a', 'service_providers.Province_ID', '=', 'a.id')
      ->join('locations as b', 'service_providers.District_ID', '=', 'b.id')
      ->join('locations as i', 'service_providers.ProvinceService_ID', '=', 'i.id')
      ->join('locations as j', 'service_providers.DistrictService_ID', '=', 'j.id')
      ->join('service_types as h', 'service_providers.ServiceType_ID', '=', 'h.id')
      ->select([
        'service_providers.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'i.Name as ProvinceService',
        'j.Name as DistrictService', 'h.Name as ServiceType',
      ])

      ->get();
    return view('QamarCardCard.ServiceProviders', compact('serviceproviders'));
  }


  public function ServiceProviderIndex()
  {
    return view('QamarCardCard.ServiceProviderIndex');
  }


  public function CreateServiceProviderIndividual()
  {
    $provinces = Location::whereNull("Parent_ID")->get();
    $servicetypes = ServiceType::all();

    $genders =   LookUp::where("Parent_Name", "=", "Gender")->get();
    $languages =   LookUp::where("Parent_Name", "=", "Language")->get();
    $currentjobs =   LookUp::where("Parent_Name", "=", "CurrentJob")->get();
    $professons =   LookUp::where("Parent_Name", "=", "Profession")->get();
    $educationlevels =   LookUp::where("Parent_Name", "=", "EducationLevel")->get();

    return view('QamarCardCard.CreateServiceProviderIndividual', ['provinces' => $provinces, 'servicetypes' => $servicetypes, 'genders' => $genders, 'languages' => $languages, 'currentjobs' => $currentjobs, 'professions' => $professons, 'educationlevels' => $educationlevels]);
  }


  public function StoreServiceProviderIndividual(Request $request)
  {

    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'LastName' => 'required|max:255',
      'TazkiraID' => 'required|max:10',
      'QCC' => 'required|unique:qamar_care_cards|max:255',
      'Profile' => 'required|max:255',
      'DOB' => 'required|max:255',
      'Gender_ID' => 'required|max:255',
      'Language_ID' => 'required|max:255',
      'CurrentJob_ID' => 'required|max:255',
      'Profession_ID' => 'required|max:255',
      'EducationLevel_ID' => 'required|max:255',
      'PrimaryNumber' => 'required|max:10',
      'NumberOfFree' => 'required|max:255',
      'Discount' => 'required|max:10',

      // 'SecondaryNumber' => 'required|max:10',
      // 'RelativeNumber' => 'required|max:10',
      'Province_ID' => 'required|max:255',
      'District_ID' => 'required|max:255',
      // 'Village' => 'required|max:255',
      // 'Email' => 'required|email|max:255',
      'ProvinceService_ID' => 'required|max:255',
      'DistrictService_ID' => 'required|max:255',
      'ServiceType_ID' => 'required|max:255',
      // 'MonthlyFamilyIncome' => 'required|max:10',
      // 'MonthlyFamilyExpenses' => 'required|max:10',
      // 'NumberFamilyMembers' => 'required|max:10',
      // 'IncomeStreem' => 'required|max:255',
      // 'LevelPoverty' => 'required|max:255',
      // 'Tazkira' => 'required|max:255',

      // 'RelativeNumber' => 'required|max:10',
      // 'RelativeRelationship' => 'required|max:255',
      // 'RelativeName' => 'required|max:255',
      // 'FamilyStatus' => 'required|max:255',
      // 'Country' => 'required|max:255',
      // 'Tribe' => 'required|max:255',

    ]);


    //    if ($validator->fails()) {
    //     $error = $validator->errors()->first();
    //  }



    ServiceProviders::create([
      'FirstName' => request('FirstName'),
      'LastName' => request('LastName'),
      'TazkiraID' => request('TazkiraID'),
      'QCC' => request('QCC'),
      'Profile' => request('Profile'),
      'DOB' => request('DOB'),
      'Gender_ID' => request('Gender_ID'),
      'Language_ID' => request('Language_ID'),
      'CurrentJob_ID' => request('CurrentJob_ID'),
      'Profession_ID' => request('Profession_ID'),
      'EducationLevel_ID' => request('EducationLevel_ID'),
      'PrimaryNumber' => request('PrimaryNumber'),
      'SecondaryNumber' => request('SecondaryNumber'),
      'NumberOfFree' => request('NumberOfFree'),
      'Discount' => request('Discount'),
      // 'EmergencyNumber' => request('EmergencyNumber'),
      'Province_ID' => request('Province_ID'),
      'District_ID' => request('District_ID'),
      // 'Village' => request('Village'),
      'Email' => request('Email'),
      'ProvinceService_ID' => request('ProvinceService_ID'),
      'DistrictService_ID' => request('DistrictService_ID'),
      'ServiceType_ID' => request('ServiceType_ID'),
      //   'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
      //   'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
      //   'NumberFamilyMembers' => request('NumberFamilyMembers'),
      //   'IncomeStreem' => request('IncomeStreem'),
      //   'LevelPoverty' => request('LevelPoverty'),
      //  'Tazkira' => request('Tazkira'),
      'Status' => 'Pending',
      'Created_By' => auth()->user()->id,

      // 'RelativeNumber' => request('RelativeNumber'),
      // 'RelativeRelationship' => request('RelativeRelationship'),
      // 'RelativeName' => request('RelativeName'),
      // 'FamilyStatus' => request('FamilyStatus'),
      // 'Country' => request('Country'),
      // 'Tribe' => request('Tribe'),
      'Owner' => 1,



    ]);

    return redirect()->route('ServiceProvidersQamarCareCard')->with('toast_success', 'Record Created Successfully!');
  }


  public function CreateServiceProviderOrganization()
  {
    return view('QamarCardCard.CreateServiceProviderOrganization');
  }




  public function StatusServiceProvider(ServiceProviders $data)
  {

    $serviceproviders =   ServiceProviders::where("service_providers.id", "=", $data->id)



      ->join('locations as a', 'service_providers.Province_ID', '=', 'a.id')
      ->join('locations as b', 'service_providers.District_ID', '=', 'b.id')
      // ->join('look_ups as c','service_providers.Country_ID', '=', 'c.id')
      ->join('look_ups as d', 'service_providers.Gender_ID', '=', 'd.id')
      ->join('look_ups as e', 'service_providers.Language_ID', '=', 'e.id')
      ->join('look_ups as f', 'service_providers.CurrentJob_ID', '=', 'f.id')
      ->join('look_ups as g', 'service_providers.Profession_ID', '=', 'g.id')
      ->join('look_ups as h', 'service_providers.EducationLevel_ID', '=', 'h.id')
      ->join('locations as i', 'service_providers.ProvinceService_ID', '=', 'i.id')
      ->join('locations as j', 'service_providers.DistrictService_ID', '=', 'j.id')
      ->join('service_types as k', 'service_providers.ServiceType_ID', '=', 'k.id')

      // ->join('look_ups as k','qamar_care_cards.Tribe_ID', '=', 'k.id')
      // ->join('look_ups as l','qamar_care_cards.IncomeStreem_ID', '=', 'l.id')


      ->select(
        'service_providers.*',
        'a.Name as Province',
        'b.Name as District',
        // 'c.Name as Country',
        'd.Name as Gender',
        'e.Name as Language',
        'f.Name as CurrentJob',
        'g.Name as Profession',
        'h.Name as EducationLevel',
        'i.Name as ProvinceService',
        'j.Name as DistrictService',
        'k.Name as ServiceType',
        // 'k.Name as Tribe',
        // 'l.Name as IncomeStreem'
      )

      ->get();
    //  $qamarcarecards  = $data;

    return view('QamarCardCard.StatusServiceProvider',  ['datas' => $serviceproviders]);
  }



  public function ApproveServiceProvider(ServiceProviders $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Approved'

    ]);
    return redirect()->route('ServiceProvidersQamarCareCard')->with('toast_success', 'The card has been Printed!');
  }


  public function RejectServiceProvider(ServiceProviders $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Rejected'

    ]);
    return redirect()->route('ServiceProvidersQamarCareCard')->with('toast_success', 'The card has been rejected!');
  }


  public function ReInitiateServiceProvider(ServiceProviders $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Pending'

    ]);
    return redirect()->route('ServiceProvidersQamarCareCard')->with('toast_success', 'The card has been Re Initiated!');
  }

  // Delete
  public function DeleteServiceProvider(ServiceProviders $data)
  {

    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }


  // public function FindServiceProvider( $RequestedService, $Province, $District)
  // {

  //  if($RequestedService != "None")
  //  {

  //     if($Province != "None")
  //     {

  //       if($District != 0)
  //       {

  //         $result =   ServiceProviders::select('service_providers.id','FirstName', 'LastName', 'QCC', 'Profile', 'Discount', 'NumberOfFree','j.Name as ServiceType')
  //         ->join('service_types as j','service_providers.ServiceType_ID', '=', 'j.id')
  //         ->where("ServiceType_ID", "=", $RequestedService)
  //         ->where("ProvinceService_ID", "=", $Province)
  //         ->where("DistrictService_ID", "=", $District)
  //         ->where("Status", "=", "Approved")
  //         ->get();
  //         return response()->json($result);

  //       }

  //       else if($District == 0)
  //       {
  //         $result =   ServiceProviders::select('service_providers.id','FirstName', 'LastName', 'j.Name as ServiceType')
  //         ->join('service_types as j','service_providers.ServiceType_ID', '=', 'j.id')
  //         ->where("ServiceType_ID", "=", $RequestedService)
  //         ->where("ProvinceService_ID", "=", $Province)
  //         ->where("Status", "=", "Approved")
  //         ->get();
  //         return response()->json($result);

  //       }


  //     }

  //  }
  //   // return "hi";

  //   // return response()->json($result);
  // }




  // Verify
  public function Verify()
  {
    $qamarcarecards = null;
    return view('QamarCardCard.Verify', compact('qamarcarecards'));
  }


  public function Search()
  {

    $qamarcarecards =   QamarCareCard::where("QCC", "=",  request('ID'))->get();
    return view('QamarCardCard.Verify', compact('qamarcarecards'));
  }
}
