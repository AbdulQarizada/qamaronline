

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
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-secondary  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">SERVICE PROVIDERS</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>
     <div class="row">
        <div class="col-4">
        <!-- <select class="form-select  form-select-lg mb-3 <?php $__errorArgs = ['Country'];
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



                                 

                                    </select> -->
        </div>
        <div class="col-8 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
           <a href="<?php echo e(route('ServiceProviderIndexQamarCareCard')); ?>" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">ADD SERVICE PROVIDER</a>
        </div>
     </div>
    <div class="row">
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-secondary text-white"></h3>
                <div class="card-body">

                    
              
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Service Type</th>
                                <th>Service Address</th>
                                <th>Phone Numbers</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $serviceproviders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceprovider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><?php echo e($serviceprovider -> id); ?></td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($serviceprovider -> FirstName); ?> <?php echo e($serviceprovider -> LastName); ?></a></h5>
                                        <p class="text-muted mb-0">QCC-<?php echo e($serviceprovider -> QCC); ?></p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($serviceprovider -> ProvinceName); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($serviceprovider -> DistrictName); ?></p> 
                               
                                    </div>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($serviceprovider -> ServiceType); ?></a></h5>
                                    <!-- <p class="text-muted mb-0"><?php echo e($serviceprovider -> DistrictName); ?></p>  -->
                               
                                    </div>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($serviceprovider -> ProvinceService); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($serviceprovider -> DistrictService); ?></p> 
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($serviceprovider -> PrimaryNumber); ?></a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($serviceprovider -> SecondaryNumber); ?></p>
                                         <!-- <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($serviceprovider -> serviceprovider); ?></p> -->
                                        </div>
                               </td> 
                               <td>
                                <div>


                                <?php if($serviceprovider -> Status == 'Pending'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary"><?php echo e($serviceprovider -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($serviceprovider -> created_at); ?></p> 

                                 <?php endif; ?>

                                <?php if($serviceprovider -> Status == 'Approved'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($serviceprovider -> Status); ?> </a></h5>
                                    <p class="text-muted mb-0"><?php echo e($serviceprovider -> created_at); ?></p> 

                                 <?php endif; ?>

                                 <?php if($serviceprovider -> Status == 'Rejected'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger"><?php echo e($serviceprovider -> Status); ?> </a></h5>
                                    <p class="text-muted mb-0"><?php echo e($serviceprovider -> created_at); ?></p> 

                                 <?php endif; ?>



                                 <?php if($serviceprovider -> Status == 'ReInitiated'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info"><?php echo e($serviceprovider -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($serviceprovider -> created_at); ?></p> 

                                 <?php endif; ?>

                    

                                    </div>
                                </td>
                                <td>
                                <?php if( $serviceprovider -> Created_By !=""): ?>

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($serviceprovider -> Created_By); ?></a></h5>
                                    <p class="text-muted mb-0">Employee</p> 
                               
                                </div>
                                <?php endif; ?>
                                <?php if( $serviceprovider -> Created_By ==""): ?>

                                   <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                    <p class="text-muted mb-0">Requested</p> 

                                  </div>
                                <?php endif; ?>
                                </td>
                               <td>
                       <div class="d-flex flex-wrap gap-2">
                    <a href="<?php echo e(route('StatusServiceProviderQamarCareCard', ['data' => $serviceprovider -> id])); ?>" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a>
               
                    <!-- <a href="<?php echo e(route('ApproveServiceProviderQamarCareCard', ['data' => $serviceprovider -> id])); ?>" class="btn btn-success waves-effect waves-light approve">
                        <i class="bx bx-check-circle font-size-16 align-middle"></i>
                    </a> -->

                    <?php if( $serviceprovider -> Status !="Approved"): ?>
                     <a href="<?php echo e(route('DeleteServiceProviderQamarCareCard', ['data' => $serviceprovider -> id])); ?>" class="btn btn-danger waves-effect waves-light Delete">
                        <i class="bx bx-trash-alt font-size-16 align-middle"></i>
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
    $('.approve').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be approved!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

$('.Delete').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be rejected!',
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

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/QamarCardCard/ServiceProviders.blade.php ENDPATH**/ ?>