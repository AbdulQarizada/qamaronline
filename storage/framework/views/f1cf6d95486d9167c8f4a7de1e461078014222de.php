

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
            
            <div class="card">
                <div class="card-body">

                    <!-- <h3 class="card-title">Qamar Care Card Operations</h3>  -->
              
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Father Name</th>
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
                                <td><?php echo e($approved -> Name); ?></td>
                                <td><?php echo e($approved -> Father_Name); ?></td>
                                <td><?php echo e($approved -> Province); ?></td>
                                <td><?php echo e($approved -> District); ?></td>
                                <td><?php echo e($approved -> Phone_Number); ?></td>
                                <td>
                       <div class="d-flex flex-wrap gap-2">
                    <a href="button" class="btn btn-secondary waves-effect waves-light">
                        <i class="bx bx-cog font-size-16 align-middle"></i>
                    </a>
                    <a href="button" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                    <a href="button" class="btn btn-danger waves-effect waves-light">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i> 
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\Desktop\Qamar\qamaronline\qamaronline\resources\views/QamarCardCard/Approved.blade.php ENDPATH**/ ?>