

<?php $__env->startSection('title'); ?> Service Provider <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('IndividualServiceProviders')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-dark  waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-nowrap">
                <tr>
                    <td>
                        <img src="<?php echo e(URL::asset('/uploads/QamarCareCard/ServiceProvider/Profiles/'.$data -> Profile)); ?>" style="width: 130px; height: 135px;" class="rounded">
                    </td>
                    <td style="text-align: center;">
                        <!-- <img src="<?php echo e(URL::asset('/assets/images/letterhead.png')); ?>" style="width: 400px; height: 100%;" class="rounded-circle"> -->

                    </td>
                    <td style="float:right;">
                        <div class="">
                            <div class="text-center">
                                <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>

                                <div class="mb-3" class="rounded">
                                    <?php echo DNS2D::getBarcodeSVG(''.$data->QCC, 'QRCODE', 6, 6, true); ?>



                                </div>
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
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira ID</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> TazkiraID); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Date of Birth</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> DOB); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Gender); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Language</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Language); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Current Job</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> CurrentJob); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Profession</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Profession); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Education Level</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> EducationLevel); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Qamar Care Card Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                        <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-danger">QCC-<?php echo e($data -> QCC); ?> </a></h4>
                    </td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Province); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> District); ?></td>
                </tr>

            </table>

            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">SERIVCE AND CONTACT</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> PrimaryNumber); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SecondaryNumber); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Service Province</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> ProvinceService); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Service District</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> DistrictService); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Email); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Service Type</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> ServiceType); ?></td>
                </tr>

            </table>


        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <?php if( $data -> Status == 'Approved' || $data -> Status == 'Rejected'): ?>
        <a href="<?php echo e(route('ReInitiateIndividualServiceProviders', ['data' => $data -> id])); ?>" class="btn btn-info waves-effect waves-light reinitiate m-3">
            <i class="bx bx-time-five  font-size-16 align-middle"></i>Re-Initiate
        </a>
        <?php endif; ?>
        <?php if( $data -> Status == 'Pending'): ?>
        <a href="<?php echo e(route('ApproveIndividualServiceProviders', ['data' => $data -> id])); ?>" class="btn btn-success waves-effect waves-light approve m-3">
            <i class="bx bx-check-circle font-size-16 align-middle"></i>Approve
        </a>
        <a href="<?php echo e(route('RejectIndividualServiceProviders', ['data' => $data -> id])); ?>" class="btn btn-danger waves-effect waves-light reject m-3">
            <i class=" bx bx-x-circle font-size-16 align-middle"></i>Reject
        </a>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>

<script>
    $('.reinitiate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be re initiated!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    // $('.print').on('click', function (event) {
    //     event.preventDefault();
    //     const url = $(this).attr('href');
    //     swal({
    //         title: 'Are you sure?',
    //         text: 'Are you sure that this record is printed!',
    //         icon: 'warning',
    //         buttons: ["Cancel", "Yes!"],
    //     }).then(function(value) {
    //         if (value) {
    //             window.location.href = url;
    //         }
    //     });
    // });

    $('.approve').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be approved!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.reject').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be rejected!',
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
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/CardCard/Services/Providers/Individual/Status.blade.php ENDPATH**/ ?>