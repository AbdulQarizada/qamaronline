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
use Illuminate\Support\Facades\Cookie;

use App\Models\Location;
use App\Models\LookUp;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{



  // index
  public function Index()
  {
    $qamarcarecardsCount =   QamarCareCard::get() -> count();
    $qamarcarecardsApproved =   QamarCareCard::where("qamar_care_cards.Status", "=", 'Approved')-> get() -> count();
    $qamarcarecardsRejected =   QamarCareCard::where("qamar_care_cards.Status", "=", 'Rejected')->get() -> count();
    $qamarcarecards =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
    ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
    ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
    ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
    ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
    -> orderBy('id', 'desc')->take(5)->get();


    return view('CardCard.Index', ['qamarcarecards' => $qamarcarecards, 'qamarcarecardsCount' => $qamarcarecardsCount, 'qamarcarecardsApproved' => $qamarcarecardsApproved, 'qamarcarecardsRejected' => $qamarcarecardsRejected]);
  }

  // FileUpload
  public function Beneficiaries_Profile(Request $request)
  {

      if ($request->hasFile('Profile')) {


          $profile = $request->file('Profile');

          $profilename = $profile->getClientOriginalName();

          $profileuniquename = uniqid() . '_' . $profilename;

          $profile->storeAs('Profiles', $profileuniquename, 'Beneficiaries');


          return $profileuniquename;
      }
      return '';
  }

  public function Beneficiaries_Tazkira(Request $request)
  {
      if ($request->hasFile('Tazkira')) {


          $Tazkira = $request->file('Tazkira');

          $Tazkiraname = $Tazkira->getClientOriginalName();

          $Tazkiruniquename = uniqid() . '_' . $Tazkiraname;


          $Tazkira->storeAs('Tazkiras', $Tazkiruniquename, 'Beneficiaries');

          return $Tazkiruniquename;
      }
      return '';
  }

  public function ServiceProvider_Profile(Request $request)
  {

      if ($request->hasFile('Profile')) {


          $profile = $request->file('Profile');

          $profilename = $profile->getClientOriginalName();

          $profileuniquename = uniqid() . '_' . $profilename;

          $profile->storeAs('Profiles', $profileuniquename, 'ServiceProvider');


          return $profileuniquename;
      }
      return '';
  }

}
