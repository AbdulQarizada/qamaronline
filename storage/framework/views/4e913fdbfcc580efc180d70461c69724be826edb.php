

<?php $__env->startSection('title'); ?> ORPHANS AND SPONSORSHIPS <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('root')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<div class="row">
    <div class="mt-4 mb-4">
        <blockquote class="blockquote border-primary  font-size-14 mb-0">
            <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">SYSTEM MANAGEMENT</p>

        </blockquote>
    </div>
    <div class="col-xl-12">
        <div class="row">
         
            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('AllUser')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">USERS</p>
                                        <h6 class="text-muted mb-0">USERS</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bx-id-card   font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>

            <!-- <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('AllSponsor')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">SPONSORSHIPS</p>
                                        <h6 class="text-muted mb-0">SPONSORSHIPS</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-user-rectangle    font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2">
                <a href="<?php echo e(route('AllPayment')); ?>">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium text-uppercase">Payments</p>
                                        <h6 class="text-muted mb-0 text-uppercase">Payments</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-user-rectangle    font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div> -->

            <!-- <div class="col-md-4 mb-2">
        <a href="<?php echo e(route('ServiceProvidersQamarCareCard')); ?>">
            <div class="card-one mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">SERVICE PROVIDERS</p>
                            <h6 class="text-muted mb-0">Add Service Providers</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-info">
                                    <i class="bx bxs-user-rectangle    font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                       
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div> -->

        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->
<!-- <br />
<div class="row">
<div class="mt-4 mb-4">
                      <blockquote class="blockquote border-primary  font-size-14 mb-0">
                                <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">OPERATIONS</p>
                        
                        </blockquote>
    </div>
<div class="col-xl-12">
    <div class="row">
    <div class="col-md-4 mb-2">
        <a href="<?php echo e(route('PendingQamarCareCard')); ?>">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium  text-wrap">PENDING CARE CARDS</p>
                            <h6 class="text-muted mb-0">Please click to see all the pending care cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle  bg-secondary">
                                <span class="avatar-title bg-secondary">
                                    <i class="bx bx-hourglass  font-size-24 "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div>

    <div class="col-md-4 mb-2">
            <a href="<?php echo e(route('ApprovedQamarCareCard')); ?>">
                <div class="card-one  mini-stats-wid border border-secondary">
                    <div class="card-body">
                      <blockquote class="blockquote font-size-14 mb-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="my-0 text-primary card-title fw-medium  text-wrap">APPROVED CARE CARDS</p>
                                <h6 class="text-muted mb-0">Approved Care Cards</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-success">
                                    <span class="avatar-title bg-success bg-soft">
                                        <i class="bx bx-check-circle  font-size-24 "></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="d-flex mt-4">
                            
                        </div>
                        </blockquote>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4 mb-2">
            <a href="<?php echo e(route('PrintedQamarCareCard')); ?>">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium  text-wrap">PRINTED CARE CARDS</p>
                            <h6 class="text-muted mb-0">Please click to see all the printed care cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-dark">
                                <span class="avatar-title bg-dark">
                                    <i class="bx bx-printer  font-size-24 "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div>
            
   
     <div class="col-md-4 mb-2">
            <a href="<?php echo e(route('ReleasedQamarCareCard')); ?>">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium  text-wrap">RELESSED CARE CARDS</p>
                            <h6 class="text-muted mb-0">Please click to see all the printed care cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-success bg-gradient  ">
                                <span class="avatar-title bg-success bg-gradient  ">
                                    <i class="bx bx-user-check  font-size-24 "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div>
            
   
       
   

  



    </div> -->
<!-- end row -->

<!-- <br />
<div class="row">
<div class="mt-4 mb-4">
                      <blockquote class="blockquote border-primary  font-size-14 mb-0">
                                <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">SERVICES</p>
                        
                        </blockquote>
    </div>
