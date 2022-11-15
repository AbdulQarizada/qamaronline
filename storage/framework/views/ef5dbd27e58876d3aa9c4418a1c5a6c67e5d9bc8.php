

<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('root')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20 text-upercase"></i>Orphan and Sponsorships</span>
    </div>
</div>
<div class="row mt-4">
    <!-- <?php if(Auth::user()->IsOrphanRelief == 1): ?>
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Orphans</h1>
    <?php endif; ?> -->
    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-details-outline text-warning display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Orphans</p>
                                </div>
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
                                    <i class="mdi mdi mdi-account-child text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Sponsors</p>
                                </div>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Payments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <!-- <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('PendingOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-convert text-dark display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('ApprovedOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-check text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Approved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('RejectedOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cancel-outline text-danger display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Rejected</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('WaitingOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-clock-outline text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Waiting</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('SponsoredOrphans')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-child text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Sponsored</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?> -->
        </div>
    </div>
</div>
<!-- <div class="row">
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
                                    <i class="mdi mdi-account-heart-outline text-warning display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Sponsors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('ActiveSponsor')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-tie-outline text-primary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Active</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->IsOrphanRelief == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('InActiveSponsor')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-tie-voice-off-outline text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">InActive</p>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Payments</p>
                                </div>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Due</p>
                                </div>
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
                                </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div> -->
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Index.blade.php ENDPATH**/ ?>