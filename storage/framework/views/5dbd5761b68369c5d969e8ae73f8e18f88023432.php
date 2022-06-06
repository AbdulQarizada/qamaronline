

<?php $__env->startSection('title'); ?> Qamar Care List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Qamar Care Card <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Qamar Care Card List <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-12">
           <a href="<?php echo e(route('AllQamarCareCard')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
           <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light mr-1"><i class="fa fa-print"></i></a>
           <a href="<?php echo e(route('PrintQamarCareCard', ['data' => $data -> id])); ?>" class="btn btn-success waves-effect waves-light print">
                        <i class="bx bxs-printer   font-size-16 align-middle"></i>
                        Confirm Print
                    </a>
        </div>
     </div>
                       <div class="row">
                            <div class="col-lg-12"> 
                                            <img src="<?php echo e(URL::asset('/assets/images/printcard.png')); ?>" style="width: 800px; height: 800px;">
                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>

<script>


$('.print').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'Are you sure that this record is printed!',
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

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\Desktop\Qamar\qamaronline\qamaronline\resources\views/QamarCardCard/Printing.blade.php ENDPATH**/ ?>