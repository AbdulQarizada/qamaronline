
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="<?php echo e(route('IndexOrphansRelief')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <?php if($PageInfo == 'All'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>All Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Pending'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Pending Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Approved'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Approved Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Rejected'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Rejected Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Waiting'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Waiting Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Sponsored'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Sponsored Orphans</span>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h3 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Filter </h3>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="<?php echo e(route('SearchOrphans')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="position-relative">
                                <div class="input-group">
                                    <select class="form-select Province form-select-lg <?php $__errorArgs = ['Province_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Province_ID" value="<?php echo e(old('Province_ID')); ?>" id="Province_ID">
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
                        <div class="col-md-12 mb-2">
                            <div class="position-relative">
                                <div class="input-group">
                                    <select class="form-select  District form-select-lg <?php $__errorArgs = ['District_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="District_ID" value="<?php echo e(old('District_ID')); ?>" id="District_ID">
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
                        <div class="col-md-12 mb-2">
                            <div class="hstack gap-2">
                                <input type="text" name="PageInfo" value="<?php echo e($PageInfo); ?>" class="d-none">
                                <input class="form-control form-control-lg" type="text" name="data">
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg"><i class="mdi mdi-magnify me-1"></i>Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-12 mb-2">
        <div class="hstack gap-3">
            <a class="btn  btn-lg waves-effect  waves-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" data-bs-toggle="tooltip" data-bs-placement="top" title="Filter"> <i class="mdi mdi-filter-menu-outline font-size-24 align-middle"></i></a>
            <select class="form-select  form-select-lg <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="window.location.href=this.value;">
                <option value="<?php echo e(route('AllOrphans')); ?>">Please Filter Your Choices</option>
                <option value="<?php echo e(route('AllOrphans')); ?>" <?php echo e($PageInfo == 'All' ? 'selected' : ''); ?>>All</option>
                <option value="<?php echo e(route('PendingOrphans')); ?>" <?php echo e($PageInfo == 'Pending' ? 'selected' : ''); ?>>Pending</option>
                <option value="<?php echo e(route('ApprovedOrphans')); ?>" <?php echo e($PageInfo == 'Approved' ? 'selected' : ''); ?>>Approved</option>
                <option value="<?php echo e(route('RejectedOrphans')); ?>" <?php echo e($PageInfo == 'Rejected' ? 'selected' : ''); ?>>Rejected</option>
                <option value="<?php echo e(route('WaitingOrphans')); ?>" <?php echo e($PageInfo == 'Waiting' ? 'selected' : ''); ?>>Waiting</option>
                <option value="<?php echo e(route('SponsoredOrphans')); ?>" <?php echo e($PageInfo == 'Sponsored' ? 'selected' : ''); ?>>Sponsored</option>
            </select>
        </div>
    </div>
    <div class="col-md-8 col-sm-12 mb-2">
        <a href="<?php echo e(route('AllGridOrphans')); ?>" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Orphans Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="<?php echo e(route('CreateOrphans')); ?>" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD ORPHAN</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="card-header bg-dark text-white"></h3>
        <div class="table-responsive">
            <table class="table  table-striped table-hover dt-responsive nowrap w-100">
                <thead class="table-light">
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="checkAll">
                        </th>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Contacts</th>
                        <th>Family Status</th>
                        <th>Status</th>
                        <th>Sponsor</th>
                        <th>Created By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox" id="formCheck1" name="ids[]" value="<?php echo e($data -> id); ?>">
                        </td>
                        <td>
                            <div class="avatar-xs">
                                <span class="avatar-title bg-dark rounded-circle">
                                    <?php echo e($loop->iteration); ?>

                                </span>
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> FirstName); ?> <?php echo e($data -> LastName); ?></a></h5>
                            <p class="text-muted mb-0"><?php echo e($data -> IntroducerName); ?></p>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> ProvinceName); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> DistrictName); ?></p>

                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($data -> PrimaryNumber); ?></a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($data -> SecondaryNumber); ?></p>
                                <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($data -> RelativeNumber); ?></p>
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
                            <div>
                                <?php if($data -> Status == 'Pending'): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary"><?php echo e($data -> Status); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php endif; ?>
                                <?php if($data -> Status == 'Approved'): ?>
                                <?php if($PageInfo == 'Waiting'): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">Waiting </a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php else: ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($data -> Status); ?> </a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php if($data -> Status == 'Rejected'): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger"><?php echo e($data -> Status); ?> </a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php endif; ?>
                                <?php if($data -> Status == 'Sponsored'): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info"><?php echo e($data -> Status); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php endif; ?>
                            </div>
                        </td>
                        <td>
                            <?php if( $data -> IsSponsored != 1): ?>
                            <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Yet Sponsored</a></h3>
                            <?php endif; ?>
                            <?php if( $data -> IsSponsored == 1): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data ->  SFullName); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e(Carbon\Carbon::parse($data -> Sponsored_StartDate) -> format("j F Y")); ?></p>
                                <p class="text-muted mb-0"><?php echo e(Carbon\Carbon::parse($data -> Sponsored_EndDate) -> format("j F Y")); ?></p>
                            </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if( $data -> Created_By !=""): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data ->  UFirstName); ?> <?php echo e($data ->  ULastName); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data ->  UJob); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if( $data -> Created_By ==""): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                <p class="text-muted mb-0">Requested</p>
                            </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="<?php echo e(route('StatusOrphans', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                    <i class="mdi mdi-eye-settings-outline font-size-16 align-middle"></i>
                                </a>
                                <?php if($data -> Status == 'Pending'): ?>
                                <a href="<?php echo e(route('EditOrphan', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                                    <i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('DeleteOrphan', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                    <i class="mdi mdi-delete-outline font-size-16 align-middle"></i>
                                </a>
                                <?php endif; ?>
                                <?php if( $data -> IsSponsored == 1): ?>
                                <a data-bs-toggle="modal" data-bs-target=".bs-<?php echo e($data ->  id); ?>-modal-center" class="btn btn-sm btn-outline-info  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Reassign To Sponsor">
                                    <i class="mdi mdi-account-convert font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('RemoveSponsorOrphan', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-danger waves-effect removeSponsor waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Sponsor">
                                    <i class="mdi mdi-account-multiple-remove-outline font-size-16 align-middle"></i>
                                </a>
                                <div class="modal fade bs-<?php echo e($data ->  id); ?>-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Reassign To Sponsor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" action="<?php echo e(route('AssignSponsorOrphan', ['data' => $data -> id])); ?>" method="POST" enctype="multipart/form-data" novalidate>
                                                    <?php echo method_field('PUT'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3 position-relative">
                                                                <label for="Sponsor_ID" class="form-label">Sponsor</label>
                                                                <div class="input-group " id="example-date-input">
                                                                    <select class="form-control  form-control-lg" id="Sponsor_ID" name="Sponsor_ID" value="<?php echo e(old('Sponsor_ID')); ?>" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                                        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($sponsor -> id); ?>"><?php echo e($sponsor -> FullName); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
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
                                                        <div class="col-md-6">
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
                                                    <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg">Reassign</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <?php if($data -> Status == 'Approved'): ?>
                                <a data-bs-toggle="modal" data-bs-target=".bs-<?php echo e($data ->  id); ?>-modal-center" class="btn btn-sm btn-outline-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign To Sponsor">
                                    <i class="mdi mdi-account-child-outline font-size-16 align-middle"></i>
                                </a>
                                <div class="modal fade bs-<?php echo e($data ->  id); ?>-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Assign To Sponsor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" action="<?php echo e(route('AssignSponsorOrphan', ['data' => $data -> id])); ?>" method="POST" enctype="multipart/form-data" novalidate>
                                                    <?php echo method_field('PUT'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3 position-relative">
                                                                <label for="Sponsor_ID" class="form-label">Sponsor</label>
                                                                <div class="input-group " id="example-date-input">
                                                                    <select class="form-control  form-control-lg" id="Sponsor_ID" name="Sponsor_ID" value="<?php echo e(old('Sponsor_ID')); ?>" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                                        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($sponsor -> id); ?>"><?php echo e($sponsor -> FullName); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
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
                                                        <div class="col-md-6">
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
                                                    <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg">Assign</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php if( $data -> Status == 'Rejected'): ?>
                                <a href="<?php echo e(route('DeleteOrphan', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                    <i class="mdi mdi-delete-outline font-size-16 align-middle"></i>
                                </a>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <form class="needs-validation" action="<?php echo e(route('ExportOrphans')); ?>" method="POST" enctype="multipart/form-data" id="ExportForm" novalidate>
            <?php echo csrf_field(); ?>
            <input type="text" class="d-none" name="FormIds" required>
            <a class="btn btn-outline-primary waves-effect float-end  waves-light mt-3 ExportOrphans"><i class="mdi mdi-microsoft-excel me-1"></i> Export To Excel</a>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
            <?php echo $datas->links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($datas->total()); ?> Total Records</span>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Sweetalert -->
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>
<!-- Fomr Validation -->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>
<script>
    $('.delete-confirm').on('click', function(event) {
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
    // Remove Sponsor Confirmation
    $('.removeSponsor').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'Do you want to remove sponsr?!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
    // Search All Districts
    $(document).ready(function() {
        $('.Province').on('change', function() {
            var dID = $(this).val();
            if (dID) {
                $.ajax({
                    url: '/GetDistricts/' + dID,
                    type: "GET",
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('.District').empty();
                            $.each(data, function(key, course) {
                                $('select[name="District_ID"]').append('<option value="' + course.id + '">' + course.Name + '</option>');
                            });
                        } else {
                            $('.District').empty();
                        }
                    }
                });
            } else {
                $('.District').empty();
            }
        });
    });
    // Submit form for excel
    $(document).ready(function() {
        $('.ExportOrphans').click(function() {
            ids = new Array();
            $("input[name='ids[]']:checked").each(function() {
                ids.push(this.value);
            });
            $("input[name=FormIds]").val(ids);
            $("#ExportForm").submit();
        });
    });
    // check all checkboxs for excel
    $("#checkAll").click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/All.blade.php ENDPATH**/ ?>