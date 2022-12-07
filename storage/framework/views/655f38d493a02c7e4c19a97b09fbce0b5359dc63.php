
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 ">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-dark  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">PAYMENTS</p>

                </blockquote>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>
            <div class="card-body">
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Charge ID</th>
                            <th>Payment </h>
                            <th>Email</th>
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
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> FullName); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> IntroducerName); ?></p>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> ChargeID); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($data -> DistrictName); ?></p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($data -> PaymentAmount); ?></a></h5>
                                    <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($data -> PaymentOption); ?></p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> Email); ?></a></h5>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Successed</a></h5>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> created_at -> format("d-m-Y")); ?></a></h5>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
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


    $('#datatable').DataTable({
        responsive: true,

        lengthMenu: [
            [100, 200, 300, 400, 500, 1000, -1],
            [100, 200, 300, 400, 500, 1000, "All"]
        ],

        dom: 'lBfrtip',
        buttons: [{
            autoFilter: true,
            extend: 'excel',
            text: 'Download To Excel',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }]
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Payment/MyPayment.blade.php ENDPATH**/ ?>