<div class="col-xl-12">
    <div class="row">      

    <div class="col-md-4 mb-2">
        <a href="<?php echo e(route('AssigningServiceQamarCareCard')); ?>">
            <div class="card-one mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">ASSIGNE TO SERIVCE</p>
                            <h6 class="text-muted mb-0">ASSIGNE TO SERIVCE</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-primary">
                                    <i class="bx bx-plus-circle   font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                       
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div>

     

        <div class="col-md-4 mb-2">
        <a  href="#">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">PENDING SERVICES</p>
                            <h6 class="text-muted mb-0">PENDING SERVICES</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-secondary">
                                <span class="avatar-title bg-secondary">
                                    <i class="bx bx-hourglass  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                        
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div> 

        <div class="col-md-4 mb-2">
        <a  href="#">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">RECIEVED SERVICES</p>
                            <h6 class="text-muted mb-0">RECIEVED SERVICES</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-success">
                                <span class="avatar-title bg-success">
                                    <i class="bx bx-check-shield    font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                        
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div> 


    </div> -->
<!-- end row -->


<!-- <br />
<div class="row">
<div class="mt-4 mb-4">
                      <blockquote class="blockquote border-primary  font-size-14 mb-0">
                                <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">BAD CARE CARDS</p>
                        
                        </blockquote>
    </div>
<div class="col-xl-12">
    <div class="row">      

    <div class="col-md-4 mb-2">
        <a href="<?php echo e(route('RejectedQamarCareCard')); ?>">
            <div class="card-one mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">REJECTED CARE CARDS</p>
                            <h6 class="text-muted mb-0">Rejected Care Cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle ">
                                <span class="avatar-title bg-danger">
                                    <i class="bx bx-x-circle   font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                       
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div>

        <div class="col-md-4 mb-2">
        <a  href="#">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">BLOCKED CARE CARDS</p>
                            <h6 class="text-muted mb-0"> BLOCKED Qamar Care Cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-danger">
                                <span class="avatar-title bg-danger">
                                    <i class="bx bx-user-x  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                        
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div> 

        <div class="col-md-4 mb-2">
        <a  href="#">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">EXPIRED CARE CARDS</p>
                            <h6 class="text-muted mb-0"> BLOCKED Qamar Care Cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-danger">
                                <span class="avatar-title bg-danger">
                                    <i class="bx bx-user-minus   font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                        
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div> 
    </div> -->
<!-- end row -->



<br />
<div class="row">
    <div class="mt-4 mb-4">
        <!-- <blockquote class="blockquote border-primary  font-size-14 mb-0">
                                <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">ONLINE</p>
                        
                        </blockquote> -->
    </div>
    <div class="col-xl-12">
        <div class="row">



            <!-- <div class="col-md-4 mb-2">
        <a  href="<?php echo e(route('CreateQamarCareCard')); ?>">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">REQUEST CARE CARD</p>
                            <h6 class="text-muted mb-0"> REQUEST Qamar Care Cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-info">
                                <span class="avatar-title bg-info">
                                    <i class="bx bx-id-card  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                        
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div> 

        <div class="col-md-4 mb-2">
        <a  href="<?php echo e(route('VerifyQamarCareCard')); ?>">
            <div class="card-one  mini-stats-wid border border-secondary">
                <div class="card-body">
                  <blockquote class="blockquote font-size-14 mb-0">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="my-0 text-primary card-title fw-medium">VERIFY CARE CARDS</p>
                            <h6 class="text-muted mb-0"> Veryfiy Qamar Care Cards</h4>
                        </div>

                        <div class="flex-shrink-0 align-self-center">
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-info">
                                <span class="avatar-title bg-info">
                                    <i class="bx bx-id-card  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="d-flex mt-4">
                        
                    </div>
                    </blockquote>
                </div>
            </div>
            </a>
        </div>  -->


        </div>
        <!-- end row -->


    </div>
</div>
<!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\OneDrive\Desktop\Qamar\QamarOnline\qamaronline\resources\views/SystemManagement/Index.blade.php ENDPATH**/ ?>