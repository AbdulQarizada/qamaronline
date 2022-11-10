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


// set cookies for layout
Route::get('/Layout/LayoutSidebar', [App\Http\Controllers\HomeController::class, 'LayoutSidebar'])->name('LayoutSidebar');
Route::get('/Layout/LayoutNoSidebar', [App\Http\Controllers\HomeController::class, 'LayoutNoSidebar'])->name('LayoutNoSidebar');




Route::get('/Projects', [App\Http\Controllers\HomeController::class, 'Projects'])->name('Projects');

Route::get('/BeneficiariesServices', [App\Http\Controllers\HomeController::class, 'BeneficiariesServices'])->name('BeneficiariesServices');

Route::get('/Reports', [App\Http\Controllers\HomeController::class, 'Reports'])->name('Reports');

Route::get('/UserManagement', [App\Http\Controllers\HomeController::class, 'UserManagement'])->name('UserManagement');


// uploads
Route::post('UserManagement/Employees_Profile', [App\Http\Controllers\HomeController::class, 'Employees_Profile'])->name('Employees_Profile');
Route::post('/Employees_Profile', [App\Http\Controllers\HomeController::class, 'Employees_Profile'])->name('Employees_Profile');





// charts
Route::get('/Tribe_Chart', [App\Http\Controllers\HomeController::class, 'Tribe_Chart'])->name('Tribe_Chart');
Route::get('/Montly_Insertion', [App\Http\Controllers\HomeController::class, 'Montly_Insertion'])->name('MontlyInsertion_Chart');
Route::get('/Gender_Chart', [App\Http\Controllers\HomeController::class, 'Gender_Chart'])->name('Gender_Chart');
Route::get('/FamilyStatus_Chart', [App\Http\Controllers\HomeController::class, 'FamilyStatus_Chart'])->name('FamilyStatus_Chart');
Route::get('/AllinOne_Chart', [App\Http\Controllers\HomeController::class, 'AllinOne_Chart'])->name('AllinOne_Chart');
Route::get('/ProvincialData_Chart', [App\Http\Controllers\HomeController::class, 'ProvincialData_Chart'])->name('ProvincialData_Chart');









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

Route::get('/Education', [App\Http\Controllers\Education\EducationController::class, 'Index'])->name('IndexEducation');

Route::get('/Education/Scholarship', [App\Http\Controllers\Education\EducationController::class, 'AllScholarship'])->name('AllScholarshipEducation');

// create scholarship
Route::get('/Education/Scholarship/Create', [App\Http\Controllers\EducationController::class, 'CreateScholarship'])->name('CreateScholarship');
Route::post('/Education/Scholarship/Create', [App\Http\Controllers\EducationController::class, 'StoreScholarship'])->name('CreateScholarship');

// delete
Route::get('/Education/Scholarship/Delete/{data}', [App\Http\Controllers\EducationController::class, 'DeleteScholarship'])->name('DeleteScholarship');


Route::get('/Education/Scholarship/Active', [App\Http\Controllers\EducationController::class, 'ActiveScholarship'])->name('ActiveScholarship');
Route::get('/Education/Scholarship/Closed', [App\Http\Controllers\EducationController::class, 'ClosedScholarship'])->name('ClosedScholarship');



//create CreateScholarshipModule
Route::post('/Education/Scholarship/CreateScholarshipModule', [App\Http\Controllers\Education\EducationController::class, 'CreateScholarshipModule'])->name('CreateScholarshipModule');


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





















// Care Card
//=======================================================================================================================================
// Index
Route::get('/CareCard', [App\Http\Controllers\CareCard\HomeController::class, 'Index'])->name('IndexCareCard');

