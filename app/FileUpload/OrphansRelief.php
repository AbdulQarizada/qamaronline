<?php

namespace App\FileUpload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



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
            $profile->storeAs('Profiles', $profileuniquename, 'Users');
            return $profileuniquename;
        }
        return '';
    }
}
