

<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('AllOrphans')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light "><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Assign To Sponsor</span>
    </div>
</div>


<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table align-middle table-nowrap table-hover">
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <img class="rounded avatar-lg" src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)); ?>" alt="">
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> FirstName); ?> <?php echo e($data -> LastName); ?></a></h5>
                            <p class="text-muted mb-0">ID: <?php echo e($data -> id); ?></p>
                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"> TazkiraID</a></h5>
                            <p class="text-muted mb-0"><?php echo e($data -> TazkiraID); ?></p>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> Province); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> District); ?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($data -> PrimaryNumber); ?></a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($data -> SecondaryNumber); ?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> FamilyStatus); ?></a></h5>
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
                        <td>
                            <p class=" mb-0 text-danger">Waiting Since</p>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> created_at -> format("d-m-Y")); ?></a></h5>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card ">
            <h4 class="card-header bg-dark text-white "></h4>
            <div class="card-body">
                <form class="needs-validation" action="<?php echo e(route('AssignSponsorOrphan', ['data' => $data -> id])); ?>" method="POST" enctype="multipart/form-data" novalidate>
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Sponsor_ID" class="form-label">Select Sponsor</label>
                                <div class="input-group " id="example-date-input">
                                    <select class="form-control  form-control-lg select2" id="Sponsor_ID" name="Sponsor_ID" value="<?php echo e(old('Sponsor_ID')); ?>" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                        <option value="None">Select</option>
                                        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($sponsor -> id); ?>"><?php echo e($sponsor -> FullName); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="mb-3 position-relative">
                                <label for="Sponsored_StartDate" class="form-label">Sponsored Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group " id="example-date-input">
                                    <input class="form-control form-select-lg <?php $__errorArgs = ['Sponsored_StartDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Sponsored_StartDate')); ?>" type="date" id="example-date-input" name="Sponsored_StartDate" id="Sponsored_StartDate" required>
                                    <?php $__errorArgs = ['Sponsored_StartDate'];
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
                        <div class="col-md-4 ">
                            <div class="mb-3 position-relative">
                                <label for="Sponsored_EndDate" class="form-label">Sponsored End Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group " id="example-date-input">
                                    <input class="form-control form-select-lg <?php $__errorArgs = ['Sponsored_EndDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Sponsored_EndDate')); ?>" type="date" id="example-date-input" name="Sponsored_EndDate" id="Sponsored_EndDate" required>
                                    <?php $__errorArgs = ['Sponsored_EndDate'];
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
                    <button class="btn btn-success btn-lg m-3" type="submit">Assign</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>


<!-- form advanced init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(Auth::user()->IsEmployee == 1 ? 'layouts.master-layouts' : 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/AssignToSponsor.blade.php ENDPATH**/ ?>