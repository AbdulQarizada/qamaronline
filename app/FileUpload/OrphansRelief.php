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



class OrphansRelief extends Controller
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






    public function Orphans_Profile(Request $request)
    {
        if ($request->hasFile('Profile')) {
            $profile = $request->file('Profile');
            $profilename = $profile->getClientOriginalName();
            $profileuniquename = uniqid() . '_' . $profilename;
            $profile->storeAs('Profiles', $profileuniquename, 'Orphans');
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
            $Tazkira->storeAs('Tazkiras', $Tazkiruniquename, 'Orphans');
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
            $Tazkira->storeAs('HousePic', $Tazkiruniquename, 'Orphans');
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
            $Tazkira->storeAs('FamilyPic', $Tazkiruniquename, 'Orphans');
            return $Tazkiruniquename;
        }
        return '';
    }



    public function Sponsors_Profile(Request $request)
    {

        if ($request->hasFile('Profile')) {
            $profile = $request->file('Profile');
            $profilename = $profile->getClientOriginalName();
            $profileuniquename = uniqid() . '_' . $profilename;
            $profile->storeAs('Profiles', $profileuniquename, 'Sponsors');
            return $profileuniquename;
        }
        return '';
    }





}
