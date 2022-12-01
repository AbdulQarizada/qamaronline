<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Care Card Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();
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
// Staff Beneficiaries
Route::get('/CareCard/Services/FoodPacks/AllList', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllList'])->name('AllListFoodPack');
Route::get('/CareCard/Services/FoodPacks/AllCreate', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllCreate'])->name('AllCreateFoodPack');
Route::post('/CareCard/Services/FoodPacks/AllCreate', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllStore'])->name('AllCreateFoodPack');
Route::get('/CareCard/Services/FoodPacks/SearchAllList/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'SearchAllList'])->name('SearchAllList');
Route::get('/CareCard/Services/FoodPacks/AllApprove/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllApprove'])->name('AlllistApprove');
Route::get('/CareCard/Services/FoodPacks/AllReject/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllReject'])->name('AlllistReject');
Route::get('/CareCard/Services/FoodPacks/AllReInitiate/{data}', [App\Http\Controllers\CareCard\Services\FoodPacksController::class, 'AllReInitiate'])->name('AlllistReInitiate');

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


Route::get('/Tribe_Chart', [App\Http\Controllers\HomeController::class, 'Tribe_Chart'])->name('Tribe_Chart');
Route::get('/Montly_Insertion', [App\Http\Controllers\HomeController::class, 'Montly_Insertion'])->name('MontlyInsertion_Chart');
Route::get('/Gender_Chart', [App\Http\Controllers\HomeController::class, 'Gender_Chart'])->name('Gender_Chart');
Route::get('/FamilyStatus_Chart', [App\Http\Controllers\HomeController::class, 'FamilyStatus_Chart'])->name('FamilyStatus_Chart');
Route::get('/AllinOne_Chart', [App\Http\Controllers\HomeController::class, 'AllinOne_Chart'])->name('AllinOne_Chart');
Route::get('/ProvincialData_Chart', [App\Http\Controllers\HomeController::class, 'ProvincialData_Chart'])->name('ProvincialData_Chart');
