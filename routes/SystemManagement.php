<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\QamarCareCardController;
use App\Http\Controllers\EducationController;


/*
|--------------------------------------------------------------------------
| System Management Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();



//User Management
Route::get('/SystemManagement', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Index'])->middleware('IsSuperAdmin')->name('IndexSystemManagement');

Route::get('/UserManagement/All', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'All'])->middleware('IsSuperAdmin')->name('AllUser');
// Create
Route::get('/UserManagement/Create', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Create'])->name('CreateUser');
Route::post('/UserManagement/Create', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Store'])->name('CreateUser');
// update
Route::get('/UserManagement/Edit/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Edit'])->name('EditUser');
Route::put('/UserManagement/Edit/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Update'])->name('UpdateUser');
// delete
Route::get('/UserManagement/Delete/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Delete'])->name('DeleteUser');
// status
Route::get('/UserManagement/Status/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Status'])->name('StatusUser');
Route::get('/UserManagement/Activate/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Activate'])->name('ActivateUser');
Route::get('/UserManagement/DeActivate/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'DeActivate'])->name('DeActivateUser');
Route::get('/UserManagement/Activated', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Activated'])->name('ActivatedUser');
Route::get('/UserManagement/DeActivated', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'DeActivated'])->name('DeActivatedUser');
// role
Route::get('/UserManagement/Role/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Role'])->name('RoleUser');
Route::put('/UserManagement/AssignRole/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'AssignRole'])->name('AssignRoleUser');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');
Route::put('/UserManagement/ResetPassword/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'ResetPassword'])->name('ResetPasswordUser');
// uploads
Route::post('/Users_Profile', [App\Http\Controllers\HomeController::class, 'Users_Profile'])->name('Users_Profile');

// Error
Route::get('/ErrorManagement/All', [App\Http\Controllers\SystemManagement\ErrorManagement\ErrorController::class, 'All'])->name('AllErrors');


// LookUp
Route::get('/LookUpManagement/All', [App\Http\Controllers\SystemManagement\LookUpManagement\LookUpController::class, 'All'])->name('AllLookUps');
Route::post('/LookUpManagement/CreateLookups', [App\Http\Controllers\SystemManagement\LookUpManagement\LookUpController::class, 'Create'])->name('CreateLookUp');
Route::get('/LookUpManagement/SearchByMain/{data}', [App\Http\Controllers\SystemManagement\LookUpManagement\LookUpController::class, 'SearchByMain'])->name('SearchByMainLookUp');
Route::get('/LookUpManagement/Delete/{data}', [App\Http\Controllers\SystemManagement\LookUpManagement\LookUpController::class, 'Delete'])->name('DeleteLookUp');