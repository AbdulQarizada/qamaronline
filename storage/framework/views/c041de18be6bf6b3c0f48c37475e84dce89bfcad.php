

<?php $__env->startSection('title'); ?> Orphans List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- ION Slider -->
<link href="<?php echo e(URL::asset('/assets/css/mystyle/OrphanGrid.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row mt-4">
    <?php if(Auth::check()): ?>
    <div class="col-4">
        <a href="<?php echo e(route('IndexOrphansRelief')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>

    </div>
    <?php endif; ?>
    <!-- <div class="col-6">
                                <h1 class="fw-medium font-size-24 ">Orphans List</h1>
        </div> -->
</div>

<!-- <div class="row">
        <div class="col-12 ">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-warning  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">ORPHANS</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div> -->
<div class="row">
    <!-- <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Filter</h4>

                    <div>
                        <h5 class="font-size-14 mb-3">Clothes</h5>
                        <ul class="list-unstyled product-list">
                            <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> T-shirts</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Shirts</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Jeans</a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Jackets</a></li>
                        </ul>
                    </div>
                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Price</h5>
                        <input type="text" id="pricerange">
                    </div>

                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Discount</h5>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck1">
                            <label class="form-check-label" for="productdiscountCheck1">
                                Less than 10%
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck2">
                            <label class="form-check-label" for="productdiscountCheck2">
                                10% or more
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck3" checked>
                            <label class="form-check-label" for="productdiscountCheck3">
                                20% or more
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck4">
                            <label class="form-check-label" for="productdiscountCheck4">
                                30% or more
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck5">
                            <label class="form-check-label" for="productdiscountCheck5">
                                40% or more
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="productdiscountCheck6">
                            <label class="form-check-label" for="productdiscountCheck6">
                                50% or more
                            </label>
                        </div>

                    </div>

                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Customer Rating</h5>
                        <div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                <label class="form-check-label" for="productratingCheck1">
                                    4 <i class="bx bxs-star text-warning"></i> & Above
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="productratingCheck2">
                                <label class="form-check-label" for="productratingCheck2">
                                    3 <i class="bx bxs-star text-warning"></i> & Above
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="productratingCheck3">
                                <label class="form-check-label" for="productratingCheck3">
                                    2 <i class="bx bxs-star text-warning"></i> & Above
                                </label>
                            </div>

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="productratingCheck4">
                                <label class="form-check-label" for="productratingCheck4">
                                    1 <i class="bx bxs-star text-warning"></i>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div> -->
    <div class="row mb-3">
        <div class="col-md-4 col-sm-4">
            <div class="mt-2">
                <h5></h5>
            </div>
        </div>
        <div class="col-lg-8 col-sm-6">
            <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
                <div class="search-box me-2">
                    <div class="position-relative">
                        <input type="text" class="form-control border-0" placeholder="Search...">
                        <i class="bx bx-search-alt search-icon"></i>
                    </div>
                </div>
                <?php if(Auth::check()): ?>
                <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(route('AllGridOrphans')); ?>"><i class="bx bx-grid-alt"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('AllOrphans')); ?>"><i class="bx bx-list-ul"></i></a>
                    </li>
                </ul>
                <?php endif; ?>

            </form>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <div class="product-container">
                <div class="product-image">
                    <!-- <span class="hover-link"></span> -->
                    <!-- <a href="<?php echo e(route('OrphanDetailOrphans', ['data' => $data -> id])); ?>" class="product-link">view details</a> -->

                    <a  href="<?php echo e(route('AddToCartOrphans', ['data' => $data -> id])); ?>" class="product-link">Sponsor Me</a>
                    <img class="img-responsive" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="" >
                </div>
                <div class="product-description">
                    <div class="product-label">
                        
                        <div class="product-name textoverflow" >
                            <h1><?php echo e($data -> FirstName); ?> / <?php echo e(\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y')); ?> </h1>
                            <!-- <p class="price">$39</p> -->
                      
                        <div class="row mb-3">
                                <div class="col-md-12">
                                    <div>
                                    <li class="list-inline-item me-3">
                            <span class="text-danger text-uppercase">Waiting Since:</span>
                            <?php echo e($data -> created_at -> format("d-m-Y")); ?>

                            
                        </li>
                                        <!-- <p class="text-muted"><i class="bx bx-user-circle  font-size-16 align-middle text-primary me-1"></i>ID: <?php echo e($data -> id); ?> </p> -->
                                        <p class="text-muted text-uppercase"><i class="bx bx-home-alt  font-size-16 align-middle text-primary me-1 "></i> <?php echo e($data -> ProvinceName); ?> - Afghanistan </p>
                                        
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4 col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="product-img position-relative">
                        <div class="avatar-sm product-ribbon">
                                   <?php if( $data -> LevelPoverty == 1): ?>
                                        <span class="avatar-title bg-danger rounded-circle ">20%</span>
                                        <?php endif; ?>
                                        <?php if( $data -> LevelPoverty == 2): ?>
                                        <span class="avatar-title bg-danger rounded-circle ">40%</span>
                                        <?php endif; ?>
                                        <?php if( $data -> LevelPoverty == 3): ?>
                                        <span class="avatar-title bg-danger rounded-circle ">60%</span>
                                        <?php endif; ?>
                                        <?php if( $data -> LevelPoverty == 4): ?>
                                        <span class="avatar-title bg-danger rounded-circle ">80%</span>
                                        <?php endif; ?>
                                        <?php if( $data -> LevelPoverty == 5): ?>
                                        <span class="avatar-title bg-danger rounded-circle font-size-24">100%</span>
                                        <?php endif; ?> 
                        </div>
                        <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="" class="img-fluid mx-auto d-block">
                    </div>
                    <div class="mt-4 mt-xl-3">
                        <a href="javascript: void(0);" class="text-primary">Orphan</a>
                        <h5 class="mt-1 mb-3"> <?php echo e($data -> FirstName); ?> <?php echo e($data -> LastName); ?> </h5>

                        <p class="text-muted float-start me-3">
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
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       <?php endif; ?>
                                       <?php if( $data -> LevelPoverty == 4): ?>
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-warning font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       <?php endif; ?>
                                       <?php if( $data -> LevelPoverty == 5): ?>
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-warning font-size-18"></i>
                                         <i class="bx bxs-star text-warning font-size-20"></i>
                                       <?php endif; ?>
                        </p>
                        <p class="text-muted mb-4"><b class="text-success text-uppercase">$40 USD </b>/ Month</p>

                         <h5 class="mb-4">Support :  <b class="text-success text-uppercase">$225 USD</b></h5> 
                         <p class="text-muted mb-4">To achieve this, it would be necessary to have uniform grammar pronunciation and more common words If several languages coalesce</p> 

                    </div>
                    <div class="text-center">
                        <a href="<?php echo e(route('StatusOrphans', ['data' => $data -> id])); ?>" class="btn btn-warning waves-effect waves-light mt-2 me-1">
                            <i class="bx bx-happy-beaming me-2"></i> Sponsor Me
                      </a>
                        <a href="<?php echo e(route('OrphanDetailOrphans', ['data' => $data -> id])); ?>" class="btn waves-effect  mt-2 waves-light">
                            Read More <i class=" bx bx-right-arrow-circle  me-2"></i>
                 </a>
                    </div>
                </div>
                <div class="px-4 py-3 border-top">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-3">
                            <span class="badge bg-success">Verified</span>
                        </li>
                        <li class="list-inline-item me-3">
                            <span class="text-danger text-uppercase">Waiting Since:</span>
                            <i class="bx bx-calendar me-1"></i> <?php echo e($data -> created_at); ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                <li class="page-item disabled">
                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">1</a>
                </li>
                <!-- <li class="page-item ">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">5</a> -->
                </li>
                <li class="page-item">
                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Ion Range Slider-->
<script src="<?php echo e(URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.js')); ?>"></script>

<!-- init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/product-filter-range.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/AllGrid.blade.php ENDPATH**/ ?>