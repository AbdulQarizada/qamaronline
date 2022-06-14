

<?php $__env->startSection('title'); ?> Qamar Care List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<style>
table  td {
    width: 224px;
    white-space: nowrap;
}
</style>

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
        <a href="<?php echo e(route('PrintQamarCareCard', ['data' => $data -> id])); ?>" class="btn btn-success waves-effect waves-light print"><i class="bx bxs-printer   font-size-16 align-middle"></i>Confirm Print</a>
    </div>
</div>


<div class="row">
    <div style=" background-image: url('<?php echo e(URL::asset('/assets/images/qcc/front.jpeg')); ?>'); height: 40vh; background-repeat: no-repeat; ">
        <!-- <div class="table-responsive"> -->
            <table style="margin-left:112px; margin-top:122px;">

                <!-- <tr>
                              <td > <span class="h5">QCC-<?php echo e($data -> QCC); ?></span></span></td>
                          </tr> -->

                <tr>

                <td ><span class="h5"><?php echo e($data -> FirstName); ?> </span></td>

                    <td  rowspan="4"> <img src="<?php echo e(URL::asset('/uploads/QamarCareCard/Beneficiaries/Profiles/'.$data -> Profile)); ?>" style="width: 120px; height: 120px;" class="rounded"></td>

                </tr>
                <tr >
                    <td ><span class="h5"><?php echo e($data -> FatherName); ?> </span></td>
                    
                </tr>
                <tr>
                    <td ><span class="h5"><?php echo e($data -> Gender); ?> </span></td>
                </tr>
                <tr>
                    <td ><span class="h5"><?php echo e($data -> Province); ?> </span></td>
                </tr>

                <!-- <tr >
                              <td style=" padding-top:15px; padding-left:145px;">
                                <div class="rating-star">
                                   <input type="hidden" class="rating"  data-filled="mdi mdi-star text-warning " data-empty="mdi mdi-star-outline text-muted" value="<?php echo e($data -> LevelPoverty); ?>" name="LevelPoverty" id="LevelPoverty" readonly/>
                                </div>
                             </td>
                          </tr> -->
            </table>
            <table style="margin-left:232px; margin-top:22px;">

                <tr>
                    <td >
                        <div class="rating-star">
                            <input type="hidden" class="rating" data-filled="mdi mdi-star text-warning " data-empty="mdi mdi-star-outline text-muted" value="<?php echo e($data -> LevelPoverty); ?>" name="LevelPoverty" id="LevelPoverty" readonly />
                        </div>
                    </td>
                </tr>
            </table>
        <!-- </div> -->
    </div>
</div>


<div class="row">

    <div style=" background-image: url('<?php echo e(URL::asset('/assets/images/qcc/back.jpeg')); ?>'); 40vh; background-repeat: no-repeat; ">



        <table class="table-responsive" style="margin-left:115px; margin-top:125px;">


            <tr>
                <td style=" padding-top:120px; padding-bottom:130px; padding-left:90px;"><span class="h5"> <?php echo DNS2D::getBarcodeSVG(''.$data->QCC, 'QRCODE', 3, 3, 'white', true); ?> </span></td>
            </tr>

        </table>

    </div>
</div>






<!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js')); ?> "></script>

<script>
    $('.print').on('click', function(event) {
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