<?php

namespace App\Http\Controllers\Education\Scholarships;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

use App\Models\Scholarship;
use App\Models\Application;

use App\Models\ScholarshipModule;
use App\Models\Location;

use App\Models\LookUp;


use Illuminate\Http\Request;

class ScholarshipController extends Controller
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

  public function All()
  {
    $PageInfo = 'All';
    $countries =   LookUp::where("Parent_Name", "=", "Country")->get();
    $scholarshiptypes =   LookUp::where("Parent_Name", "=", "ScholarshipType")->get();
    $scholarships =   Scholarship::join('look_ups as a', 'scholarships.ScholarshipType_ID', '=', 'a.id')
    ->join('look_ups as b', 'scholarships.Country_ID', '=', 'b.id')
    ->join('users as d', 'scholarships.Created_By', '=', 'd.id')
    ->select(['scholarships.*', 'a.Name as ScholarshipType', 'b.Name as Country', 'd.FirstName as UFirstName', 'd.LastName as ULastName','d.Job as UJob',])
    ->paginate(100);
  return view('Education.Scholarship.All', ['datas' => $scholarships, 'PageInfo' => $PageInfo, 'countries' => $countries, 'scholarshiptypes' => $scholarshiptypes]);
  }

  public function Active()
  {
  $mytime = Carbon::now();
  $PageInfo = 'Active';
  $countries =   LookUp::where("Parent_Name", "=", "Country")->get();
  $scholarshiptypes =   LookUp::where("Parent_Name", "=", "ScholarshipType")->get();
  $scholarships =   Scholarship::join('look_ups as a', 'scholarships.ScholarshipType_ID', '=', 'a.id')
  ->join('look_ups as b', 'scholarships.Country_ID', '=', 'b.id')
  ->join('users as d', 'scholarships.Created_By', '=', 'd.id')
  ->select(['scholarships.*', 'a.Name as ScholarshipType', 'b.Name as Country', 'd.FirstName as UFirstName', 'd.LastName as ULastName','d.Job as UJob',])
  ->where("EndDate", ">", $mytime)
  ->paginate(100);
   return view('Education.Scholarship.All', ['datas' => $scholarships, 'PageInfo' => $PageInfo, 'countries' => $countries, 'scholarshiptypes' => $scholarshiptypes]);
  }


  public function Expired()
  {
    $mytime = Carbon::now();
    $PageInfo = 'Expired';
    $countries =   LookUp::where("Parent_Name", "=", "Country")->get();
    $scholarshiptypes =   LookUp::where("Parent_Name", "=", "ScholarshipType")->get();
    $scholarships =   Scholarship::join('look_ups as a', 'scholarships.ScholarshipType_ID', '=', 'a.id')
    ->join('look_ups as b', 'scholarships.Country_ID', '=', 'b.id')
    ->join('users as d', 'scholarships.Created_By', '=', 'd.id')
    ->select(['scholarships.*', 'a.Name as ScholarshipType', 'b.Name as Country', 'd.FirstName as UFirstName', 'd.LastName as ULastName','d.Job as UJob',])
    ->where("EndDate", "<", $mytime)
    ->paginate(100);
     return view('Education.Scholarship.All', ['datas' => $scholarships, 'PageInfo' => $PageInfo, 'countries' => $countries, 'scholarshiptypes' => $scholarshiptypes]);
  }

 // status
 public function Status(Scholarship $data)
 {
  $countries =   LookUp::where("Parent_Name", "=", "Country")->get();
  $scholarshiptypes =   LookUp::where("Parent_Name", "=", "ScholarshipType")->get();
   $Scholarship =   Scholarship::where("scholarships.id", "=", $data->id)
   ->join('look_ups as a', 'scholarships.Country_ID', '=', 'a.id')
   ->join('look_ups as b', 'scholarships.ScholarshipType_ID', '=', 'b.id')
   ->join('users as d', 'scholarships.Created_By', '=', 'd.id')
     ->select(
       'scholarships.*',
       'a.Name as Country',
       'b.Name as ScholarshipType',
       'd.FirstName as UFirstName',
       'd.LastName as ULastName',
       'd.Job as UJob',

     )
     ->first();
   return view('Education.Scholarship.Status',  ['data' => $Scholarship, 'scholarshiptypes' => $scholarshiptypes, 'countries' => $countries]);
 }

  public function Store(Request $request)
  {

    $validator = $request->validate([
      'ScholarshipName' => 'bail|required|max:255',
      'ScholarshipType_ID' => 'required|max:255',
      'Country_ID' => 'required|max:10',
      'StartDate' => 'required|max:255',
      'EndDate' => 'required|max:255',
      'Seats' => 'required|max:255',
    ]);


    Scholarship::create([
      'ScholarshipName' => request('ScholarshipName'),
      'ScholarshipType_ID' => request('ScholarshipType_ID'),
      'Country_ID' => request('Country_ID'),
      'StartDate' => request('StartDate'),
      'EndDate' => request('EndDate'),
      'Seats' => request('Seats'),
      'Status' => 'Pending',
      'Created_By' => auth()->user()->id,
      'Owner' => 1,
    ]);
    return back()->with('toast_success', 'Record Created Successfully!');
  }

  public function Update(Request $request, Scholarship $data)
  {

    $validator = $request->validate([
      'ScholarshipName' => 'bail|required|max:255',
      'ScholarshipType_ID' => 'required|max:255',
      'Country_ID' => 'required|max:10',
      'StartDate' => 'required|max:255',
      'EndDate' => 'required|max:255',
      'Seats' => 'required|max:255',
    ]);

    $data->update([
      'ScholarshipName' => request('ScholarshipName'),
      'ScholarshipType_ID' => request('ScholarshipType_ID'),
      'Country_ID' => request('Country_ID'),
      'StartDate' => request('StartDate'),
      'EndDate' => request('EndDate'),
      'Seats' => request('Seats'),
    ]);
    return back()->with('toast_success', 'Record Updated Successfully!');
  }

  // Delete
  public function Delete(Scholarship $data)
  {
    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }






  public function CreateModule(Request $request)
  {
     $validator = $request->validate([
    'Scholarship_ID' => 'bail|required|max:255',
    'ModuleName' => 'required|max:255',
     ]);
     ScholarshipModule::create([
        'Scholarship_ID' => request('Scholarship_ID'),
        'ModuleName' => request('ModuleName'),
        ]);
       return back()-> with('toast_success', 'Record Created Successfully!');
  }


  public function DeleteModule(ScholarshipModule $data)
  {
    $data->delete();
    return back()->with('success', 'Record deleted successfully');
  }

}
