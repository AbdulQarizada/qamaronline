
<?php $__env->startSection('title'); ?> Education and Scholarship <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('root')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<div class="row">
    <?php if(Auth::user()->IsEducation == 1): ?>
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Education and Scholarship</h1>
    <?php endif; ?>
    <div class="col-xl-12">
        <div class="row">
            <?php if(Auth::user()->IsEducation == 1): ?>
            <div class="col-md-2 mb-2">
                <a href="<?php echo e(route('AllScholarship')); ?>">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-bullseye-arrow display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Scholarships</p>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/Education/Index.blade.php ENDPATH**/ ?>