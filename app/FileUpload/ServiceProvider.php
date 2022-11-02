<?php

namespace App\FileUpload;

use App\Models\User;
use App\Http\Controllers\Controller;

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



class ServiceProvider extends Controller
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



    public function Individual_Profile(Request $request)
    {

        if ($request->hasFile('Profile')) {


            $profile = $request->file('Profile');

            $profilename = $profile->getClientOriginalName();

            $profileuniquename = uniqid() . '_' . $profilename;

            $profile->storeAs('Profiles', $profileuniquename, 'IndividualServiceProvider');


            return $profileuniquename;
        }
        return '';
    }


    public function Individual_Tazkira(Request $request)
    {
        if ($request->hasFile('Tazkira')) {


            $Tazkira = $request->file('Tazkira');

            $Tazkiraname = $Tazkira->getClientOriginalName();

            $Tazkiruniquename = uniqid() . '_' . $Tazkiraname;


            $Tazkira->storeAs('Tazkiras', $Tazkiruniquename, 'IndividualServiceProvider');

            return $Tazkiruniquename;
        }
        return '';
    }




}
