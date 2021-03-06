<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\QamarCareCardController;
use App\Http\Controllers\EducationController;


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

// Get District
Route::get('/GetDistricts/{data}', [App\Http\Controllers\HomeController:: class, 'GetDistricts'])->name('GetDistricts');

       //create lookups
Route::post('/CreateLookups', [App\Http\Controllers\HomeController:: class, 'CreateLookups'])->name('CreateLookups');
      

Route::get('/Projects', [App\Http\Controllers\HomeController:: class, 'Projects'])->name('Projects');

Route::get('/BeneficiariesServices', [App\Http\Controllers\HomeController:: class, 'BeneficiariesServices'])->name('BeneficiariesServices');

Route::get('/Reports', [App\Http\Controllers\HomeController:: class, 'Reports'])->name('Reports');

Route::get('/UserManagement', [App\Http\Controllers\HomeController:: class, 'UserManagement'])->name('UserManagement');

// uploads
Route::post('/Beneficiaries_Tazkira', [App\Http\Controllers\HomeController:: class, 'Beneficiaries_Tazkira'])->name('Beneficiaries_Tazkira');
Route::post('/Beneficiaries_Profile', [App\Http\Controllers\HomeController:: class, 'Beneficiaries_Profile'])->name('Beneficiaries_Profile');

Route::post('/ServiceProvider_Profile', [App\Http\Controllers\HomeController:: class, 'ServiceProvider_Profile'])->name('ServiceProvider_Profile');


Route::post('/Education/Scholarship', [App\Http\Controllers\HomeController:: class, 'Scholarship'])->name('Scholarship');

// Get Scholarship
Route::get('/GetScholarship/{data}', [App\Http\Controllers\HomeController:: class, 'GetScholarship'])->name('GetScholarship');

// Get Scholarship Module
Route::get('/GetScholarshipModule/{data}', [App\Http\Controllers\HomeController:: class, 'GetScholarshipModule'])->name('GetScholarshipModule');




// Education

Route::get('/Education', [App\Http\Controllers\EducationController:: class, 'Index'])->name('IndexEducation');

Route::get('/Education/Scholarship', [App\Http\Controllers\EducationController:: class, 'AllScholarship'])->name('AllScholarshipEducation');

// create scholarship
Route::get('/Education/Scholarship/Create', [App\Http\Controllers\EducationController:: class, 'CreateScholarship'])->name('CreateScholarship');
Route::post('/Education/Scholarship/Create', [App\Http\Controllers\EducationController:: class, 'StoreScholarship'])->name('CreateScholarship');

   // delete
   Route::get('/Education/Scholarship/Delete/{data}', [App\Http\Controllers\EducationController:: class, 'DeleteScholarship'])->name('DeleteScholarship');


   Route::get('/Education/Scholarship/Active', [App\Http\Controllers\EducationController:: class, 'ActiveScholarship'])->name('ActiveScholarship');
   Route::get('/Education/Scholarship/Closed', [App\Http\Controllers\EducationController:: class, 'ClosedScholarship'])->name('ClosedScholarship');



       //create CreateScholarshipModule
Route::post('/Education/Scholarship/CreateScholarshipModule', [App\Http\Controllers\EducationController:: class, 'CreateScholarshipModule'])->name('CreateScholarshipModule');
  

Route::get('/Education/Applicant', [App\Http\Controllers\EducationController:: class, 'AllApplicant'])->name('AllApplicantEducation');
Route::get('/Education/Applicant/Approved', [App\Http\Controllers\EducationController:: class, 'ApprovedApplicants'])->name('ApprovedApplicantsEducation');
Route::get('/Education/Applicant/Rejected', [App\Http\Controllers\EducationController:: class, 'RejectedApplicants'])->name('RejectedApplicantsEducation');
Route::get('/Education/Applicant/Pending', [App\Http\Controllers\EducationController:: class, 'PendingApplicants'])->name('PendingApplicantsEducation');

    // status list and change status
    Route::get('/Education/Applicant/Status/{data}', [App\Http\Controllers\EducationController:: class, 'Status'])->name('StatusApplicantEducation');

    Route::get('/Education/Applicant/Approve/{data}', [App\Http\Controllers\EducationController:: class, 'Approve'])->name('ApproveApplicantEducation');

    Route::get('/Education/Applicant/Reject/{data}', [App\Http\Controllers\EducationController:: class, 'Reject'])->name('RejectApplicantEducation');

    Route::get('/Education/Applicant/ReInitiate/{data}', [App\Http\Controllers\EducationController:: class, 'ReInitiate'])->name('ReInitiateApplicantEducation');

    



// create Application
Route::get('/Education/Application/Create', [App\Http\Controllers\EducationController:: class, 'CreateApplication'])->name('CreateApplicationEducation');
Route::post('/Education/Application/Create', [App\Http\Controllers\EducationController:: class, 'StoreApplication'])->name('CreateApplicationEducation');

