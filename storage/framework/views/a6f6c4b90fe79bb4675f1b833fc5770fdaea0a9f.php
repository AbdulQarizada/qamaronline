

<?php $__env->startSection('title'); ?>
Create Account | Qamar Foundation
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- Bootstrap Css -->
<link href="<?php echo e(URL::asset('/assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?php echo e(URL::asset('/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?php echo e(URL::asset('/assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">

<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/filepond.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>
    <form method="POST" class="form-horizontal" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="w-100">

                    <div class="d-flex flex-column h-100">
                        <!-- <div class="mb-4 mb-md-5">
                            <a href="index" class="d-block auth-logo">
                                <span><img src="<?php echo e(URL::asset('/assets/images/side_logo.png')); ?>" alt="" height="90" class="auth-logo-dark"></span>
                            </a>
                        </div> -->
                        <div>
                            <h5 class="text-primary text-uppercase">Register account</h5>
                            <p class="text-muted">Be part of the biggest network of Qamar Foundation</p>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-lg-12">
                <div class="card ">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="FirstName" class="form-label ">First Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                            <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['FirstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('FirstName')); ?>" id="FirstName" name="FirstName" required>
                                            <?php $__errorArgs = ['FirstName'];
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
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="LastName" class="form-label ">Last Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                            <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['LastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('LastName')); ?>" id="LastName" name="LastName" required>

                                            <?php $__errorArgs = ['LastName'];
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
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="email" class="form-label ">Email <i class="mdi mdi-asterisk text-danger"></i></label>
                                            <input type="email" class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" id="email" name="email" required>

                                            <?php $__errorArgs = ['email'];
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
                                    <div class="col-md-6 ">
                                        <div class="mb-3 position-relative">
                                            <label for="DOB" class="form-label">Date of Birth <i class="mdi mdi-asterisk text-danger"></i></label>
                                            <div class="input-group " id="example-date-input">

                                                <input class="form-control form-select-lg <?php $__errorArgs = ['DOB'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('DOB')); ?>" type="date" id="example-date-input" name="DOB" id="DOB" required>
                                                <?php $__errorArgs = ['DOB'];
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
                                            <label for="password" class="form-label ">Password <i class="mdi mdi-asterisk text-danger"></i></label>
                                            <input type="password" class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('password')); ?>" id="password" name="password" required>

                                            <?php $__errorArgs = ['password'];
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
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="password_confirmation" class="form-label ">Confirm Password <i class="mdi mdi-asterisk text-danger"></i></label>
                                            <input type="password" class="form-control form-control-lg <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('password_confirmation')); ?>" id="password_confirmation" name="password_confirmation" required>

                                            <?php $__errorArgs = ['password_confirmation'];
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
                             
                                    <!-- <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="PhoneNumber" class="form-label ">Phone Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                            <input type="number" class="form-control form-control-lg <?php $__errorArgs = ['PhoneNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('PhoneNumber')); ?>" id="PhoneNumber" name="PhoneNumber" max="999999999" required>
                                            <?php $__errorArgs = ['PhoneNumber'];
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
                                    </div> -->
                                  <div class="col-md-3">
                                  <label for="PhoneNumber" class="form-label ">Support us in:</label>
                                        <div class="mb-3 position-relative">
                                        <div class="form-check form-check-info mb-3">
                                    <input class="form-check-input <?php $__errorArgs = ['OrphanSponsor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  type="checkbox" value="1" id="formCheckcolor3" name="OrphanSponsor" id="OrphanSponsor" checked>
                                    <label class="form-check-label" for="formCheckcolor3">
                                        Orphan Sponsorship
                                    </label>
                                </div>
                                            
                                            <?php $__errorArgs = ['OrphanSponsor'];
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
                            <div class="col-md-3 justify-content-center">
                            <img src="<?php echo e(URL::asset('/assets/images/orphan.jpg')); ?>" alt="" class="img-fluid mx-auto d-block">

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3 mt-4">
                            </div>
                            <div class="mt-3 text-center">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                <p>Already have an account ? <a href="<?php echo e(url('login')); ?>" class="fw-medium text-primary"> Login</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->


    </form>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>


    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>


    <script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>

 

 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Qamar\QamarOnline\qamaronline\resources\views/Auth/Register.blade.php ENDPATH**/ ?>