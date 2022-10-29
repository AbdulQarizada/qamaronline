

<?php $__env->startSection('title'); ?> Qamar Care List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('IndexFoodPack')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>FOOD PACKS</span>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="mb-3 position-relative">
            <label for="Province_ID" class="form-label">Province</label>
            <div class="input-group">
                <select class="form-select Province form-select-lg <?php $__errorArgs = ['Province_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required name="Province_ID" value="<?php echo e(old('Province_ID')); ?>" id="Province_ID">
                    <option value="">Select Your Province</option>
                    <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($province -> id); ?>"><?php echo e($province -> Name); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
                <?php $__errorArgs = ['Province_ID'];
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
    <div class="col-md-2">
        <div class="mb-3 position-relative">
            <label for="District_ID" class="form-label">District</label>
            <div class="input-group">
                <select class="form-select  District form-select-lg <?php $__errorArgs = ['District_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required name="District_ID" value="<?php echo e(old('District_ID')); ?>" id="District_ID">
                    <option value="">Select Your District</option>


                </select>
                <?php $__errorArgs = ['District_ID'];
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
    <div class="col-md-2">
        <div class="mb-3 position-relative">
            <label for="FamilyStatus_ID" class="form-label">Family Status</label>
            <div class="input-group">

                <select class="form-select form-select-lg <?php $__errorArgs = ['FamilyStatus_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('FamilyStatus_ID')); ?>" required name="FamilyStatus_ID" id="FamilyStatus_ID">
                    <option value="">Select Your Family Status</option>
                    <?php $__currentLoopData = $familystatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $familystatu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($familystatu -> id); ?>"><?php echo e($familystatu -> Name); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['FamilyStatus_ID'];
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
    <div class="col-md-2">
        <div class="mb-3 position-relative">
            <label for="LevelPoverty" class="form-label">Level Of Poverty</label>
            <div class="rating-star">
                <input type="hidden" class="rating <?php $__errorArgs = ['LevelPoverty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('LevelPoverty')); ?>" data-filled="mdi mdi-star text-warning " data-empty="mdi mdi-star-outline text-muted" name="LevelPoverty" id="LevelPoverty" />
                <?php $__errorArgs = ['LevelPoverty'];
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


    <div class="row">
        <div class="col-12">

            <div class="card">
                <h3 class="card-header bg-dark text-white"></h3>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FirstName</th>
                                    <th>Address</th>
                                    <th>Phone Numbers</th>
                                    <th>Family Status</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Select</th>
                                    <!-- <th>Actions</th> -->

                                </tr>
                            </thead>


                            <tbody>
                                <?php $__currentLoopData = $qamarcarecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qamarcarecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <!-- <td><?php echo e($qamarcarecard->id); ?></td> -->
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FirstName); ?> <?php echo e($qamarcarecard -> LastName); ?></a></h5>
                                        <p class="text-muted mb-0">QCC-<?php echo e($qamarcarecard -> QCC); ?></p>
                                    </td>
                                    <td>
                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> ProvinceName); ?></a></h5>
                                            <p class="text-muted mb-0"><?php echo e($qamarcarecard -> DistrictName); ?></p>
                                            <!-- <p class="text-muted mb-0"><?php echo e($qamarcarecard -> Village); ?></p> -->

                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($qamarcarecard -> PrimaryNumber); ?></a></h5>
                                            <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($qamarcarecard -> SecondaryNumber); ?></p>
                                            <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($qamarcarecard -> RelativeNumber); ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FamilyStatus); ?></a></h5>
                                            <?php if( $qamarcarecard -> LevelPoverty == 1): ?>
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-secondary font-size-14"></i>
                                            <i class="bx bxs-star text-secondary font-size-16"></i>
                                            <i class="bx bxs-star text-secondary font-size-18"></i>
                                            <i class="bx bxs-star text-secondary font-size-20"></i>

                                            <?php endif; ?>
                                            <?php if( $qamarcarecard -> LevelPoverty == 2): ?>
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-warning font-size-14"></i>
                                            <i class="bx bxs-star text-secondary font-size-16"></i>
                                            <i class="bx bxs-star text-secondary font-size-18"></i>
                                            <i class="bx bxs-star text-secondary font-size-20"></i>
                                            <?php endif; ?>
                                            <?php if( $qamarcarecard -> LevelPoverty == 3): ?>
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-warning font-size-14"></i>
                                            <i class="bx bxs-star text-warning font-size-16"></i>
                                            <i class="bx bxs-star text-secondary font-size-18"></i>
                                            <i class="bx bxs-star text-secondary font-size-20"></i>
                                            <?php endif; ?>
                                            <?php if( $qamarcarecard -> LevelPoverty == 4): ?>
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-warning font-size-14"></i>
                                            <i class="bx bxs-star text-warning font-size-16"></i>
                                            <i class="bx bxs-star text-warning font-size-18"></i>
                                            <i class="bx bxs-star text-secondary font-size-20"></i>
                                            <?php endif; ?>
                                            <?php if( $qamarcarecard -> LevelPoverty == 5): ?>
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-warning font-size-14"></i>
                                            <i class="bx bxs-star text-warning font-size-16"></i>
                                            <i class="bx bxs-star text-warning font-size-18"></i>
                                            <i class="bx bxs-star text-warning font-size-20"></i>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    <td>
                                        <div>


                                            <?php if($qamarcarecard -> Status == 'Pending'): ?>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                            <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("d-m-Y")); ?></p>

                                            <?php endif; ?>

                                            <?php if($qamarcarecard -> Status == 'Approved'): ?>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($qamarcarecard -> Status); ?> </a></h5>
                                            <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("d-m-Y")); ?></p>

                                            <?php endif; ?>

                                            <?php if($qamarcarecard -> Status == 'Rejected'): ?>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger"><?php echo e($qamarcarecard -> Status); ?> </a></h5>
                                            <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("d-m-Y")); ?></p>

                                            <?php endif; ?>



                                            <?php if($qamarcarecard -> Status == 'ReInitiated'): ?>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                            <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("d-m-Y")); ?></p>

                                            <?php endif; ?>

                                            <?php if($qamarcarecard -> Status == 'Released'): ?>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                            <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("d-m-Y")); ?></p>

                                            <?php endif; ?>

                                            <?php if($qamarcarecard -> Status == 'Printed'): ?>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                            <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at -> format("d-m-Y")); ?></p>

                                            <?php endif; ?>

                                        </div>
                                    </td>
                                    <td>
                                        <?php if( $qamarcarecard -> Created_By !=""): ?>

                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard ->  UFirstName); ?> <?php echo e($qamarcarecard ->  ULastName); ?></a></h5>
                                            <p class="text-muted mb-0"><?php echo e($qamarcarecard ->  UJob); ?></p>

                                        </div>
                                        <?php endif; ?>
                                        <?php if( $qamarcarecard -> Created_By ==""): ?>

                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                            <p class="text-muted mb-0">Requested</p>

                                        </div>
                                        <?php endif; ?>
                                    </td>
                                    <td>

                                        <input class="form-check-input" type="checkbox" id="formCheck1" name="Beneficiary_ID[]" value="<?php echo e($qamarcarecard ->  id); ?>">
                                    </td>
                                    <!-- <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a class="btn btn-warning waves-effect waves-light">
                                            <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                        </a>
                                    </div>
                                </td> -->
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->








