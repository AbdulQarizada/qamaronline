

<?php $__env->startSection('title'); ?> Qamar Care List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="row mt-4">
        <div class="col-4">
           <a href="<?php echo e(route('IndexEducation')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    
        </div>
     </div>

     <div class="row">
        <div class="col-12 ">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-warning  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">All Scholarships</p>
                        
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
                                   <option value="<?php echo e(route('AllQamarCareCard')); ?>">Please Filter Your Choices</option>

                                    <option value="<?php echo e(route('AllScholarshipEducation')); ?>">All</option>
                                    <option value="<?php echo e(route('ActiveScholarship')); ?>">Active</option>
                                    <option value="<?php echo e(route('ClosedScholarship')); ?>">Closed</option>
                                    <!-- <option value="<?php echo e(route('PrintedQamarCareCard')); ?>">Printed</option>
                                    <option value="<?php echo e(route('ReleasedQamarCareCard')); ?>">Released</option>
                                    <option value="<?php echo e(route('RejectedQamarCareCard')); ?>">Rejected</option> -->



                                 

                                    </select>
        </div>
        <div class="col-9 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
           <a href="<?php echo e(route('CreateScholarship')); ?>" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">ADD Scholarship</a>
        </div>
     </div>
    <div class="row">
        <div class="col-12">
            
            <div class="card">
            <h3 class="card-header bg-warning text-white"></h3>
                <div class="card-body">
                <!-- <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <select class="form-select  form-select-lg  <?php $__errorArgs = ['Country'];
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



                                 

                                    </select>
                                </div>
                            </div>
                    </div> -->
              
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Avalible Seats</th>
                                <th>Dates</th>
                                <!-- <th>Status</th> -->
                                <th>Created By</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $scholarships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scholarship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><?php echo e($scholarship -> id); ?></td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($scholarship -> ScholarshipName); ?> </a></h5>
                                        <p class="text-muted mb-0"><?php echo e($scholarship -> ScholarshipType); ?></p>
                                </td>
                                <td>
                                   <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($scholarship -> Country); ?> </a></h5>
                                        <!-- <p class="text-muted mb-0"><?php echo e($scholarship -> ScholarshipType); ?></p> -->
                                </td>
                               <td>    
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"> <?php echo e($scholarship -> Seats); ?> </a></h5>
                               </td>
                               <td>
                               <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($scholarship -> StartDate); ?></a></h5>
                                        <!-- <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($scholarship -> StartDate); ?></p> -->
                                         <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($scholarship -> EndDate); ?></p>
                                        </div>
                                </td>
                              
                               <!-- <td>
                                <div>


                                <?php if($scholarship -> Status == 'Pending'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary"><?php echo e($scholarship -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($scholarship -> created_at); ?></p> 

                                 <?php endif; ?>

                                <?php if($scholarship -> Status == 'Approved'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($scholarship -> Status); ?> </a></h5>
                                    <p class="text-muted mb-0"><?php echo e($scholarship -> created_at); ?></p> 

                                 <?php endif; ?>


                                    </div>
                                </td> -->
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($scholarship -> FirstName); ?> <?php echo e($scholarship -> LastName); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($scholarship -> Job); ?></p> 
                               
                                </div>
                                </td>
                    <td>
                       <div class="d-flex flex-wrap gap-2">
                    <!-- <a href="<?php echo e(route('StatusQamarCareCard', ['data' => $scholarship -> id])); ?>" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                    </a> -->
                    <!-- href="<?php echo e(route('EditQamarCareCard', ['data' => $scholarship -> id])); ?>" -->
                    <a  class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="<?php echo e(route('DeleteScholarship', ['data' => $scholarship -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    <a data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" class="btn btn-secondary waves-effect waves-light">
                        <i class="  bx bx-list-ol  font-size-16 align-middle"></i>
                    </a>
                    <!-- <?php if($scholarship -> Status == 'Pending'): ?>
                    <a href="<?php echo e(route('EditQamarCareCard', ['data' => $scholarship -> id])); ?>" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="<?php echo e(route('DeleteQamarCareCard', ['data' => $scholarship -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>


                    <?php if( $scholarship -> Status == 'Approved'): ?>

                    <a href="<?php echo e(route('PrintingQamarCareCard', ['data' => $scholarship -> id])); ?>" class="btn btn-dark waves-effect waves-light print">
                        <i class="bx bxs-printer   font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>

                    <?php if( $scholarship -> Status == 'Rejected'): ?>
                    <a href="<?php echo e(route('EditQamarCareCard', ['data' => $scholarship -> id])); ?>" class="btn btn-info waves-effect waves-light">
                        <i class="bx bx-edit  font-size-16 align-middle"></i>
                    </a>
                     <a href="<?php echo e(route('DeleteQamarCareCard', ['data' => $scholarship -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm">
                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?>

                    <?php if($scholarship -> Status == 'Printed'): ?>
                    <a href="<?php echo e(route('ReleaseQamarCareCard', ['data' => $scholarship -> id])); ?>" class="btn btn-success waves-effect waves-light release">
                        <i class="bx bx-user-check  font-size-16 align-middle"></i>
                    </a>
                    <?php endif; ?> -->
                   



                </div></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">ADD MODULES FOR SCHOLARSHIP</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <form class="needs-validation" action="<?php echo e(route('CreateScholarshipModule')); ?>" method="POST" enctype="multipart/form-data" novalidate>
                                                        <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3 position-relative">
                                                                        <label for="Parent_ID" class="form-label">Scholarship <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                        <div class="input-group">

                                                                            <select class="form-select  form-select-lg <?php $__errorArgs = ['Parent_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Parent_ID')); ?>" required id="Parent_ID" name="Parent_ID">
                                                                                <!-- <option value="None">Main Catagory</option> -->

                                                                                 <?php $__currentLoopData = $scholarships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scholarship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                 <option value="<?php echo e($scholarship -> id); ?>"><?php echo e($scholarship -> ScholarshipName); ?></option>
                                                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                            <?php $__errorArgs = ['Parent_ID'];
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
                                                                <div class="col-md-12">
                                                                    <div class="mb-3 position-relative">
                                                                        <label for="ModuleName" class="form-label ">Module Name<i class="mdi mdi-asterisk text-danger"></i></label>
                                                                        <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['ModuleName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ModuleName')); ?>" id="ModuleName" name="ModuleName" required>
                                                                        <?php $__errorArgs = ['ModuleName'];
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
                                                            <button class="btn btn-success btn-lg" type="submit">Save </button>
                                                            <a class="btn btn-danger btn-lg" href="<?php echo e(route('root')); ?>">Cancel</a>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\Desktop\Qamar\qamaronline\qamaronline\resources\views/Education/Scholarship/All.blade.php ENDPATH**/ ?>