
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-md-10"> <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Sponsored Orphans</h5></div>
        <div class="col-md-2 col-sm-2 mb-2">
        <a data-bs-toggle="modal" data-bs-target=".bs-addorphan-modal-center" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded text-uppercase"><i class="mdi mdi-plus me-1"></i>ADD Orphan</a>
    </div>
</div>
<div class="row">
    <?php $__currentLoopData = $orphans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orphan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-2 col-sm-6 mb-4">
        <a href="#">
            <div class="card-one text-center border border-secondary">
                <div class="float-end">
                    <a  href="<?php echo e(route('DeActivateSubscription', ['data' => $orphan -> pivot -> id])); ?>" class="btn btn-sm text-danger waves-effect waves-light DeactivateSubscription" data-bs-toggle="tooltip" data-bs-placement="top" title="End Subscription">
                        <i class=" bx bx-x-circle   font-size-24 align-middle"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                            <?php if($orphan -> Gender_ID == 60): ?>
                            <!-- if male -->
                            <img class="rounded-circle avatar-sm" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/avatar-male.jpg')); ?>" alt="">
                            <?php endif; ?>
                            <?php if($orphan -> Gender_ID == 61): ?>
                            <!-- if female -->
                            <img class="rounded-circle avatar-sm" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/avatar-female.jpg')); ?>" alt="">
                            <?php endif; ?>
                        </span>
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark"><?php echo e($orphan -> FirstName); ?> <?php echo e($orphan -> LastName); ?></a></h5>
                    <p class="text-muted"><?php echo e($orphan -> IntroducerName); ?> </p>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="contact-links d-flex">
                        <div class="flex-fill">
                            <a class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Subscription End Date"><i class="mdi mdi-calendar-multiselect"></i> <?php echo e(\Carbon\Carbon::parse($orphan ->  pivot -> EndDate)  -> format("j F Y")); ?> </a>
                        </div>
                        <div class="flex-fill">
                            <p href="">Age: <?php echo e(\Carbon\Carbon::parse($orphan -> DOB)->diff(\Carbon\Carbon::now())->format('%y')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                <?php echo $orphans -> links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($orphans -> total()); ?> Total Records</span>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade bs-addorphan-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Subscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="<?php echo e(route('CreateSubscription')); ?>" method="POST" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="mdi mdi-account-box-multiple-outline  d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Subscription</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="card-header bg-primary text-white mb-3"></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 d-none">
                                                                <div class="mb-3 position-relative">
                                                                    <input type="text" class="form-control  form-control-lg <?php $__errorArgs = ['Sponsor_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Auth:: user() -> id); ?> " id="Sponsor_ID" name="Sponsor_ID" required />
                                                                    <?php $__errorArgs = ['Sponsor_ID'];
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
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Orphan_ID" class="form-label">Orphan</label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <select class="form-control  form-control-lg" id="Orphan_ID" name="Orphan_ID" value="<?php echo e(old('Orphan_ID')); ?>" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                                            <option value="">Select Your Orphan</option>
                                                                            <?php $__currentLoopData = $WaitingOrphans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $WaitingOrphan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($WaitingOrphan -> id); ?>"><?php echo e($WaitingOrphan -> FirstName); ?> <?php echo e($WaitingOrphan -> LastName); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                        <?php $__errorArgs = ['Orphan_ID'];
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
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Type" class="form-label">Type</label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <select class="form-control  form-control-lg" id="Type" name="Type" value="<?php echo e(old('Type')); ?>" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                                            <option value="Monthly">Monthly</option>
                                                                            <option value="Yearly">Yearly</option>
                                                                        </select>
                                                                        <?php $__errorArgs = ['Type'];
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
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Card_ID" class="form-label">Sponsor's Card</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select  Card form-select-lg <?php $__errorArgs = ['Card_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Card_ID" value="<?php echo e(old('Card_ID')); ?>" style="height: calc(1.5em + .75rem + 2px) !important;" id="Card_ID" required>
                                                                            <option value="">Select Sponsor's Card</option>
                                                                            <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($card -> id); ?>">************<?php echo e($card -> CardLastFourDigit); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                        <?php $__errorArgs = ['Card_ID'];
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit">Submit </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>
<script>
        // DeACtivate Subscription Confirmation
        $('.DeactivateSubscription').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to end this subscription?!'
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
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/MyOrphan.blade.php ENDPATH**/ ?>