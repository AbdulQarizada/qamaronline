

<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 ">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-dark  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">My Orphans</p>

                </blockquote>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-4">
                        <div class="avatar-md">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="assets/images/companies/img-1.png" alt="" height="30">
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="text-truncate font-size-15"><a href="javascript: void(0);" class="text-dark"><?php echo e($data ->  FirstName); ?></a></h5>
                        <p class="text-muted mb-4"><?php echo e($data ->  WhyShouldYouHelpMe); ?></p>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 border-top">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3">
                        <span class="badge bg-success">Sponsored</span>
                    </li>
                    <li class="list-inline-item me-3">
                        <i class="bx bx-calendar me-1"></i> End Date: <?php echo e($data ->  Sponsored_EndDate); ?>

                    </li>
                    <li class="list-inline-item me-3 text-success">
                        <i class="mdi mdi-currency-usd me-1"></i>40 Montly
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
            <?php echo $datas->links(); ?> <span class="m-2 text-white badge badge-soft-dark"><?php echo e($datas->total()); ?> Total Records</span>
        </ul>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/MyOrphan.blade.php ENDPATH**/ ?>