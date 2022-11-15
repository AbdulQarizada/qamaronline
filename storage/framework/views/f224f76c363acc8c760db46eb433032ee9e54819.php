

<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('AllOrphans')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-dark mb-3 waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product-detai-imgs">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-4">
                                    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab" aria-controls="product-2" aria-selected="false">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/FamilyPic/'.$data -> FamilyPic)); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab" aria-controls="product-3" aria-selected="false">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/HousePic/'.$data -> HousePic)); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                        <a class="nav-link" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab" aria-controls="product-4" aria-selected="false">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                            <div>
                                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" class="badge badge-soft-info">
                                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="Profile" class="d-block" height="300px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                            <div>
                                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/FamilyPic/'.$data -> FamilyPic)); ?>" class="badge badge-soft-info">
                                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/FamilyPic/'.$data -> FamilyPic)); ?>" alt="" class=" d-block" height="300px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                            <div>
                                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/HousePic/'.$data -> HousePic)); ?>" class="badge badge-soft-info">
                                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/HousePic/'.$data -> HousePic)); ?>" alt="" class=" d-block" height="300px">
                                                </a>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                                            <div>
                                                <a target="_Blanck" href="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)); ?>" class="badge badge-soft-info">
                                                    <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Tazkiras/'.$data -> Tazkira)); ?>" alt="" class=" d-block" height="300px">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-2">
                                        <?php if( $data -> Status == 'Approved' || $data -> Status == 'Rejected' || $data -> Status == 'Assigned' || $data -> Status == 'Sponsored'): ?>
                                        <a href="<?php echo e(route('ReInitiateOrphans', ['data' => $data -> id])); ?>" class="btn btn-info waves-effect waves-light reinitiate m-3">
                                            <i class="bx bx-time-five  font-size-16 align-middle"></i>Re-Initiate
                                        </a>
                                        <?php endif; ?>
                                        <?php if( $data -> Status == 'Pending'): ?>
                                        <a href="<?php echo e(route('ApproveOrphans', ['data' => $data -> id])); ?>" class="btn btn-success waves-effect waves-light approve m-3">
                                            <i class="bx bx-check-circle font-size-16 align-middle"></i>Approve
                                        </a>
                                        <a href="<?php echo e(route('RejectOrphans', ['data' => $data -> id])); ?>" class="btn btn-danger waves-effect waves-light reject m-3">
                                            <i class=" bx bx-x-circle font-size-16 align-middle"></i>Reject
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class=" text-uppercase text-primary">why Should You Help Me?</h5>
                                <div class="d-flex py-0">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" class="avatar-xs rounded-circle" alt="img" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 font-size-15"><?php echo e($data -> FirstName); ?> <?php echo e($data -> LastName); ?></h5>
                                        <p class="text-muted text-break"><?php echo e($data -> WhyShouldYouHelpMe); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div style="float: right;">
                                    <div class="text-center">
                                        <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>
                                        <div class="mb-3" class="rounded">
                                            <?php echo DNS2D::getBarcodeSVG(''.$data->TazkiraID, 'QRCODE', 6, 6, true); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">PEROSNAL INFORMATION</h5>
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
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e(Carbon\Carbon::parse($data ->  DOB) -> format("j F Y")); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Gender</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Gender); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Language</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Language); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Age</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e(\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y')); ?> Years</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Introducer Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> IntroducerName); ?></td>
                </tr>

            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">ADDRESS AND CONTACT</h5>
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
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Of</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> InCareName); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> InCareNumber); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care Relationship</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> InCareRelationship); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">In Care TazkiraID</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> InCareTazkiraID); ?></td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">EDUCATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Currently In School?</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> CurrentlyInSchool); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolName); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Number </td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolNumber); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Email</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolEmail); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Class</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Class); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Province</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolProvince); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School District</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SchoolDistrict); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">School Village</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Village); ?></td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">FAMILY AND INCOME INFORMATION</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Father's Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> FatherName); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Income</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> MonthlyFamilyIncome); ?> (AFGHANI)</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Monthly Family Expenses</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> MonthlyFamilyExpenses); ?> (AFGHANI)</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Number of Family Members</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> NumberFamilyMembers); ?> </td>
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
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">SPONSORS</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Is Sponsored?</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">
                    <?php if($data -> IsSponsored == 1): ?>
                    <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Yes</a></h3>
                    <?php endif; ?>
                    <?php if($data -> IsSponsored != 1): ?>
                    <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Yet Sponsored</a></h3>
                    <?php endif; ?>
                </td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Sponsor Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SFullName); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Sponsor Number </td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> SPrimaryNumber); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Sponsor Email</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Semail); ?></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Sponsorship Start Date</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Sponsored_StartDate); ?></td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Sponsorship End Date</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><?php echo e($data -> Sponsored_EndDate); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>

<script>
    $('.reinitiate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be re initiated!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });


    $('.approve').on('click', function(event) {
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

    $('.reject').on('click', function(event) {
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
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/Status.blade.php ENDPATH**/ ?>