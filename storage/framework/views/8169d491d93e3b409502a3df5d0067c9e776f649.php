
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/filepond.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-file-poster.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('AllSponsor')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Edit Sponsor</span>
    </div>
</div>
<form class="needs-validation" action="<?php echo e(route('UpdateSponsor', [$data -> id])); ?>" method="POST" enctype="multipart/form-data" novalidate>
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    <div class="checkout-tabs">
        <div class="row">
            <div class="col-xl-2 col-sm-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                        <i class="bx bx-user  d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">PERSONAL INFORMATION</p>
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
                                    <div class="col-md-10">
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> FirstName); ?>" id="FirstName" name="FirstName" required>
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
                                                    <label for="LastName" class="form-label ">Last Name </label>
                                                    <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['LastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> LastName); ?>" id="LastName" name="LastName">
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
                                                    <label for="FullName" class="form-label ">Full Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['FullName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> FullName); ?>" id="FullName" name="FullName" required>
                                                    <?php $__errorArgs = ['FullName'];
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
                                                    <label for="PrimaryNumber" class="form-label">Primary Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control  form-control-lg <?php $__errorArgs = ['PrimaryNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> PrimaryNumber); ?>" id="PrimaryNumber" name="PrimaryNumber" aria-describedby="PrimaryNumber" required>
                                                        <?php $__errorArgs = ['PrimaryNumber'];
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
                                                    <label for="SecondaryNumber" class="form-label">Secondary Number</label>
                                                    <div class="input-group">

                                                        <input type="text" class="form-control  form-control-lg <?php $__errorArgs = ['SecondaryNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> SecondaryNumber); ?>" id="SecondaryNumber" name="SecondaryNumber" aria-describedby="SecondaryNumber">
                                                        <?php $__errorArgs = ['SecondaryNumber'];
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
                                                    <label for="email" class="form-label">Email <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control  form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> email); ?>" id="Email" name="email" aria-describedby="email" required>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 justify-content-center">
                                        <input type="file" class="my-pond <?php $__errorArgs = ['Profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data -> Profile); ?>" id="Profile" name="Profile" />
                                        <?php $__errorArgs = ['Profile'];
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
                        <div><button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit">Update </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- file pond-->
<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/filepond.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-image-preview.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-file-poster.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-file-validate-type.js')); ?>"></script>
<!-- Form validation-->
<script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>
<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    FilePond.registerPlugin(FilePondPluginFilePoster);
    // Get a reference to the file input element
    const inputProfile = document.querySelector('input[name="Profile"]');
    // Create a FilePond for Profile instance
    const Profile = FilePond.create(inputProfile, {
        labelIdle: 'Profile <span class="bx bx-upload"></span >',
        server: {
            url: '<?php echo e(route('Users_Profile')); ?>',
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
        styleButtonProcessItemPosition: 'right bottom',
        files: [{
            source: '<?php echo e($data -> Profile); ?>',
            options: {
                type: 'local',
                file: {

                    type: 'image/png'
                },
                metadata: {
                    poster: '<?php echo e(URL::asset('/uploads/Users/Profiles/'.$data -> Profile)); ?>'
                }

            }
        }],
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Auth::user()->IsEmployee == 1 ? 'layouts.master-layouts' : 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Sponsor/Edit.blade.php ENDPATH**/ ?>