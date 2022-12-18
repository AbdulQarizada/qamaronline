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
        $this->middleware('auth', ['except' => ['Representative_Passport']]);
    }


    public function Representative_Passport(Request $request)
    {
        if ($request->hasFile('Passport')) {
            $Resume = $request->file('Passport');
            $Resumename = $Resume->getClientOriginalName();
            $Resumenameuniquename = uniqid() . '_' . $Resumename;
            $Resume->storeAs('Passports', $Resumenameuniquename, 'Representative');
            return $Resumenameuniquename;
        }
        return '';
    }
}
