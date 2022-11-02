



<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">

                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <div class="avatar-sm rounded-circle mini-stat-icon">
                            <span class="avatar-title rounded-circle bg-dark">
                                <?php if(Auth::user()->IsEmployee == 1): ?>
                                <img class="rounded-circle header-profile-user" src="<?php echo e(isset(Auth::user()->Profile) ? asset('/uploads/User/Employees/Profiles/'.Auth::user() -> Profile) : asset('/uploads/User/avatar-1.png')); ?>" alt="Profile">

                                <?php else: ?>
                                <img class="rounded-circle header-profile-user" src="<?php echo e(isset(Auth::user()->Profile) ? asset('/uploads/User/Sponsors/Profiles/'.Auth::user() -> Profile) : asset('/uploads/User/avatar-1.png')); ?>" alt="Profile">
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>

                    <div class="flex-grow-1">
                        <div class="text-muted">
                            <h5><?php echo e(Str::ucfirst(Auth::user()->FullName)); ?></h5>
                            <p class="mb-1"><?php echo e(Str::ucfirst(Auth::user()->email)); ?></p>
                            <p class="mb-0"><?php echo e(Str::ucfirst(Auth::user()->Job)); ?></p>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>

    <div class="col-xl-8">
        <div class="row">
            <div class="col-sm-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <i class="mdi mdi-bitcoin h2 text-warning mb-0"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-2"></p>
                                <h5 class="mb-0"> <span class="font-size-14 text-muted"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <i class="mdi mdi-ethereum h2 text-primary mb-0"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-2"></p>
                                <h5 class="mb-0"><span class="font-size-14 text-muted"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <i class="mdi mdi-litecoin h2 text-info mb-0"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-2"></p>
                                <h5 class="mb-0"><span class="font-size-14 text-muted"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end row -->
<br />
<br />
<div class="row mb-4">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Select Dashboard Reports</label>

            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                <optgroup label="Qamar Care Card">
                    <option value="AK">Operatons</option>
                    <option value="HI">Food Packs</option>
                </optgroup>
            </select>

        </div>
    </div>

</div>

<?php if(Auth::user()->IsEmployee == 1): ?>
<?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>

<div class="row">
    <?php if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1): ?>

    <h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">Projects</h1>
    <?php endif; ?>

    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('IndexOrphansRelief')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Orphans Relief</p>
                                        <h6 class="text-muted mb-0">Orphans</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bx-smile font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsAidAndRelief == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="AidAndRelief">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Aid and Relief</p>
                                        <h6 class="text-muted mb-0">Aid and Relief</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-briefcase-alt-2 font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsWash == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="Wash">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Wash</p>
                                        <h6 class="text-muted mb-0">Wash</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-gas-pump font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsEducation == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('IndexEducation')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Education</p>
                                        <h6 class="text-muted mb-0">Education</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-graduation font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>

            <?php if(Auth::user()->IsInitiative == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="Initiative">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Initiative</p>
                                        <h6 class="text-muted mb-0">Initiative</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-bulb font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>

            <?php if(Auth::user()->IsMedicalSector == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="MedicalSector">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Medical Sector</p>
                                        <h6 class="text-muted mb-0">Medical Sector</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bxs-ambulance font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row ">
    <?php if(Auth::user()->IsFoodAppeal == 1 || Auth::user()->IsQamarCareCard == 1 || Auth::user()->IsAppealsDistributions == 1 || Auth::user()->IsDonorsAndDonorBoxes == 1): ?>
    <h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">Benef. Services</h1>
    <?php endif; ?>

    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsFoodAppeal == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="FoodAppeal">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Food Appeal</p>
                                        <h6 class="text-muted mb-0">Food Appeal</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-fingerprint  font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsQamarCareCard == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('IndexCareCard')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Care Card</p>
                                        <h6 class="text-muted mb-0">Care Card</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bx-credit-card font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsAppealsDistributions == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="AppealsDistributions">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Appeals' Distributions</p>
                                        <h6 class="text-muted mb-0">Appeals' Distributions</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-task font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsDonorsAndDonorBoxes == 1): ?>

            <div class="col-md-4 mb-2">
                <a href="Donors&DonorBoxes">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Donors & Donor Boxes</p>
                                        <h6 class="text-muted mb-0">Donors & Donor Boxes</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bxs-box font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>

            <?php endif; ?>

        </div>
    </div>
</div>
<!-- end row -->




<div class="row">
    <?php if(Auth::user()->IsSuperAdmin == 1): ?>
    <h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">System Management</h1>
    <?php endif; ?>
    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsSuperAdmin == 1): ?>
            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('IndexUserManagement')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">User Managements</p>
                                        <h6 class="text-muted mb-0">Users Management</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-report  font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsSuperAdmin == 1): ?>
            <div class="col-md-4 mb-2">
                <a data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">ADD LOOK UPS</p>
                                        <!-- <h6 class="text-muted mb-0">Monthly Reports</h4> -->
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-report  font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- center modal -->

                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">ADD LOOK UP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">


                                    <form class="needs-validation" action="<?php echo e(route('CreateLookups')); ?>" method="POST" enctype="multipart/form-data" novalidate>
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3 position-relative">
                                                    <label for="Parent_Name" class="form-label">Main Catagory <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select  form-select-lg <?php $__errorArgs = ['Parent_Name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Parent_Name')); ?>" required id="Parent_Name" name="Parent_Name">
                                                            <!-- <option value="None">Main Catagory</option> -->

                                                            <?php $__currentLoopData = $catagorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($catagory -> Name); ?>"><?php echo e($catagory -> Name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php $__errorArgs = ['Parent_Name'];
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
                                            <div class="col-md-12">
                                                <div class="mb-3 position-relative">
                                                    <label for="Name" class="form-label ">Name<i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['Name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Name')); ?>" id="Name" name="Name" required>
                                                    <?php $__errorArgs = ['Name'];
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
                                        <button class="btn btn-success btn-lg" type="submit">Save </button>
                                        <a class="btn btn-danger btn-lg" href="<?php echo e(route('root')); ?>">Cancel</a>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- end card -->
                </div>
            </div>
            <?php endif; ?>


        </div>
    </div>
