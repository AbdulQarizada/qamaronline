

<?php $__env->startSection('title'); ?> Qamar Care List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="row mt-4">
        <div class="col-4">
           <a href="<?php echo e(route('IndexAssignServiceQamarCareCard')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
            <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>FOOD PACKS</span>
        </div>
     </div>
     <div class="row">
     
    
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
                        <!-- <div class="col-12 ">
        <a href="<?php echo e(route('CreateQamarCareCard')); ?>" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD CARE CARD</a>
     </div> -->
                    </div>

    <div class="row">
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>
            
                <div class="card-body">
                    
                    <div class="table-responsive">
                    <table id="datatable-buttons"  class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>Address</th>
                                <th>Phone Numbers</th>
                                <th>Family Status</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>
                                
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
                                    <p class="text-muted mb-0"><?php echo e($qamarcarecard -> Village); ?></p> 
                               
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
                       <div class="d-flex flex-wrap gap-2">
                    <a href="<?php echo e(route('StatusQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a>
                    <?php if($qamarcarecard -> Status == 'Pending'): ?>
                    <a href="<?php echo e(route('EditQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="<?php echo e(route('DeleteQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>


                    <?php if( $qamarcarecard -> Status == 'Approved'): ?>

                    <a href="<?php echo e(route('PrintingQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-dark waves-effect waves-light print">
                        <i class="bx bxs-printer   font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>

                    <?php if( $qamarcarecard -> Status == 'Rejected'): ?>
                    <a href="<?php echo e(route('EditQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="<?php echo e(route('DeleteQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>

                    <?php if($qamarcarecard -> Status == 'Printed'): ?>
                    <a href="<?php echo e(route('ReleaseQamarCareCard', ['data' => $qamarcarecard -> id])); ?>" class="btn btn-success waves-effect waves-light release">
                        <i class="bx bx-user-check  font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>
                   



                </div></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                       
                        </tbody>
                    </table>
</div>
                </div>
                
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- <table id="example" class="display example" style="width:100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody></tboday>
   
    </table> -->

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
    $('.delete-confirm').on('click', function (event) {
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

$('.release').on('click', function (event) {
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

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/QamarCardCard/FoodPack.blade.php ENDPATH**/ ?>