// success applicant
Route::get('/Education/Application/Success', [App\Http\Controllers\EducationController:: class, 'SuccessApplication'])->name('SuccessApplicationEducation');

































































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
    Route::get('/QamarCareCard/AssignToService/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'AssignToService'])->name('AssignToServiceQamarCareCard');


       // list
       Route::get('/QamarCareCard/AssigningService', [App\Http\Controllers\QamarCareCardController:: class, 'AssigningService'])->name('AssigningServiceQamarCareCard');
       Route::get('/QamarCareCard/AssignedServices', [App\Http\Controllers\QamarCareCardController:: class, 'AssignedServices'])->name('AssignedServicesQamarCareCard');
       
       
       Route::get('/QamarCareCard/RecievedServices', [App\Http\Controllers\QamarCareCardController:: class, 'RecievedServices'])->name('RecievedServicesQamarCareCard');
       Route::get('/QamarCareCard/RejectedServices', [App\Http\Controllers\QamarCareCardController:: class, 'RejectedServices'])->name('RejectedServicesQamarCareCard');


   
       // update
      Route::get('/QamarCareCard/ServiceEdit/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'ServiceEdit'])->name('ServiceEditQamarCareCard');
      Route::put('/QamarCareCard/ServiceEdit/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'ServiceUpdate'])->name('ServiceUpdateQamarCareCard');
   
       // delete
       Route::get('/QamarCareCard/ServiceDelete/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'ServiceDeleteDelete'])->name('ServiceDeleteQamarCareCard');
   
      // Serivce Status change
       Route::get('/QamarCareCard/ServiceReleased/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'ServiceReleased'])->name('ServiceReleasedQamarCareCard');


       // Service Provider
       Route::get('/QamarCareCard/ServiceProviders', [App\Http\Controllers\QamarCareCardController:: class, 'ServiceProviders'])->name('ServiceProvidersQamarCareCard');
       Route::get('/QamarCareCard/ServiceProviderIndex', [App\Http\Controllers\QamarCareCardController:: class, 'ServiceProviderIndex'])->name('ServiceProviderIndexQamarCareCard');
       Route::get('/QamarCareCard/CreateServiceProviderIndividual', [App\Http\Controllers\QamarCareCardController:: class, 'CreateServiceProviderIndividual'])->name('CreateServiceProviderIndividual');
       Route::get('/QamarCareCard/CreateServiceProviderOrganization', [App\Http\Controllers\QamarCareCardController:: class, 'CreateServiceProviderOrganization'])->name('CreateServiceProviderOrganization');


       //create
       Route::post('/QamarCareCard/CreateServiceProviderIndividual', [App\Http\Controllers\QamarCareCardController:: class, 'StoreServiceProviderIndividual'])->name('CreateServiceProviderIndividual');
      
       Route::get('/QamarCareCard/StatusServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'StatusServiceProvider'])->name('StatusServiceProviderQamarCareCard');
       Route::get('/QamarCareCard/ApproveServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'ApproveServiceProvider'])->name('ApproveServiceProviderQamarCareCard');
       Route::get('/QamarCareCard/RejectServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'RejectServiceProvider'])->name('RejectServiceProviderQamarCareCard');
       Route::get('/QamarCareCard/DeleteServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'DeleteServiceProvider'])->name('DeleteServiceProviderQamarCareCard');
       Route::get('/QamarCareCard/ReInitiateServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'ReInitiateServiceProvider'])->name('ReInitiateServiceProviderQamarCareCard');

       
// find service provider
//    Route::get('/QamarCareCard/FindServiceProvider/{Province}/{District}/{RequestedService}', [App\Http\Controllers\QamarCareCardController:: class, 'FindServiceProvider'])->name('FindServiceProvider');

   Route::post('/QamarCareCard/FindServiceProvider/{data}', [App\Http\Controllers\QamarCareCardController:: class, 'FindServiceProvider'])->name('FindServiceProvider');

 

      // create
      Route::post('/QamarCareCard/AssignService', [App\Http\Controllers\QamarCareCardController:: class, 'AssignService'])->name('AssignServiceQamarCareCard');
        

    // verify qamar card that is avalibe to all
    Route::get('/QamarCareCard/Verify', [App\Http\Controllers\QamarCareCardController:: class, 'Verify'])->name('VerifyQamarCareCard');
    Route::post('/QamarCareCard/Verify', [App\Http\Controllers\QamarCareCardController:: class, 'Search'])->name('SearchQamarCareCard');



    Route::post('/QamarCareCard/AssignServices', [App\Http\Controllers\QamarCareCardController:: class, 'AssignService'])->name('AssignServicesQamarCareCard');
