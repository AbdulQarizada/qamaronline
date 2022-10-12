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
Route::get('/index', [App\Http\Controllers\HomeController::class, 'root'])->name('index');


//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//  Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Dashvoard
Route::get('/root', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

// Get District
Route::get('/GetDistricts/{data}', [App\Http\Controllers\HomeController::class, 'GetDistricts'])->name('GetDistricts');

//create lookups
Route::post('/CreateLookups', [App\Http\Controllers\HomeController::class, 'CreateLookups'])->name('CreateLookups');


Route::get('/Projects', [App\Http\Controllers\HomeController::class, 'Projects'])->name('Projects');

Route::get('/BeneficiariesServices', [App\Http\Controllers\HomeController::class, 'BeneficiariesServices'])->name('BeneficiariesServices');

Route::get('/Reports', [App\Http\Controllers\HomeController::class, 'Reports'])->name('Reports');

Route::get('/UserManagement', [App\Http\Controllers\HomeController::class, 'UserManagement'])->name('UserManagement');


// uploads
Route::post('UserManagement/Employees_Profile', [App\Http\Controllers\HomeController::class, 'Employees_Profile'])->name('Employees_Profile');
Route::post('/Employees_Profile', [App\Http\Controllers\HomeController::class, 'Employees_Profile'])->name('Employees_Profile');


Route::post('/QamarCareCard/Beneficiaries_Tazkira', [App\Http\Controllers\HomeController::class, 'Beneficiaries_Tazkira'])->name('Beneficiaries_Tazkira');
Route::post('/QamarCareCard/Beneficiaries_Profile', [App\Http\Controllers\HomeController::class, 'Beneficiaries_Profile'])->name('Beneficiaries_Profile');

Route::post('/ServiceProvider_Profile', [App\Http\Controllers\HomeController::class, 'ServiceProvider_Profile'])->name('ServiceProvider_Profile');


Route::post('/Education/Scholarship', [App\Http\Controllers\HomeController::class, 'Scholarship'])->name('Scholarship');

// Get Scholarship
Route::get('/GetScholarship/{data}', [App\Http\Controllers\HomeController::class, 'GetScholarship'])->name('GetScholarship');

// Get Scholarship Module
Route::get('/GetScholarshipModule/{data}', [App\Http\Controllers\HomeController::class, 'GetScholarshipModule'])->name('GetScholarshipModule');

// uploads of orphans
Route::post('/OrphansRelief/Orphans_Tazkira', [App\Http\Controllers\HomeController::class, 'Orphans_Tazkira'])->name('Orphans_Tazkira');
Route::post('/OrphansRelief/Orphans_Profile', [App\Http\Controllers\HomeController::class, 'Orphans_Profile'])->name('Orphans_Profile');
Route::post('/OrphansRelief/Orphans_FamilyPic', [App\Http\Controllers\HomeController::class, 'Orphans_FamilyPic'])->name('Orphans_FamilyPic');
Route::post('/OrphansRelief/Orphans_HousePic', [App\Http\Controllers\HomeController::class, 'Orphans_HousePic'])->name('Orphans_HousePic');

// Education

Route::get('/Education', [App\Http\Controllers\EducationController::class, 'Index'])->name('IndexEducation');

Route::get('/Education/Scholarship', [App\Http\Controllers\EducationController::class, 'AllScholarship'])->name('AllScholarshipEducation');

// create scholarship
Route::get('/Education/Scholarship/Create', [App\Http\Controllers\EducationController::class, 'CreateScholarship'])->name('CreateScholarship');
Route::post('/Education/Scholarship/Create', [App\Http\Controllers\EducationController::class, 'StoreScholarship'])->name('CreateScholarship');

// delete
Route::get('/Education/Scholarship/Delete/{data}', [App\Http\Controllers\EducationController::class, 'DeleteScholarship'])->name('DeleteScholarship');


Route::get('/Education/Scholarship/Active', [App\Http\Controllers\EducationController::class, 'ActiveScholarship'])->name('ActiveScholarship');
Route::get('/Education/Scholarship/Closed', [App\Http\Controllers\EducationController::class, 'ClosedScholarship'])->name('ClosedScholarship');



//create CreateScholarshipModule
Route::post('/Education/Scholarship/CreateScholarshipModule', [App\Http\Controllers\EducationController::class, 'CreateScholarshipModule'])->name('CreateScholarshipModule');


Route::get('/Education/Applicant', [App\Http\Controllers\EducationController::class, 'AllApplicant'])->name('AllApplicantEducation');
Route::get('/Education/Applicant/Approved', [App\Http\Controllers\EducationController::class, 'ApprovedApplicants'])->name('ApprovedApplicantsEducation');
Route::get('/Education/Applicant/Rejected', [App\Http\Controllers\EducationController::class, 'RejectedApplicants'])->name('RejectedApplicantsEducation');
Route::get('/Education/Applicant/Pending', [App\Http\Controllers\EducationController::class, 'PendingApplicants'])->name('PendingApplicantsEducation');

// status list and change status
Route::get('/Education/Applicant/Status/{data}', [App\Http\Controllers\EducationController::class, 'Status'])->name('StatusApplicantEducation');

Route::get('/Education/Applicant/Approve/{data}', [App\Http\Controllers\EducationController::class, 'Approve'])->name('ApproveApplicantEducation');

Route::get('/Education/Applicant/Reject/{data}', [App\Http\Controllers\EducationController::class, 'Reject'])->name('RejectApplicantEducation');

Route::get('/Education/Applicant/ReInitiate/{data}', [App\Http\Controllers\EducationController::class, 'ReInitiate'])->name('ReInitiateApplicantEducation');





// create Application
Route::get('/Education/Application/Create', [App\Http\Controllers\EducationController::class, 'CreateApplication'])->name('CreateApplicationEducation');
Route::post('/Education/Application/Create', [App\Http\Controllers\EducationController::class, 'StoreApplication'])->name('CreateApplicationEducation');

// success applicant
Route::get('/Education/Application/Success', [App\Http\Controllers\EducationController::class, 'SuccessApplication'])->name('SuccessApplicationEducation');

































































// Qamar Care Card
Route::get('/QamarCareCard', [App\Http\Controllers\QamarCareCardController::class, 'Index'])->name('IndexQamarCareCard');
Route::get('/QamarCareCard/IndexCardCard', [App\Http\Controllers\QamarCareCardController::class, 'IndexCareCard'])->name('IndexCareCardQamarCareCard');



// Create
Route::get('/QamarCareCard/Create', [App\Http\Controllers\QamarCareCardController::class, 'Create'])->name('CreateQamarCareCard');
Route::post('/QamarCareCard/Create', [App\Http\Controllers\QamarCareCardController::class, 'Store'])->name('CreateQamarCareCard');

// update
Route::get('/QamarCareCard/Edit/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Edit'])->name('EditQamarCareCard');
Route::put('/QamarCareCard/Edit/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Update'])->name('UpdateQamarCareCard');