<!-- Model for Adding food packs -->
<form class="needs-validation" action="<?php echo e(route('CreateFoodPack')); ?>" method="POST" enctype="multipart/form-data" novalidate>
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-6">
            <!-- center modal -->
            <div class="modal fade bs-addfoodpack-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Food Pack</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 position-relative">
                                        <label for="Name" class="form-label ">Food Pack Name<i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['Name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Name')); ?>" id="Name" name="Name" required>
                                        <?php $__errorArgs = ['Name'];
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

                                <div class="col-md-12 ">
                                    <div class="mb-3 position-relative">
                                        <label for="ExpectedDate" class="form-label">Expected Date Of Delivirence<i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group " id="example-date-input">
                                            <input class="form-control form-select-lg <?php $__errorArgs = ['ExpectedDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ExpectedDate')); ?>" type="date" id="example-date-input" name="ExpectedDate" id="ExpectedDate" required>
                                            <?php $__errorArgs = ['ExpectedDate'];
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
                            <button class="btn btn-success btn-lg" type="submit">Save </button>
                            <!-- <a class="btn btn-danger btn-lg" href="<?php echo e(route('root')); ?>">Cancel</a> -->

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- end card -->
        </div>
    </div>
</form>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Required datatable js -->
<script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>


<!-- Datatable init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>


<!-- Bootstrap rating js -->
<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js')); ?> "></script>

<script src="<?php echo e(URL::asset('/assets/js/pages/rating-init.js')); ?>"></script>

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




    // $('#datatable').DataTable( {
    //     responsive: true,

    //     lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],

    //     dom: 'lBfrtip',
    //     buttons: [
    //         {
    //             autoFilter: true,
    //             extend: 'excel',
    //             text: 'Export To Excel',
    //             exportOptions: {
    //                 modifier: {
    //                     page: 'current'
    //                 }
    //             }
    //         }
    //     ]
    // } );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/CardCard/Services/FoodPackServices/AssignedBeneficiaries.blade.php ENDPATH**/ ?>