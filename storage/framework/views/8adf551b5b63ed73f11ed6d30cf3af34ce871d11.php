


<?php $__env->startSection('title'); ?> Food Packs <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row mt-4">
    <div class="col-4">
    <?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>

<a href="<?php echo e(route('IndexCareCard')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
<?php endif; ?>
<?php if(Cookie::get('Layout') == 'LayoutSidebar'): ?>

<a href="<?php echo e(route('IndexCareCard')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
<?php endif; ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Assigned Beneficiaries</span>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <select class="form-select  form-select-lg mb-3 <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="window.location.href=this.value;" id="item" name="item">
            <option value="<?php echo e(route('AssignedBeneficiariesFoodPack')); ?>">Please Filter Your Choices</option>
            <option value="<?php echo e(route('AssignedBeneficiariesFoodPack')); ?>">All</option>
            <?php $__currentLoopData = $foodpacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foodpack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e(route('SearchAssignedBeneficiariesFoodPack', ['data' => $foodpack -> id])); ?>"><?php echo e($foodpack -> Name); ?> - <?php echo e($foodpack -> ExpectedDate); ?></option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <!-- <div class="col-10 ">
        <a href="<?php echo e(route('CreateCareCard')); ?>" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD CARE CARD</a>
    </div> -->
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
                                <th>Card Number</th>
                                <th>Full Name</th>
                                <th>Father Name</th>
                                <th>Primary Phone Number</th>
                                <th>Secondary Phone Number</th>
                                <th>Food Pack</th>
                                <th>Supporting Organization</th>
                                <th>Created By</th>
                                <th>Finger Print</th>
                                <!-- <th>Actions</th> -->

                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $qamarcarecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qamarcarecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>QCC - <?php echo e($qamarcarecard -> QCC); ?></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FirstName); ?> <?php echo e($qamarcarecard -> LastName); ?></a></h5> </td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> FatherName); ?></a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($qamarcarecard -> PrimaryNumber); ?></a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-warning"><?php echo e($qamarcarecard -> SecondaryNumber); ?></a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-warning"><?php echo e($qamarcarecard -> FoodPackName); ?></a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-warning"><?php echo e($qamarcarecard -> OrganizationName); ?></a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard ->  UFirstName); ?> <?php echo e($qamarcarecard ->  ULastName); ?></a></h5></td>
                                <td></td>
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
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/CardCard/Services/FoodPack/AssignedBeneficiaries.blade.php ENDPATH**/ ?>