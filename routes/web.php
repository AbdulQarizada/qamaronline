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
Route::get('/root', [App\Http\Controllers\HomeController:: class, 'root'])->name('root');

Route::get('/Projects', [App\Http\Controllers\HomeController:: class, 'Projects'])->name('Projects');

Route::get('/BeneficiariesServices', [App\Http\Controllers\HomeController:: class, 'BeneficiariesServices'])->name('BeneficiariesServices');

Route::get('/Reports', [App\Http\Controllers\HomeController:: class, 'Reports'])->name('Reports');

Route::get('/UserManagement', [App\Http\Controllers\HomeController:: class, 'UserManagement'])->name('UserManagement');











// Qamar Care Card
    Route::get('/QamarCareCard', [App\Http\Controllers\QamarCareCardController:: class, 'Index'])->name('IndexQamarCareCard');
     
    //List
    Route::get('/QamarCareCard/List', [App\Http\Controllers\QamarCareCardController:: class, 'List'])->name('ListQamarCareCard');

    // Get One
    Route::get('/QamarCareCard/List/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'GetOne'])->name('GetOneQamarCareCard');

    // Create
    Route::get('/QamarCareCard/Create', [App\Http\Controllers\QamarCareCardController:: class, 'Create'])->name('CreateQamarCareCard');
    Route::post('/QamarCareCard/Create', [App\Http\Controllers\QamarCareCardController:: class, 'Store'])->name('CreateQamarCareCard');

    // update
    Route::get('/QamarCareCard/Edit/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Edit'])->name('EditQamarCareCard');
    Route::put('/QamarCareCard/Edit/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Update'])->name('UpdateQamarCareCard');

    // delete
    Route::delete('/QamarCareCard/List/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Delete'])->name('DeleteQamarCareCard');


    // Other Operations

    // approve
    Route::get('/QamarCareCard/Approved', [App\Http\Controllers\QamarCareCardController:: class, 'Approved'])->name('ApprovedQamarCareCard');
    Route::post('/QamarCareCard/Approved', [App\Http\Controllers\QamarCareCardController:: class, 'Approved'])->name('ApprovedQamarCareCard');

    // reject
    Route::get('/QamarCareCard/Reject', [App\Http\Controllers\QamarCareCardController:: class, 'Reject'])->name('RejectedQamarCareCard');
    // print
    Route::get('/QamarCareCard/Approved/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Print'])->name('PrintQamarCareCard');



