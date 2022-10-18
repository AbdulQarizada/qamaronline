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





















// Care Card
//=======================================================================================================================================
// Index
Route::get('/CareCard', [App\Http\Controllers\CareCard\HomeController::class, 'Index'])->name('IndexCareCard');

// Operation
// Index
Route::get('/CareCard/Operations', [App\Http\Controllers\CareCard\OperationsController::class, 'Index'])->name('IndexCareCardOperations');
// List
Route::get('/CareCard/Operations/All', [App\Http\Controllers\CareCard\OperationsController::class, 'All'])->name('AllCareCard');
Route::get('/CareCard/Operations/Pending', [App\Http\Controllers\CareCard\OperationsController::class, 'Pending'])->name('PendingCareCard');
Route::get('/CareCard/Operations/Approved', [App\Http\Controllers\CareCard\OperationsController::class, 'Approved'])->name('ApprovedCareCard');
Route::get('/CareCard/Operations/Printed', [App\Http\Controllers\CareCard\OperationsController::class, 'Printed'])->name('PrintedCareCard');
Route::get('/CareCard/Operations/Released', [App\Http\Controllers\CareCard\OperationsController::class, 'Released'])->name('ReleasedCareCard');
Route::get('/CareCard/Operations/Rejected', [App\Http\Controllers\CareCard\OperationsController::class, 'Rejected'])->name('RejectedCareCard');
// Change Status
Route::get('/CareCard/Operations/Status/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Status'])->name('StatusCareCard');
Route::get('/CareCard/Operations/Approve/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Approve'])->name('ApproveCareCard');
Route::get('/CareCard/Operations/Print/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Print'])->name('PrintCareCard');
Route::get('/CareCard/Operations/Release/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Release'])->name('ReleaseCareCard');
Route::get('/CareCard/Operations/Reject/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Reject'])->name('RejectCareCard');
Route::get('/CareCard/Operations/ReInitiate/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'ReInitiate'])->name('ReInitiateCareCard');
// Create
Route::get('/CareCard/Operations/Create', [App\Http\Controllers\CareCard\OperationsController::class, 'Create'])->name('CreateCareCard');
Route::post('/CareCard/Operations/Create', [App\Http\Controllers\CareCard\OperationsController::class, 'Store'])->name('CreateCareCard');
// Update
Route::get('/CareCard/Operations/Edit/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Edit'])->name('EditCareCard');
Route::put('/CareCard/Operations/Edit/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Update'])->name('UpdateCareCard');
// Delete
Route::get('/CareCard/Operations/Delete/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Delete'])->name('DeleteCareCard');
// Print
Route::get('/CareCard/Operations/Printing/{data}', [App\Http\Controllers\CareCard\OperationsController::class, 'Printing'])->name('PrintingCareCard');
// Verify Card
Route::get('/CareCard/Operations/Verify', [App\Http\Controllers\CareCard\OperationsController::class, 'Verify'])->name('VerifyCareCard');
Route::post('/CareCard/Operations/Verify', [App\Http\Controllers\CareCard\OperationsController::class, 'Search'])->name('SearchCareCard');
// FileUploads
Route::post('/CareCard/Operations/Beneficiaries_Tazkira', [App\Http\Controllers\CareCard\HomeController::class, 'Beneficiaries_Tazkira'])->name('Beneficiaries_Tazkira');
Route::post('/CareCard/Operations/Beneficiaries_Profile', [App\Http\Controllers\CareCard\HomeController::class, 'Beneficiaries_Profile'])->name('Beneficiaries_Profile');

