
<?php $__env->startSection('title'); ?>
Orphan and Sponsorships
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="<?php echo e(route('IndexOrphansRelief')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <?php if($PageInfo == 'All'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>All Subscriptions</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Active'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Active Subscriptions</span>
        <?php endif; ?>
        <?php if($PageInfo == 'InActive'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>In Active Subscriptions</span>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-12 mb-2">
        <div class="hstack gap-3">
            <a class="btn  btn-lg waves-effect  waves-light" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" data-bs-toggle="tooltip" data-bs-placement="top" title="Filter"> <i class="mdi mdi-filter-menu-outline font-size-24 align-middle"></i></a>
            <select class="form-select  form-select-lg <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="window.location.href = this.value;">
                <option value="<?php echo e(route('AllSubscription')); ?>">Please Filter Your Choices</option>
                <option value="<?php echo e(route('AllSubscription')); ?>" <?php echo e($PageInfo == 'All' ? 'selected' : ''); ?>>All</option>
                <option value="<?php echo e(route('ActiveSubscription')); ?>" <?php echo e($PageInfo == 'Active' ? 'selected' : ''); ?>>Active</option>
                <option value="<?php echo e(route('InActiveSubscription')); ?>" <?php echo e($PageInfo == 'InActive' ? 'selected' : ''); ?>>InActive</option>
            </select>
        </div>
    </div>
    <div class="col-md-8 col-sm-12 mb-2">
        <a href="#" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Subscription Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="<?php echo e(route('CreateSubscription')); ?>"  class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded text-uppercase"><i class="mdi mdi-plus me-1"></i>ADD Subscription</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="collapse" id="collapseWidthExample">
            <form action="<?php echo e(route('SearchOrphans')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-2 mb-2">
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
                                    <option value="<?php echo e($province->id); ?>"><?php echo e($province->Name); ?></option>
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
                    <div class="col-md-2 mb-2">
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
                    <div class="col-md-3 mb-2">
                        <input type="text" name="PageInfo" value="<?php echo e($PageInfo); ?>" class="d-none">
                        <input class="form-control form-control-lg" type="text" name="data">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light"><i class="mdi mdi-magnify me-1"></i>Filter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="card-header bg-dark text-white"></h3>
        <div class="table-responsive">
            <table class="table table-hover table-striped dt-responsive nowrap w-100">
                <thead class="table-light">
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="checkAll">
                        </th>
                        <th>ID</th>
                        <th>Orphan</th>
                        <th>Sponsor</th>
                        <th>Subcription</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox" id="formCheck1" name="ids[]" value="<?php echo e($data->id); ?>">
                        </td>
                        <td>
                            <div class="avatar-xs">
                                <span class="avatar-title bg-dark rounded-circle">
                                    <?php echo e($loop->iteration); ?>

                                </span>
                            </div>
                        </td>
                        <td>
                            <div>
                                <?php if($data->orphan): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data->orphan->FirstName); ?></a></h5>
                                <p class="text-muted mb-0">TazkiraID: <a href="#" class="text-dark">
                                        <?php echo e($data->orphan->TazkiraID); ?></a></p>
                                <?php endif; ?>
                            </div>
                        </td>
                        <td>
                            <?php if($data->user): ?>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data->user->FullName); ?></a></h5>
                            <p class="text-muted mb-0"><a href="#" class="text-dark">
                                    <?php echo e($data->user->email); ?></a></p>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div>
                                <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($data->Amount); ?>$</p>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($data->Type); ?></a></h5>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="text-muted mb-0"><a href="#" class="text-success">
                                        <?php echo e(Carbon\Carbon::parse($data->StartDate)->format('j F Y')); ?></a></p>
                                <p class="text-muted mb-0"><a href="#" class="text-danger">
                                        <?php echo e(Carbon\Carbon::parse($data->EndDate)->format('j F Y')); ?></a></p>
                            </div>
                        </td>
                        <td>
                            <?php if($data->IsActive != 1): ?>
                            <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">InActive</a></h3>
                            <?php endif; ?>
                            <?php if($data->IsActive == 1): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></h5>
                            </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($data->Created_By != ''): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data->UFirstName); ?>

                                        <?php echo e($data->ULastName); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data->UJob); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if($data->Created_By == ''): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                <p class="text-muted mb-0">Requested</p>
                            </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-2">
                                <?php if($data->IsActive == 1): ?>
                                <a href="<?php echo e(route('DeActivateSubscription', ['data' => $data->id])); ?>" class="btn btn-sm btn-outline-danger waves-effect DeActivateCard waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="De-Activate Subscription">
                                    <i class="mdi mdi-account-tie-voice-off-outline font-size-16 align-middle"></i>
                                </a>
                                <?php endif; ?>
                                <?php if($data->IsActive != 1): ?>
                                <a href="<?php echo e(route('ActivateSubscription', ['data' => $data->id])); ?>" class="btn btn-sm btn-outline-success waves-effect ActivateCard waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Activate Subscription">
                                    <i class="mdi mdi-account-tie-voice-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('EditSubscription', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                                    <i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('DeleteSubscription', ['data' => $data->id])); ?>" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
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
            <?php echo $datas->links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($datas->total()); ?> Total
                Records</span>
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
    // DeACtivate Card Confirmation
    $('.DeActivateCard').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to DeActivate Subscription?!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
    // Activate Card Confirmation
    $('.ActivateCard').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to Activate Subscription?!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
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
                    url: '/GetDistricts/' + dID
                    , type: "GET"
                    , data: {
                        "_token": "<?php echo e(csrf_token()); ?>"
                    }
                    , dataType: "json"
                    , success: function(data) {
                        if (data) {
                            $('.District').empty();
                            $.each(data, function(key, course) {
                                $('select[name="District_ID"]').append(
                                    '<option value="' + course.id + '">' +
                                    course.Name + '</option>');
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

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Subscription/All.blade.php ENDPATH**/ ?>