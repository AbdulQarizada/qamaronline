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


class HomeController extends Controller
{



  // index
  public function Index()
  {

    return view('CardCard.Index');
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
