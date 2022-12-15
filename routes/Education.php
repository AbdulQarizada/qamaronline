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


















Route::post('/Education/Scholarship', [App\Http\Controllers\HomeController::class, 'Scholarship'])->name('Scholarship');

// Get Scholarship
Route::get('/GetScholarship/{data}', [App\Http\Controllers\HomeController::class, 'GetScholarship'])->name('GetScholarship');

// Get Scholarship Module
Route::get('/GetScholarshipModule/{data}', [App\Http\Controllers\HomeController::class, 'GetScholarshipModule'])->name('GetScholarshipModule');














//create CreateScholarshipModule

// Applicants
Route::get('/Education/Applicant', [App\Http\Controllers\Education\EducationController::class, 'AllApplicant'])->name('AllApplicantEducation');
Route::get('/Education/Applicant/Approved', [App\Http\Controllers\Education\EducationController::class, 'ApprovedApplicants'])->name('ApprovedApplicantsEducation');
Route::get('/Education/Applicant/Rejected', [App\Http\Controllers\Education\EducationController::class, 'RejectedApplicants'])->name('RejectedApplicantsEducation');
Route::get('/Education/Applicant/Pending', [App\Http\Controllers\Education\EducationController::class, 'PendingApplicants'])->name('PendingApplicantsEducation');

// status list and change status
Route::get('/Education/Applicant/Status/{data}', [App\Http\Controllers\Education\EducationController::class, 'Status'])->name('StatusApplicantEducation');

Route::get('/Education/Applicant/Approve/{data}', [App\Http\Controllers\Education\EducationController::class, 'Approve'])->name('ApproveApplicantEducation');

Route::get('/Education/Applicant/Reject/{data}', [App\Http\Controllers\Education\EducationController::class, 'Reject'])->name('RejectApplicantEducation');

Route::get('/Education/Applicant/ReInitiate/{data}', [App\Http\Controllers\Education\EducationController::class, 'ReInitiate'])->name('ReInitiateApplicantEducation');


// create Application
Route::get('/Education/Application/Create', [App\Http\Controllers\Education\EducationController::class, 'CreateApplication'])->name('CreateApplicationEducation');
Route::post('/Education/Application/Create', [App\Http\Controllers\Education\EducationController::class, 'StoreApplication'])->name('CreateApplicationEducation');

// success applicant
Route::get('/Education/Application/Success', [App\Http\Controllers\Education\EducationController::class, 'SuccessApplication'])->name('SuccessApplicationEducation');



