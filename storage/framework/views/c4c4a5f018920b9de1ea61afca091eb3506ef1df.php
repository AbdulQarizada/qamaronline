

<?php $__env->startSection('title'); ?> Users List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('IndexUserManagement')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>

    </div>
    <!-- <div class="col-6">
                                <h1 class="fw-medium font-size-24 ">Orphans List</h1>
        </div> -->
</div>

<div class="row">
    <div class="col-12 ">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-warning  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">USERS</p>

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
            <option value="<?php echo e(route('AllUser')); ?>">Please Filter Your Choices</option>

            <option value="<?php echo e(route('AllUser')); ?>">All</option>
            <option value="<?php echo e(route('ActivatedUser')); ?>">Active</option>
            <option value="<?php echo e(route('DeActivatedUser')); ?>">InActive</option>





        </select>
    </div>
    <div class="col-9 ">
        <div class="button">
            <!-- <a href="<?php echo e(route('AllGridOrphans')); ?>" class="btn  btn-lg waves-effect  waves-light mb-3 m-1 float-end"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a> -->
            <a href="<?php echo e(route('CreateUser')); ?>" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 m-1 float-end">ADD USER</a>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <h3 class="card-header bg-warning text-white"></h3>
            <div class="card-body">
                <!-- <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <select class="form-select  form-select-lg  <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  onchange="window.location.href=this.value;" 
>
                                   <option value="<?php echo e(route('AllQamarCareCard')); ?>">Please Filter Your Choices</option>

                                    <option value="<?php echo e(route('AllQamarCareCard')); ?>">All</option>
                                    <option value="<?php echo e(route('PendingQamarCareCard')); ?>">Pending</option>
                                    <option value="<?php echo e(route('ApprovedQamarCareCard')); ?>">Approved</option>
                                    <option value="<?php echo e(route('PrintedQamarCareCard')); ?>">Printed</option>
                                    <option value="<?php echo e(route('ReleasedQamarCareCard')); ?>">Released</option>
                                    <option value="<?php echo e(route('RejectedQamarCareCard')); ?>">Rejected</option>



                                 

                                    </select>
                                </div>
                            </div>
                    </div> -->

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone Numbers</th>
                            <th>JOB</th>
                            <th>Status</th>
                            <th>Created By</th>
                            <th>Actions</th>

                        </tr>
                    </thead>


                    <tbody>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data -> id); ?></td>
                            <td>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> FirstName); ?> <?php echo e($data -> LastName); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> email); ?></p>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> ProvinceName); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($data -> DistrictName); ?></p>

                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($data -> PrimaryNumber); ?></a></h5>
                                    <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($data -> SecondaryNumber); ?></p>
                                </div>
                            </td>
                            <td>
                                <?php echo e($data -> Job); ?>

                            </td>

                            <td>
                                <div>


                                    <?php if($data -> IsActive == 1): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></h5>

                                    <?php endif; ?>
                                    <?php if($data -> IsActive != 1): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Active</a></h5>

                                    <?php endif; ?>

                                </div>
                            </td>
                            <td>
                                <?php if( $data -> Created_By !=""): ?>

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data ->  UFirstName); ?> <?php echo e($data ->  ULastName); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($data ->  UJob); ?></p>

                                </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="<?php echo e(route('StatusUser', ['data' => $data -> id])); ?>" class="btn btn-warning waves-effect waves-light">
                                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                    </a>
                                    <a href="<?php echo e(route('EditUser', ['data' => $data -> id])); ?>" class="btn btn-info waves-effect waves-light">
                                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                                    </a>
                                    <?php if( Auth::user() -> IsSuperAdmin == 1): ?>
                                    <a href="<?php echo e(route('RoleUser', ['data' => $data -> id])); ?>" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-user-plus    font-size-16 align-middle"></i>
                                    </a>
                                    <a href="<?php echo e(route('RoleUser', ['data' => $data -> id])); ?>" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" class="btn btn-danger waves-effect waves-light">
                                        <i class="mdi mdi-lock-reset    font-size-16 align-middle"></i>
                                    </a>
                                    <?php endif; ?>


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



<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reset Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form class="needs-validation" action="<?php echo e(route('ResetPasswordUser', [$data -> id])); ?>" method="POST" enctype="multipart/form-data" novalidate>
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12">
                                    <div class="mb-3 position-relative">
                                        <label for="password" class="form-label ">New Password <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="hstack gap-3">
                                            <input class="form-control form-control-lg me-auto <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('password')); ?>" type="text" name="password" id="QCC" readonly>
                                            <button type="button" class="btn btn-lg btn-outline-danger" onclick="Random();"><i class=" bx bxs-magic-wand  font-size-16 align-middle"></i> </button>
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>

                    </div>
                    <button class="btn btn-success btn-lg" type="submit">Change </button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


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


    function Random() {
        const result = Math.random().toString(36).substring(2,7);
        document.getElementById('QCC').value = result;
    };

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/SystemManagement/User/All.blade.php ENDPATH**/ ?>