// delete
Route::get('/QamarCareCard/Delete/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Delete'])->name('DeleteQamarCareCard');


// qamar care list
Route::get('/QamarCareCard/All', [App\Http\Controllers\QamarCareCardController::class, 'All'])->name('AllQamarCareCard');
// Route::get('/QamarCareCard/AllAjax', [App\Http\Controllers\QamarCareCardController::class, 'AllAjax'])->name('AllAjax');

Route::get('/QamarCareCard/Approved', [App\Http\Controllers\QamarCareCardController::class, 'Approved'])->name('ApprovedQamarCareCard');
Route::get('/QamarCareCard/Rejected', [App\Http\Controllers\QamarCareCardController::class, 'Rejected'])->name('RejectedQamarCareCard');
Route::get('/QamarCareCard/Printed', [App\Http\Controllers\QamarCareCardController::class, 'Printed'])->name('PrintedQamarCareCard');
Route::get('/QamarCareCard/Pending', [App\Http\Controllers\QamarCareCardController::class, 'Pending'])->name('PendingQamarCareCard');
Route::get('/QamarCareCard/Released', [App\Http\Controllers\QamarCareCardController::class, 'Released'])->name('ReleasedQamarCareCard');





// status list and change status
Route::get('/QamarCareCard/Status/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Status'])->name('StatusQamarCareCard');

