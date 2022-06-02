

<?php $__env->startSection('title'); ?> Approved Cards <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Qamar Online <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Approved Card <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
           <a href="<?php echo e(route('IndexQamarCareCard')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>
    <div class="row">
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-success text-white">Approved Qamar Care Cards</h3>

                <div class="card-body">

              
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Province</th>
                                <th>District</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $approveds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $approved): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><?php echo e($approved -> id); ?></td>
                                <td><?php echo e($approved -> FirstName); ?> <?php echo e($approved -> LastName); ?></td>
                                <td><?php echo e($approved -> Province); ?></td>
                                <td><?php echo e($approved -> District); ?></td>
                                <td><?php echo e($approved -> PNumber); ?></td>
                                <td>
                       <div class="d-flex flex-wrap gap-2">
                       <a href="<?php echo e(route('PrintQamarCareCard', ['data' => $approved -> id])); ?>" class="btn btn-secondary waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a>
                </div></td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\Desktop\Qamar\qamaronline\qamaronline\resources\views/QamarCardCard/Approved.blade.php ENDPATH**/ ?>