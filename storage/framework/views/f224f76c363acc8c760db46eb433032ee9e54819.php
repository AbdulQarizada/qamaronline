

<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('AllOrphans')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-dark  waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div>
            <div>
                <div class="table-responsive">
                    <table class="table table-nowrap">
                        <tr>
                            <td>
                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" class="badge badge-soft-info">
                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" style="width: 130px; height: 135px;" class="rounded">
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <!-- <img src="<?php echo e(URL::asset('/assets/images/letterhead.png')); ?>" style="width: 400px; height: 100%;" class="rounded-circle"> -->

                            </td>
                            <td style="float:right;">
                                <div class="">
                                    <div class="text-center">
                                        <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>

                                        <div class="mb-3" class="rounded">
                                            <?php echo DNS2D::getBarcodeSVG(''.$data->TazkiraID, 'QRCODE', 6, 6, true); ?>



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
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">What type of job you can do?</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FutureJob); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Education Level</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> EducationLevel); ?></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Qamar Care Card Number</td>
                        </tr>

                    </table>

                    <table class="table table-nowrap">
                        <h5 style="font-weight: bold;" class="card-header  text-dark">ADDRESS AND CONTACT</h5>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> PrimaryNumber); ?></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SecondaryNumber); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Emergency Number</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> RelativeNumber); ?></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Province); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> District); ?></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Village); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Email); ?></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                        </tr>

                    </table>

                    <table class="table table-nowrap">
                        <h5 style="font-weight: bold;" class="card-header  text-dark">FAMILY AND INCOME INFORMATION</h5>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Father's Name</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FatherName); ?></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Spuose's Name</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SpuoseName); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Eldest Son Age</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> EldestSonAge); ?></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Income</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> MonthlyFamilyIncome); ?> (AFGHANI)</td>
                        </tr>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Expenses</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> MonthlyFamilyExpenses); ?> (AFGHANI)</td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Number of Family Members</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> NumberFamilyMembers); ?> (AFGHANI)</td>
                        </tr>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Income Streem</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> IncomeStreem); ?></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Level Of Poverty</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;">



                                <div>
                                    <?php if( $data -> LevelPoverty == 1): ?>
                                    <i class="bx bxs-star text-warning font-size-12"></i>
                                    <i class="bx bxs-star text-secondary font-size-14"></i>
                                    <i class="bx bxs-star text-secondary font-size-16"></i>
                                    <i class="bx bxs-star text-secondary font-size-18"></i>
                                    <i class="bx bxs-star text-secondary font-size-20"></i>

                                    <?php endif; ?>
                                    <?php if( $data -> LevelPoverty == 2): ?>
                                    <i class="bx bxs-star text-warning font-size-12"></i>
                                    <i class="bx bxs-star text-warning font-size-14"></i>
                                    <i class="bx bxs-star text-secondary font-size-16"></i>
                                    <i class="bx bxs-star text-secondary font-size-18"></i>
                                    <i class="bx bxs-star text-secondary font-size-20"></i>
                                    <?php endif; ?>
                                    <?php if( $data -> LevelPoverty == 3): ?>
                                    <i class="bx bxs-star text-warning font-size-12"></i>
                                    <i class="bx bxs-star text-warning font-size-14"></i>
                                    <i class="bx bxs-star text-warning font-size-16"></i>
                                    <i class="bx bxs-star text-secondary font-size-18"></i>
                                    <i class="bx bxs-star text-secondary font-size-20"></i>
                                    <?php endif; ?>
                                    <?php if( $data -> LevelPoverty == 4): ?>
                                    <i class="bx bxs-star text-warning font-size-12"></i>
                                    <i class="bx bxs-star text-warning font-size-14"></i>
                                    <i class="bx bxs-star text-warning font-size-16"></i>
                                    <i class="bx bxs-star text-warning font-size-18"></i>
                                    <i class="bx bxs-star text-secondary font-size-20"></i>
                                    <?php endif; ?>
                                    <?php if( $data -> LevelPoverty == 5): ?>
                                    <i class="bx bxs-star text-warning font-size-12"></i>
                                    <i class="bx bxs-star text-warning font-size-14"></i>
                                    <i class="bx bxs-star text-warning font-size-16"></i>
                                    <i class="bx bxs-star text-warning font-size-18"></i>
                                    <i class="bx bxs-star text-warning font-size-20"></i>
                                    <?php endif; ?>
                                </div>




                            </td>
                        </tr>


                    </table>
                    <table class="table table-nowrap">
                        <h5 style="font-weight: bold;" class="card-header  text-dark">DOCUMENTS</h5>
                        <tr>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"><a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)); ?>" class="badge badge-soft-info"><?php echo e($data -> FirstName); ?> <?php echo e($data -> LastName); ?> Tazkira</a></td>
                            <td style="width: 20%; border: 2px solid #000; padding: 5px;">Other</td>
                            <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                        </tr>

                    </table>


                </div>
            </div>
            <br />
            <div>
                <div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <?php if( $data -> Status == 'Approved' || $data -> Status == 'Rejected' || $data -> Status == 'Printed' || $data -> Status == 'Released'): ?>
            <a href="<?php echo e(route('ReInitiateOrphans', ['data' => $data -> id])); ?>" class="btn btn-info waves-effect waves-light reinitiate m-3">
                <i class="bx bx-time-five  font-size-16 align-middle"></i>Re-Initiate
            </a>
            <?php endif; ?>
            <?php if( $data -> Status == 'Pending'): ?>
            <a href="<?php echo e(route('ApproveOrphans', ['data' => $data -> id])); ?>" class="btn btn-success waves-effect waves-light approve m-3">
                <i class="bx bx-check-circle font-size-16 align-middle"></i>Approve
            </a>
            <a href="<?php echo e(route('RejectOrphans', ['data' => $data -> id])); ?>" class="btn btn-danger waves-effect waves-light reject m-3">
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
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/Status.blade.php ENDPATH**/ ?>