<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('root')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light">
            <i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back
        </a>
    </div>
</div>
<div class="row mt-4">
    <?php if(Auth::user()->IsOrphanRelief == 1): ?>
    <div class="mt-4 mb-4">
        <p class="my-0 fw-medium text-dark text-muted card-title font-size-24 text-wrap text-uppercase">Orphan and Sponsorships</p>
    </div>
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
                                    <i class="mdi mdi-account-details-outline text-primary display-5 "></i>
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
                                    <i class="mdi mdi-cash-multiple text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Payments</p>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Index.blade.php ENDPATH**/ ?>