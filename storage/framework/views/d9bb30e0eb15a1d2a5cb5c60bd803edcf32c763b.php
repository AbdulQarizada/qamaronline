

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Home <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Dashboard <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<?php if(Auth::user()->IsEmployee == 1): ?>
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
                                    <p class="text-muted mb-0 text-truncate"><?php echo e(Str::ucfirst(Auth::user()->Job)); ?></p>
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
                                        <h6 class="text-muted mb-0">Orphans Relief</h4>
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
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="row">
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
                <!-- end row -->

                <br />
                <br />

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
                                <a href="<?php echo e(route('IndexQamarCareCard')); ?>">
                                    <div class="card-one  mini-stats-wid border border-secondary">
                                        <div class="card-body">
                                            <blockquote class="blockquote  font-size-14 mb-0">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="my-0 text-primary card-title fw-semibold">Qamar Care Card</p>
                                                        <h6 class="text-muted mb-0">Qamar Care Card</h4>
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

                            <div class="col-md-4">
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

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
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
                                <!-- end row -->


                                <br />
                                <br />

                                <div class="row">
                                    <?php if(Auth::user()->IsSuperAdmin == 1): ?>

                                    <h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">System Management</h1>
                                    <?php endif; ?>

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
                                            <?php endif; ?>


                                        </div>
                                        <!-- end row -->


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
<?php echo $__env->make(Auth::user()->IsEmployee == 1 ? 'layouts.master-layouts' : 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Qamar\QamarOnline\qamaronline\resources\views/index.blade.php ENDPATH**/ ?>