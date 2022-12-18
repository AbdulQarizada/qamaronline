<?php

namespace App\FileUpload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class Representative extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['Representative_Passport', 'Representative_Profile', 'Representative_Resume',]]);
    }


    public function Representative_Passport(Request $request)
    {
        if ($request->hasFile('Passport')) {
            $Passport = $request->file('Passport');
            $Passportname = $Passport->getClientOriginalName();
            $Passportnameuniquename = uniqid() . '_' . $Passportname;
            $Passport->storeAs('Passports', $Passportnameuniquename, 'Representative');
            return $Passportnameuniquename;
        }
        return '';
    }

    public function Representative_Profile(Request $request)
    {
        if ($request->hasFile('Profile')) {
            $Profile = $request->file('Profile');
            $Profilename = $Profile->getClientOriginalName();
            $Profilenameuniquename = uniqid() . '_' . $Profilename;
            $Profile->storeAs('Profiles', $Profilenameuniquename, 'Representative');
            return $Profilenameuniquename;
        }
        return '';
    }

    public function Representative_Resume(Request $request)
    {
        if ($request->hasFile('Resume')) {
            $Resume = $request->file('Resume');
            $Resumename = $Resume->getClientOriginalName();
            $Resumenameuniquename = uniqid() . '_' . $Resumename;
            $Resume->storeAs('Resumes', $Resumenameuniquename, 'Representative');
            return $Resumenameuniquename;
        }
        return '';
    }
}
