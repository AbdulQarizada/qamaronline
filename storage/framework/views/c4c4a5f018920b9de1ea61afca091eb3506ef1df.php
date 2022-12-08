
<?php $__env->startSection('title'); ?> System Management <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="<?php echo e(route('IndexUserManagement')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <?php if($PageInfo == 'All'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>All Users</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Active'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Active Users</span>
        <?php endif; ?>
        <?php if($PageInfo == 'InActive'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>InActive Users</span>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-12 mb-2">
        <select class="form-select  form-select-lg <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="window.location.href = this.value;">
            <option value="<?php echo e(route('AllUser')); ?>">Please Filter Your Choices</option>
            <option value="<?php echo e(route('AllUser')); ?>" <?php echo e($PageInfo == 'All' ? 'selected' : ''); ?>>All</option>
            <option value="<?php echo e(route('ActivatedUser')); ?>" <?php echo e($PageInfo == 'Active' ? 'selected' : ''); ?>>Active</option>
            <option value="<?php echo e(route('DeActivatedUser')); ?>" <?php echo e($PageInfo == 'InActive' ? 'selected' : ''); ?>>InActive</option>
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search', [])->html();
} elseif ($_instance->childHasBeenRendered('p0ZpZsq')) {
    $componentId = $_instance->getRenderedChildComponentId('p0ZpZsq');
    $componentTag = $_instance->getRenderedChildComponentTagName('p0ZpZsq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('p0ZpZsq');
} else {
    $response = \Livewire\Livewire::mount('search', []);
    $html = $response->html();
    $_instance->logRenderedChild('p0ZpZsq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <div class="col-md-5 col-sm-12 mb-2">
        <a href="#" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Users Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="<?php echo e(route('CreateUser')); ?>" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD USER</a>
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
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Phone Numbers</th>
                        <th>JOB</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
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
                            <p class="text-muted mb-0"><?php echo e($data -> email); ?></p>
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
                            </div>
                        </td>
                        <td>
                            <?php echo e($data -> Job); ?>

                        </td>
                        <td>
                            <div>
                                <?php if($data -> IsActive == 1): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php endif; ?>
                                <?php if($data -> IsActive != 1): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Active</a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
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
                                <a href="<?php echo e(route('StatusUser', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                    <i class="mdi mdi-eye-settings-outline font-size-16 align-middle"></i>
                                </a>
                                <?php if($data -> IsActive != 1): ?>
                                <a href="<?php echo e(route('EditUser', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-info  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Update User">
                                    <i class="mdi mdi-square-edit-outline  font-size-16 align-middle"></i>
                                </a>
                                <?php endif; ?>
                                <?php if(Auth::user() -> IsSuperAdmin == 1 && $data -> IsActive == 1): ?>
                                <a href="<?php echo e(route('RoleUser', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign Roles and Permissions">
                                    <i class="mdi mdi-account-plus-outline font-size-16 align-middle"></i>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target=".bs-<?php echo e($data ->  id); ?>-modal-center" class="btn btn-sm btn-outline-danger waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Password">
                                    <i class="mdi mdi-lock-reset font-size-16 align-middle"></i>
                                </a>
                                <div class="modal fade bs-<?php echo e($data ->  id); ?>-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Reset Password</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" action="<?php echo e(route('ResetPasswordUser', [$data -> id])); ?>" method="POST" enctype="multipart/form-data" novalidate>
                                                    <?php echo method_field('PUT'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3 position-relative">
                                                                <label for="password" class="form-label ">New Password <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                <div class="hstack gap-3">
                                                                    <input class="form-control form-control-lg me-auto <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('password')); ?>" type="text" name="password" id="qcc" required>
                                                                    <!-- <button type="button" class="btn btn-lg btn-outline-danger" onclick="Random();"><i class=" bx bxs-magic-wand  font-size-16 align-middle"></i> </button> -->
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
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded" type="submit">Reset </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/SystemManagement/User/All.blade.php ENDPATH**/ ?>