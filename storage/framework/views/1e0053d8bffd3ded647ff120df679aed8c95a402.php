

<?php $__env->startSection('title'); ?> ADD ROLE TO USER@endsection

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/filepond.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<?php if(Auth::user()->IsEmployee == 1): ?>
<div class="row">
    <div class="col-12">
        <a href="<?php echo e(route('AllUser')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-primary  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">ROLE USER</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>

<?php endif; ?>
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-lg-12">
        <div>
            <div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-hover">


                        <tbody>
                            <tr>
                                <td>
                                    <div>
                                        <img class="rounded avatar-lg" src="<?php echo e(URL::asset('/uploads/User/Employees/Profiles/'.$data -> Profile)); ?>" alt="">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> FirstName); ?> <?php echo e($data -> LastName); ?></a></h5>
                                    <p class="text-muted mb-0">ID: <?php echo e($data -> id); ?></p>
                                </td>
                                <td>

                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"> TazkiraID</a></h5>
                                    <p class="text-muted mb-0"><?php echo e($data -> Tazkira_ID); ?></p>
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
                                </td>
                                <td>
                                <p class="text-muted mb-0 text-danger"><?php echo e($data -> Job); ?></p>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> created_at -> format("d-m-Y")); ?></a></h5>
                                       

                                </td>
                            </tr>



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<form class="needs-validation" action="<?php echo e(route('AssignRoleUser', [$data -> id])); ?>" method="POST" enctype="multipart/form-data" novalidate>
<?php echo method_field('PUT'); ?>

    <?php echo csrf_field(); ?>




    <?php if(Auth::user()->IsSuperAdmin == 1): ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-primary text-white ">ROLE AND PERMISSION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <div class="row">
                        <!-- <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsEmployee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsEmployee" name="IsEmployee">
                                    <label class="form-check-label" for="IsEmployee">
                                        IsEmployee
                                    </label>
                                    <?php $__errorArgs = ['IsEmployee'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsActive'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsActive" name="IsActive">
                                    <label class="form-check-label" for="IsActive">
                                       IsActive
                                    </label>
                                    <?php $__errorArgs = ['IsActive'];
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
                        </div> -->
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsSuperAdmin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsSuperAdmin" name="IsSuperAdmin">
                                    <label class="form-check-label" for="IsSuperAdmin">
                                    IsSuperAdmin
                                    </label>
                                    <?php $__errorArgs = ['IsSuperAdmin'];
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
                        <!-- <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsOrphanSponsor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsOrphanSponsor" name="IsOrphanSponsor">
                                    <label class="form-check-label" for="IsOrphanSponsor">
                                    IsOrphanSponsor
                                    </label>
                                    <?php $__errorArgs = ['IsOrphanSponsor'];
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
                        </div> -->
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsOrphanRelief'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsOrphanRelief" name="IsOrphanRelief">
                                    <label class="form-check-label" for="IsOrphanRelief">
                                    IsOrphanRelief
                                    </label>
                                    <?php $__errorArgs = ['IsOrphanRelief'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsAidAndRelief'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsAidAndRelief" name="IsAidAndRelief">
                                    <label class="form-check-label" for="IsAidAndRelief">
                                    IsAidAndRelief
                                    </label>
                                    <?php $__errorArgs = ['IsAidAndRelief'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsWash'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsWash" name="IsWash">
                                    <label class="form-check-label" for="IsWash">
                                    IsWash
                                    </label>
                                    <?php $__errorArgs = ['IsWash'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsEducation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsEducation" name="IsEducation">
                                    <label class="form-check-label" for="IsEducation">
                                    IsEducation
                                    </label>
                                    <?php $__errorArgs = ['IsEducation'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsInitiative'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsInitiative" name="IsInitiative">
                                    <label class="form-check-label" for="IsInitiative">
                                    IsInitiative
                                    </label>
                                    <?php $__errorArgs = ['IsInitiative'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsMedicalSector'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsMedicalSector" name="IsMedicalSector">
                                    <label class="form-check-label" for="IsMedicalSector">
                                    IsMedicalSector
                                    </label>
                                    <?php $__errorArgs = ['IsMedicalSector'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsFoodAppeal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsFoodAppeal" name="IsFoodAppeal">
                                    <label class="form-check-label" for="IsFoodAppeal">
                                    IsFoodAppeal
                                    </label>
                                    <?php $__errorArgs = ['IsFoodAppeal'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsQamarCareCard'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsQamarCareCard" name="IsQamarCareCard">
                                    <label class="form-check-label" for="IsQamarCareCard">
                                    IsQamarCareCard
                                    </label>
                                    <?php $__errorArgs = ['IsQamarCareCard'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsAppealsDistributions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsAppealsDistributions" name="IsAppealsDistributions">
                                    <label class="form-check-label" for="IsAppealsDistributions">
                                    IsAppealsDistributions
                                    </label>
                                    <?php $__errorArgs = ['IsAppealsDistributions'];
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
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['IsDonorsAndDonorBoxes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="checkbox" value="1" id="IsDonorsAndDonorBoxes" name="IsDonorsAndDonorBoxes">
                                    <label class="form-check-label" for="IsDonorsAndDonorBoxes">
                                    IsDonorsAndDonorBoxes
                                    </label>
                                    <?php $__errorArgs = ['IsDonorsAndDonorBoxes'];
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
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <?php endif; ?>



    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-primary text-white ">DOCUMENTS</h4>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <label for="Tazkira" class="form-label">Tazkira</label>
                            <input type="file" class="my-pond <?php $__errorArgs = ['Tazkira'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Tazkira')); ?>" name="Tazkira" id="Tazkira" />
                            <?php $__errorArgs = ['Tazkira'];
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
    </div> -->
    <!-- end row -->
    <div>

        <button class="btn btn-success btn-lg" type="submit">Update </button>
        <a class="btn btn-danger btn-lg" href="<?php echo e(route('AllUser')); ?>">Cancel</a>
    </div>





</form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>



<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/filepond.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-image-preview.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-file-validate-type.js')); ?>"></script>


<script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>

<!-- Bootstrap rating js -->
<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js')); ?> "></script>

<script src="<?php echo e(URL::asset('/assets/js/pages/rating-init.js')); ?>"></script>


<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);




    // Get a reference to the file input element
    const inputProfile = document.querySelector('input[name="Profile"]');

    // Get a reference to the file input element
    const inputTazkira = document.querySelector('input[name="Tazkira"]');



    // Create a FilePond instance
    const Profile = FilePond.create(inputProfile, {
        labelIdle: 'Profile <span class="bx bx-upload"></span >',


    });


    // Create a FilePond instance
    const Tazkira = FilePond.create(inputTazkira, {
        labelIdle: 'Click to upload Tazkira <span class="bx bx-upload"></span >',
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Beneficiaries_Tazkira',
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            }

        },
        instantUpload: true,


    });



    Profile.setOptions({
        server: {

            url: '../Employees_Profile',
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            }

        },
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        instantUpload: true,
        imagePreviewHeight: 100,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 10,
        imageResizeTargetHeight: 10,
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'right bottom',
        styleButtonRemoveItemPosition: 'left bottom',
        styleButtonProcessItemPosition: 'right bottom'
    });


    


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
                            //  $('.District').append('<option value="None" hidden>All</option>'); 
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

    function Random() {
        const result = Math.random().toString(36).substring(2,7);
        document.getElementById('QCC').value = result;
    };





    $(document).ready(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#SpuoseTazkiraID').hide();
        $('.SpuoseTazkiraID').hide();
        $('#No').prop("checked", true);

    });
    $('#Yes').click(function() {
        $('#SpuoseName').show();
        $('.SpuoseName').show();
        $('#SpuoseTazkiraID').show();
        $('.SpuoseTazkiraID').show();
    });



    $('#Single').click(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#SpuoseTazkiraID').hide();
        $('.SpuoseTazkiraID').hide();
    });
    $('#Divorced').click(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#SpuoseTazkiraID').hide();
        $('.SpuoseTazkiraID').hide();
    });
    $('#Widow').click(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#SpuoseTazkiraID').hide();
        $('.SpuoseTazkiraID').hide();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Auth::user()->IsEmployee == 1 ? 'layouts.master-layouts' : 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/SystemManagement/User/Role.blade.php ENDPATH**/ ?>