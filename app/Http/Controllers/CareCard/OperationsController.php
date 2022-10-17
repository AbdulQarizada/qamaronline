<?php

namespace App\Http\Controllers\CareCard;

use App\Http\Controllers\Controller;
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


class OperationsController extends Controller
{



  public function __construct()
  {
    $this->middleware('auth', ['except' => ['Verify', 'Search']]);
  }



  // index
  public function Index()
  {

    return view('CardCard.Operations.Index');
  }


  // List
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

    if (Auth::user()->IsManager == 1) {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->get();
    } else {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
        ->get();
    }
    return view('CardCard.Operations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
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

    if (Auth::user()->IsManager == 1) {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Pending')
        ->get();
    } else {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Pending')
        ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
        ->get();
    }
    return view('CardCard.Operations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
  }

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

    if (Auth::user()->IsManager == 1) {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Approved')
        ->get();
    } else {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])

        ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
        ->where("qamar_care_cards.Status", "=", 'Approved')
        ->get();
    }
    return view('CardCard.Operations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
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

    if (Auth::user()->IsManager == 1) {

      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Printed')
        ->get();
    } else {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Printed')
        ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
        ->get();
    }
    return view('CardCard.Operations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
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

    if (Auth::user()->IsManager == 1) {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Released')
        ->get();
    } else {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Released')
        ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
        ->get();
    }
    return view('CardCard.Operations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
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

    if (Auth::user()->IsManager == 1) {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Rejected')
        ->get();
    } else {
      $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
        ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
        ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
        ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')

        ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
        ->where("qamar_care_cards.Status", "=", 'Rejected')
        ->where("qamar_care_cards.Created_By", "=", Auth::user()->id)
        ->get();
    }
    return view('CardCard.Operations.All', ['qamarcarecards' => $qamarcarecards, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
  }

  // Change Status
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

    return view('CardCard.Operations.Status',  ['datas' => $qamarcarecards]);
  }

  public function Approve(QamarCareCard $data)
  {

    $data->update([

      'Status' => 'Approved',
      'Status_By' => auth()->user()->id


    ]);
    return redirect()->route('ApprovedCareCard')->with('toast_success', 'Record Approved Successfully!');
  }

  public function Print(QamarCareCard $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Printed'

    ]);
    return redirect()->route('PrintedCareCard')->with('toast_success', 'The card has been Printed!');
  }

  public function Release(QamarCareCard $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Released'

    ]);
    return redirect()->route('ReleasedCareCard')->with('toast_success', 'The card has been Released!');
  }

  public function Reject(QamarCareCard $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Rejected'

    ]);
    return redirect()->route('RejectedCareCard')->with('toast_error', 'Record Rejected Successfully!');
  }

  public function ReInitiate(QamarCareCard $data)
  {

    $data->update([
      'Status_By' => auth()->user()->id,

      'Status' => 'Pending'

    ]);
    return redirect()->route('PendingCareCard')->with('toast_success', 'Record Re-Initiated Successfully!');
  }


// Create
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

    return view('CardCard.Operations.Create', ['countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
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

    return redirect()->route('AllCareCard')->with('toast_success', 'Record Created Successfully!');
  }

// Update
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
    return view('CardCard.Operations.Edit', ['data' => $data, 'countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'districts' => $districts, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);

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
    return redirect()->route('AllCareCard')->with('toast_success', 'Record Edited Successfully!');
  }

  // Delete
  public function Delete(QamarCareCard $data)
  {

    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }

  // Print
  public function Printing(QamarCareCard $data)
  {
    return view('CardCard.Operations.Printing', compact('data'));
  }

  // Verify Card
  public function Verify()
  {
    $qamarcarecards = null;
    return view('CardCard.Operations.Verify', compact('qamarcarecards'));
  }

  public function Search()
  {

    $qamarcarecards =   QamarCareCard::where("QCC", "=",  request('ID'))->get();
    return view('CardCard.Operations.Verify', compact('qamarcarecards'));
  }

}