Route::get('/QamarCareCard/Approve/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Approve'])->name('ApproveQamarCareCard');

Route::get('/QamarCareCard/Reject/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Reject'])->name('RejectQamarCareCard');

Route::get('/QamarCareCard/ReInitiate/{data}', [App\Http\Controllers\QamarCareCardController::class, 'ReInitiate'])->name('ReInitiateQamarCareCard');


Route::get('/QamarCareCard/Release/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Release'])->name('ReleaseQamarCareCard');



// print
Route::get('/QamarCareCard/Printing/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Printing'])->name('PrintingQamarCareCard');

Route::get('/QamarCareCard/Print/{data}', [App\Http\Controllers\QamarCareCardController::class, 'Print'])->name('PrintQamarCareCard');


// assign to servies
Route::get('/QamarCareCard/AssignToService/{data}', [App\Http\Controllers\QamarCareCardController::class, 'AssignToService'])->name('AssignToServiceQamarCareCard');


// list
Route::get('/QamarCareCard/AssigningService', [App\Http\Controllers\QamarCareCardController::class, 'AssigningService'])->name('AssigningServiceQamarCareCard');
Route::get('/QamarCareCard/AssignedServices', [App\Http\Controllers\QamarCareCardController::class, 'AssignedServices'])->name('AssignedServicesQamarCareCard');


Route::get('/QamarCareCard/RecievedServices', [App\Http\Controllers\QamarCareCardController::class, 'RecievedServices'])->name('RecievedServicesQamarCareCard');
Route::get('/QamarCareCard/RejectedServices', [App\Http\Controllers\QamarCareCardController::class, 'RejectedServices'])->name('RejectedServicesQamarCareCard');



// update
Route::get('/QamarCareCard/ServiceEdit/{data}', [App\Http\Controllers\QamarCareCardController::class, 'ServiceEdit'])->name('ServiceEditQamarCareCard');
Route::put('/QamarCareCard/ServiceEdit/{data}', [App\Http\Controllers\QamarCareCardController::class, 'ServiceUpdate'])->name('ServiceUpdateQamarCareCard');

// delete
Route::get('/QamarCareCard/ServiceDelete/{data}', [App\Http\Controllers\QamarCareCardController::class, 'ServiceDeleteDelete'])->name('ServiceDeleteQamarCareCard');

// Serivce Status change
Route::get('/QamarCareCard/ServiceReleased/{data}', [App\Http\Controllers\QamarCareCardController::class, 'ServiceReleased'])->name('ServiceReleasedQamarCareCard');


// Service Provider
Route::get('/QamarCareCard/ServiceProviders', [App\Http\Controllers\QamarCareCardController::class, 'ServiceProviders'])->name('ServiceProvidersQamarCareCard');
Route::get('/QamarCareCard/ServiceProviderIndex', [App\Http\Controllers\QamarCareCardController::class, 'ServiceProviderIndex'])->name('ServiceProviderIndexQamarCareCard');
Route::get('/QamarCareCard/CreateServiceProviderIndividual', [App\Http\Controllers\QamarCareCardController::class, 'CreateServiceProviderIndividual'])->name('CreateServiceProviderIndividual');
Route::get('/QamarCareCard/CreateServiceProviderOrganization', [App\Http\Controllers\QamarCareCardController::class, 'CreateServiceProviderOrganization'])->name('CreateServiceProviderOrganization');


//create
Route::post('/QamarCareCard/CreateServiceProviderIndividual', [App\Http\Controllers\QamarCareCardController::class, 'StoreServiceProviderIndividual'])->name('CreateServiceProviderIndividual');

