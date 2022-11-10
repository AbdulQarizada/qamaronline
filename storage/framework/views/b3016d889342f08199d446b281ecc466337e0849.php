



<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />

<!-- tui charts Css -->
<link href="<?php echo e(URL::asset('/assets/libs/tui-chart/tui-chart.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">

                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <div class="avatar-xl rounded-circle mini-stat-icon">
                            <span class="avatar-title rounded-circle bg-dark">
                                <?php if(Auth::user()->IsEmployee == 1): ?>
                                <img class="rounded-circle header-profile-user avatar-xl" src="<?php echo e(isset(Auth::user()->Profile) ? asset('/uploads/User/Employees/Profiles/'.Auth::user() -> Profile) : asset('/uploads/User/avatar-1.png')); ?>" alt="Profile">

                                <?php else: ?>
                                <img class="rounded-circle header-profile-user avatar-xl" src="<?php echo e(isset(Auth::user()->Profile) ? asset('/uploads/User/Sponsors/Profiles/'.Auth::user() -> Profile) : asset('/uploads/User/avatar-1.png')); ?>" alt="Profile">
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
            <div class="col-sm-8">
                <blockquote class="p-4 border-light border rounded mb-4">
                    <div class="d-flex align-items-start">

                        <div class="flex-grow-1">
                            <p class="mb-0 display-6 p-3" dir="rtl" style="float: right;"> <?php echo e($QuranArabic); ?></p>
                            <p class="mb-0 font-size-18"> <?php echo e($QuranEnglish); ?></p>
                        </div>
                        <div class="me-3">
                            <i class="bx bxs-quote-alt-right text-mute font-size-24"></i>
                        </div>
                    </div>
                </blockquote>

            </div>
            <div class="col-sm-4">
                <div class="card mini-stats-wid">
                    <h5 class="card-header text-dark bg-info text-white">Report Filter</h5>

                    <div class="card-body">

                        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                            <optgroup label="Qamar Care Card">
                                <option value="AK">Operatons</option>
                                <option value="HI">Food Packs</option>
                            </optgroup>
                        </select>
                        <button class="btn btn-primary form-control mt-3">Filter</button>

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


<?php if(Auth::user()->IsEmployee == 1): ?>
<?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>

<div class="row">
    <?php if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1): ?>

    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Projects</h1>
    <?php endif; ?>

    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexOrphansRelief')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-smile display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Orphans Relief</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexOrphansRelief')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-briefcase-alt-2 display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Aid and Relief</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexOrphansRelief')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-gas-pump  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Wash</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexEducation')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-graduation  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Education</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexEducation')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-bulb  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Initiative</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexEducation')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-ambulance  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Medical Sector</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Benefeciary Services</h1>
    <?php endif; ?>

    <div class="col-xl-12">
        <div class="row">

            <?php if(Auth::user()->IsQamarCareCard == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexCareCard')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-credit-card display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Care Card</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
                            </div>

                            <div class="d-flex mt-4">

                            </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsFoodAppeal == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexEducation')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-fingerprint display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Appeals</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexCareCard')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-task display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Distribution</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexCareCard')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-box display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Donors</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">System Management</h1>
    <?php endif; ?>
    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsSuperAdmin == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexUserManagement')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-box display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Users</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-report display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">ADD LOOK UPS</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft">Lastest Beneficiaries</h5>
            <div class="card-body">

                <!-- <p class="text-muted fw-medium">Beneficiaries</p> -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <td><img class="d-block" src="<?php echo e(URL::asset('/assets/images/qcc/front.jpeg')); ?>" height="185px" alt="First slide"></td>

                        </div>
                        <?php $__currentLoopData = $qamarcarecardsLastFive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qamarcarecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item ">
                            <table class="table project-list-table table-nowrap align-middle table-borderless">
                                <tbody>
                                    <tr>
                                        <td><img class="d-block img-thumbnail rounded-circle avatar-xl" src="<?php echo e(URL::asset('/uploads/QamarCareCard/Beneficiaries/Profiles/'.$qamarcarecard -> Profile)); ?>" alt="First slide"></td>
                                        <td>
                                            <h5 class="text-truncate font-size-18 fw-semibold "><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FirstName); ?> </a></h5>
                                            <h6 class="text-truncate font-size-18 "><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FamilyStatus); ?> </a></h6>

                                            <span class="text-danger text-uppercase">Created At: </span><?php echo e($qamarcarecard -> created_at -> format("d-m-Y")); ?>

                                            <div class="d-flex flex-wrap gap-2">
                                                <a href="<?php echo e(route('StatusCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-warning waves-effect waves-light">
                                                    <i class="bx bx-show-alt font-size-16 align-middle"></i> Visit Profile
                                                </a>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
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
                <div class="card">
                    <h5 class="card-header text-dark bg-secondary bg-soft">Total Care Cards</h5>
                    <div class="card-body">
                        <h2 class=" rounded display-2 bg-warning text-white"><?php echo e($qamarcarecardsCount); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            <div class="card">
                <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
                <div class="card-body">
                    <div id="AllInOne" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Care Cards</h5>
                </div>
            </div>
        </div>

        </div>
        <!-- end row -->
    </div>
