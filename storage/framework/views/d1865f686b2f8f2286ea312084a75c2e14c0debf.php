
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<body class="bg-white">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row bg-white">
    <div class="col-md-12">
        <div class="alert alert-success <?php echo e(!Session::has('done') ? 'd-none' : ''); ?>">
            <?php echo e(Session::get('done')); ?>

        </div>
    </div>
</div>
<?php if($datas-> count() > 0): ?>
<div class="row bg-white">
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3">
        <div class="product-container">
            <div class="product-image">
                <a target="_blank" href="<?php echo e(route('AddToCartPayment', ['data' => $data -> id])); ?>" class="product-link btn bg-warning text-white rounded">
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
<div class="row bg-white">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
            <?php echo $datas->links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($datas->total()); ?> Total Records</span>
        </ul>
    </div>
</div>
<?php else: ?>
<div class="row bg-white">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
           <span class="m-2  text-danger display-4">No Orphan to sponsor at this time</span>
        </ul>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/AllGridWordpress.blade.php ENDPATH**/ ?>