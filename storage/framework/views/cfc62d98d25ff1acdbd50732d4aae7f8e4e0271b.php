

<?php $__env->startSection('title'); ?> USER DETAILS <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-12">
           <a href="<?php echo e(route('AllUser')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
           <a href="javascript:window.print()" class="btn btn-dark  waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
      
        </div>
     </div>
     
                       <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div >
                                    <div class="table-responsive">
                                    <table class="table table-nowrap">
                                             <tr>
                                                <td>
                                                     <img src="<?php echo e(URL::asset('/uploads/User/Employees/Profiles/'.$data -> Profile)); ?>" style="width: 130px; height: 135px;" class="rounded">
                                                </td>
                                                <td style="text-align: center;">
                                                     <!-- <img src="<?php echo e(URL::asset('/assets/images/letterhead.png')); ?>" style="width: 400px; height: 100%;" class="rounded-circle"> -->

                                                </td>
                                                 <td  style="float:right;">
                                                    <div class="">
                                                         <div class="text-center">
                                                            <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>

                                                            <div class="mb-3" class="rounded">
                                                                 <?php echo DNS2D::getBarcodeSVG(''.$data->Tazkira_ID,  'QRCODE', 6, 6, true); ?> 

                                                                 
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
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Tazkira_ID); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Date of Birth</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> DOB); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Gender); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Job</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Job); ?></td>
                                                    </tr>
                                                  
                                                    
                                                    <!-- <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target=".exampleModal">
                                                                [View Tazkira]
                                                            </a>
                                                        </td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> TazkiraID); ?></td>
                                                    </tr> -->
                                                  
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
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> email); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Province); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> District); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Village); ?></td>
                                                    </tr>
                                                  
                                            </table>

                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">ROLE AND PERMISSION</h5>
                                                <?php if($data -> IsEmployee == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Employee</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsActive == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Active</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsActive != 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-danger">InActive</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsSuperAdmin == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Super Admin</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsOrphanSponsor == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Orphan Sponsor</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsOrphanRelief == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Orphan Relief</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsAidAndRelief == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Aid And Relief</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsWash == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Wash</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsEducation == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Education</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsInitiative == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Initiative</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsMedicalSector == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Medical Sector</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsFoodAppeal == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Food Appeal</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsQamarCareCard == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Qamar Care Card</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsAppealsDistributions == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Appeals Distributions</a></span>
                                                <?php endif; ?>
                                                <?php if($data -> IsDonorsAndDonorBoxes == 1): ?>
                                                <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Donors And Donor Boxes</a></span>
                                                <?php endif; ?>
                                                  
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
                    <?php if($data -> IsActive == 1): ?>
                    <a href="<?php echo e(route('DeActivateUser', ['data' => $data -> id])); ?>" class="btn btn-danger waves-effect waves-light reinitiate m-3">
                       De-ACTIVATE
                    </a>
                    <?php endif; ?>
                    <?php if($data -> IsActive == 0): ?>
                    <a href="<?php echo e(route('ActivateUser', ['data' => $data -> id])); ?>" class="btn btn-success waves-effect waves-light approve m-3">
                        ACTIVATE
                    </a>
                    <a href="<?php echo e(route('DeleteUser', ['data' => $data -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>
        </div>
     </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>

<script>
    $('.reinitiate').on('click', function (event) {
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

$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

$('.approve').on('click', function (event) {
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

$('.reject').on('click', function (event) {
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

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Qamar\QamarOnline\qamaronline\resources\views/SystemManagement/User/Status.blade.php ENDPATH**/ ?>