</div>


<!-- end row -->
<div class="row mb-4">
    <div class="col-xl-4 mb-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="GenderChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Gender</h5>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 mb-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="TribeChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Tribes</h5>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-xl-6">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="FamilyStatusChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Family Status</h5>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="AfghanistanChart"></div>
                    <h5 class=" text-dark text-center">Provincial Care Cards</h5>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-xl-12">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="DataInsertionChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Cards Insertion Timeline</h5>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h4 class="card-header text-dark bg-secondary bg-soft">Latest Transaction</h4>
            <div class="card-body">
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

<!-- tui charts plugins -->

<script src="<?php echo e(URL::asset('/assets/libs/tui-chart/tui-chart-all.min.js')); ?>"></script>

<!-- tui charts map -->
<script src="<?php echo e(URL::asset('/assets/libs/tui-chart/maps/usa.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/tui-chart/maps/afghanistan.js')); ?>"></script>


<!-- tui charts plugins -->
<script src="<?php echo e(URL::asset('/assets/js/pages/tui-charts.init.js')); ?>"></script>

<!-- Afghanistan Map -->
<script src="<?php echo e(URL::asset('/assets/libs/afghanistanmap/highmaps.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/afghanistanmap/exporting.js')); ?>"></script>


<script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>

<!-- form advanced init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>
<script>
    // Tribe base Chart

    (async () => {
        const Tribe = await fetch('<?php echo e(route('Tribe_Chart')); ?>').then(response => response.json());

        var TribeChart = {
            series: [Tribe.Pashtun, Tribe.Tajik, Tribe.Hazara, Tribe.Uzbek, Tribe.Turkman, Tribe.Pashayi, Tribe.Aimaq, Tribe.Baloch, Tribe.Pamiri, Tribe.Sadat, Tribe.Nooristani, Tribe.Arab, Tribe.Gojar, Tribe.Brahawi, Tribe.qazalbash, Tribe.kochi, ],
            labels: ['Pashtun', 'Tajik', 'Hazara', 'Uzbek', 'Turkman', 'Pashayi', 'Aimaq', 'Baloch', 'Pamiri', 'Sadat', 'Nooristani', 'Arab', 'Gojar', 'Brahawi', 'qazalbash', 'kochi'],
            colors: ["#34c38f", "#556ee6", "#f46a6a", "#50a5f1", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c"],
            chart: {
                width: 380,
                type: 'pie',
            },
            dataLabels: {
                enabled: true
            },
            title: {
                text: "",
                align: "left",
                style: {
                    fontWeight: "500"
                }
            },
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

        var TribeChart = new ApexCharts(document.querySelector("#TribeChart"), TribeChart);
        TribeChart.render();

    })();





    // Montly Insetion base Chart
    (async () => {
        const MontlyInsertionJson = await fetch('<?php echo e(route('MontlyInsertion_Chart')); ?>').then(response => response.json());

        var MontlyInsertion = {
            chart: {
                height: 350,
                type: "line",
                stacked: !1,
                toolbar: {
                    show: !1
                }
            },
            stroke: {
                width: [0, 2, 4],
                curve: "smooth"
            },
            plotOptions: {
                bar: {
                    columnWidth: "50%"
                }
            },
            colors: ["#cd9941", "#34c38f", "#74788d"],
            series: [{
                    name: "New Cards",
                    type: "column",
                    data: [MontlyInsertionJson.PendingJan, MontlyInsertionJson.PendingFeb, MontlyInsertionJson.PendingMarch, MontlyInsertionJson.PendingApril, MontlyInsertionJson.PendingMay, MontlyInsertionJson.PendingJun, MontlyInsertionJson.PendingJuly, MontlyInsertionJson.PendingAugust, MontlyInsertionJson.PendingSep, MontlyInsertionJson.PendingOct, MontlyInsertionJson.PendingNov, MontlyInsertionJson.PendingDec, ]
                },
                {
                    name: "Approved Cards",
                    type: "area",
                    data: [MontlyInsertionJson.ApprovedJan, MontlyInsertionJson.ApprovedFeb, MontlyInsertionJson.ApprovedMarch, MontlyInsertionJson.ApprovedApril, MontlyInsertionJson.ApprovedMay, MontlyInsertionJson.ApprovedJun, MontlyInsertionJson.ApprovedJuly, MontlyInsertionJson.ApprovedAugust, MontlyInsertionJson.ApprovedSep, MontlyInsertionJson.ApprovedOct, MontlyInsertionJson.ApprovedNov, MontlyInsertionJson.ApprovedDec, ]
                },
                {
                    name: "Printed Cards",
                    type: "line",
                    data: [MontlyInsertionJson.PrintedJan, MontlyInsertionJson.PrintedFeb, MontlyInsertionJson.PrintedMarch, MontlyInsertionJson.PrintedApril, MontlyInsertionJson.PrintedMay, MontlyInsertionJson.PrintedJun, MontlyInsertionJson.PrintedJuly, MontlyInsertionJson.PrintedAugust, MontlyInsertionJson.PrintedSep, MontlyInsertionJson.PrintedOct, MontlyInsertionJson.PrintedNov, MontlyInsertionJson.PrintedDec, ]
                }
            ],
            fill: {
                opacity: [.85, .25, 1],
                gradient: {
                    inverseColors: !1,
                    shade: "light",
                    type: "vertical",
                    opacityFrom: .85,
                    opacityTo: .55,
                    stops: [0, 100, 100, 100]
                }
            },
            labels: ["Jan", "Feb", "March", "April", "May", "Jun", "July", "August", "Sep", "Oct", "Nov", "Dec"],
            markers: {
                size: 0
            },
            xaxis: {
                type: "date"
            },
            yaxis: {
                title: {
                    text: "Cards"
                }
            },
            tooltip: {
                shared: !0,
                intersect: !1,
                y: {
                    formatter: function(e) {
                        return void 0 !== e ? e.toFixed(0) + " Cards" : e
                    }
                }
            },
            grid: {
                borderColor: "#f1f1f1"
            }
        };

        var MontlyDataInsertion = new ApexCharts(document.querySelector("#DataInsertionChart"), MontlyInsertion);
        MontlyDataInsertion.render();


    })();





    // Gender base Chart
    (async () => {
        const Gender_ChartJson = await fetch('<?php echo e(route('Gender_Chart')); ?>').then(response => response.json());

        var GenderChart = {
            series: [Gender_ChartJson.Male, Gender_ChartJson.Female],
            chart: {
                width: 380,
                type: 'pie',
            },
            title: {
                text: "",
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


    })();




    // Family Status base Chart
    (async () => {
        const FamilyStatus_ChartJson = await fetch('<?php echo e(route('FamilyStatus_Chart')); ?>').then(response => response.json());
        var FamilyStatusChart = {
            chart: {
                height: 400,
                type: "donut"
            },
            title: {
                text: "",
                align: "left",
                style: {
                    fontWeight: "500"
                }
            },
            series: [FamilyStatus_ChartJson.Poor, FamilyStatus_ChartJson.LowIncome, FamilyStatus_ChartJson.Widow, FamilyStatus_ChartJson.Orphans, FamilyStatus_ChartJson.DisabledIndividual, FamilyStatus_ChartJson.ElderlyIndividual, FamilyStatus_ChartJson.DisplacedFamily, FamilyStatus_ChartJson.DisasterAffected],
            labels: ['Poor', 'Low Income', 'Widow', 'Orphans', 'Disabled Individual', 'Elderly Individual', 'Displaced Family', 'Disaster Affected'],
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


    })();





    // all in one care card operation Chart
    (async () => {
        const AllinOne_ChartJson = await fetch('<?php echo e(route('AllinOne_Chart')); ?>').then(response => response.json());
        var AllinOne = {
            series: [AllinOne_ChartJson.Pending, AllinOne_ChartJson.Approved, AllinOne_ChartJson.Printed,  AllinOne_ChartJson.Rejected],
            chart: {
                height: 270,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    offsetY: 0,
                    startAngle: 0,
                    endAngle: 270,
                    hollow: {
                        margin: 5,
                        size: '30%',
                        background: 'transparent',
                        image: undefined,
                    },
                    dataLabels: {
                        name: {
                            show: false,
                        },
                        value: {
                            show: false,
                        }
                    }
                }
            },
            colors: ['#f1b44c',  '#34c38f', '#74788d', '#f46a6a', ],
            labels: ['Pending',  'Approved', 'Printed', 'Rejected'],
            legend: {
                show: true,
                floating: true,
                fontSize: '12px',
                position: 'left',
                offsetX: 0,
                offsetY: 0,
                labels: {
                    useSeriesColors: true,
                },
                markers: {
                    size: 0
                },
                formatter: function(seriesName, opts) {
                    return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
                },
                itemMargin: {
                    vertical: 3
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var AllinOneChart = new ApexCharts(document.querySelector("#AllinOne"), AllinOne);
        AllinOneChart.render();

    })();












    (async () => {

        const ProvincialData = await fetch('<?php echo e(route('ProvincialData_Chart')); ?>').then(response => response.json());
        const topology = await fetch('<?php echo e(URL::asset('/assets/libs/afghanistanmap/af-all.topo.json')); ?>').then(response => response.json());




        const data = [
            ['af-kt', ProvincialData.khost],
            ['af-pk', ProvincialData.paktika],
            ['af-gz', ProvincialData.ghazni],
            ['af-bd', ProvincialData.badakhshan],
            ['af-nr', ProvincialData.nuristan],
            ['af-kr', ProvincialData.kunar],
            ['af-kz', ProvincialData.kunduz],
            ['af-ng', ProvincialData.nangarhar],
            ['af-tk', ProvincialData.takhar],
            ['af-bl', ProvincialData.baghlan],
            ['af-kb', ProvincialData.kabul],
            ['af-kp', ProvincialData.kapisa],
            ['af-2030', ProvincialData.panjshir],
            ['af-la', ProvincialData.laghman],
            ['af-lw', ProvincialData.logar],
            ['af-pv', ProvincialData.parwan],
            ['af-sm', ProvincialData.samangan],
            ['af-vr', ProvincialData.wardak],
            ['af-pt', ProvincialData.paktya],
            ['af-bg', ProvincialData.badghis],
            ['af-hr', ProvincialData.herat],
            ['af-bk', ProvincialData.balkh],
            ['af-jw', ProvincialData.jawzjan],
            ['af-bm', ProvincialData.bamyan],
            ['af-gr', ProvincialData.ghor],
            ['af-fb', ProvincialData.faryab],
            ['af-sp', ProvincialData.sar_e_pol],
            ['af-fh', ProvincialData.farah],
            ['af-hm', ProvincialData.helmand],
            ['af-nm', ProvincialData.nimroz],
            ['af-2014', ProvincialData.daykundi],
            ['af-oz', ProvincialData.uruzgan],
            ['af-kd', ProvincialData.kandahar],
            ['af-zb', ProvincialData.zabul]
        ];

        // Create the chart
        Highcharts.mapChart('AfghanistanChart', {
            chart: {
                map: topology
            },

            title: {
                text: '',
                align: "left",
                style: {
                    color: "#444",
                    fontWeight: "500"
                }
            },



            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 0
            },

            series: [{
                data: data,
                name: 'Total',
                states: {
                    hover: {
                        color: '#556ee6'
                    }
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }]
        });

    })();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/index.blade.php ENDPATH**/ ?>