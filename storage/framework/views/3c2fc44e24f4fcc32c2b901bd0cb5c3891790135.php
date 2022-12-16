
<?php $__env->startSection('title'); ?> Education and Scholarship <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('StatusScholarship', ['data' => $data -> Scholarship_ID])); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-outline-dark mb-3 waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
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
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <?php if( $data -> Status == 'AppliedApplicant' ): ?>
        <a href="<?php echo e(route('SelecteForInterviewApplicant', ['data' => $data -> id])); ?>" class="btn btn-outline-primary btn-lg waves-effect  waves-light btn-rounded approve m-3">
            <i class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i>Select For Interview
        </a>
        <a href="<?php echo e(route('RejectApplicant', ['data' => $data -> id])); ?>" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded reject m-3">
            <i class="mdi mdi-account-multiple-remove-outline font-size-16 align-middle me-1"></i>Reject
        </a>
        <?php endif; ?>

        <?php if( $data -> Status == 'SelectedForInterview'): ?>
        <a href="<?php echo e(route('FinalizeApplicant', ['data' => $data -> id])); ?>" class="btn btn-outline-success btn-lg waves-effect  waves-light btn-rounded approve m-3">
            <i class="mdi mdi-account-check-outline font-size-16 align-middle me-1"></i>Selecte For Scholarship
        </a>
        <a href="<?php echo e(route('RejectApplicant', ['data' => $data -> id])); ?>" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded reject m-3">
            <i class="mdi mdi-account-multiple-remove-outline font-size-16 align-middle me-1"></i>Reject
        </a>
        <?php endif; ?>

        <?php if( $data -> Status == 'FinalizedApplicant'): ?>
        <a href="<?php echo e(route('AcceptedOfferApplicant', ['data' => $data -> id])); ?>" class="btn btn-outline-info btn-lg waves-effect  waves-light btn-rounded approve m-3">
            <i class="mdi mdi-account-details-outline font-size-16 align-middle me-1"></i>Applicant Accepted Offer
        </a>
        <a href="<?php echo e(route('RejectApplicant', ['data' => $data -> id])); ?>" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded reject m-3">
            <i class="mdi mdi-account-multiple-remove-outline font-size-16 align-middle me-1"></i>Reject
        </a>
        <?php endif; ?>


        <?php if($data -> Status == 'Rejected' || $data -> Status == 'AcceptedOffer' ): ?>
        <a href="<?php echo e(route('ReInitiateApplicant', ['data' => $data -> id])); ?>" class="btn btn-outline-info btn-lg waves-effect  waves-light btn-rounded reinitiate m-3">
            <i class="bx bx-time-five  font-size-16 align-middle me-1"></i>Re-Initiate
        </a>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>

<!-- form advanced init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>
<!-- Form Validation -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>
<script>
    $('.reinitiate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be re initiated!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });


    $('.approve').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be approved!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.reject').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be rejected!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/Education/Applicant/Status.blade.php ENDPATH**/ ?>