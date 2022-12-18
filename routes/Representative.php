<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Representative Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();
// Representative
//All
Route::get('/Representative/All', [App\Http\Controllers\Representative\RepresentativeController::class, 'All'])->name('AllRepresentative');
// create
Route::get('/Representative/Create', [App\Http\Controllers\Representative\RepresentativeController::class, 'Create'])->name('CreateRepresentative');
Route::post('/Representative/Create', [App\Http\Controllers\Representative\RepresentativeController::class, 'Store'])->name('CreateRepresentative');
// delete
Route::get('/Representative/Delete/{data}', [App\Http\Controllers\Representative\RepresentativeController::class, 'Delete'])->name('DeleteRepresentative');
// success
Route::get('/Representative/Success', [App\Http\Controllers\Representative\RepresentativeController::class, 'Success'])->name('SuccessRepresentative');
// Search
Route::get('/Representative/Search/{data}', [App\Http\Controllers\Representative\RepresentativeController::class, 'Search'])->name('SearchRepresentative');
// uploads
Route::post('/Representative/Representative_Resume', [App\FileUpload\Representative::class, 'Representative_Resume'])->name('Representative_Resume');


