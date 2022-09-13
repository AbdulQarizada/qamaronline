

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Login'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-white bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-black p-4">
                                            
                                            <!-- <h5 class="text-primary">Qamar Foundation</h5>
                                            <p>Sign in to continue to Qamar Online Systems.</p> -->
                                        </div>
                                    </div>
                                    <!-- <div class="col-5 align-self-end">
                                        <img src="<?php echo e(URL::asset('/assets/images/profile-img.png')); ?>" alt=""
                                            class="img-fluid">
                                    </div> -->
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="auth-logo">
                          

                                    <a href="index" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo e(URL::asset('/assets/images/logo.png')); ?>" alt=""
                                                    class="rounded-circle" height="34">
                                                    
                                            </span>
                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal"  method="POST" action="<?php echo e(route('login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                                <label for="Email" class="form-label">Email</label>
                                                <input name="Email" type="email" class="form-control <?php $__errorArgs = ['Email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  id="Email" placeholder="Enter Email" autocomplete="Email" autofocus>
                                                <?php $__errorArgs = ['Email'];
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

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <?php if(Route::has('password.request')): ?>
                                                    <!-- <a href="<?php echo e(route('password.request')); ?>" class="text-muted">Forgot password?</a> -->
                                                    <?php endif; ?>
                                                </div>
                                                <label class="form-label">Password</label>
                                                <div class="input-group auth-pass-inputgroup <?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                    <input type="password" name="Password" class="form-control  <?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Password"  placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    <?php $__errorArgs = ['Password'];
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

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                <label class="form-check-label" for="remember">
                                                    Remember me
                                                </label>
                                            </div>

                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                                                    In</button>
                                            </div>

                                        <!-- <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign in with</h5>

                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()"
                                                        class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()"
                                                        class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()"
                                                        class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <div class="mt-4 text-center">
                                            <p>Do not have an account ? <a href="<?php echo e(url('register')); ?>" class="fw-medium text-primary"> Create one</a> </p>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="mt-5 text-center">

                            <div>
                                <p>Don't have an account ? <a href="auth-register" class="fw-medium text-primary">
                                        Signup now </a> </p>
                                <p>© <script>
                                        document.write(new Date().getFullYear())

                                    </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                </p>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Qamar\QamarOnline\qamaronline\resources\views/Auth/Login.blade.php ENDPATH**/ ?>