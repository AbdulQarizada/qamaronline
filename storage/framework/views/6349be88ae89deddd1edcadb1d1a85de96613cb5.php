

<?php $__env->startSection('title'); ?> Qamar Care List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('IndexEducation')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>

    </div>
</div>

<div class="row">
    <div class="col-12 ">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-info  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">APPLICANTS</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-3">
        <select class="form-select  form-select-lg mb-3 <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="window.location.href=this.value;">

            <option value="<?php echo e(route('AllApplicantEducation')); ?>">Please Filter Your Choices</option>

            <option value="<?php echo e(route('AllApplicantEducation')); ?>">All</option>
            <option value="<?php echo e(route('PendingApplicantsEducation')); ?>">Pending</option>
            <option value="<?php echo e(route('ApprovedApplicantsEducation')); ?>">Approved</option>
            <option value="<?php echo e(route('RejectedApplicantsEducation')); ?>">Rejected</option>




        </select>
    </div>
    <div class="col-9 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
        <a href="<?php echo e(route('CreateApplicationEducation')); ?>" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">ADD APPLICANTS</a>

        <!-- <a  href="<?php echo e(route('SuccessApplicationEducation')); ?>" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">Sucess</a> -->

    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <h3 class="card-header bg-info text-white"></h3>
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone Numbers</th>
                            <th>Education</th>
                            <th>Date of Birth</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </tr>
                    </thead>


                    <tbody>
                        <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($applicant -> id); ?></td>
                            <td>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($applicant -> FirstName); ?> <?php echo e($applicant -> LastName); ?></a></h5>
                                <p class="text-muted mb-0">TazkiraID:<?php echo e($applicant -> TazkiraID); ?></p>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($applicant -> CurrentProvince); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($applicant -> CurrentDistrict); ?></p>

                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($applicant -> PrimaryNumber); ?></a></h5>
                                    <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($applicant -> SecondaryNumber); ?></p>
                                    <!-- <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($applicant -> RelativeNumber); ?></p> -->
                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($applicant -> SchoolName); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($applicant -> SchoolGraduationDate); ?></p>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger"><?php echo e($applicant -> DOB); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e(\Carbon\Carbon::parse($applicant -> DOB)->diff(\Carbon\Carbon::now())->format('%y Years Old')); ?></p>
                                </div>
                            </td>
                            <td>
                                <div>


                                    <?php if($applicant -> Status == 'Pending'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary"><?php echo e($applicant -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($applicant -> created_at); ?></p>

                                    <?php endif; ?>

                                    <?php if($applicant -> Status == 'Approved'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($applicant -> Status); ?> </a></h5>
                                    <p class="text-muted mb-0"><?php echo e($applicant -> created_at); ?></p>

                                    <?php endif; ?>

                                    <?php if($applicant -> Status == 'Rejected'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger"><?php echo e($applicant -> Status); ?> </a></h5>
                                    <p class="text-muted mb-0"><?php echo e($applicant -> created_at); ?></p>

                                    <?php endif; ?>



                                    <?php if($applicant -> Status == 'ReInitiated'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info"><?php echo e($applicant -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($applicant -> created_at); ?></p>

                                    <?php endif; ?>

                                    <?php if($applicant -> Status == 'Released'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($applicant -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($applicant -> created_at); ?></p>

                                    <?php endif; ?>

                                    <?php if($applicant -> Status == 'Printed'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark"><?php echo e($applicant -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($applicant -> created_at); ?></p>

                                    <?php endif; ?>

                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="<?php echo e(route('StatusApplicantEducation', ['data' => $applicant -> id])); ?>" class="btn btn-warning waves-effect waves-light">
                                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Required datatable js -->
<script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>


<!-- Datatable init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>

<script>
    $('.delete-confirm').on('click', function(event) {
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

    $('.release').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This card is released!',
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
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/Education/Application/All.blade.php ENDPATH**/ ?>