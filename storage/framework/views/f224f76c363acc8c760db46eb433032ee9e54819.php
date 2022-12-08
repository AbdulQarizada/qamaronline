
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/css/mystyle/select2.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('AllOrphans')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-outline-dark mb-3 waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product-detai-imgs">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-4">
                                    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab" aria-controls="product-2" aria-selected="false">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/FamilyPic/'.$data -> FamilyPic)); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab" aria-controls="product-3" aria-selected="false">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/HousePic/'.$data -> HousePic)); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab" aria-controls="product-4" aria-selected="false">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                            <div>
                                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" class="badge badge-soft-info">
                                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="Profile" class="d-block" height="300px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                            <div>
                                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/FamilyPic/'.$data -> FamilyPic)); ?>" class="badge badge-soft-info">
                                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/FamilyPic/'.$data -> FamilyPic)); ?>" alt="" class=" d-block" height="300px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                            <div>
                                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/HousePic/'.$data -> HousePic)); ?>" class="badge badge-soft-info">
                                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/HousePic/'.$data -> HousePic)); ?>" alt="" class=" d-block" height="300px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                                            <div>
                                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)); ?>" class="badge badge-soft-info">
                                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)); ?>" alt="" class=" d-block" height="300px">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-2">
                                        <?php if( $data -> Status == 'Approved' || $data -> Status == 'Rejected' || $data -> Status == 'Assigned' || $data -> Status == 'Sponsored'): ?>
                                        <a href="<?php echo e(route('ReInitiateOrphans', ['data' => $data -> id])); ?>" class="btn btn-outline-info btn-lg waves-effect  waves-light btn-rounded w-lg reinitiate m-3">
                                            Re-Initiate
                                        </a>
                                        <?php endif; ?>
                                        <?php if( $data -> Status == 'Pending'): ?>
                                        <a href="<?php echo e(route('ApproveOrphans', ['data' => $data -> id])); ?>" class="btn btn-outline-success btn-lg waves-effect  waves-light btn-rounded w-lg approve m-3">
                                            </i>Approve
                                        </a>
                                        <a href="<?php echo e(route('RejectOrphans', ['data' => $data -> id])); ?>" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded w-lg reject m-3">
                                            Reject
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class=" text-uppercase text-primary">why Should You Help Me?</h5>
                                <div class="d-flex py-0">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" class="avatar-xs rounded-circle" alt="img" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 font-size-15"><?php echo e($data -> FirstName); ?> <?php echo e($data -> LastName); ?></h5>
                                        <p class="text-muted text-break"><?php echo e($data -> WhyShouldYouHelpMe); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div style="float: right;">
                                    <div class="text-center">
                                        <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>
                                        <div class="mb-3" class="rounded">
                                            <?php echo DNS2D::getBarcodeSVG(''.$data->TazkiraID, 'QRCODE', 6, 6, true); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">PEROSNAL INFORMATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">First Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FirstName); ?> </td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Last Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> LastName); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira ID</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> TazkiraID); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Date of Birth</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e(Carbon\Carbon::parse($data ->  DOB) -> format("j F Y")); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Gender); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Language</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Language); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Age</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e(\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y')); ?> Years</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Introducer Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> IntroducerName); ?></td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">ADDRESS AND CONTACT</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> PrimaryNumber); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SecondaryNumber); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Emergency Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> EmergencyNumber); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Province); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> District); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Village); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Of</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> InCareName); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> InCareNumber); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Relationship</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> InCareRelationship); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care TazkiraID</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> InCareTazkiraID); ?></td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">EDUCATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Currently In School?</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> CurrentlyInSchool); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolName); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Number </td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolNumber); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Email</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolEmail); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Class</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Class); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Province</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolProvince); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School District</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolDistrict); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Village</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Village); ?></td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">FAMILY AND INCOME INFORMATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Father's Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FatherName); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Income</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> MonthlyFamilyIncome); ?> (AFGHANI)</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Expenses</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> MonthlyFamilyExpenses); ?> (AFGHANI)</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Number of Family Members</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> NumberFamilyMembers); ?> </td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Income Streem</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> IncomeStreem); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Level Of Poverty</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                        <div>
                            <?php if( $data -> LevelPoverty == 1): ?>
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-secondary font-size-14"></i>
                            <i class="bx bxs-star text-secondary font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            <?php endif; ?>
                            <?php if( $data -> LevelPoverty == 2): ?>
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-secondary font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            <?php endif; ?>
                            <?php if( $data -> LevelPoverty == 3): ?>
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-secondary font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            <?php endif; ?>
                            <?php if( $data -> LevelPoverty == 4): ?>
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-warning font-size-18"></i>
                            <i class="bx bxs-star text-secondary font-size-20"></i>
                            <?php endif; ?>
                            <?php if( $data -> LevelPoverty == 5): ?>
                            <i class="bx bxs-star text-warning font-size-12"></i>
                            <i class="bx bxs-star text-warning font-size-14"></i>
                            <i class="bx bxs-star text-warning font-size-16"></i>
                            <i class="bx bxs-star text-warning font-size-18"></i>
                            <i class="bx bxs-star text-warning font-size-20"></i>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-10">
        <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Sponsorship</h5>
    </div>
    <div class="col-md-2 col-sm-2 mb-2">
        <a data-bs-toggle="collapse" data-bs-target="#addSponsor" aria-expanded="false" aria-controls="addSponsor" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded text-uppercase"><i class="mdi mdi-plus me-1"></i>ADD SPONSOR</a>
    </div>
