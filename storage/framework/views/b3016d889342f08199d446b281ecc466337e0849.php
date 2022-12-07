
<?php $__env->startSection('title'); ?> Dashboard <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
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
            <div class="col-sm-12">
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
        </div>
    </div>
</div>
<br />
<br />
<?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>
<div class="row">
    <?php if(Auth::user()->IsOrphanRelief == 1 ||Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1): ?>
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Projects</h1>
    <?php endif; ?>
    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsOrphanSponsor == 1 ): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('IndexOrphansRelief')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-child  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Orphans Relief</p>
                                </div>
                            </div>
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
                                </div>
                            </div>
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
                                </div>
                            </div>
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
                                </div>
                            </div>
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
                                </div>
                            </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
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
                                </div>
                            </div>
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
                                </div>
                            </div>
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
                                </div>
                            </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
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
                                    <i class="mdi mdi-application-cog display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">System</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if(Cookie::get('Layout') == 'LayoutSidebar'): ?>
<?php if(Auth::user()->IsQamarCareCard == 1): ?>
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
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div id="AllInOne" class="apex-charts" dir="ltr"></div>
                <h5 class=" text-dark text-center">Care Cards</h5>
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
<?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo \Akaunting\Apexcharts\Chart::loadScript(); ?>

<?php $__env->startSection('script'); ?>
<!-- Afghanistan Map -->
<script src="<?php echo e(URL::asset('/assets/libs/afghanistanmap/highmaps.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/afghanistanmap/exporting.js')); ?>"></script>
<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<!-- form advanced init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>
<!-- Reporting Charts for Care Card -->
<script src="<?php echo e(URL::asset('/assets/js/ReportChartJs/CareCardCharts.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/index.blade.php ENDPATH**/ ?>