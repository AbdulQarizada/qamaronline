

<?php $__env->startSection('title'); ?> Assign To Services Cards <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Qamar Online <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Assign To Services Card <?php $__env->endSlot(); ?>
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
                      <blockquote class="blockquote border-info  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">CARE CARD SERVICES</p>
                        
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
unset($__errorArgs, $__bag); ?>"  onchange="window.location.href=this.value;" 
>
                                   <option value="<?php echo e(route('AssigningServiceQamarCareCard')); ?>">Please Filter Your Choices</option>
                                   <option value="<?php echo e(route('AssigningServiceQamarCareCard')); ?>">Eligible Beneficiaries</option>
                                    <option value="<?php echo e(route('AssignedServicesQamarCareCard')); ?>">Assigned Services</option>
                                    <!-- <option value="<?php echo e(route('RecievedServicesQamarCareCard')); ?>">Recieved Services</option> -->
                                    <!-- <option value="<?php echo e(route('PrintedQamarCareCard')); ?>">Printed</option>
                                    <option value="<?php echo e(route('ReleasedQamarCareCard')); ?>">Released</option> -->
                                    <!-- <option value="<?php echo e(route('RejectedServicesQamarCareCard')); ?>">Rejected</option> -->



                                 

                                    </select>
        </div>
        <div class="col-9 ">
           <!-- <a href="<?php echo e(route('CreateQamarCareCard')); ?>" class="btn btn-primary btn-lg waves-effect waves-light m-3 float-end">ADD SERVICE PROVIDER</a> -->
        </div>
     </div>
    <div class="row">
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-info text-white"></h3>
                <div class="card-body">

                    
              
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Beneficiary</th>
                                <th>Beneficiary Address</th>
                                <th>Beneficiary Phone </th>
                                <th>Service Provider</th>
                                <th>Service Address</th>
                                <th>Service Provider Phone</th>
                                <th>Discount</th>
                                <th>Assigned By</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $qamarcarecards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qamarcarecard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><?php echo e($qamarcarecard -> id); ?></td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> BFirstName); ?> <?php echo e($qamarcarecard -> BLastName); ?></a></h5>
                                        <p class="text-muted mb-0">QCC-<?php echo e($qamarcarecard -> BQCC); ?></p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> ProvinceName); ?></a></h5>
                                  <p class="text-muted mb-0"><?php echo e($qamarcarecard -> DistrictName); ?></p>
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($qamarcarecard -> BPrimaryNumber); ?></a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($qamarcarecard -> BSecondaryNumber); ?></p>
                                         <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($qamarcarecard -> BRelativeNumber); ?></p>
                                        </div>
                               </td> 
                               <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> SPFirstName); ?> <?php echo e($qamarcarecard -> SPLastName); ?></a></h5>
                                        <p class="text-muted mb-0">QCC-<?php echo e($qamarcarecard -> SPQCC); ?></p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> ProvinceName); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($qamarcarecard -> DistrictName); ?></p> 
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($qamarcarecard -> SPPrimaryNumber); ?></a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($qamarcarecard -> SPSecondaryNumber); ?></p>
                                         <!-- <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($qamarcarecard -> RelativeNumber); ?></p> -->
                                        </div>
                               </td>
                               <td>
                                
                                <div class="avatar-sm ">
                                            
                                            <?php if( $qamarcarecard -> IsFree == 1): ?>
                                            <span class="avatar-title bg-danger rounded-circle">Free</span>
                                            <?php endif; ?>
                                            <?php if( $qamarcarecard -> IsFree == null): ?>
                                            <span class="avatar-title bg-danger rounded-circle"><?php echo e($qamarcarecard -> Discount); ?>%</span>
                                            <?php endif; ?>
                                 </div>
                               
                                </td>
                              <td>
                              <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> Created_By); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at); ?></p> 

                               
                                </div>
                              </td>
                                   
                               <!-- <td>
                        

                                <div>


                                <?php if($qamarcarecard -> Status == 'Pending'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary"><?php echo e($qamarcarecard -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at); ?></p> 

                                 <?php endif; ?>

                                <?php if($qamarcarecard -> Status == 'Approved'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($qamarcarecard -> Status); ?> </a></h5>
                                    <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at); ?></p> 

                                 <?php endif; ?>

                                 <?php if($qamarcarecard -> Status == 'Rejected'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger"><?php echo e($qamarcarecard -> Status); ?> </a></h5>
                                    <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at); ?></p> 

                                 <?php endif; ?>

                                 <?php if($qamarcarecard -> Status == 'Released'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Eligible</a></h5>
                                    <p class="text-muted mb-0"><?php echo e($qamarcarecard -> created_at); ?></p> 

                                 <?php endif; ?>

                                    </div>
                                </td> -->
                                <!-- <td>
                                <?php if( $qamarcarecard -> Status == "Pending"): ?>
                                <?php if( $qamarcarecard -> Created_By !=""): ?>

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($qamarcarecard -> Created_By); ?></a></h5>
                                    <p class="text-muted mb-0">Employee</p> 
                               
                                </div>
                                <?php endif; ?>
                                <?php if( $qamarcarecard -> Created_By ==""): ?>

                                   <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                    <p class="text-muted mb-0">Requested</p> 

                                  </div>
                                <?php endif; ?>
                                <?php endif; ?>
                                </td> -->
                                
                <td>
                       <div class="d-flex flex-wrap gap-2">
                       <!-- <a href="<?php echo e(route('StatusQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a> -->
                    <?php if( $qamarcarecard -> Status == "Released"): ?>
                    <a href="<?php echo e(route('AssignToServiceQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-success waves-effect waves-light">
                        <i class="bx bx-user-plus   font-size-16 align-middle"></i>
                    </a> 
                    <?php endif; ?>

                    <?php if( $qamarcarecard -> Status == "Pending"): ?>
                    <!-- <a href="<?php echo e(route('ServiceReleasedQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-success waves-effect waves-light recieved">
                        <i class="bx bx-check-shield    font-size-16 align-middle"></i>
                    </a>  -->
                    
                    <a href="<?php echo e(route('ServiceEditQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="<?php echo e(route('ServiceDeleteQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-danger waves-effect waves-light delete">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>

                    <!-- <?php if( $qamarcarecard -> Status == "Recieved"): ?>
                    <a href="<?php echo e(route('AssignToServiceQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-success waves-effect waves-light">
                        <i class="bx bx-user-plus   font-size-16 align-middle"></i>
                    </a> 
                    <?php endif; ?> -->


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
    $('.delete').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

$('.recieved').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Does this perosn recieve service?',
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

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\Desktop\Qamar\qamaronline\qamaronline\resources\views/QamarCardCard/AssignedService.blade.php ENDPATH**/ ?>