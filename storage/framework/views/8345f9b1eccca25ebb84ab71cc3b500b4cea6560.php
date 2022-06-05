

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
        </div>
     </div>
                       <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                   
                                            
                                            <img src="<?php echo e(URL::asset('storage/uploads/Profiles/'.$data -> Profile)); ?>" style="width: 130px; height: 135px;">
                                            <br /><br />
                                            
                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header bg-primary text-white">PEROSNAL INFORMATION</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">First Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FirstName); ?> </td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Last Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> LastName); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira ID</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> TazkiraID); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Date of Birth</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> DOB); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Gender); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Language</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Language); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Current Job</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> CurrentJob); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">What type of job you can do?</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FutureJob); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Education Level</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> EducationLevel); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Qamar Care Card Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;" ><h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-danger">QCC-<?php echo e($data -> QCC); ?> </a></h4>
                                                        </td>
                                                    </tr>
                                                    
                                                    <!-- <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target=".exampleModal">
                                                                [View Tazkira]
                                                            </a>
                                                        </td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> TazkiraID); ?></td>
                                                    </tr> -->
                                                  
                                            </table>
                                            <br />

                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header bg-primary text-white">ADDRESS AND CONTACT</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> PrimaryNumber); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SecondaryNumber); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Emergency Number</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> EmergencyNumber); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Province</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Province); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">District</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> District); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Village</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Village); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Email); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;"></td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"></td>
                                                    </tr>
                                                  
                                            </table>

                                            <br />

                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header bg-primary text-white">FAMILY AND INCOME INFORMATION</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Father's Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FatherName); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Spuose's Name</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SpuoseName); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Eldest Son Age</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> EldestSonAge); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Income</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> MonthlyFamilyIncome); ?> (AFGHANI)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Expenses</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> MonthlyFamilyExpenses); ?> (AFGHANI)</td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Number of  Family Members</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> NumberFamilyMembers); ?> (AFGHANI)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Income Streem</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> IncomeStreem); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Level Of Poverty</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                                                        
                                                        
                                                        
                                <div>
                                       <?php if( $data -> LevelPoverty == 1): ?>
                                         <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-secondary font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>

                                       <?php endif; ?>
                                       <?php if( $data -> LevelPoverty == 2): ?>
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       <?php endif; ?>
                                       <?php if( $data -> LevelPoverty == 3): ?>
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       <?php endif; ?>
                                       <?php if( $data -> LevelPoverty == 4): ?>
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       <?php endif; ?>
                                       <?php if( $data -> LevelPoverty == 5): ?>
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       <?php endif; ?>
                                    </div>
                                
                                                    
                                                    
                                                    
                                                    </td>
                                                    </tr>
                                                  
                                                  
                                            </table>

                                            <br />
                                            <table class="table table-nowrap">
                                                <h5 style="font-weight: bold;" class="card-header bg-primary text-white">DOCUMENTS</h5>
                                                    <tr>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Tazkira</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Tazkira); ?></td>
                                                        <td style="width: 20%; border: 2px solid #000; padding: 5px;">Other</td>
                                                        <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Other); ?></td>
                                                    </tr>
                                         
                                                  
                                                  
                                            </table>
                                            

                                        </div>
                             <div class="d-print-none">
                                    
                                    <div class="float-right">

                                        <?php if($data -> Status == 'Pending'): ?>
                                          <div class="row">
                                            
                                          <div class="col-md-1">
                                          <form action="<?php echo e(route('ApproveQamarCareCard', [$data -> id])); ?>" method="POST">
                                             <?php echo method_field('PUT'); ?>
                                             <?php echo csrf_field(); ?>
                        
                                           <button type="submit"  class="btn btn-success waves-effect waves-light mr-1">Approve</button> 
                                         </form>
                                              </div>
                                              <div class="col-md-1">
                                              <form action="<?php echo e(route('RejectQamarCareCard', [$data -> id])); ?>" method="POST">
                                             <?php echo method_field('PUT'); ?>
                                             <?php echo csrf_field(); ?>
                        
                                           <button type="submit"  class="btn btn-danger waves-effect waves-light mr-1">Reject</button> 
                                         </form>
                                              </div>
                                          </div>
                                       
                                        

                                       

                                        <?php endif; ?>



                                        <?php if($data -> Status == 'Approved'): ?>
                                        <form action="<?php echo e(route('ReInitiateQamarCareCard', [$data -> id])); ?>" method="POST">
                                             <?php echo method_field('PUT'); ?>
                                             <?php echo csrf_field(); ?>
                        
                                           <button type="submit"  class="btn btn-info waves-effect waves-light mr-1">Re-Initiate</button> 
                                           <a href="<?php echo e(route('PrintQamarCareCard', [$data -> id])); ?>" class="btn btn-dark waves-effect waves-light mr-1"><i class="bx bx-printer font-size-18"></i></a> 

                                         </form>

                                        <?php endif; ?>


                                        <?php if($data -> Status == 'Rejected'): ?>
                                        <form action="<?php echo e(route('ReInitiateQamarCareCard', [$data -> id])); ?>" method="POST">
                                             <?php echo method_field('PUT'); ?>
                                             <?php echo csrf_field(); ?>
                        
                                           <button type="submit"  class="btn btn-info waves-effect waves-light mr-1">Re-Initiate</button> 
                                         </form>
                                        <?php endif; ?>

                                        <?php if($data -> Status == 'Printed'): ?>
                                        <form action="<?php echo e(route('ReInitiateQamarCareCard', [$data -> id])); ?>" method="POST">
                                             <?php echo method_field('PUT'); ?>
                                             <?php echo csrf_field(); ?>
                        
                                           <button type="submit"  class="btn btn-info waves-effect waves-light mr-1">Re-Initiate</button>
                                           <a href="<?php echo e(route('PrintQamarCareCard', [$data -> id])); ?>" class="btn btn-info waves-effect waves-light mr-1"><i class="bx bx-printer font-size-18"></i></a> 

                                         </form>


                                        <?php endif; ?>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- Required datatable js -->
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\Desktop\Qamar\qamaronline\qamaronline\resources\views/QamarCardCard/Status.blade.php ENDPATH**/ ?>