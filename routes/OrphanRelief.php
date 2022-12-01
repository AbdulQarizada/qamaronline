<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Orphan Relief Routes
|--------------------------------------------------------------------------
 */

Auth::routes();

// OrphansRelief
// index
Route::get('/OrphansRelief', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Index'])->name('IndexOrphansRelief');
// Orphan
// Orphan list
Route::get('/OrphansRelief/Orphan/All', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'All'])->name('AllOrphans');
Route::get('/OrphansRelief/Orphan/AllGrid', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'AllGrid'])->name('AllGridOrphans');
Route::get('/OrphansRelief/Orphan/MyOrphans', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'MyOrphans'])->name('MyOrphans');
// status list
Route::get('/OrphansRelief/Orphan/Pending', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Pending'])->name('PendingOrphans');
Route::get('/OrphansRelief/Orphan/Approved', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Approved'])->name('ApprovedOrphans');
Route::get('/OrphansRelief/Orphan/Rejected', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Rejected'])->name('RejectedOrphans');
Route::get('/OrphansRelief/Orphan/Waiting', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Waiting'])->name('WaitingOrphans');
Route::get('/OrphansRelief/Orphan/Sponsored', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Sponsored'])->name('SponsoredOrphans');
// Create
Route::get('/OrphansRelief/Orphan/Create', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Create'])->name('CreateOrphans');
Route::post('/OrphansRelief/Orphan/Create', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Store'])->name('CreateOrphans');
// Update
Route::get('/OrphansRelief/Orphan/Edit/{data}', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Edit'])->name('EditOrphan');
Route::put('/OrphansRelief/Orphan/Edit/{data}', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Update'])->name('UpdateOrphan');
// delete
Route::get('/OrphansRelief/Orphan/Delete/{data}', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Delete'])->name('DeleteOrphan');
// change status
Route::get('/OrphansRelief/Orphan/Status/{data}', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Status'])->name('StatusOrphans');
Route::get('/OrphansRelief/Orphan/OrphanDetail/{data}', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'OrphanDetail'])->name('OrphanDetailOrphans');
Route::get('/OrphansRelief/Orphan/Approve/{data}', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Approve'])->name('ApproveOrphans');
Route::get('/OrphansRelief/Orphan/Reject/{data}', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Reject'])->name('RejectOrphans');
Route::get('/OrphansRelief/Orphan/ReInitiate/{data}', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'ReInitiate'])->name('ReInitiateOrphans');
// Search Orphans
Route::post('/OrphansRelief/Orphan/Search', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'Search'])->name('SearchOrphans');
// Export to excel Orphans
Route::post('/OrphansRelief/Orphan/Export', [App\Http\Controllers\OrphanRelief\Orphans\OrphansController::class, 'export'])->name('ExportOrphans');
// sponsors
// sponsors list
Route::get('/OrphansRelief/Sponsor/All', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'All'])->name('AllSponsor');
Route::get('/OrphansRelief/Sponsor/Active', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'Active'])->name('ActiveSponsor');
Route::get('/OrphansRelief/Sponsor/InActive', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'InActive'])->name('InActiveSponsor');
// Create
Route::get('/OrphansRelief/Sponsor/Create', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'Create'])->name('CreateSponsor');
Route::post('/OrphansRelief/Sponsor/Create', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'Store'])->name('CreateSponsor');
// Update
Route::get('/OrphansRelief/Sponsor/Edit/{data}', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'Edit'])->name('EditSponsor');
Route::put('/OrphansRelief/Sponsor/Edit/{data}', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'Update'])->name('UpdateSponsor');
// delete
Route::get('/OrphansRelief/Sponsor/Delete/{data}', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'Delete'])->name('DeleteSponsor');
// change status
Route::get('/OrphansRelief/Sponsor/Status/{data}', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'Status'])->name('StatusSponsor');
Route::get('/OrphansRelief/Sponsor/Activate/{data}', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'Activate'])->name('ActivateSponsor');
Route::get('/OrphansRelief/Sponsor/DeActivate/{data}', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'DeActivate'])->name('DeActivateSponsor');
Route::put('/OrphansRelief/Sponsor/ResetPassword/{data}', [App\Http\Controllers\OrphanRelief\Sponsors\SponsorsController::class, 'ResetPassword'])->name('ResetPasswordSponsor');



