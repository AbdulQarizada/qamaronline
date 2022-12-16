<?php

namespace App\FileUpload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class Education extends Controller
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

    public function Applicant_Profile(Request $request)
    {
        if ($request->hasFile('Profile')) {
            $profile = $request->file('Profile');
            $profilename = $profile->getClientOriginalName();
            $profileuniquename = uniqid() . '_' . $profilename;
            $profile->storeAs('Profiles', $profileuniquename, 'Scholarship');
            return $profileuniquename;
        }
        return '';
    }

    public function Applicant_Tazkira(Request $request)
    {
        if ($request->hasFile('Tazkira')) {
            $Tazkira = $request->file('Tazkira');
            $Tazkiraname = $Tazkira->getClientOriginalName();
            $Tazkiruniquename = uniqid() . '_' . $Tazkiraname;
            $Tazkira->storeAs('Tazkiras', $Tazkiruniquename, 'Scholarship');
            return $Tazkiruniquename;
        }
        return '';
    }

    public function Applicant_SchoolDiploma(Request $request)
    {
        if ($request->hasFile('SchoolDiploma')) {
            $SchoolDiploma = $request->file('SchoolDiploma');
            $SchoolDiplomaname = $SchoolDiploma->getClientOriginalName();
            $SchoolDiplomauniquename = uniqid() . '_' . $SchoolDiplomaname;
            $SchoolDiploma->storeAs('SchoolDiplomas', $SchoolDiplomauniquename, 'Scholarship');
            return $SchoolDiplomauniquename;
        }
        return '';
    }

    public function Applicant_SchoolTranscript(Request $request)
    {
        if ($request->hasFile('SchoolTranscript')) {
            $SchoolTranscript = $request->file('SchoolTranscript');
            $SchoolTranscriptname = $SchoolTranscript->getClientOriginalName();
            $SchoolTranscriptuniquename = uniqid() . '_' . $SchoolTranscriptname;
            $SchoolTranscript->storeAs('SchoolTranscripts', $SchoolTranscriptuniquename, 'Scholarship');
            return $SchoolTranscriptuniquename;
        }
        return '';
    }

    public function Applicant_EnglishDiploma(Request $request)
    {
        if ($request->hasFile('EnglishDiploma')) {
            $EnglishDiploma = $request->file('EnglishDiploma');
            $EnglishDiplomaname = $EnglishDiploma->getClientOriginalName();
            $EnglishDiplomauniquename = uniqid() . '_' . $EnglishDiplomaname;
            $EnglishDiploma->storeAs('EnglishDiplomas', $EnglishDiplomauniquename, 'Scholarship');
            return $EnglishDiplomauniquename;
        }
        return '';
    }

    public function Applicant_WorkExperienceLetter(Request $request)
    {
        if ($request->hasFile('WorkExperienceLetter')) {
            $WorkExperienceLetter = $request->file('WorkExperienceLetter');
            $WorkExperienceLettername = $WorkExperienceLetter->getClientOriginalName();
            $WorkExperienceLetteruniquename = uniqid() . '_' . $WorkExperienceLettername;
            $WorkExperienceLetter->storeAs('WorkExperienceLetters', $WorkExperienceLetteruniquename, 'Scholarship');
            return $WorkExperienceLetteruniquename;
        }
        return '';
    }

    public function Applicant_Resume(Request $request)
    {
        if ($request->hasFile('Resume')) {
            $Resume = $request->file('Resume');
            $Resumename = $Resume->getClientOriginalName();
            $Resumenameuniquename = uniqid() . '_' . $Resumename;
            $Resume->storeAs('Resumes', $Resumenameuniquename, 'Scholarship');
            return $Resumenameuniquename;
        }
        return '';
    }
}
