
<?php $__env->startSection('title'); ?> Education and Scholarship <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tabstyle.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('AllScholarship')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-outline-dark mb-3 waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Scholarship Information</h5>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div>
            <div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Avalible Seats</th>
                                <th>Application Duration</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class=" mb-1"><a href="#" class="text-dark"><?php echo e($data -> ScholarshipName); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($data -> ScholarshipType); ?></p>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> Country); ?></a></h5>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-danger rounded-circle">
                                            <?php echo e($data -> Seats); ?>

                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1 text-success"><?php echo e(Carbon\Carbon::parse($data -> StartDate) -> format("j F Y")); ?></h5>
                                        <h5 class="font-size-14 mb-1 text-danger"><?php echo e(Carbon\Carbon::parse($data -> EndDate) -> format("j F Y")); ?></h5>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <?php if(Carbon\Carbon::now() <= $data -> EndDate): ?>
                                          <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></h5>
                                        <?php else: ?>
                                          <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger ">Expired</a></h5>
                                        <?php endif; ?>
                                    </div>
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
                                        <a data-bs-toggle="collapse" data-bs-target="#EditScholarship" aria-expanded="false" aria-controls="EditScholarship" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Record" class="btn btn-outline-info btn-sm waves-effect  waves-light float-end text-uppercase"><i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="collapse hide" id="EditScholarship">
            <div class="card shadow-none card-body text-muted mb-0 mb-4" style="border: 2px dashed #50a5f1;">
                <form class="needs-validation" action="<?php echo e(route('UpdateScholarship', [$data -> id])); ?>" method="POST" enctype="multipart/form-data" novalidate>
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3 ">
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active bg-info" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="mdi mdi-bullseye-arrow  d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Scholarship</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="card-header bg-info text-white mb-3"></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="ScholarshipName" class="form-label ">Scholarship Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['ScholarshipName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> ScholarshipName); ?>" id="ScholarshipName" name="ScholarshipName" required>
                                                                    <?php $__errorArgs = ['ScholarshipName'];
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
                                                                    <label for="ScholarshipType_ID" class="form-label">Scholarship Type <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <select class="form-select  form-select-lg <?php $__errorArgs = ['ScholarshipType_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> ScholarshipType_ID); ?>" id="ScholarshipType_ID" name="ScholarshipType_ID" required>
                                                                        <option value="">Select Scholarship Type</option>
                                                                        <?php $__currentLoopData = $scholarshiptypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scholarshiptype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($scholarshiptype -> id); ?>" <?php echo e($scholarshiptype -> id ==  $data -> ScholarshipType_ID ? 'selected' : ''); ?>><?php echo e($scholarshiptype -> Name); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                    <?php $__errorArgs = ['ScholarshipType_ID'];
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
                                                                    <label for="Country_ID" class="form-label">Country <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <select class="form-select  form-select-lg  <?php $__errorArgs = ['Country_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> Country_ID); ?>" required id="Country_ID" name="Country_ID">
                                                                        <option value="">Select Your Country</option>
                                                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($country -> id); ?>" <?php echo e($country -> id ==  $data -> Country_ID ? 'selected' : ''); ?>><?php echo e($country -> Name); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                    <?php $__errorArgs = ['Country_ID'];
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
                                                            <div class="col-md-4 ">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="StartDate" class="form-label">Application Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <input class="form-control form-select-lg <?php $__errorArgs = ['StartDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> StartDate); ?>" type="date" id="example-date-input" name="StartDate" id="StartDate" required>
                                                                        <?php $__errorArgs = ['StartDate'];
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
                                                                    <label for="EndDate" class="form-label">Application End Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <input class="form-control form-select-lg <?php $__errorArgs = ['EndDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> EndDate); ?>" type="date" id="example-date-input" name="EndDate" id="EndDate" required>
                                                                        <?php $__errorArgs = ['EndDate'];
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
                                                                    <label for="Seats" class="form-label ">Seats <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <input type="number" class="form-control form-control-lg <?php $__errorArgs = ['Seats'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> Seats); ?>" id="Seats" name="Seats" max="999999" required>
                                                                    <?php $__errorArgs = ['Seats'];
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
                                        <div>
                                            <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit">Update </button>
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
<div class="row mt-4 mb-4">
    <div class="col-md-12 text-center">
        <div class="hstack gap-3">
            <h2 class="mt-4 mb-4">Scholarship Modules</h2>
            <?php if(Carbon\Carbon::now() <= $data -> EndDate): ?>
                <a data-bs-toggle="collapse" data-bs-target="#CreateModule" aria-expanded="false" aria-controls="CreateModule" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Module" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end"><i class="mdi mdi-plus font-size-16  align-middle me-1"></i>ADD MODULE</a>
                <?php endif; ?>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="collapse hide" id="CreateModule">
            <div class="card shadow-none card-body text-muted mb-0 mb-4" style="border: 2px dashed #50a5f1;">
                <form class="needs-validation" action="<?php echo e(route('CreateModuleScholarship')); ?>" method="POST" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3 ">
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active bg-info" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="mdi mdi-bullseye-arrow  d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Module</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="card-header bg-info text-white mb-3"></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 d-none">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Scholarship_ID" class="form-label ">Scholarship Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['Scholarship_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> id); ?>" id="Scholarship_ID" name="Scholarship_ID" required>
                                                                    <?php $__errorArgs = ['Scholarship_ID'];
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
                                                                    <label for="ModuleName" class="form-label ">Module Name <i class="mdi mdi-asterisk text-danger"></i></label>
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
<div class="row">
    <?php $__currentLoopData = $data -> modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-1 mb-1">
        <div class="d-flex flex-wrap gap-2">
            <div class="avatar-xs">
                <span class="avatar-title bg-dark rounded-circle">
                    <?php echo e($loop->iteration); ?>

                </span>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-1">
        <div class="d-flex flex-wrap gap-2">
            <h6 class="mb-1"><a href="#" class="text-dark"><?php echo e($module -> ModuleName); ?></a></h6>
        </div>
    </div>
    <div class="col-md-2 mb-1">
        <div class="d-flex flex-wrap gap-2">
            <?php if(Carbon\Carbon::now() <= $data -> EndDate): ?>
                <a href="<?php echo e(route('DeleteModuleScholarship', ['data' => $module -> id])); ?>" class="btn btn-sm text-danger  waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete <?php echo e($module -> ModuleName); ?>"><i class="mdi mdi-delete-outline font-size-16 align-middle"></i></a>
                <?php endif; ?>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<br />
<br />
<br />
<div class="row mt-4">
    <div class="col-md-10">
        <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Applicants Information</h5>
    </div>
    <div class="col-md-2 col-sm-2 mb-2">
        <a href="<?php echo e(route('CreateApplication')); ?>" target="_blank" aria-expanded="false" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD APPLICANT</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="">
            <div class="">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Applied Applicants</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Selected For Interview</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Finalized Applicants</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Accepted Offer</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Rejected</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped dt-responsive nowrap w-100">
                                        <thead class="table-light">
                                            <tr>
                                                <th>
                                                    <input class="form-check-input" type="checkbox" id="checkAll">
                                                </th>
                                                <th>ID</th>
                                                <th>Full Name</th>
                                                <th>Address</th>
                                                <th>Avalible Seats</th>
                                                <th>Application Duration</th>
                                                <th>Status</th>
                                                <th>Created By</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $data -> applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($data -> Status == "Pending"): ?>
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
                                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> ScholarshipName); ?></a></h5>
                                                    <p class="text-muted mb-0"><?php echo e($data -> ScholarshipType); ?></p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> Country); ?></a></h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-danger rounded-circle">
                                                            <?php echo e($data -> Seats); ?>

                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1 text-success"><?php echo e(Carbon\Carbon::parse($data -> StartDate) -> format("j F Y")); ?></h5>
                                                        <h5 class="font-size-14 mb-1 text-danger"><?php echo e(Carbon\Carbon::parse($data -> EndDate) -> format("j F Y")); ?></h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <?php if(Carbon\Carbon::now() <= $data -> EndDate): ?>
                                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger ">Expired</a></h5>
                                                            <?php else: ?>
                                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></h5>
                                                            <?php endif; ?>
                                                    </div>
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
                                                        <a href="<?php echo e(route('StatusApplicant', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Applicant Details"><i class="mdi mdi-format-list-bulleted-square font-size-16 align-middle"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
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
                                    <?php echo $appliedApplicants->links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($appliedApplicants->total()); ?> Total Records</span>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile1" role="tabpanel"></div>
                    <div class="tab-pane" id="messages1" role="tabpanel"></div>
                    <div class="tab-pane" id="settings1" role="tabpanel"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>

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

    $('.delete-confirm').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be permanantly deleted!'
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

    function Random() {
        const result = Math.random().toString(36).substring(2, 7);
        document.getElementById('QCC').value = result;
    };

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/Education/Scholarship/Status.blade.php ENDPATH**/ ?>