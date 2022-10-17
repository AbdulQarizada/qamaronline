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
