
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/OrphanGrid.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <?php if(Auth::check()): ?>
    <div class="col-4">
        <a href="<?php echo e(route('IndexOrphansRelief')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
    <?php endif; ?>
</div>
<div class="row mb-3">
    <div class="col-md-4 col-sm-4">
        <div class="mt-2">
            <h5></h5>
        </div>
    </div>
    <div class="col-lg-8 col-sm-6">
        <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
            <div class="search-box me-2">
                <div class="position-relative">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="bx bx-search-alt search-icon"></i>
                </div>
            </div>
            <?php if(Auth::check()): ?>
            <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('AllGridOrphans')); ?>"><i class="bx bx-grid-alt"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('AllOrphans')); ?>"><i class="bx bx-list-ul"></i></a>
                </li>
            </ul>
            <?php endif; ?>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success <?php echo e(!Session::has('done') ? 'd-none' : ''); ?>">
            <?php echo e(Session::get('done')); ?>

        </div>
    </div>
</div>
<div class="row">
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3">
        <div class="product-container">
            <div class="product-image">
                <a href="<?php echo e(route('AddToCartPayment', ['data' => $data -> id])); ?>" class="product-link btn bg-warning text-white rounded">
                    <h3 class="text-white bold">Sponsor Me</h3>
                </a>
                <img class="img-responsive" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="">
            </div>
            <div class="product-description">
                <div class="product-label">
                    <div class="product-name textoverflow">
                        <h1><?php echo e($data -> FirstName); ?> / <?php echo e(\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y')); ?> </h1>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div>
                                    <li class="list-inline-item me-3">
                                        <span class="text-danger text-uppercase">Waiting Since:</span>
                                        <?php echo e($data -> created_at -> format("j F Y")); ?>

                                    </li>
                                    <p class="text-muted text-uppercase"><i class="bx bx-home-alt  font-size-16 align-middle text-primary me-1 "></i> <?php echo e($data -> ProvinceName); ?> - Afghanistan </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
            <?php echo $datas->links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($datas->total()); ?> Total Records</span>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/AllGrid.blade.php ENDPATH**/ ?>