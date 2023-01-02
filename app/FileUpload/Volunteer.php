<?php

namespace App\FileUpload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class Volunteer extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['Volunteer_Resume']]);
    }


    public function Volunteer_Resume(Request $request)
    {

        if ($request->hasFile('Resume')) {
            $Resume = $request->file('Resume');
            $Extenstion = $Resume->getClientOriginalExtension();
            if($Extenstion == 'pdf' || $Extenstion == 'jpeg' || $Extenstion == 'jpg' || $Extenstion == 'png')
            {
                $Resumename = $Resume->getClientOriginalName();
                $Resumenameuniquename = uniqid() . '_' . $Resumename;
                $Resume->storeAs('Resumes', $Resumenameuniquename, 'Volunteer');
                return $Resumenameuniquename;
            }
            return '';
        }
        return '';
    }
}