// Payment
Route::get('/OrphansRelief/Payment/All', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'All'])->name('AllPayment');
Route::get('/OrphansRelief/Payment/Paid', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'Paid'])->name('PaidPayment');
Route::get('/OrphansRelief/Payment/Due', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'Due'])->name('DuePayment');
Route::get('/OrphansRelief/Payment/Reciept/{data}', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'Reciept'])->name('RecieptPayment');
// status
Route::get('/OrphansRelief/Payment/MakeItPaid/{data}', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'MakeItPaid'])->name('MakeItPaidPayment');
Route::get('/OrphansRelief/Payment/MakeItDue/{data}', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'MakeItDue'])->name('MakeItDuePayment');
// individual
Route::get('/OrphansRelief/Payment/MyPyaments', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'MyPayments'])->name('MyPayments');

Route::post('/OrphansRelief/Payment/StorePayment', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'StorePayment'])->name('StorePayment');
Route::get('/OrphansRelief/Payment/Checkout', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'Checkout'])->name('CheckoutPayment');
Route::get('/OrphansRelief/Payment/AddToCart/{data}', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'AddToCart'])->name('AddToCartPayment');
Route::get('/OrphansRelief/Payment/RemoveFromCart/{data}', [App\Http\Controllers\OrphanRelief\Payments\PaymentsController::class, 'RemoveFromCart'])->name('RemoveFromCartPayment');

// Card
Route::get('/OrphansRelief/Card/All', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'All'])->name('AllCard');
Route::get('/OrphansRelief/Card/Active', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'Active'])->name('ActiveCard');
Route::get('/OrphansRelief/Card/InActive', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'InActive'])->name('InActiveCard');
Route::get('/OrphansRelief/Card/GetCardAjax', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'GetCardAjax'])->name('GetCardAjax');
// status
Route::get('/OrphansRelief/Card/Activate/{data}', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'Activate'])->name('ActivateCard');
Route::get('/OrphansRelief/Card/DeActivate/{data}', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'DeActivate'])->name('DeActivateCard');
// Create
Route::get('/OrphansRelief/Card/Create', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'Create'])->name('CreateCard');
Route::post('/OrphansRelief/Card/Create', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'Store'])->name('CreateCard');
// Update
Route::get('/OrphansRelief/Card/Edit/{data}', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'Edit'])->name('EditCard');
Route::put('/OrphansRelief/Card/Edit/{data}', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'Update'])->name('UpdateCard');
// delete
Route::get('/OrphansRelief/Card/Delete/{data}', [App\Http\Controllers\OrphanRelief\Cards\CardsController::class, 'Delete'])->name('DeleteCard');




// Subscription
Route::get('/OrphansRelief/Subscription/All', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'All'])->name('AllSubscription');
Route::get('/OrphansRelief/Subscription/Active', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'Active'])->name('ActiveSubscription');
Route::get('/OrphansRelief/Subscription/InActive', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'InActive'])->name('InActiveSubscription');
// status
Route::get('/OrphansRelief/Subscription/Activate/{data}', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'Activate'])->name('ActivateSubscription');
Route::get('/OrphansRelief/Subscription/DeActivate/{data}', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'DeActivate'])->name('DeActivateSubscription');
// Create
Route::get('/OrphansRelief/Subscription/Create', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'Create'])->name('CreateSubscription');
Route::post('/OrphansRelief/Subscription/Create', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'Store'])->name('CreateSubscription');
// Update
Route::get('/OrphansRelief/Subscription/Edit/{data}', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'Edit'])->name('EditSubscription');
Route::put('/OrphansRelief/Subscription/Edit/{data}', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'Update'])->name('UpdateSubscription');
// delete
Route::get('/OrphansRelief/Subscription/Delete/{data}', [App\Http\Controllers\OrphanRelief\Subscriptions\SubscriptionsController::class, 'Delete'])->name('DeleteSubscription');

// uploads of orphansrelief
Route::post('/OrphansRelief/Orphans_Profile', [App\FileUpload\OrphansRelief::class, 'Orphans_Profile'])->name('Orphans_Profile');
Route::post('/OrphansRelief/Orphans_Tazkira', [App\FileUpload\OrphansRelief::class, 'Orphans_Tazkira'])->name('Orphans_Tazkira');
Route::post('/OrphansRelief/Orphans_FamilyPic', [App\FileUpload\OrphansRelief::class, 'Orphans_FamilyPic'])->name('Orphans_FamilyPic');
Route::post('/OrphansRelief/Orphans_HousePic', [App\FileUpload\OrphansRelief::class, 'Orphans_HousePic'])->name('Orphans_HousePic');
Route::post('/OrphansRelief/Sponsors_Profile', [App\FileUpload\OrphansRelief::class, 'Sponsors_Profile'])->name('Sponsors_Profile');
Route::post('/OrphansRelief/Sponsors_Tazkira', [App\FileUpload\OrphansRelief::class, 'Sponsors_Tazkira'])->name('Sponsors_Tazkira');

