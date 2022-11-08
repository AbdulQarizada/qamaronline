


<?php $__env->startSection('title'); ?> New List <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/filepond.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row mt-4">
    <div class="col-4">
        <?php if(Cookie::get('Layout') == 'LayoutNoSidebar'): ?>

<a href="<?php echo e(route('AllListFoodPack')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
<?php endif; ?>
<?php if(Cookie::get('Layout') == 'LayoutSidebar'): ?>

<a href="<?php echo e(route('IndexCareCard')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
<?php endif; ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>ADD BENEFICARY</span>
    </div>
</div>




<form class="needs-validation" action="<?php echo e(route('AllCreateFoodPack')); ?>" method="POST" enctype="multipart/form-data" novalidate>
    <?php echo csrf_field(); ?>


    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-dark text-white ">BENEFICARY INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="FullName" class="form-label ">Full Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['FullName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('FullName')); ?>" id="FullName" name="FullName" required>
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
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="FatherName" class="form-label ">Father Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['FatherName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('FatherName')); ?>" id="FatherName" name="FatherName" required>
                                        <?php $__errorArgs = ['FatherName'];
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
                                <!-- </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="TazkiraID" class="form-label ">Tazkira ID <i class="mdi mdi-asterisk text-danger"></i></label>

                                        <input type="number" class="form-control form-control-lg <?php $__errorArgs = ['TazkiraID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('TazkiraID')); ?>" id="TazkiraID" name="TazkiraID" max="999999999" required>
                                        <?php $__errorArgs = ['TazkiraID'];
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
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="PrimaryNumber" class="form-label ">Primary Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="number" class="form-control form-control-lg <?php $__errorArgs = ['PrimaryNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('PrimaryNumber')); ?>" id="PrimaryNumber" name="PrimaryNumber" max="999999999" required>
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
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="SecondaryNumber" class="form-label ">Secondary Number </label>
                                        <input type="number" class="form-control form-control-lg <?php $__errorArgs = ['SecondaryNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('SecondaryNumber')); ?>" id="SecondaryNumber" name="SecondaryNumber" max="999999999" >
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

                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="Province_ID" class="form-label">Province <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group">
                                            <select class="form-select Province form-select-lg <?php $__errorArgs = ['Province_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required name="Province_ID" value="<?php echo e(old('Province_ID')); ?>" id="Province_ID">
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
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="Reference_ID" class="form-label">Reference Person <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group">
                                            <select class="form-select form-select-lg <?php $__errorArgs = ['Reference_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required name="Reference_ID" value="<?php echo e(old('Reference_ID')); ?>" id="Reference_ID">
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($user -> id); ?>"><?php echo e($user -> FirstName); ?> <?php echo e($user -> LastName); ?></option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                            <?php $__errorArgs = ['Reference_ID'];
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







    <div>

        <button class="btn btn-success btn-lg" type="submit">Save </button>
        <a class="btn btn-danger btn-lg" href="<?php echo e(route('AllCareCard')); ?>">Cancel</a>
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
        server: {

            url: '<?php echo e(route('Beneficiaries_Profile')); ?>',
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


    // Create a FilePond instance
    const Tazkira = FilePond.create(inputTazkira, {
        labelIdle: 'Click to upload Tazkira <span class="bx bx-upload"></span >',
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '<?php echo e(route('Beneficiaries_Tazkira')); ?>',
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            }

        },
        instantUpload: true,


    });



    // Profile.setOptions({

    // });


    $(document).ready(function() {
        var rnd = Math.floor(Math.random() * 99999) + 1;
        document.getElementById('QCC').value = rnd;
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
        var rnd = Math.floor(Math.random() * 99999) + 1;
        document.getElementById('QCC').value = rnd;
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
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/CardCard/Services/FoodPack/CreateList.blade.php ENDPATH**/ ?>