// Operation
// Index
Route::get('/CareCard/Operations', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Index'])->name('IndexCareCardOperations');
// List
Route::get('/CareCard/Operations/All', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'All'])->name('AllCareCard');
Route::get('/CareCard/Operations/Pending', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Pending'])->name('PendingCareCard');
Route::get('/CareCard/Operations/Approved', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Approved'])->name('ApprovedCareCard');
Route::get('/CareCard/Operations/Printed', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Printed'])->name('PrintedCareCard');
Route::get('/CareCard/Operations/Released', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Released'])->name('ReleasedCareCard');
Route::get('/CareCard/Operations/Rejected', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Rejected'])->name('RejectedCareCard');
// Change Status
Route::get('/CareCard/Operations/Status/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Status'])->name('StatusCareCard');
Route::get('/CareCard/Operations/Approve/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Approve'])->name('ApproveCareCard');
Route::get('/CareCard/Operations/Print/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Print'])->name('PrintCareCard');
Route::get('/CareCard/Operations/Release/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Release'])->name('ReleaseCareCard');
Route::get('/CareCard/Operations/Reject/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Reject'])->name('RejectCareCard');
Route::get('/CareCard/Operations/ReInitiate/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'ReInitiate'])->name('ReInitiateCareCard');
// Create
Route::get('/CareCard/Operations/Create', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Create'])->name('CreateCareCard');
Route::post('/CareCard/Operations/Create', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Store'])->name('CreateCareCard');
// Update
Route::get('/CareCard/Operations/Edit/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Edit'])->name('EditCareCard');
Route::put('/CareCard/Operations/Edit/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Update'])->name('UpdateCareCard');
// Delete
Route::get('/CareCard/Operations/Delete/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Delete'])->name('DeleteCareCard');
// Print
Route::get('/CareCard/Operations/Printing/{data}', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Printing'])->name('PrintingCareCard');
// Verify Card
Route::get('/CareCard/Operations/Verify', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Verify'])->name('VerifyCareCard');
Route::post('/CareCard/Operations/Verify', [App\Http\Controllers\CareCard\Operations\OperationsController::class, 'Search'])->name('SearchCareCard');
// FileUploads
Route::post('/CareCard/Operations/Beneficiaries_Tazkira', [App\Http\Controllers\CareCard\HomeController::class, 'Beneficiaries_Tazkira'])->name('Beneficiaries_Tazkira');
Route::post('/CareCard/Operations/Beneficiaries_Profile', [App\Http\Controllers\CareCard\HomeController::class, 'Beneficiaries_Profile'])->name('Beneficiaries_Profile');

// Services
//Index
Route::get('/CareCard/Services', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'Index'])->name('IndexCareCardServices');

// Food Packs
//Index
Route::get('/CareCard/Services/FoodPacks/Index', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'IndexFoodPack'])->name('IndexFoodPack');
// List
Route::get('/CareCard/Services/FoodPacks/All', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'All'])->name('AllFoodPack');
// Create
Route::get('/CareCard/Services/FoodPacks/Create', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'Create'])->name('CreateFoodPack');
Route::post('/CareCard/Services/FoodPacks/Create', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'Store'])->name('CreateFoodPack');
// update
Route::get('/CareCard/Services/FoodPacks/Edit/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'Edit'])->name('EditFoodPack');
Route::put('/CareCard/Services/FoodPacks/Update/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'Update'])->name('UpdateFoodPack');
// delete
Route::get('/CareCard/Services/FoodPacks/Delete/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'Delete'])->name('DeleteFoodPack');



// Assign To Food Pack
Route::post('/CareCard/Services/FoodPacks/EligibleBeneficiaries', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AssignToFoodPack'])->name('AssignToFoodPack');
Route::get('/CareCard/Services/FoodPacks/EligibleBeneficiaries', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'EligibleBeneficiariesFoodPack'])->name('EligibleBeneficiariesFoodPack');
Route::get('/CareCard/Services/FoodPacks/AssignedBeneficiaries', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AssignedBeneficiariesFoodPack'])->name('AssignedBeneficiariesFoodPack');
Route::post('/CareCard/Services/FoodPacks/SearchEligibleBeneficieries', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'SearchEligibleBeneficieries'])->name('SearchEligibleBeneficieriesFoodPack');
Route::get('/CareCard/Services/FoodPacks/SearchAssignedBeneficiariesFoodPack/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'SearchAssignedBeneficiariesFoodPack'])->name('SearchAssignedBeneficiariesFoodPack');

// Food Pack List
// List
Route::get('/CareCard/Services/FoodPacks/AllList', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllList'])->name('AllListFoodPack');
Route::get('/CareCard/Services/FoodPacks/AllCreate', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllCreate'])->name('AllCreateFoodPack');
Route::post('/CareCard/Services/FoodPacks/AllCreate', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllStore'])->name('AllCreateFoodPack');
Route::get('/CareCard/Services/FoodPacks/SearchAllList/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'SearchAllList'])->name('SearchAllList');


// Service Provider
Route::get('/CareCard/Services/ServiceProviders/', [App\Http\Controllers\CareCard\ServicesController::class, 'ServiceProviderIndex'])->name('ServiceProviderIndexQamarCareCard');
// Individual
Route::get('/CareCard/Services/ServiceProviders/Individual/All', [App\Http\Controllers\CareCard\Services\Providers\IndividualController::class, 'All'])->name('IndividualServiceProviders');
// Create
Route::get('/CareCard/Services/ServiceProviders/Individual/Create', [App\Http\Controllers\CareCard\Services\Providers\IndividualController::class, 'Create'])->name('CreateIndividualServiceProviders');
Route::post('/CareCard/Services/ServiceProviders/Individual/Create', [App\Http\Controllers\CareCard\Services\Providers\IndividualController::class, 'Store'])->name('CreateIndividualServiceProviders');
// FileUploads
Route::post('/IndividualServiceProvider_Profile', [App\FileUpload\ServiceProvider::class, 'Individual_Profile'])->name('IndividualServiceProvider_Profile');
Route::post('/IndividualServiceProvider_Tazkira', [App\FileUpload\ServiceProvider::class, 'Individual_Tazkira'])->name('IndividualServiceProvider_Tazkira');
// Change Status
Route::get('/CareCard/Services/ServiceProviders/Individual/Status/{data}', [App\Http\Controllers\CareCard\Services\Providers\IndividualController::class, 'Status'])->name('StatusIndividualServiceProviders');
Route::get('/CareCard/Services/ServiceProviders/Individual/Approve/{data}', [App\Http\Controllers\CareCard\Services\Providers\IndividualController::class, 'Approve'])->name('ApproveIndividualServiceProviders');
Route::get('/CareCard/Services/ServiceProviders/Individual/Reject/{data}', [App\Http\Controllers\CareCard\Services\Providers\IndividualController::class, 'Reject'])->name('RejectIndividualServiceProviders');
Route::get('/CareCard/Services/ServiceProviders/Individual/Delete/{data}', [App\Http\Controllers\CareCard\Services\Providers\IndividualController::class, 'Delete'])->name('DeleteIndividualServiceProviders');
Route::get('/CareCard/Services/ServiceProviders/Individual/ReInitiate/{data}', [App\Http\Controllers\CareCard\Services\Providers\IndividualController::class, 'ReInitiate'])->name('ReInitiateIndividualServiceProviders');

// Organization
Route::get('/CareCard/Services/ServiceProviders/Organization/All', [App\Http\Controllers\CareCard\Services\Providers\OrganizationController::class, 'All'])->name('OrganizationServiceProviders');
// Create
Route::get('/CareCard/Services/ServiceProviders/Organization/Create', [App\Http\Controllers\CareCard\Services\Providers\OrganizationController::class, 'Create'])->name('CreateOrganizationServiceProviders');
Route::post('/CareCard/Services/ServiceProviders/Organization/Create', [App\Http\Controllers\CareCard\Services\Providers\OrganizationController::class, 'Store'])->name('CreateOrganizationServiceProviders');
// FileUploads
Route::post('/OrganizationServiceProvider_Profile', [App\FileUpload\ServiceProvider::class, 'Individual_Profile'])->name('IndividualServiceProvider_Profile');
Route::post('/OrganizationServiceProvider_Tazkira', [App\FileUpload\ServiceProvider::class, 'Individual_Tazkira'])->name('IndividualServiceProvider_Tazkira');
// Change Status
Route::get('/CareCard/Services/ServiceProviders/Organization/Status/{data}', [App\Http\Controllers\CareCard\Services\Providers\OrganizationController::class, 'Status'])->name('StatusOrganizationServiceProviders');
Route::get('/CareCard/Services/ServiceProviders/Organization/Approve/{data}', [App\Http\Controllers\CareCard\Services\Providers\OrganizationController::class, 'Approve'])->name('ApproveOrganizationServiceProviders');
Route::get('/CareCard/Services/ServiceProviders/Organization/Reject/{data}', [App\Http\Controllers\CareCard\Services\Providers\OrganizationController::class, 'Reject'])->name('RejectOrganizationServiceProviders');
Route::get('/CareCard/Services/ServiceProviders/Organization/Delete/{data}', [App\Http\Controllers\CareCard\Services\Providers\OrganizationController::class, 'Delete'])->name('DeleteOrganizationServiceProviders');
Route::get('/CareCard/Services/ServiceProviders/Organization/ReInitiate/{data}', [App\Http\Controllers\CareCard\Services\Providers\OrganizationController::class, 'ReInitiate'])->name('ReInitiateOrganizationServiceProviders');







Route::get('/CareCard/Services/ServiceProviders/Organization/EligibleBeneficiaries', [App\Http\Controllers\CareCard\ServicesController::class, 'CreateServiceProviderOrganization'])->name('CreateServiceProviderOrganization');




// assign to servies
Route::get('/CareCard/AssignToService/{data}', [App\Http\Controllers\CareCard\ServicesController::class, 'AssignToService'])->name('AssignToServiceQamarCareCard');

// list
Route::get('/CareCard/AssigningService', [App\Http\Controllers\CareCard\ServicesController::class, 'AssigningService'])->name('AssigningServiceQamarCareCard');
Route::get('/CareCard/AssignedServices', [App\Http\Controllers\CareCard\ServicesController::class, 'AssignedServices'])->name('AssignedServicesQamarCareCard');


Route::get('/CareCard/RecievedServices', [App\Http\Controllers\CareCard\ServicesController::class, 'RecievedServices'])->name('RecievedServicesQamarCareCard');
Route::get('/CareCard/RejectedServices', [App\Http\Controllers\CareCard\ServicesController::class, 'RejectedServices'])->name('RejectedServicesQamarCareCard');



// update
Route::get('/QamarCareCard/ServiceEdit/{data}', [App\Http\Controllers\CareCard\ServicesController::class, 'ServiceEdit'])->name('ServiceEditQamarCareCard');
Route::put('/QamarCareCard/ServiceEdit/{data}', [App\Http\Controllers\CareCard\ServicesController::class, 'ServiceUpdate'])->name('ServiceUpdateQamarCareCard');

// delete
Route::get('/QamarCareCard/ServiceDelete/{data}', [App\Http\Controllers\CareCard\ServicesController::class, 'ServiceDeleteDelete'])->name('ServiceDeleteQamarCareCard');

// Serivce Status change
Route::get('/QamarCareCard/ServiceReleased/{data}', [App\Http\Controllers\CareCard\ServicesController::class, 'ServiceReleased'])->name('ServiceReleasedQamarCareCard');


// Service Provider

// qamar care list
Route::get('/CareCard/FoodPack', [App\Http\Controllers\CareCard\ServicesController::class, 'FoodPack'])->name('FoodPackQamarCareCard');
//create



// find service provider
//    Route::get('/QamarCareCard/FindServiceProvider/{Province}/{District}/{RequestedService}', [App\Http\Controllers\QamarCareCardController:: class, 'FindServiceProvider'])->name('FindServiceProvider');

Route::post('/QamarCareCard/FindServiceProvider/{data}', [App\Http\Controllers\CareCard\ServicesController::class, 'FindServiceProvider'])->name('FindServiceProvider');



// create
Route::post('/QamarCareCard/AssignService', [App\Http\Controllers\CareCard\ServicesController::class, 'AssignService'])->name('AssignServiceQamarCareCard');






Route::post('/QamarCareCard/AssignServices', [App\Http\Controllers\CareCard\CareCardController::class, 'AssignService'])->name('AssignServicesQamarCareCard');

//=======================================================================================================================================













// OrphansRelief

// index
Route::get('/OrphansRelief', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Index'])->name('IndexOrphansRelief');


// Orphan
// Create
Route::get('/OrphansRelief/Orphan/Create', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Create'])->name('CreateOrphans');
Route::post('/OrphansRelief/Orphan/Create', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Store'])->name('CreateOrphans');

// delete
Route::get('/OrphansRelief/Orphan/Delete/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Delete'])->name('DeleteOrphan');


// qamar care list
Route::get('/OrphansRelief/Orphan/All', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'All'])->name('AllOrphans');
Route::get('/OrphansRelief/Orphan/AllGrid', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'AllGrid'])->name('AllGridOrphans');

Route::get('/OrphansRelief/Orphan/OrphanDetail/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'OrphanDetail'])->name('OrphanDetailOrphans');

Route::get('/OrphansRelief/Orphan/Pending', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Pending'])->name('PendingOrphans');
Route::get('/OrphansRelief/Orphan/Approved', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Approved'])->name('ApprovedOrphans');
Route::get('/OrphansRelief/Orphan/Active', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Active'])->name('ActiveOrphans');
Route::get('/OrphansRelief/Orphan/InActive', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'InActive'])->name('InActiveOrphans');
Route::get('/OrphansRelief/Orphan/Rejected', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Rejected'])->name('RejectedOrphans');
Route::get('/OrphansRelief/Orphan/Assigned', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Assigned'])->name('AssignedOrphans');


// status list and change status
Route::get('/OrphansRelief/Orphan/Status/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Status'])->name('StatusOrphans');

Route::get('/OrphansRelief/Orphan/Approve/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Approve'])->name('ApproveOrphans');

Route::get('/OrphansRelief/Orphan/Reject/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Reject'])->name('RejectOrphans');

Route::get('/OrphansRelief/Orphan/ReInitiate/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'ReInitiate'])->name('ReInitiateOrphans');

Route::get('/OrphansRelief/Orphan/AssignToSponsor/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'AssignToSponsor'])->name('AssignToSponsorOrphan');
Route::put('/OrphansRelief/Orphan/AssignSponsor/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'AssignSponsor'])->name('AssignSponsorOrphan');





Route::get('/OrphansRelief/Orphan/Checkout/', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Checkout'])->name('CheckoutOrphans');
Route::get('/OrphansRelief/Orphan/AddToCart/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'AddToCart'])->name('AddToCartOrphans');
Route::get('/OrphansRelief/Orphan/RemoveFromCart/{data}', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'RemoveFromCart'])->name('RemoveFromCartOrphans');
Route::post('/OrphansRelief/Orphan/Payment/', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'Payment'])->name('PaymentOrphan');


// sponsors
Route::get('/OrphansRelief/Sponsor/All', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'AllSponsor'])->name('AllSponsor');
Route::get('/OrphansRelief/Payment', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'AllPayments'])->name('AllPayment');
Route::get('/OrphansRelief/Sponsor/MyOrphans', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'MyOrphans'])->name('MyOrphansSponsor');
Route::get('/OrphansRelief/Sponsor/MyPyaments', [App\Http\Controllers\OrphanRelief\OrphansReliefController::class, 'MyPayments'])->name('MyPaymentsSponsor');










//User Management
Route::get('/UserManagement', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Index'])->middleware('IsSuperAdmin')->name('IndexUserManagement');

Route::get('/UserManagement/All', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'All'])->middleware('IsSuperAdmin')->name('AllUser');
// Create
Route::get('/UserManagement/Create', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Create'])->name('CreateUser');
Route::post('/UserManagement/Create', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Store'])->name('CreateUser');
// update
Route::get('/UserManagement/Edit/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Edit'])->name('EditUser');
Route::put('/UserManagement/Edit/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Update'])->name('UpdateUser');

// delete
Route::get('/UserManagement/Delete/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Delete'])->name('DeleteUser');



Route::get('/UserManagement/Status/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Status'])->name('StatusUser');

Route::get('/UserManagement/Activate/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Activate'])->name('ActivateUser');

Route::get('/UserManagement/DeActivate/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'DeActivate'])->name('DeActivateUser');

Route::get('/UserManagement/Activated', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Activated'])->name('ActivatedUser');

Route::get('/UserManagement/DeActivated', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'DeActivated'])->name('DeActivatedUser');
// role
Route::get('/UserManagement/Role/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'Role'])->name('RoleUser');
Route::put('/UserManagement/AssignRole/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'AssignRole'])->name('AssignRoleUser');

Route::put('/UserManagement/ResetPassword/{data}', [App\Http\Controllers\SystemManagement\UserManagement\UserController::class, 'ResetPassword'])->name('ResetPasswordUser');
