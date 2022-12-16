
<?php $__env->startSection('title'); ?> Education and Scholarship <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="<?php echo e(route('IndexEducation')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <?php if($PageInfo == 'All'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>All Scholarships</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Active'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Active Scholarships</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Expired'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Expired Scholarships</span>
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
            <option value="<?php echo e(route('AllScholarship')); ?>">Please Filter Your Choices</option>
            <option value="<?php echo e(route('AllScholarship')); ?>" <?php echo e($PageInfo == 'All' ? 'selected' : ''); ?>>All</option>
            <option value="<?php echo e(route('ActiveScholarship')); ?>" <?php echo e($PageInfo == 'Active' ? 'selected' : ''); ?>>Active</option>
            <option value="<?php echo e(route('ExpiredScholarship')); ?>" <?php echo e($PageInfo == 'Expired' ? 'selected' : ''); ?>>Expired</option>
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search', [])->html();
} elseif ($_instance->childHasBeenRendered('TGul92T')) {
    $componentId = $_instance->getRenderedChildComponentId('TGul92T');
    $componentTag = $_instance->getRenderedChildComponentTagName('TGul92T');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TGul92T');
} else {
    $response = \Livewire\Livewire::mount('search', []);
    $html = $response->html();
    $_instance->logRenderedChild('TGul92T', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <div class="col-md-5 col-sm-12 mb-2">
        <a href="#" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Scholarships Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a data-bs-toggle="collapse" data-bs-target="#addUser" aria-expanded="false" aria-controls="addUser" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD SCHOLARSHIP</a>
    </div>
</div>
<div class="row ">
    <div class="col-md-12">
        <div class="collapse hide" id="addUser">
            <div class="card shadow-none card-body text-muted mb-0 mb-4" style="border: 2px dashed #50a5f1;">
                <form class="needs-validation" action="<?php echo e(route('CreateScholarship')); ?>" method="POST" enctype="multipart/form-data" novalidate>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ScholarshipName')); ?>" id="ScholarshipName" name="ScholarshipName" required>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ScholarshipType_ID')); ?>" id="ScholarshipType_ID" name="ScholarshipType_ID" required>
                                                                        <option value="">Select Scholarship Type</option>
                                                                        <?php $__currentLoopData = $scholarshiptypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scholarshiptype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($scholarshiptype -> id); ?>"><?php echo e($scholarshiptype -> Name); ?></option>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Country_ID')); ?>" required id="Country_ID" name="Country_ID">
                                                                        <option value="">Select Your Country</option>
                                                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($country -> id); ?>"><?php echo e($country -> Name); ?></option>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('StartDate')); ?>" type="date" id="example-date-input" name="StartDate" id="StartDate" required>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('EndDate')); ?>" type="date" id="example-date-input" name="EndDate" id="EndDate" required>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Seats')); ?>" id="Seats" name="Seats" max="999999" required>
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
                        <th>Avalible Seats</th>
                        <th>Application Duration</th>
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
                                <?php if(Carbon\Carbon::now() >= $data -> EndDate): ?>
                                <a href="<?php echo e(route('StatusScholarship', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Modules"><i class="mdi mdi-format-list-bulleted-square font-size-16 align-middle"></i> </a>
                                <?php endif; ?>
                                <a href="<?php echo e(route('StatusScholarship', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Applicants">
                                    <i class="mdi mdi-account-multiple-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('StatusScholarship', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                                    <i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('DeleteScholarship', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record"><i class="mdi mdi-delete-outline font-size-16 align-middle"></i></a>
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

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/Education/Scholarship/All.blade.php ENDPATH**/ ?>