</div>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="collapse hide" id="addSponsor">
            <div class="card shadow-none card-body text-muted mb-0" style="border: 2px dashed #50a5f1;" >
                <form class="needs-validation" action="<?php echo e(route('CreateSubscription')); ?>" method="POST" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3 ">
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active bg-info" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="mdi mdi-account-box-multiple-outline  d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Subscription</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="card-header bg-info text-white mb-3"></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Sponsor_ID" class="form-label">Sponsor</label>
                                                                    <div class="input-group">
                                                                        <select class="select2 form-control Sponsor" id="Sponsor_ID" name="Sponsor_ID" value="<?php echo e($data -> Sponsor_ID); ?>"  required>
                                                                            <option value="">Select Your Sponsor</option>
                                                                            <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($sponsor -> id); ?>" <?php echo e($sponsor -> id == $data -> Sponsor_ID ? 'selected' : ''); ?>><?php echo e($sponsor -> FullName); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                        <?php $__errorArgs = ['Sponsor_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong><?php echo e($message); ?></strong>
                                                                        </span>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 d-none">
                                                                <div class="mb-3 position-relative">
                                                                    <input type="text" class="form-control  form-control-lg <?php $__errorArgs = ['Orphan_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> id); ?>" id="Orphan_ID" name="Orphan_ID" required />
                                                                    <?php $__errorArgs = ['Orphan_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong><?php echo e($message); ?></strong>
                                                                    </span>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="StartDate" class="form-label">Subscription Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <input class="form-control form-select-lg <?php $__errorArgs = ['StartDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> StartDate); ?>" type="date" id="example-date-input" name="StartDate" id="StartDate" required>
                                                                        <?php $__errorArgs = ['StartDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong><?php echo e($message); ?></strong>
                                                                        </span>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="EndDate" class="form-label">Subscription End Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <input class="form-control form-select-lg <?php $__errorArgs = ['EndDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> EndDate); ?>" type="date" id="example-date-input" name="EndDate" id="EndDate" required>
                                                                        <?php $__errorArgs = ['EndDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong><?php echo e($message); ?></strong>
                                                                        </span>
                                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit">Submit </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="row mt4">
            <?php $__currentLoopData = $data -> user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($users -> pivot -> IsActive == 1): ?>
            <div class="col-xl-2 col-sm-6 mb-4">
                <a href="#">
                    <div class="card-one text-center border border-secondary">
                        <div class="float-end">
                            <a href="<?php echo e(route('DeActivateSubscription', ['data' => $users -> pivot ->id])); ?>"  class="btn btn-sm text-danger waves-effect waves-light DeActivateSubscription" data-bs-toggle="tooltip" data-bs-placement="top" title="End Subscription">
                                <i class="mdi mdi-stop-circle-outline font-size-24 align-middle"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="avatar-sm mx-auto mb-4">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                    <img class="rounded-circle avatar-sm" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/avatar-male.jpg')); ?>" alt="">
                                </span>
                            </div>
                            <h5 class="font-size-15"><a href="#" class="text-dark"><?php echo e($users -> FullName); ?></a></h5>
                            <p class="text-wrap text-muted text-break"><?php echo e($users -> email); ?> </p>
                            <h3 class="text-success">Active</h3>
                        </div>
                        <div class="card-footer bg-transparent border-top">
                            <div class="contact-links d-flex">
                                <div class="flex-fill">
                                    <a class="text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Subscription Start Date"><i class="mdi mdi-calendar-multiselect"></i> <?php echo e(\Carbon\Carbon::parse($users -> pivot ->  StartDate)->format("j F Y")); ?> </a>
                                </div>
                                <div class="flex-fill">
                                    <a class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Subscription End Date"><i class="mdi mdi-calendar-multiselect"></i> <?php echo e(\Carbon\Carbon::parse($users -> pivot -> EndDate)->format("j F Y")); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php elseif($users -> pivot -> IsActive == 0): ?>
            <div class="col-xl-2 col-sm-6 mb-4">
                <a href="#">
                    <div class="card-one text-center border border-secondary">
                        <div class="float-end">
                            <a href="<?php echo e(route('DeleteSubscription', ['data' => $users -> pivot ->id])); ?>"  class="btn btn-sm text-danger waves-effect waves-light delete-confirmSubscription" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Subscription">
                                <i class="mdi mdi-delete-outline font-size-24 align-middle"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="avatar-sm mx-auto mb-4">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                    <img class="rounded-circle avatar-sm" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/avatar-male.jpg')); ?>" alt="">
                                </span>
                            </div>
                            <h5 class="font-size-15"><a href="#" class="text-dark"><?php echo e($users -> FullName); ?></a></h5>
                            <p class="text-wrap text-muted text-break"><?php echo e($users -> email); ?> </p>
                            <h6 class="text-muted">Previous (<?php echo e($loop->iteration); ?>)</h6>

                        </div>
                        <div class="card-footer bg-transparent border-top">
                            <div class="contact-links d-flex">
                                <div class="flex-fill">
                                    <a class="text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Subscription Started Date"><i class="mdi mdi-calendar-multiselect"></i> <?php echo e(\Carbon\Carbon::parse($users -> pivot ->  StartDate)->format("j F Y")); ?> </a>
                                </div>
                                <div class="flex-fill">
                                    <a class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Subscription Ended Date"><i class="mdi mdi-calendar-multiselect"></i> <?php echo e(\Carbon\Carbon::parse($users -> pivot -> EndDate)->format("j F Y")); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>

<!-- form advanced init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>
<!-- Form Validation -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>
<script>
    $('.reinitiate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be re initiated!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });


    $('.approve').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be approved!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.reject').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be rejected!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.delete-confirmSubscription').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be permanantly deleted!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
    // DeACtivate Card Confirmation
    $('.DeActivateSubscription').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to DeActivate Subscription?!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/Status.blade.php ENDPATH**/ ?>