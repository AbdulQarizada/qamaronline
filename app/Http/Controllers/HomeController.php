<?php

namespace App\Http\Controllers;

use App\Models\QamarCareCard;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Location;
use App\Models\Scholarship;
use App\Models\ScholarshipModule;
use Illuminate\Support\Facades\Cookie;
use App\Models\LookUp;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }







    public function root()
    {


        if (Auth::check() && !Auth::User()->IsActive == 1) {
            Auth::logout();
            return redirect()->route('login')->with('Your session has expired because your status changed.');
        }

        if(Cookie::get('Layout') == null)
        {
        $cookies = Cookie::forever('Layout', "LayoutSidebar");

        return redirect()->route('root')-> cookie($cookies);
        }


        $notifications = auth()->user()->unreadNotifications;
        $catagorys =   LookUp::where("Parent_Name", "=", "None")->get();


        // Reporting for dashboard



   $qamarcarecardsCount =   QamarCareCard::get() -> count();
   $qamarcarecardsPending =   QamarCareCard::where("qamar_care_cards.Status", "=", 'Pending')-> get() -> count();
   $qamarcarecardsApproved =   QamarCareCard::where("qamar_care_cards.Status", "=", 'Approved')-> get() -> count();
   $qamarcarecardsPrinted =   QamarCareCard::where("qamar_care_cards.Status", "=", 'Printed')->get() -> count();
   $qamarcarecardsReleased =   QamarCareCard::where("qamar_care_cards.Status", "=", 'Released')->get() -> count();
   $qamarcarecardsRejected =   QamarCareCard::where("qamar_care_cards.Status", "=", 'Rejected')->get() -> count();

   $qamarcarecardsMale =   QamarCareCard::where("qamar_care_cards.Gender_ID", "=", 60)->get() -> count();
   $qamarcarecardsFemale =   QamarCareCard::where("qamar_care_cards.Gender_ID", "=", 61)->get() -> count();



   $qamarcarecardsPoor =   QamarCareCard::where("qamar_care_cards.FamilyStatus_ID", "=", 91)->get() -> count();
   $qamarcarecardsLowIncome =   QamarCareCard::where("qamar_care_cards.FamilyStatus_ID", "=", 92)->get() -> count();
   $qamarcarecardsWidow =   QamarCareCard::where("qamar_care_cards.FamilyStatus_ID", "=", 93)->get() -> count();
   $qamarcarecardsOrphans =   QamarCareCard::where("qamar_care_cards.FamilyStatus_ID", "=", 94)->get() -> count();
   $qamarcarecardsDisabledIndividual =   QamarCareCard::where("qamar_care_cards.FamilyStatus_ID", "=", 95)->get() -> count();
   $qamarcarecardsElderlyIndividual =   QamarCareCard::where("qamar_care_cards.FamilyStatus_ID", "=", 96)->get() -> count();
   $qamarcarecardsDisplacedFamily =   QamarCareCard::where("qamar_care_cards.FamilyStatus_ID", "=", 97)->get() -> count();
   $qamarcarecardsDisasterAffected =   QamarCareCard::where("qamar_care_cards.FamilyStatus_ID", "=", 98)->get() -> count();







   $qamarcarecardsLastFive =   QamarCareCard::join('locations as a', 'qamar_care_cards.Province_ID', '=', 'a.id')
   ->join('locations as b', 'qamar_care_cards.District_ID', '=', 'b.id')
   ->join('look_ups as c', 'qamar_care_cards.FamilyStatus_ID', '=', 'c.id')
   ->join('users as d', 'qamar_care_cards.Created_By', '=', 'd.id')
   ->select(['qamar_care_cards.*', 'a.Name as ProvinceName', 'b.Name as DistrictName', 'c.Name as FamilyStatus', 'd.FirstName as UFirstName', 'd.LastName as ULastName', 'd.Job as UJob'])
   -> orderBy('id', 'desc')->take(5)->get();






    return view('index', compact('qamarcarecardsDisabledIndividual','qamarcarecardsElderlyIndividual','qamarcarecardsDisplacedFamily','qamarcarecardsDisasterAffected','qamarcarecardsPoor','qamarcarecardsLowIncome','qamarcarecardsWidow','qamarcarecardsOrphans','catagorys', 'notifications', 'qamarcarecardsMale', 'qamarcarecardsFemale', 'qamarcarecardsCount', 'qamarcarecardsPending', 'qamarcarecardsApproved', 'qamarcarecardsPrinted', 'qamarcarecardsReleased', 'qamarcarecardsRejected', 'qamarcarecardsLastFive'));

    }
















    public function Projects()
    {
        return view('Projects');
    }

    public function BeneficiariesServices()
    {
        return view('BeneficiariesServices');
    }

    public function Reports()
    {
        return view('Reports');
    }






    public function Employees_Profile(Request $request)
    {

        if ($request->hasFile('Profile')) {


            $profile = $request->file('Profile');

            $profilename = $profile->getClientOriginalName();

            $profileuniquename = uniqid() . '_' . $profilename;

            $profile->storeAs('Profiles', $profileuniquename, 'Employees');


            return $profileuniquename;
        }
        return '';
    }








    public function Scholarship(Request $request)
    {
        if ($request->hasFile('Profile')) {


            $profile = $request->file('Profile');

            $profilename = $profile->getClientOriginalName();

            $profileuniquename = uniqid() . '_' . $profilename;

            $profile->storeAs('Profiles', $profileuniquename, 'Scholarship');


            return $profileuniquename;
        }

        if ($request->hasFile('Tazkira')) {


            $Tazkira = $request->file('Tazkira');

            $Tazkiraname = $Tazkira->getClientOriginalName();

            $Tazkiruniquename = uniqid() . '_' . $Tazkiraname;


            $Tazkira->storeAs('Tazkiras', $Tazkiruniquename, 'Scholarship');

            return $Tazkiruniquename;
        }


        if ($request->hasFile('SchoolDiploma')) {


            $SchoolDiploma = $request->file('SchoolDiploma');

            $SchoolDiplomaname = $SchoolDiploma->getClientOriginalName();

            $SchoolDiplomauniquename = uniqid() . '_' . $SchoolDiplomaname;


            $SchoolDiploma->storeAs('SchoolDiplomas', $SchoolDiplomauniquename, 'Scholarship');

            return $SchoolDiplomauniquename;
        }


        if ($request->hasFile('SchoolTranscript')) {


            $SchoolTranscript = $request->file('SchoolTranscript');

            $SchoolTranscriptname = $SchoolTranscript->getClientOriginalName();

            $SchoolTranscriptuniquename = uniqid() . '_' . $SchoolTranscriptname;


            $SchoolTranscript->storeAs('SchoolTranscripts', $SchoolTranscriptuniquename, 'Scholarship');

            return $SchoolTranscriptuniquename;
        }


        if ($request->hasFile('EnglishDiploma')) {


            $EnglishDiploma = $request->file('EnglishDiploma');

            $EnglishDiplomaname = $EnglishDiploma->getClientOriginalName();

            $EnglishDiplomauniquename = uniqid() . '_' . $EnglishDiplomaname;


            $EnglishDiploma->storeAs('EnglishDiploma', $EnglishDiplomauniquename, 'Scholarship');

            return $EnglishDiplomauniquename;
        }

        if ($request->hasFile('WorkExperienceLetter')) {


            $WorkExperienceLetter = $request->file('WorkExperienceLetter');

            $WorkExperienceLettername = $WorkExperienceLetter->getClientOriginalName();

            $WorkExperienceLetteruniquename = uniqid() . '_' . $WorkExperienceLettername;


            $WorkExperienceLetter->storeAs('WorkExperienceLetters', $WorkExperienceLetteruniquename, 'Scholarship');

            return $WorkExperienceLetteruniquename;
        }

        if ($request->hasFile('Resume')) {


            $Resume = $request->file('Resume');

            $Resumename = $Resume->getClientOriginalName();

            $Resumenameuniquename = uniqid() . '_' . $Resumename;


            $Resume->storeAs('Resumes', $Resumenameuniquename, 'Scholarship');

            return $Resumenameuniquename;
        }

        return '';
    }














    public function Orphans_Profile(Request $request)
    {

        if ($request->hasFile('Profile')) {


            $profile = $request->file('Profile');

            $profilename = $profile->getClientOriginalName();

            $profileuniquename = uniqid() . '_' . $profilename;

            $profile->storeAs('Profiles', $profileuniquename, 'OrphansRelief');


            return $profileuniquename;
        }
        return '';
    }


    public function Orphans_Tazkira(Request $request)
    {
        if ($request->hasFile('Tazkira')) {


            $Tazkira = $request->file('Tazkira');

            $Tazkiraname = $Tazkira->getClientOriginalName();

            $Tazkiruniquename = uniqid() . '_' . $Tazkiraname;


            $Tazkira->storeAs('Tazkiras', $Tazkiruniquename, 'OrphansRelief');

            return $Tazkiruniquename;
        }
        return '';
    }


    public function Orphans_HousePic(Request $request)
    {
        if ($request->hasFile('HousePic')) {


            $Tazkira = $request->file('HousePic');

            $Tazkiraname = $Tazkira->getClientOriginalName();

            $Tazkiruniquename = uniqid() . '_' . $Tazkiraname;


            $Tazkira->storeAs('HousePic', $Tazkiruniquename, 'OrphansRelief');

            return $Tazkiruniquename;
        }
        return '';
    }

    public function Orphans_FamilyPic(Request $request)
    {
        if ($request->hasFile('FamilyPic')) {


            $Tazkira = $request->file('FamilyPic');

            $Tazkiraname = $Tazkira->getClientOriginalName();

            $Tazkiruniquename = uniqid() . '_' . $Tazkiraname;


            $Tazkira->storeAs('FamilyPic', $Tazkiruniquename, 'OrphansRelief');

            return $Tazkiruniquename;
        }
        return '';
    }


    // location
    // public function GetProvinces()
    // {

    //     $provinces = Locations::where("Parent_ID", "=", 'null')->get();
    //     return $provinces;
    // }

    public function GetDistricts($data)
    {
        $districts =   Location::select('id', 'Name')->where("Parent_ID", "=", $data)->get();
        return response()->json($districts);
    }





    public function GetScholarship($data)
    {
        $scholarships =   Scholarship::select('id', 'ScholarshipName')->where("ScholarshipType_ID", "=", $data)->get();
        return response()->json($scholarships);
    }


    public function GetScholarshipModule($data)
    {
        $scholarshipmodules =   ScholarshipModule::select('id', 'ModuleName')->where("Parent_ID", "=", $data)->get();
        return response()->json($scholarshipmodules);
    }



    public function CreateLookups(Request $request)
    {

        $validator = $request->validate([
            'Parent_Name' => 'bail|required|max:255',
            'Name' => 'required|max:255',


        ]);



        LookUp::create([
            'Parent_Name' => request('Parent_Name'),
            'Name' => request('Name'),




        ]);

        return redirect()->route('root')->with('toast_success', 'Record Created Successfully!');
    }


        /*set cookies for layout */
        public function LayoutSidebar()
        {
            Cookie::forget('Layout');
            $cookies = Cookie::forever('Layout', "LayoutSidebar");
            // $cookies = Cookie::get('Layout');
            // dd($cookies);
            return redirect()->back() -> cookie($cookies);
        }


        public function LayoutNoSidebar()
        {

            Cookie::forget('Layout');
            $cookies = Cookie::forever('Layout', "LayoutNoSidebar");
            // $cookies = Cookie::get('Layout');
            // dd($cookies);

            return redirect()->back()-> cookie($cookies);
        }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar = '/images/' . $avatarName;
        }

        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "User Details Updated successfully!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }
}
