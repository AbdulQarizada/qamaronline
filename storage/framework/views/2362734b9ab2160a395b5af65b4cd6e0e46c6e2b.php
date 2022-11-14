


<?php $__env->startSection('title'); ?> Food Packs <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row mt-4">
    <div class="col-6">
        <?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>

<a href="<?php echo e(route('IndexCareCard')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
<?php endif; ?>
<?php if(Cookie::get('Layout') == 'LayoutSidebar'): ?>

<a href="<?php echo e(route('IndexCareCard')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
<?php endif; ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>FOD PACKS</span>

    </div>
</div>
<div class="row">
    <div class="col-12 ">
        <a href="<?php echo e(route('CreateFoodPack')); ?>" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD FOOD PACK</a>
    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>

            <div class="card-body">

                <div class="table-responsive">
                    <table id="datatable" class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Food Pack Name</th>
                                <th>Address</th>
                                <th>Expected Date</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>

                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> Name); ?></a></h5>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> ProvinceName); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($data -> DistrictName); ?></p>

                                    </div>
                                </td>
                                <td> <?php echo e($data -> ExpectedDate); ?> </td>
                                <td> <?php echo e($data -> Description); ?> </td>

                                <td> </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data ->  UFirstName); ?> <?php echo e($data ->  ULastName); ?></a></h5>
                                        <p class="text-muted mb-0"><?php echo e($data ->  UJob); ?></p>

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="<?php echo e(route('EditFoodPack', ['data' => $data -> id])); ?>" class="btn btn-info waves-effect waves-light">
                                            <i class="bx bx-edit  font-size-16 align-middle"></i>
                                        </a>
                                        <a href="<?php echo e(route('DeleteFoodPack', ['data' => $data -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm">
                                            <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                        </a>


                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
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




    $('#datatable').DataTable( {
        responsive: true,

        lengthMenu: [[100, 200, 300, 400, 500, 1000, -1], [100, 200, 300, 400, 500, 1000, "All"]],

        dom: 'lBfrtip',
        buttons: [
            {
                autoFilter: true,
                extend: 'excel',
                text: 'Download To Excel',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                }
            }
        ]
    } );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/CardCard/Services/FoodPack/All.blade.php ENDPATH**/ ?>