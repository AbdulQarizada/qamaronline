

<?php $__env->startSection('title'); ?> Qamar Care List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(Auth::check()): ?>


<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('IndexCareCard')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<?php endif; ?>
<div class="row justify-content-center">
    <div class="col-lg-8 ">
        <h5 class="display-6 mb-4">Verify Your Qamar Care Card</h5>
        <form action="<?php echo e(route('SearchCareCard')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="hstack gap-3">
                <label class="form-label font-size-24">QCC-</label>
                <input class="form-control form-control-lg me-auto" type="text" name="ID">
                <button type="submit" class="btn btn-lg btn-primary">Search</button>
                <div class="vr"></div>
                <button type="reset" class="btn btn-lg btn-outline-danger">Reset</button>

            </div>
        </form>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<br />
<br />
<?php if($qamarcarecards != null): ?>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table align-middle table-nowrap table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 70px;">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">QCC Number</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $qamarcarecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qamarcarecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($qamarcarecard -> id); ?>

                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FirstName); ?> <?php echo e($qamarcarecard -> LastName); ?></a></h5>
                            <!-- <p class="text-muted mb-0">UI/UX Designer</p> -->
                        </td>
                        <td>QCC- <?php echo e($qamarcarecard -> QCC); ?></td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($qamarcarecard -> PrimaryNumber); ?></a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($qamarcarecard -> SecondaryNumber); ?></p>
                                <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($qamarcarecard -> RelativeNumber); ?></p>
                            </div>
                        </td>
                        <td>
                            <?php echo e($qamarcarecard -> created_at); ?>

                        </td>
                        <td>
                            <ul class="list-inline font-size-20 contact-links mb-0">
                                <li class="list-inline-item px-2">
                                    <?php if($qamarcarecard -> Status == 'Pending'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">Under Review</a></h5>

                                    <?php endif; ?>

                                    <?php if($qamarcarecard -> Status == 'Approved'): ?>
                                    <i class="bx bx-check-circle text-success"></i>
                                    <?php endif; ?>

                                    <?php if($qamarcarecard -> Status == 'Rejected'): ?>
                                    <i class="bx bx-x-circle text-danger "></i>
                                    <?php endif; ?>

                                    <?php if($qamarcarecard -> Status == 'Printed'): ?>
                                    <i class="bx bx-x-circle text-danger "></i>
                                    <?php endif; ?>



                                </li>
                            </ul>
                        </td>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>

    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Required datatable js -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/CardCard/Operations/Verify.blade.php ENDPATH**/ ?>