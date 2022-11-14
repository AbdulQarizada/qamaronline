<?php

namespace App\Http\Controllers\OrphanRelief\Orphans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orphan;
use App\Models\Location;
use App\Models\LookUp;
use App\Models\User;
use Auth;


class OrphansReliefController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth', ['except' => ['AllGrid', 'AllGridWordpress']]);
  }

  // index
  public function Index()
  {

    return view('OrphansRelief.Index');
  }

  // orphan
  // list
  public function All()
  {

    $PageInfo = 'All';
    $orphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'orphans.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'orphans.Created_By', '=', 'd.id')
      ->leftjoin('users as e', 'orphans.Sponsor_ID', '=', 'e.id')
      ->select(['orphans.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob', 'e.FullName as SFullName',])
      ->paginate(100);
    return view('OrphansRelief.Orphan.All', ['datas' => $orphans, 'PageInfo' => $PageInfo]);
  }

  public function AllGrid()
  {

    $orphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'orphans.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'orphans.Created_By', '=', 'd.id')
      ->join('look_ups as e', 'orphans.Gender_ID', '=', 'e.id')
      ->select(['orphans.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob', 'e.Name as Gender'])
      ->where("orphans.Status", "=", 'Approved')
      ->where("orphans.IsSponsored", "=", 0)
      ->paginate(12);
    return view('OrphansRelief.Orphan.AllGrid', ['datas' => $orphans]);
  }

  public function MyOrphans()
  {

    $myorphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      -> select(['orphans.*', 'a.Name as ProvinceName'])
      -> where("Sponsor_ID", "=", Auth::user()->id)
      -> paginate(100);
      return view('OrphansRelief.Orphan.MyOrphan', ['datas' => $myorphans]);
  }

  public function Pending()
  {

    $PageInfo = 'Pending';
    $orphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'orphans.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'orphans.Created_By', '=', 'd.id')
      ->leftjoin('users as e', 'orphans.Sponsor_ID', '=', 'e.id')
      ->select(['orphans.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob', 'e.FullName as SFullName'])
      ->where("orphans.Status", "=", 'Pending')
      ->paginate(100);
    return view('OrphansRelief.Orphan.All', ['datas' => $orphans, 'PageInfo' => $PageInfo]);
  }

  public function Approved()
  {
    $PageInfo = 'Approved';
    $orphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('users as d', 'orphans.Created_By', '=', 'd.id')
      ->join('look_ups as c', 'orphans.FamilyStatus_ID', '=', 'c.id')
      ->leftjoin('users as e', 'orphans.Sponsor_ID', '=', 'e.id')
      ->select(['orphans.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob', 'e.FullName as SFullName'])
      ->where("orphans.Status", "=", 'Approved')
      ->paginate(100);
    return view('OrphansRelief.Orphan.All', ['datas' => $orphans, 'PageInfo' => $PageInfo]);
  }


  public function Rejected()
  {

    $PageInfo = 'Rejected';
    $orphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'orphans.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'orphans.Created_By', '=', 'd.id')
      ->leftjoin('users as e', 'orphans.Sponsor_ID', '=', 'e.id')
      ->select(['orphans.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob', 'e.FullName as SFullName'])
      ->where("orphans.Status", "=", 'Rejected')
      ->paginate(100);
    return view('OrphansRelief.Orphan.All', ['datas' => $orphans, 'PageInfo' => $PageInfo]);
  }


  public function Waiting()
  {

    $PageInfo = 'Waiting';
    $orphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'orphans.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'orphans.Created_By', '=', 'd.id')
      ->leftjoin('users as e', 'orphans.Sponsor_ID', '=', 'e.id')
      ->select(['orphans.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob', 'e.FullName as SFullName'])
      ->where("orphans.IsSponsored", "=", 0)
      ->paginate(100);
    return view('OrphansRelief.Orphan.All', ['datas' => $orphans, 'PageInfo' => $PageInfo]);
  }



  public function Sponsored()
  {
    $PageInfo = 'Sponsored';
    $orphans =   Orphan::join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'orphans.FamilyStatus_ID', '=', 'c.id')
      ->join('users as d', 'orphans.Created_By', '=', 'd.id')
      ->leftjoin('users as e', 'orphans.Sponsor_ID', '=', 'e.id')
      ->select(['orphans.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob', 'e.FullName as SFullName',])
      ->where("orphans.IsSponsored", "=", 1)
      ->paginate(100);
    return view('OrphansRelief.Orphan.All', ['datas' => $orphans, 'PageInfo' => $PageInfo]);
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
    return view('OrphansRelief.Orphan.Create', ['countries' => $countries, 'whatqamarcandos' => $whatqamarcandos, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
  }

  public function Store(Request $request)
  {

    $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'IntroducerName' => 'required|max:255',
      'TazkiraID' => 'required|max:10',
      'Profile' => 'required|max:255',
      'DOB' => 'required|max:255',
      'Gender_ID' => 'required|max:255',
      'Language_ID' => 'required|max:255',
      'PrimaryNumber' => 'required|max:10',
      'InCareNumber' => 'required|max:10',
      'Province_ID' => 'required|max:255',
      'District_ID' => 'required|max:255',
      'Village' => 'required|max:255',
      'FatherName' => 'required|max:255',
      'MonthlyFamilyIncome' => 'required|max:10',
      'MonthlyFamilyExpenses' => 'required|max:10',
      'NumberFamilyMembers' => 'required|max:10',
      'IncomeStreem_ID' => 'required|max:255',
      'LevelPoverty' => 'required|max:255',
      'FamilyStatus_ID' => 'required|max:255',
      'Country_ID' => 'required|max:255',
      'Tribe_ID' => 'required|max:255',
      'WhyShouldYouHelpMe' => 'required',
    ]);


    Orphan::create([
      'FirstName' => request('FirstName'),
      'LastName' => request('LastName'),
      'IntroducerName' => request('IntroducerName'),
      'TazkiraID' => request('TazkiraID'),
      'Profile' => request('Profile'),
      'DOB' => request('DOB'),
      'Gender_ID' => request('Gender_ID'),
      'Country_ID' => request('Country_ID'),
      'Tribe_ID' => request('Tribe_ID'),
      'Language_ID' => request('Language_ID'),
      'PrimaryNumber' => request('PrimaryNumber'),
      'SecondaryNumber' => request('SecondaryNumber'),
      'EmergencyNumber' => request('EmergencyNumber'),
      'Province_ID' => request('Province_ID'),
      'District_ID' => request('District_ID'),
      'Village' => request('Village'),
      'InCareName' => request('InCareName'),
      'InCareRelationship_ID' => request('InCareRelationship_ID'),
      'InCareNumber' => request('InCareNumber'),
      'InCareTazkiraID' => request('InCareTazkiraID'),
      'CurrentlyInSchool' => request('CurrentlyInSchool'),
      'SchoolName' => request('SchoolName'),
      'SchoolProvince_ID' => request('SchoolProvince_ID'),
      'SchoolDistrict_ID' => request('SchoolDistrict_ID'),
      'SchoolVillage' => request('SchoolVillage'),
      'SchoolNumber' => request('SchoolNumber'),
      'SchoolEmail' => request('SchoolEmail'),
      'Class' => request('Class'),
      'FatherName' => request('FatherName'),
      'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
      'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
      'NumberFamilyMembers' => request('NumberFamilyMembers'),
      'IncomeStreem_ID' => request('IncomeStreem_ID'),
      'LevelPoverty' => request('LevelPoverty'),
      'FamilyStatus_ID' => request('FamilyStatus_ID'),
      'WhyShouldYouHelpMe' => request('WhyShouldYouHelpMe'),
      'Tazkira' => request('Tazkira'),
      'HousePic' => request('HousePic'),
      'FamilyPic' => request('FamilyPic'),
      'Status' => 'Pending',
      'IsSponsored' => 0,
      'Created_By' => auth()->user()->id,
      'Owner' => 1,
    ]);
    return redirect()->route('AllOrphans')->with('toast_success', 'Record Created Successfully!');
  }

  // update
  public function Edit(Orphan $data)
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
    return view('OrphansRelief.Orphan.Edit', ['data' => $data, 'countries' => $countries, 'districts' => $districts, 'genders' => $genders, 'tribes' => $tribes, 'languages' => $languages, 'currentjobs' => $currentjobs, 'futurejobs' => $futurejobs, 'educationlevels' => $educationlevels, 'provinces' => $provinces, 'relationships' => $relationships, 'incomestreams' => $incomestreams, 'familystatus' => $familystatus]);
  }

  public function Update(Orphan $data)
  {

    $data->update([

      'FirstName' => request('FirstName'),
      'LastName' => request('LastName'),
      'IntroducerName' => request('IntroducerName'),
      'TazkiraID' => request('TazkiraID'),
      'Profile' => request('Profile'),
      'DOB' => request('DOB'),
      'Gender_ID' => request('Gender_ID'),
      'Country_ID' => request('Country_ID'),
      'Tribe_ID' => request('Tribe_ID'),
      'Language_ID' => request('Language_ID'),
      'PrimaryNumber' => request('PrimaryNumber'),
      'SecondaryNumber' => request('SecondaryNumber'),
      'EmergencyNumber' => request('EmergencyNumber'),
      'Province_ID' => request('Province_ID'),
      'District_ID' => request('District_ID'),
      'Village' => request('Village'),
      'InCareName' => request('InCareName'),
      'InCareRelationship_ID' => request('InCareRelationship_ID'),
      'InCareNumber' => request('InCareNumber'),
      'InCareTazkiraID' => request('InCareTazkiraID'),
      'CurrentlyInSchool' => request('CurrentlyInSchool'),
      'SchoolName' => request('SchoolName'),
      'SchoolProvince_ID' => request('SchoolProvince_ID'),
      'SchoolDistrict_ID' => request('SchoolDistrict_ID'),
      'SchoolVillage' => request('SchoolVillage'),
      'SchoolNumber' => request('SchoolNumber'),
      'SchoolEmail' => request('SchoolEmail'),
      'Class' => request('Class'),
      'FatherName' => request('FatherName'),
      'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
      'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
      'NumberFamilyMembers' => request('NumberFamilyMembers'),
      'IncomeStreem_ID' => request('IncomeStreem_ID'),
      'LevelPoverty' => request('LevelPoverty'),
      'FamilyStatus_ID' => request('FamilyStatus_ID'),
      'WhyShouldYouHelpMe' => request('WhyShouldYouHelpMe'),
      'Tazkira' => request('Tazkira'),
      'HousePic' => request('HousePic'),
      'FamilyPic' => request('FamilyPic'),
      'Status' => 'Pending',
      'Owner' => 1,

    ]);
    return redirect()->route('AllOrphans')->with('toast_success', 'Record Edited Successfully!');
  }


  // Delete
  public function Delete(Orphan $data)
  {
    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }


  // status
  public function Status(Orphan $data)
  {

    $orphans =   Orphan::where("orphans.id", "=", $data->id)
      ->join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('look_ups as c', 'orphans.Country_ID', '=', 'c.id')
      ->join('look_ups as d', 'orphans.Gender_ID', '=', 'd.id')
      ->join('look_ups as e', 'orphans.Language_ID', '=', 'e.id')
      ->leftjoin('locations as h', 'orphans.SchoolProvince_ID', '=', 'h.id')
      ->join('look_ups as i', 'orphans.InCareRelationship_ID', '=', 'i.id')
      ->join('look_ups as j', 'orphans.FamilyStatus_ID', '=', 'j.id')
      ->join('look_ups as k', 'orphans.Tribe_ID', '=', 'k.id')
      ->join('look_ups as l', 'orphans.IncomeStreem_ID', '=', 'l.id')
      ->leftjoin('locations as m', 'orphans.SchoolDistrict_ID', '=', 'm.id')
      ->leftjoin('users as n', 'orphans.Sponsor_ID', '=', 'n.id')
      ->select(
        'orphans.*',
        'a.Name as Province',
        'b.Name as District',
        'c.Name as Country',
        'd.Name as Gender',
        'e.Name as Language',
        'h.Name as SchoolProvince',
        'i.Name as InCareRelationship',
        'j.Name as FamilyStatus',
        'l.Name as IncomeStreem',
        'm.Name as SchoolDistrict',
        'n.FullName as SFullName',
        'n.PrimaryNumber as SPrimaryNumber',
        'n.email as Semail',
      )
      ->get();
    return view('OrphansRelief.Orphan.Status',  ['datas' => $orphans]);
  }


  public function Approve(Orphan $data)
  {
    $data->update([
      'Status' => 'Approved',
      'Status_By' => auth()->user()->id
    ]);
    return redirect()->route('ApprovedOrphans')->with('toast_success', 'Record Approved Successfully!');
  }

  public function Reject(Orphan $data)
  {
    $data->update([
      'Status_By' => auth()->user()->id,
      'Status' => 'Rejected'
    ]);
    return redirect()->route('RejectedOrphans')->with('toast_error', 'Record Rejected Successfully!');
  }


  public function ReInitiate(Orphan $data)
  {
    $data->update([
      'Status_By' => auth()->user()->id,
      'Status' => 'Pending'
    ]);
    return redirect()->route('PendingOrphans')->with('toast_warning', 'Record Re-Initiated Successfully!');
  }


  public function AssignToSponsor(Orphan $data)
  {

    $sponsors = User::where("IsOrphanSponsor", "=", "1")->get();
    $orphans =   Orphan::where("orphans.id", "=", $data->id)
      ->join('locations as a', 'orphans.Province_ID', '=', 'a.id')
      ->join('locations as b', 'orphans.District_ID', '=', 'b.id')
      ->join('look_ups as j', 'orphans.FamilyStatus_ID', '=', 'j.id')
      ->select(
        'orphans.*',
        'a.Name as Province',
        'b.Name as District',
        'j.Name as FamilyStatus',
      )
      ->get();
    return view('OrphansRelief.Orphan.AssignToSponsor', ['datas' => $orphans, 'sponsors' => $sponsors,]);
  }


  public function AssignSponsor(Orphan $data)
  {
    $data->update([
      'Sponsor_ID' => request('Sponsor_ID'),
      'Sponsored_StartDate' => request('Sponsored_StartDate'),
      'Sponsored_EndDate' => request('Sponsored_EndDate'),
      'IsSponsored' => 1,
      'Status_By' => auth()->user()->id,
    ]);
    return redirect()->route('AllOrphans')->with('success', 'Sponsor Has Been Assinged!');
  }
}
