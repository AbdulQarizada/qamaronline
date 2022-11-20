
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <table class="table table-nowrap">
                <tr>
                    <td>
                        <div class="avatar-group">
                            <div class="avatar-group-item">
                                <a href="javascript: void(0);" class="d-inline-block">
                                    <img src="<?php echo e(URL::asset('/assets/images/users/avatar-4.jpg')); ?>" alt="" class="rounded-circle avatar-xs">
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>
<script>
    $('.activate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be activated!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.deactivate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be deactivated!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Sponsor/Status.blade.php ENDPATH**/ ?>