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

// uploads
Route::post('/Upload_Tazkira', [App\Http\Controllers\HomeController:: class, 'Upload_Tazkira'])->name('Upload_Tazkira');
Route::post('/Upload_Profile', [App\Http\Controllers\HomeController:: class, 'Upload_Profile'])->name('Upload_Profile');












// Qamar Care Card
    Route::get('/QamarCareCard', [App\Http\Controllers\QamarCareCardController:: class, 'Index'])->name('IndexQamarCareCard');
     
   
    // Create
    Route::get('/QamarCareCard/Create', [App\Http\Controllers\QamarCareCardController:: class, 'Create'])->name('CreateQamarCareCard');
    Route::post('/QamarCareCard/Create', [App\Http\Controllers\QamarCareCardController:: class, 'Store'])->name('CreateQamarCareCard');

    // update
    Route::get('/QamarCareCard/Edit/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Edit'])->name('EditQamarCareCard');
    Route::put('/QamarCareCard/Edit/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Update'])->name('UpdateQamarCareCard');

    // delete
    Route::get('/QamarCareCard/Delete/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Delete'])->name('DeleteQamarCareCard');


    // qamar care list
    Route::get('/QamarCareCard/All', [App\Http\Controllers\QamarCareCardController:: class, 'All'])->name('AllQamarCareCard');
    Route::get('/QamarCareCard/Approved', [App\Http\Controllers\QamarCareCardController:: class, 'Approved'])->name('ApprovedQamarCareCard');
    Route::get('/QamarCareCard/Rejected', [App\Http\Controllers\QamarCareCardController:: class, 'Rejected'])->name('RejectedQamarCareCard');
    Route::get('/QamarCareCard/Printed', [App\Http\Controllers\QamarCareCardController:: class, 'Printed'])->name('PrintedQamarCareCard');
    Route::get('/QamarCareCard/Pending', [App\Http\Controllers\QamarCareCardController:: class, 'Pending'])->name('PendingQamarCareCard');
    Route::get('/QamarCareCard/Released', [App\Http\Controllers\QamarCareCardController:: class, 'Released'])->name('ReleasedQamarCareCard');





    // status list and change status
    Route::get('/QamarCareCard/Status/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Status'])->name('StatusQamarCareCard');

    Route::get('/QamarCareCard/Approve/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Approve'])->name('ApproveQamarCareCard');

    Route::get('/QamarCareCard/Reject/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Reject'])->name('RejectQamarCareCard');

    Route::get('/QamarCareCard/ReInitiate/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'ReInitiate'])->name('ReInitiateQamarCareCard');

    
    Route::get('/QamarCareCard/Release/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Release'])->name('ReleaseQamarCareCard');



    // print
    Route::get('/QamarCareCard/Printing/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Printing'])->name('PrintingQamarCareCard');

    Route::get('/QamarCareCard/Print/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'Print'])->name('PrintQamarCareCard');


    // assign to servies
    Route::get('/QamarCareCard/AssigningToService', [App\Http\Controllers\QamarCareCardController:: class, 'AssigningToService'])->name('AssigningToServiceQamarCareCard');
    Route::get('/QamarCareCard/AssignToService/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'AssignToService'])->name('AssignToServiceQamarCareCard');


    // verify qamar card that is avalibe to all
    Route::get('/QamarCareCard/Verify', [App\Http\Controllers\QamarCareCardController:: class, 'Verify'])->name('VerifyQamarCareCard');
    Route::post('/QamarCareCard/Verify', [App\Http\Controllers\QamarCareCardController:: class, 'Search'])->name('SearchQamarCareCard');



