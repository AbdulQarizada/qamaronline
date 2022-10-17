

<?php $__env->startSection('title'); ?> Qamar Care List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('IndexCareCard')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <!-- <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i> CARE CARDS</span> -->
    </div>
</div>


<div class="row">
    <div class="mt-4 mb-4">
        <blockquote class="blockquote border-dark  font-size-14 mb-0">
            <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">CARE CARD OPERATIONS</p>

        </blockquote>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="row">

            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('AllCareCard')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">All CARE CARDS</p>
                                        <h6 class="text-muted mb-0">All CARE CARDS</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-warning">
                                                <i class="bx bx-id-card   font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('PendingCareCard')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">PENDING CARE CARDS</p>
                                        <h6 class="text-muted mb-0">PENDING CARE CARDS</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <!-- <i class="bx bxs-user-rectangle    font-size-24"></i> -->
                                                <h1 class="mb-0 text-white">1</h1>

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('ApprovedCareCard')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">

                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">

                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">APPROVED CARE CARDS</p>
                                        <h6 class="text-muted mb-0">APPROVED CARE CARDS</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <!-- <i class="bx bxs-user-rectangle    font-size-24"></i> -->
                                                <h1 class="mb-0 text-white">2</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('PrintedCareCard')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">PRINTED CARE CARDS</p>
                                        <h6 class="text-muted mb-0">All Printed Care Cards</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <!-- <i class="bx bxs-user-rectangle    font-size-24"></i> -->
                                                <h1 class="mb-0 text-white">3</h1>

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('ReleasedCareCard')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">RELEASED CARE CARDS</p>
                                        <h6 class="text-muted mb-0">All Released Care Cards</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <!-- <i class="bx bxs-user-rectangle    font-size-24"></i> -->
                                                <h1 class="mb-0 text-white">4</h1>

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('RejectedCareCard')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">REJECTED CARE CARDS</p>
                                        <h6 class="text-muted mb-0">All Rejected Care Cards</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-danger">
                                                <i class="bx bx-block text-white  font-size-24"></i>
                                                <!-- <h1 class="mb-0 text-danger">5</h1> -->

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>


        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/CardCard/Operations/Index.blade.php ENDPATH**/ ?>