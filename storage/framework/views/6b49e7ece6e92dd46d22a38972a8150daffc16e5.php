

<?php $__env->startSection('title'); ?> My Orphan <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-4">
                        <div class="avatar-md">
                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="" class="avatar-lg rounded-circle">
                            </span>
                        </div>
                    </div>


                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="text-truncate font-size-15"><a href="javascript: void(0);" class="text-dark"><?php echo e($data -> FirstName); ?></a></h5>
                        <p class="text-muted mb-4 text-uppercase"><?php echo e($data -> ProvinceName); ?> - Afghanistan</p>
                        <!-- <div class="avatar-group">
                            <div class="avatar-group-item">
                                <a href="javascript: void(0);" class="d-inline-block">
                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                </a>
                            </div>
                            <div class="avatar-group-item">
                                <a href="javascript: void(0);" class="d-inline-block">
                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                </a>
                            </div>
                            <div class="avatar-group-item">
                                <a href="javascript: void(0);" class="d-inline-block">
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                            A
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="avatar-group-item">
                                <a href="javascript: void(0);" class="d-inline-block">
                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 border-top">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3">
                        <span class="badge bg-success">Sponsored</span>
                    </li>
                    <li class="list-inline-item me-3">
                        <i class="bx bx-calendar me-1"></i> <?php echo e($data -> updated_at -> format("d-m-Y")); ?>

                    </li>
                    <!-- <li class="list-inline-item me-3">
                        <i class="bx bx-comment-dots me-1"></i> 214
                    </li> -->
                </ul>
            </div>
        </div>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-2 mb-5">
            <li class="page-item disabled">
                <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
            </li>
            <li class="page-item">
                <a href="javascript: void(0);" class="page-link">1</a>
            </li>
            </li>
            <li class="page-item">
                <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
            </li>
        </ul>
    </div>
</div>
<!-- end row -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Qamar\QamarOnline\qamaronline\resources\views/OrphansRelief/Sponsor/MyOrphan.blade.php ENDPATH**/ ?>