</div>
<!-- end row -->
<?php endif; ?>


<?php if(Cookie::get('Layout') == 'LayoutSidebar'): ?>

<!-- start page title -->

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h4 class="card-header bg-dark text-white">Qamar Care Beneficiaries</h4>
            <div class="card-body">

                <!-- <p class="text-muted fw-medium">Beneficiaries</p> -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="assets/images/small/img-4.jpg" height="300px" width="100%" alt="First slide">
                        </div>
                        <?php $__currentLoopData = $qamarcarecardsLastFive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qamarcarecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item ">
                            <img class="d-block " src="<?php echo e(URL::asset('/uploads/QamarCareCard/Beneficiaries/Profiles/'.$qamarcarecard -> Profile)); ?>" alt="First slide" height="300px" width="100%">
                            <div class="carousel-caption d-none d-md-block text-white-50">

                                <h5 class="card-footer text-white"><?php echo e($qamarcarecard -> FirstName); ?></h5>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4 text-center ">
                <p class="font-size-14 mb-3">Total Number of Care Cards</p>
                <h2 class=" rounded display-2 bg-warning text-white"><?php echo e($qamarcarecardsCount); ?></h2>
            </div>
            <div class="col-md-4">
                <div class="text-center" dir="ltr">
                    <h5 class="font-size-14 mb-3">Pending Care Cards </h5>
                    <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="<?php echo e($qamarcarecardsCount); ?>" data-displayprevious="false" value="<?php echo e($qamarcarecardsPending); ?>" data-linecap="round" data-fgcolor="#74788d">
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center" dir="ltr">
                    <h5 class="font-size-14 mb-3">Approved Care Cards </h5>
                    <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="<?php echo e($qamarcarecardsCount); ?>" data-displayprevious="false" value="<?php echo e($qamarcarecardsApproved); ?>" data-linecap="round" data-fgcolor="#34c38f">
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center" dir="ltr">
                    <h5 class="font-size-14 mb-3">Printed Care Cards </h5>
                    <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="<?php echo e($qamarcarecardsCount); ?>" data-displayprevious="false" value="<?php echo e($qamarcarecardsPrinted); ?>" data-linecap="round" data-fgcolor="#343a40">
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center" dir="ltr">
                    <h5 class="font-size-14 mb-3">Released Care Cards </h5>
                    <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="<?php echo e($qamarcarecardsCount); ?>" data-displayprevious="false" value="<?php echo e($qamarcarecardsReleased); ?>" data-linecap="round" data-fgcolor="#34c38f">
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center" dir="ltr">
                    <h5 class="font-size-14 mb-3">Rejected Care Cards </h5>
                    <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="<?php echo e($qamarcarecardsCount); ?>" data-displayprevious="false" value="<?php echo e($qamarcarecardsRejected); ?>" data-linecap="round" data-fgcolor="#f46a6a">
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end row -->
<div class="row">



    <div class="col-xl-4">
        <div id="GenderChart" class="apex-charts" dir="ltr"></div>
    </div>

    <div class="col-xl-5">
        <div id="FamilyStatusChart" class="apex-charts" dir="ltr"></div>
    </div>

