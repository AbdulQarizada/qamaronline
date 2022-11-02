



<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php if(Auth::user()->IsEmployee == 1): ?>
<?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>
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
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Skote Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate">Henry Price</h5>
                        <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                    </div>

                    <div class="col-sm-8">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">125</h5>
                                    <p class="text-muted mb-0">Projects</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">$1245</h5>
                                    <p class="text-muted mb-0">Revenue</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Earning</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="text-muted">This month</p>
                        <h3>$34,252</h3>
                        <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>

                        <div class="mt-4">
                            <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mt-4 mt-sm-0">
                            <div id="radialBar-chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
                <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Orders</p>
                                <h4 class="mb-0">1,235</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Revenue</p>
                                <h4 class="mb-0">$35, 723</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Email Sent</h4>
                    <div class="ms-auto">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Social Source</h4>
                <div class="text-center">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                            <i class="mdi mdi-facebook text-primary"></i>
                        </span>
                    </div>
                    <p class="font-16 text-muted mb-2"></p>
                    <h5><a href="javascript: void(0);" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                    <a href="javascript: void(0);" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-primary font-size-16">
                                    <i class="mdi mdi-facebook text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Facebook</h5>
                            <p class="text-muted mb-0">125 sales</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-info font-size-16">
                                    <i class="mdi mdi-twitter text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Twitter</h5>
                            <p class="text-muted mb-0">112 sales</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-pink font-size-16">
                                    <i class="mdi mdi-instagram text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Instagram</h5>
                            <p class="text-muted mb-0">104 sales</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Activity</h4>
                <ul class="verti-timeline list-unstyled">
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “Volunteer Activities
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Everyone realizes why a new common language would be desirable... <a href="javascript: void(0);">Read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list active">
                        <div class="event-timeline-dot">
                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Joined the group “Boardsmanship Forum”
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “In-Kind Opportunity”
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center mt-4"><a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Top Cities Selling Product</h4>

                <div class="text-center">
                    <div class="mb-4">
                        <i class="bx bx-map-pin text-primary display-4"></i>
                    </div>
                    <h3>1,456</h3>
                    <p>San Francisco</p>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table align-middle table-nowrap">
                        <tbody>
                            <tr>
                                <td style="width: 30%">
                                    <p class="mb-0">San Francisco</p>
                                </td>
                                <td style="width: 25%">
                                    <h5 class="mb-0">1,456</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Los Angeles</p>
                                </td>
                                <td>
                                    <h5 class="mb-0">1,123</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">San Diego</p>
                                </td>
                                <td>
                                    <h5 class="mb-0">1,026</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check font-size-16 align-middle">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                        <label class="form-check-label" for="transactionCheck01"></label>
                                    </div>
                                </th>
                                <th class="align-middle">Order ID</th>
                                <th class="align-middle">Billing Name</th>
                                <th class="align-middle">Date</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Payment Status</th>
                                <th class="align-middle">Payment Method</th>
                                <th class="align-middle">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>Neal Matthews</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck03">
                                        <label class="form-check-label" for="transactionCheck03"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                <td>Jamal Burnett</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $380
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-danger font-size-11">Chargeback</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck04">
                                        <label class="form-check-label" for="transactionCheck04"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                <td>Juan Mitchell</td>
                                <td>
                                    06 Oct, 2019
                                </td>
                                <td>
                                    $384
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck05">
                                        <label class="form-check-label" for="transactionCheck05"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                <td>Barry Dick</td>
                                <td>
                                    05 Oct, 2019
                                </td>
                                <td>
                                    $412
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck06">
                                        <label class="form-check-label" for="transactionCheck06"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                <td>Ronald Taylor</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $404
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-warning font-size-11">Refund</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck07">
                                        <label class="form-check-label" for="transactionCheck07"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                <td>Jacob Hunter</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $392
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
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
<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-dark">Welcome Back !</h5>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="<?php echo e(URL::asset('/assets/images/profile-img.png')); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg')); ?>" alt="" class="img-thumbnail rounded-circle">
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-8">
                                    <h5 class="font-size-15 text-truncate"><?php echo e(Str::ucfirst(Auth::user()->FullName)); ?></h5>
                                    <!-- <p class="text-muted mb-0 text-truncate"><?php echo e(Str::ucfirst(Auth::user()->name)); ?></p> -->
                                </div>

                            </div>
                            <div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Date</p>
                                <h4 class="mb-0">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                </h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-dark">
                                    <span class="avatar-title bg-dark">
                                        1
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Last Login</p>
                                <h4 class="mb-0">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                </h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        2
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        3
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        4
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        5
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        6
                                    </span>
                                </div>
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

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/index.blade.php ENDPATH**/ ?>