Route::get('/QamarCareCard/StatusServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController::class, 'StatusServiceProvider'])->name('StatusServiceProviderQamarCareCard');
Route::get('/QamarCareCard/ApproveServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController::class, 'ApproveServiceProvider'])->name('ApproveServiceProviderQamarCareCard');
Route::get('/QamarCareCard/RejectServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController::class, 'RejectServiceProvider'])->name('RejectServiceProviderQamarCareCard');
Route::get('/QamarCareCard/DeleteServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController::class, 'DeleteServiceProvider'])->name('DeleteServiceProviderQamarCareCard');
Route::get('/QamarCareCard/ReInitiateServiceProviderQamarCareCard/{data}', [App\Http\Controllers\QamarCareCardController::class, 'ReInitiateServiceProvider'])->name('ReInitiateServiceProviderQamarCareCard');


// find service provider
//    Route::get('/QamarCareCard/FindServiceProvider/{Province}/{District}/{RequestedService}', [App\Http\Controllers\QamarCareCardController:: class, 'FindServiceProvider'])->name('FindServiceProvider');

Route::post('/QamarCareCard/FindServiceProvider/{data}', [App\Http\Controllers\QamarCareCardController::class, 'FindServiceProvider'])->name('FindServiceProvider');



// create
Route::post('/QamarCareCard/AssignService', [App\Http\Controllers\QamarCareCardController::class, 'AssignService'])->name('AssignServiceQamarCareCard');


// verify qamar card that is avalibe to all
Route::get('/QamarCareCard/Verify', [App\Http\Controllers\QamarCareCardController::class, 'Verify'])->name('VerifyQamarCareCard');
Route::post('/QamarCareCard/Verify', [App\Http\Controllers\QamarCareCardController::class, 'Search'])->name('SearchQamarCareCard');



Route::post('/QamarCareCard/AssignServices', [App\Http\Controllers\QamarCareCardController::class, 'AssignService'])->name('AssignServicesQamarCareCard');
















// OrphansRelief

// index
Route::get('/OrphansRelief', [App\Http\Controllers\OrphansReliefController::class, 'Index'])->name('IndexOrphansRelief');


// Orphan
// Create
Route::get('/OrphansRelief/Orphan/Create', [App\Http\Controllers\OrphansReliefController::class, 'Create'])->name('CreateOrphans');
Route::post('/OrphansRelief/Orphan/Create', [App\Http\Controllers\OrphansReliefController::class, 'Store'])->name('CreateOrphans');

// delete
Route::get('/OrphansRelief/Orphan/Delete/{data}', [App\Http\Controllers\OrphansReliefController::class, 'Delete'])->name('DeleteOrphan');


// qamar care list
Route::get('/OrphansRelief/Orphan/All', [App\Http\Controllers\OrphansReliefController::class, 'All'])->name('AllOrphans');
Route::get('/OrphansRelief/Orphan/AllGrid', [App\Http\Controllers\OrphansReliefController::class, 'AllGrid'])->name('AllGridOrphans');

Route::get('/OrphansRelief/Orphan/OrphanDetail/{data}', [App\Http\Controllers\OrphansReliefController::class, 'OrphanDetail'])->name('OrphanDetailOrphans');

Route::get('/OrphansRelief/Orphan/Pending', [App\Http\Controllers\OrphansReliefController::class, 'Pending'])->name('PendingOrphans');
Route::get('/OrphansRelief/Orphan/Approved', [App\Http\Controllers\OrphansReliefController::class, 'Approved'])->name('ApprovedOrphans');
Route::get('/OrphansRelief/Orphan/Active', [App\Http\Controllers\OrphansReliefController::class, 'Active'])->name('ActiveOrphans');
Route::get('/OrphansRelief/Orphan/InActive', [App\Http\Controllers\OrphansReliefController::class, 'InActive'])->name('InActiveOrphans');
Route::get('/OrphansRelief/Orphan/Rejected', [App\Http\Controllers\OrphansReliefController::class, 'Rejected'])->name('RejectedOrphans');
Route::get('/OrphansRelief/Orphan/Assigned', [App\Http\Controllers\OrphansReliefController::class, 'Assigned'])->name('AssignedOrphans');


// status list and change status
Route::get('/OrphansRelief/Orphan/Status/{data}', [App\Http\Controllers\OrphansReliefController::class, 'Status'])->name('StatusOrphans');

Route::get('/OrphansRelief/Orphan/Approve/{data}', [App\Http\Controllers\OrphansReliefController::class, 'Approve'])->name('ApproveOrphans');

Route::get('/OrphansRelief/Orphan/Reject/{data}', [App\Http\Controllers\OrphansReliefController::class, 'Reject'])->name('RejectOrphans');

Route::get('/OrphansRelief/Orphan/ReInitiate/{data}', [App\Http\Controllers\OrphansReliefController::class, 'ReInitiate'])->name('ReInitiateOrphans');

Route::get('/OrphansRelief/Orphan/AssignToSponsor/{data}', [App\Http\Controllers\OrphansReliefController::class, 'AssignToSponsor'])->name('AssignToSponsorOrphan');
Route::put('/OrphansRelief/Orphan/AssignSponsor/{data}', [App\Http\Controllers\OrphansReliefController::class, 'AssignSponsor'])->name('AssignSponsorOrphan');





Route::get('/OrphansRelief/Orphan/Checkout/', [App\Http\Controllers\OrphansReliefController::class, 'Checkout'])->name('CheckoutOrphans');
Route::get('/OrphansRelief/Orphan/AddToCart/{data}', [App\Http\Controllers\OrphansReliefController::class, 'AddToCart'])->name('AddToCartOrphans');
Route::get('/OrphansRelief/Orphan/RemoveFromCart/{data}', [App\Http\Controllers\OrphansReliefController::class, 'RemoveFromCart'])->name('RemoveFromCartOrphans');
Route::post('/OrphansRelief/Orphan/Payment/', [App\Http\Controllers\OrphansReliefController::class, 'Payment'])->name('PaymentOrphan');


// sponsors
Route::get('/OrphansRelief/Sponsor/All', [App\Http\Controllers\OrphansReliefController::class, 'AllSponsor'])->name('AllSponsor');
Route::get('/OrphansRelief/Payment', [App\Http\Controllers\OrphansReliefController::class, 'AllPayments'])->name('AllPayment');
Route::get('/OrphansRelief/Sponsor/MyOrphans', [App\Http\Controllers\OrphansReliefController::class, 'MyOrphans'])->name('MyOrphansSponsor');
Route::get('/OrphansRelief/Sponsor/MyPyaments', [App\Http\Controllers\OrphansReliefController::class, 'MyPayments'])->name('MyPaymentsSponsor');










//User Management
Route::get('/UserManagement', [App\Http\Controllers\UserManagementController::class, 'Index'])->middleware('IsSuperAdmin')->name('IndexUserManagement');

Route::get('/UserManagement/All', [App\Http\Controllers\UserManagementController::class, 'All'])->middleware('IsSuperAdmin')->name('AllUser');
// Create
Route::get('/UserManagement/Create', [App\Http\Controllers\UserManagementController::class, 'Create'])->name('CreateUser');
Route::post('/UserManagement/Create', [App\Http\Controllers\UserManagementController::class, 'Store'])->name('CreateUser');
// update
Route::get('/UserManagement/Edit/{data}', [App\Http\Controllers\UserManagementController::class, 'Edit'])->name('EditUser');
Route::put('/UserManagement/Edit/{data}', [App\Http\Controllers\UserManagementController::class, 'Update'])->name('UpdateUser');

// delete
Route::get('/UserManagement/Delete/{data}', [App\Http\Controllers\UserManagementController::class, 'Delete'])->name('DeleteUser');



Route::get('/UserManagement/Status/{data}', [App\Http\Controllers\UserManagementController::class, 'Status'])->name('StatusUser');

Route::get('/UserManagement/Activate/{data}', [App\Http\Controllers\UserManagementController::class, 'Activate'])->name('ActivateUser');

Route::get('/UserManagement/DeActivate/{data}', [App\Http\Controllers\UserManagementController::class, 'DeActivate'])->name('DeActivateUser');

Route::get('/UserManagement/Activated', [App\Http\Controllers\UserManagementController::class, 'Activated'])->name('ActivatedUser');

Route::get('/UserManagement/DeActivated', [App\Http\Controllers\UserManagementController::class, 'DeActivated'])->name('DeActivatedUser');
// role
Route::get('/UserManagement/Role/{data}', [App\Http\Controllers\UserManagementController::class, 'Role'])->name('RoleUser');
Route::put('/UserManagement/AssignRole/{data}', [App\Http\Controllers\UserManagementController::class, 'AssignRole'])->name('AssignRoleUser');

Route::put('/UserManagement/ResetPassword/{data}', [App\Http\Controllers\UserManagementController::class, 'ResetPassword'])->name('ResetPasswordUser');
