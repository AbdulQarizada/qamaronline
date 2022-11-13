

<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('root')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<div class="row">
    <?php if(Auth::user()->IsOrphanRelief == 1): ?>
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Orphans</h1>
    <?php endif; ?>

    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-alert text-primary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">All Orphans</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-alert text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Waiting</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-alert text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Sponsored</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>

        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->



<div class="row">
    <?php if(Auth::user()->IsOrphanRelief == 1): ?>
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Sponsors</h1>
    <?php endif; ?>
    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllSponsor')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-male text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">All Sponsors</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllSponsor')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-male text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Active</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllSponsor')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-male text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">InActive</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>

        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->


<div class="row">
    <?php if(Auth::user()->IsOrphanRelief == 1): ?>
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Payments</h1>
    <?php endif; ?>
    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllPayment')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cash-outline text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">All Payments</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllPayment')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cash-outline text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Pending</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllPayment')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cash-outline text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Successfull</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllPayment')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cash-outline text-danger display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Failed</p>
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
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>


        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->



<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Index.blade.php ENDPATH**/ ?>