// Services
//Index
Route::get('/CareCard/Services', [App\Http\Controllers\CareCard\HomeController::class, 'IndexCareCardServices'])->name('IndexCareCardServices');
// assign to servies
Route::get('/CareCard/AssignToService/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'AssignToService'])->name('AssignToServiceQamarCareCard');

// list
Route::get('/CareCard/AssigningService', [App\Http\Controllers\CareCard\CareCardController::class, 'AssigningService'])->name('AssigningServiceQamarCareCard');
Route::get('/CareCard/AssignedServices', [App\Http\Controllers\CareCard\CareCardController::class, 'AssignedServices'])->name('AssignedServicesQamarCareCard');


Route::get('/CareCard/RecievedServices', [App\Http\Controllers\CareCard\CareCardController::class, 'RecievedServices'])->name('RecievedServicesQamarCareCard');
Route::get('/CareCard/RejectedServices', [App\Http\Controllers\CareCard\CareCardController::class, 'RejectedServices'])->name('RejectedServicesQamarCareCard');



// update
Route::get('/QamarCareCard/ServiceEdit/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'ServiceEdit'])->name('ServiceEditQamarCareCard');
Route::put('/QamarCareCard/ServiceEdit/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'ServiceUpdate'])->name('ServiceUpdateQamarCareCard');

// delete
Route::get('/QamarCareCard/ServiceDelete/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'ServiceDeleteDelete'])->name('ServiceDeleteQamarCareCard');

// Serivce Status change
Route::get('/QamarCareCard/ServiceReleased/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'ServiceReleased'])->name('ServiceReleasedQamarCareCard');


// Service Provider
Route::get('/QamarCareCard/ServiceProviders', [App\Http\Controllers\CareCard\CareCardController::class, 'ServiceProviders'])->name('ServiceProvidersQamarCareCard');
Route::get('/QamarCareCard/ServiceProviderIndex', [App\Http\Controllers\CareCard\CareCardController::class, 'ServiceProviderIndex'])->name('ServiceProviderIndexQamarCareCard');
Route::get('/QamarCareCard/CreateServiceProviderIndividual', [App\Http\Controllers\CareCard\CareCardController::class, 'CreateServiceProviderIndividual'])->name('CreateServiceProviderIndividual');
Route::get('/QamarCareCard/CreateServiceProviderOrganization', [App\Http\Controllers\CareCard\CareCardController::class, 'CreateServiceProviderOrganization'])->name('CreateServiceProviderOrganization');

// qamar care list
Route::get('/CareCard/FoodPack', [App\Http\Controllers\CareCard\OperationsController::class, 'FoodPack'])->name('FoodPackQamarCareCard');
//create
Route::post('/QamarCareCard/CreateServiceProviderIndividual', [App\Http\Controllers\CareCard\CareCardController::class, 'StoreServiceProviderIndividual'])->name('CreateServiceProviderIndividual');

Route::get('/QamarCareCard/StatusServiceProviderQamarCareCard/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'StatusServiceProvider'])->name('StatusServiceProviderQamarCareCard');
Route::get('/QamarCareCard/ApproveServiceProviderQamarCareCard/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'ApproveServiceProvider'])->name('ApproveServiceProviderQamarCareCard');
Route::get('/QamarCareCard/RejectServiceProviderQamarCareCard/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'RejectServiceProvider'])->name('RejectServiceProviderQamarCareCard');
Route::get('/QamarCareCard/DeleteServiceProviderQamarCareCard/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'DeleteServiceProvider'])->name('DeleteServiceProviderQamarCareCard');
Route::get('/QamarCareCard/ReInitiateServiceProviderQamarCareCard/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'ReInitiateServiceProvider'])->name('ReInitiateServiceProviderQamarCareCard');


// find service provider
//    Route::get('/QamarCareCard/FindServiceProvider/{Province}/{District}/{RequestedService}', [App\Http\Controllers\QamarCareCardController:: class, 'FindServiceProvider'])->name('FindServiceProvider');

Route::post('/QamarCareCard/FindServiceProvider/{data}', [App\Http\Controllers\CareCard\CareCardController::class, 'FindServiceProvider'])->name('FindServiceProvider');



// create
Route::post('/QamarCareCard/AssignService', [App\Http\Controllers\CareCard\CareCardController::class, 'AssignService'])->name('AssignServiceQamarCareCard');






Route::post('/QamarCareCard/AssignServices', [App\Http\Controllers\CareCard\CareCardController::class, 'AssignService'])->name('AssignServicesQamarCareCard');
// FileUploads
Route::post('/ServiceProvider_Profile', [App\Http\Controllers\HomeController::class, 'ServiceProvider_Profile'])->name('ServiceProvider_Profile');

//=======================================================================================================================================













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
