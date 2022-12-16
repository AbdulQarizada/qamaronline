<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Education Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();
// Index
Route::get('/Education', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'Index'])->name('IndexEducation');
// Scholarships
//All
Route::get('/Education/Scholarship', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'All'])->name('AllScholarship');
Route::get('/Education/Scholarship/GetScholarshipAjax', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'GetScholarshipAjax'])->name('GetScholarshipAjax');

// create
Route::get('/Education/Scholarship/Create', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'Create'])->name('CreateScholarship');
Route::post('/Education/Scholarship/Create', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'Store'])->name('CreateScholarship');
// update
Route::put('/Education/Scholarship/Update/{data}', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'Update'])->name('UpdateScholarship');
// delete
Route::get('/Education/Scholarship/Delete/{data}', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'Delete'])->name('DeleteScholarship');
// status
Route::get('/Education/Scholarship/Status/{data}', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'Status'])->name('StatusScholarship');
Route::get('/Education/Scholarship/Active', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'Active'])->name('ActiveScholarship');
Route::get('/Education/Scholarship/Expired', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'Expired'])->name('ExpiredScholarship');
//scholarship modules
Route::post('/Education/Scholarship/Module/CreateModule', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'CreateModule'])->name('CreateModuleScholarship');
Route::get('/Education/Scholarship/Module/Delete/{data}', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'DeleteModule'])->name('DeleteModuleScholarship');
Route::get('/Education/Scholarship/GetScholarshipModuleAjax', [App\Http\Controllers\Education\Scholarships\ScholarshipController::class, 'GetScholarshipModuleAjax'])->name('GetScholarshipModuleAjax');



// Applicants
// create
Route::get('/Education/Application/Create', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'Create'])->name('CreateApplication');
Route::post('/Education/Application/Create', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'Store'])->name('CreateApplication');
// status list and change status
Route::get('/Education/Applicant/Status/{data}', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'Status'])->name('StatusApplicant');
Route::get('/Education/Applicant/Approved', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'ApprovedApplicants'])->name('ApprovedApplicants');
Route::get('/Education/Applicant/Rejected', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'RejectedApplicants'])->name('RejectedApplicants');
Route::get('/Education/Applicant/Pending', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'PendingApplicants'])->name('PendingApplicants');
Route::get('/Education/Applicant/Approve/{data}', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'Approve'])->name('ApproveApplicant');
Route::get('/Education/Applicant/Reject/{data}', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'Reject'])->name('RejectApplicant');
Route::get('/Education/Applicant/ReInitiate/{data}', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'ReInitiate'])->name('ReInitiateApplicant');
// success
Route::get('/Education/Application/Success', [App\Http\Controllers\Education\Applicants\ApplicantController::class, 'Success'])->name('SuccessApplication');

// uploads
Route::post('/Education/Applicant/Applicant_Profile', [App\FileUpload\Education::class, 'Applicant_Profile'])->name('Applicant_Profile');
Route::post('/Education/Applicant/Applicant_Tazkira', [App\FileUpload\Education::class, 'Applicant_Tazkira'])->name('Applicant_Tazkira');
Route::post('/Education/Applicant/Applicant_SchoolDiploma', [App\FileUpload\Education::class, 'Applicant_SchoolDiploma'])->name('Applicant_SchoolDiploma');
Route::post('/Education/Applicant/Applicant_SchoolTranscript', [App\FileUpload\Education::class, 'Applicant_SchoolTranscript'])->name('Applicant_SchoolTranscript');
Route::post('/Education/Applicant/Applicant_EnglishDiploma', [App\FileUpload\Education::class, 'Applicant_EnglishDiploma'])->name('Applicant_EnglishDiploma');
Route::post('/Education/Applicant/Applicant_WorkExperienceLetter', [App\FileUpload\Education::class, 'Applicant_WorkExperienceLetter'])->name('Applicant_WorkExperienceLetter');
Route::post('/Education/Applicant/Applicant_Resume', [App\FileUpload\Education::class, 'Applicant_Resume'])->name('Applicant_Resume');




















Route::post('/Education/Scholarship', [App\Http\Controllers\HomeController::class, 'Scholarship'])->name('Scholarship');

// Get Scholarship
Route::get('/GetScholarship/{data}', [App\Http\Controllers\HomeController::class, 'GetScholarship'])->name('GetScholarship');

// Get Scholarship Module
Route::get('/GetScholarshipModule/{data}', [App\Http\Controllers\HomeController::class, 'GetScholarshipModule'])->name('GetScholarshipModule');














//create CreateScholarshipModule