</div>
<div class="row">

    <div class="col-xl-12">
    </div>
    <!-- end col -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>Address</th>
                                <th>Phone Numbers</th>
                                <th>Family Status</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>

                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $qamarcarecardsLastFive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qamarcarecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <!-- <td><?php echo e($qamarcarecard->id); ?></td> -->
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FirstName); ?> <?php echo e($qamarcarecard -> LastName); ?></a></h5>
                                    <p class="text-muted mb-0">QCC-<?php echo e($qamarcarecard -> QCC); ?></p>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> ProvinceName); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard -> DistrictName); ?></p>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard -> Village); ?></p>

                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($qamarcarecard -> PrimaryNumber); ?></a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($qamarcarecard -> SecondaryNumber); ?></p>
                                        <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($qamarcarecard -> RelativeNumber); ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FamilyStatus); ?></a></h5>
                                        <?php if( $qamarcarecard -> LevelPoverty == 1): ?>
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-secondary font-size-14"></i>
                                        <i class="bx bxs-star text-secondary font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>

                                        <?php endif; ?>
                                        <?php if( $qamarcarecard -> LevelPoverty == 2): ?>
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-secondary font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        <?php endif; ?>
                                        <?php if( $qamarcarecard -> LevelPoverty == 3): ?>
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-warning font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        <?php endif; ?>
                                        <?php if( $qamarcarecard -> LevelPoverty == 4): ?>
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-warning font-size-16"></i>
                                        <i class="bx bxs-star text-warning font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        <?php endif; ?>
                                        <?php if( $qamarcarecard -> LevelPoverty == 5): ?>
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-warning font-size-16"></i>
                                        <i class="bx bxs-star text-warning font-size-18"></i>
                                        <i class="bx bxs-star text-warning font-size-20"></i>
                                        <?php endif; ?>
                                    </div>
                                </td>

                                <td>
                                    <div>


                                        <?php if($qamarcarecard -> Status == 'Pending'): ?>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("j F Y")); ?></p>

                                        <?php endif; ?>

                                        <?php if($qamarcarecard -> Status == 'Approved'): ?>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($qamarcarecard -> Status); ?> </a></h5>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("j F Y")); ?></p>

                                        <?php endif; ?>

                                        <?php if($qamarcarecard -> Status == 'Rejected'): ?>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger"><?php echo e($qamarcarecard -> Status); ?> </a></h5>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("j F Y")); ?></p>

                                        <?php endif; ?>



                                        <?php if($qamarcarecard -> Status == 'ReInitiated'): ?>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("j F Y")); ?></p>

                                        <?php endif; ?>

                                        <?php if($qamarcarecard -> Status == 'Released'): ?>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("j F Y")); ?></p>

                                        <?php endif; ?>

                                        <?php if($qamarcarecard -> Status == 'Printed'): ?>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("j F Y")); ?></p>

                                        <?php endif; ?>

                                    </div>
                                </td>
                                <td>
                                    <?php if( $qamarcarecard -> Created_By !=""): ?>

                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard ->  UFirstName); ?> <?php echo e($qamarcarecard ->  ULastName); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($qamarcarecard ->  UJob); ?></p>

                                    </div>
                                    <?php endif; ?>
                                    <?php if( $qamarcarecard -> Created_By ==""): ?>

                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                        <p class="text-muted mb-0">Requested</p>

                                    </div>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="<?php echo e(route('StatusCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-warning waves-effect waves-light">
                                            <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                        </a>




                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<?php endif; ?>
<?php else: ?>

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo \Akaunting\Apexcharts\Chart::loadScript(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(URL::asset('/assets/libs/jquery-knob/jquery-knob.min.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/js/pages/jquery-knob.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>

<!-- form advanced init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>
<script>
    var GenderChart = {
        series: [<?php echo e($qamarcarecardsMale); ?>, <?php echo e($qamarcarecardsFemale); ?>],
        chart: {
            width: 380,
            type: 'pie',
        },
        title: {
            text: "Gender Base Classification",
            align: "left",
            style: {
                fontWeight: "500"
            }
        },
        labels: ['Male', 'Female'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var GenderChart = new ApexCharts(document.querySelector("#GenderChart"), GenderChart);
    GenderChart.render();



    var FamilyStatusChart = {
        chart: {
            height: 400,
            type: "donut"
        },
        series: [<?php echo e($qamarcarecardsPoor); ?>, <?php echo e($qamarcarecardsLowIncome); ?>,<?php echo e($qamarcarecardsWidow); ?>, <?php echo e($qamarcarecardsOrphans); ?>,<?php echo e($qamarcarecardsDisabledIndividual); ?>, <?php echo e($qamarcarecardsElderlyIndividual); ?>,<?php echo e($qamarcarecardsDisplacedFamily); ?>, <?php echo e($qamarcarecardsDisasterAffected); ?>],
        labels: ['Poor', 'Low Income',  'Widow', 'Orphans', 'Disabled Individual', 'Elderly Individual', 'Displaced Family', 'Disaster Affected'],
        colors: ["#34c38f", "#556ee6", "#f46a6a", "#50a5f1", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c"],
        legend: {
            show: !0,
            position: "right",
            horizontalAlign: "center",
            verticalAlign: "middle",
            floating: !1,
            fontSize: "14px",
            offsetX: 0
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    height: 240
                },
                legend: {
                    show: !1
                }
            }
        }]
    };

    var FamilyStatusChart = new ApexCharts(document.querySelector("#FamilyStatusChart"), FamilyStatusChart);
    FamilyStatusChart.render();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/index.blade.php ENDPATH**/ ?>