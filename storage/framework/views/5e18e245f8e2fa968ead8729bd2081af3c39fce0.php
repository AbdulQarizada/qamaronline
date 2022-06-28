

<?php $__env->startSection('title'); ?>
   Successfull Application
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <body>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>

        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>

        <section class="my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="home-wrapper">
                            <div class="mb-5">
                                <a href="index" class="d-block auth-logo">
                                    <!-- <img src="<?php echo e(URL::asset('/assets/images/logo-dark@2x.png')); ?>" alt="" height="80"
                                        class="auth-logo-dark mx-auto">
                                    <img src="<?php echo e(URL::asset('/assets/images/logo-dark@2x.png')); ?>" alt="" height="80"
                                        class="auth-logo-light mx-auto"> -->
                                </a>
                                <!-- <h1 class="mt-5">Qamar Foundation</h1> -->
                            </div>


                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <div class="maintenance-img">
                                        <img src="<?php echo e(URL::asset('/assets/images/Work_6.png')); ?>" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-5 text-success">Congratulations</h1>
                            <p>Your Application has been received, and we will let you know if you get selected.</p>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                        <img src="<?php echo e(URL::asset('/assets/images/logo-dark@2x.png')); ?>" alt="" height="50"
                                        class="auth-logo-light mx-auto">
                                            <h5 class="font-size-15 text-uppercase mt-2">Haven't Heard about Qamar?</h5>
                                            <p class="text-muted mb-0">Please click on the link below to know more about Qamar Charity Foundation.</p>
                                            <a href="https://qamarcharity.org/">Qamar Charity Foundation <i class="bx bx-right-arrow-alt "></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                        <img src="<?php echo e(URL::asset('/assets/images/ulearna-newa.png')); ?>" alt="" height="50"
                                        class="auth-logo-light mx-auto">
                                            <h5 class="font-size-15 text-uppercase mt-2">
                                                Want to learn online?</h5>
                                            <p class="text-muted mb-0">uLearna is the platform to learn online from you home.</p>
                                            <a href="https://ulearna.com">uLearna<i class="bx bx-right-arrow-alt "></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mt-4 maintenance-box">
                                        <div class="card-body">
                                            <i class="bx bx-envelope mb-4 h1 text-primary"></i>
                                            <h5 class="font-size-15 text-uppercase">
                                                Do you need Support?</h5>
                                            <p class="text-muted mb-0">If you are going to need any support please do not be hesiated to reach us at. <a
                                                    href="mailto:info@qamarcharity.org"
                                                    class="text-decoration-underline">info@qamarcharity.org</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\Desktop\Qamar\Qamar\qamaronline\qamaronline\resources\views/Education/Application/Success.blade.php ENDPATH**/ ?>