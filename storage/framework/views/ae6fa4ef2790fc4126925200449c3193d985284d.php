


<?php $__env->startSection('title'); ?> Benefeciary Services <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

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


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/BeneficiariesServices.blade.php ENDPATH**/ ?>