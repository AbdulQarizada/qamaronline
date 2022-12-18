<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Volunteer Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();
// Volunteer
//All
Route::get('/Volunteer/All', [App\Http\Controllers\Volunteer\VolunteerController::class, 'All'])->name('AllVolunteer');
// create
Route::get('/Volunteer/Create', [App\Http\Controllers\Volunteer\VolunteerController::class, 'Create'])->name('CreateVolunteer');
Route::post('/Volunteer/Create', [App\Http\Controllers\Volunteer\VolunteerController::class, 'Store'])->name('CreateVolunteer');
// delete
Route::get('/Volunteer/Delete/{data}', [App\Http\Controllers\Volunteer\VolunteerController::class, 'Delete'])->name('DeleteVolunteer');
// success
Route::get('/Volunteer/Success', [App\Http\Controllers\Volunteer\VolunteerController::class, 'Success'])->name('SuccessVolunteer');
// uploads
Route::post('/Volunteer/Volunteer_Resume', [App\FileUpload\Volunteer::class, 'Volunteer_Resume'])->name('Volunteer_Resume');


