<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\QamarCareCardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//  Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Dashvoard
Route::get('/root', [App\Http\Controllers\HomeController:: class, 'root'])->name('root');;


// Qamar Care Card
Route::get('/QamarCareCard', [App\Http\Controllers\QamarCareCardController:: class, 'Index'])->name('QamarCareCard');
Route::get('/ViewApprovedList', [App\Http\Controllers\QamarCareCardController:: class, 'Approved'])->name('ViewApprovedList');
Route::get('/CreateQamarCareCard', [App\Http\Controllers\QamarCareCardController:: class, 'Create'])->name('CreateQamarCareCard');
Route::post('/CreateQamarCareCard', [App\Http\Controllers\QamarCareCardController:: class, 'Store']);

// for educations
Route::get('/QamarCareCard', [App\Http\Controllers\QamarCareCardController:: class, 'Index'])->name('QamarCareCard');