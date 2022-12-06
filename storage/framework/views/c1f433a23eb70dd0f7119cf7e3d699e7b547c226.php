
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('AllSponsor')); ?>" class="btn btn-outline-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-outline-dark  waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-nowrap">
                <tr>
                    <td>
                        <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/Users/Profiles/'.$data -> Profile)); ?>" class="badge badge-soft-info">
                            <img src="<?php echo e(URL::asset('/uploads/Users/Profiles/'.$data -> Profile)); ?>" style="width: 130px; height: 135px;" class="rounded">
                        </a>
                    </td>
                    <td style="float:right;">
                        <div class="text-center">
                            <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>
                            <div class="mb-3" class="rounded">
                                <?php echo DNS2D::getBarcodeSVG(''.$data->id, 'QRCODE', 6, 6, true); ?>

                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">PEROSNAL INFORMATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">First Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FirstName); ?> </td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Last Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> LastName); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> email); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Password</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><a href="#" class="badge badge-soft-success">Saved</a></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> PrimaryNumber); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SecondaryNumber); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Sponsored Orphans</h5>
    <?php $__currentLoopData = $orphans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orphan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-2 col-sm-6 mb-4">
        <a href="<?php echo e(route('StatusOrphans', ['data' => $orphan -> id])); ?>">
            <div class="card-one text-center border border-secondary">
                <div class="card-body">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                            <?php if($orphan -> Gender_ID == 60): ?>
                            <!-- if male -->
                            <img class="rounded-circle avatar-sm" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/avatar-male.jpg')); ?>" alt="">
                            <?php endif; ?>
                            <?php if($orphan -> Gender_ID == 61): ?>
                            <!-- if female -->
                            <img class="rounded-circle avatar-sm" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/avatar-female.jpg')); ?>" alt="">
                            <?php endif; ?>
                        </span>
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="<?php echo e(route('StatusOrphans', ['data' => $orphan -> id])); ?>" class="text-dark"><?php echo e($orphan -> FirstName); ?> <?php echo e($orphan -> LastName); ?></a></h5>
                    <p class="text-muted"><?php echo e($orphan -> IntroducerName); ?> </p>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="contact-links d-flex">
                        <div class="flex-fill">
                            <p href="">Gender: <?php echo e($orphan -> Gender_ID == 60 ? 'Male' : 'Female'); ?> </p>
                        </div>
                        <div class="flex-fill">
                            <p href="">Age: <?php echo e(\Carbon\Carbon::parse($orphan -> DOB)->diff(\Carbon\Carbon::now())->format('%y')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                <?php echo $orphans -> links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($orphans -> total()); ?> Total Records</span>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-nowrap">
            <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">STATUS</h5>
            <?php if($data -> IsOrphanSponsor == 1): ?>
            <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Orphan Sponsor</a></span>
            <?php endif; ?>
            <?php if($data -> IsActive == 1): ?>
            <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Active</a></span>
            <?php endif; ?>
            <?php if($data -> IsActive != 1): ?>
            <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-danger">InActive</a></span>
            <?php endif; ?>
        </table>
        <?php if($data -> IsActive == 1): ?>
        <a href="<?php echo e(route('DeActivateSponsor', ['data' => $data -> id])); ?>" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded w-lg  deactivate m-3" data-toggle="tooltip" data-placement="top" title="DeActivate">
            De-ACTIVATE
        </a>
        <?php endif; ?>
        <?php if($data -> IsActive == 0): ?>
        <a href="<?php echo e(route('ActivateSponsor', ['data' => $data -> id])); ?>" class="btn btn-outline-success btn-lg waves-effect  waves-light btn-rounded w-lg activate m-3" data-toggle="tooltip" data-placement="top" title="Activate">
            ACTIVATE
        </a>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>
<script>
    $('.activate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be activated!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.deactivate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be deactivated!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Sponsor/Status.blade.php ENDPATH**/ ?>