
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('IndexOrphansRelief')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <?php if($PageInfo == 'All'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>All Payments</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Paid'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Paid Payments</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Due'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Due Payments</span>
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
unset($__errorArgs, $__bag); ?>" onchange="window.location.href=this.value;">
            <option value="<?php echo e(route('AllPayment')); ?>">Please Filter Your Choices</option>
            <option value="<?php echo e(route('AllPayment')); ?>" <?php echo e($PageInfo == 'All' ? 'selected' : ''); ?>>All</option>
            <option value="<?php echo e(route('PaidPayment')); ?>" <?php echo e($PageInfo == 'Paid' ? 'selected' : ''); ?>>Paid</option>
            <option value="<?php echo e(route('DuePayment')); ?>" <?php echo e($PageInfo == 'Due' ? 'selected' : ''); ?>>Due</option>
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search', [])->html();
} elseif ($_instance->childHasBeenRendered('uB2ZbbR')) {
    $componentId = $_instance->getRenderedChildComponentId('uB2ZbbR');
    $componentTag = $_instance->getRenderedChildComponentTagName('uB2ZbbR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uB2ZbbR');
} else {
    $response = \Livewire\Livewire::mount('search', []);
    $html = $response->html();
    $_instance->logRenderedChild('uB2ZbbR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <div class="col-md-5 col-sm-12 mb-2">
        <a href="<?php echo e(route('RecuringPayment')); ?>" class="btn btn-outline-info btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-recycle me-1"></i>Refresh Payments</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="card-header bg-dark text-white"></h3>
        <div class="table-responsive">
            <table class="table  table-striped table-hover dt-responsive nowrap w-100">
                <thead class="table-light">
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="checkAll">
                        </th>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Charge ID</th>
                        <th>Amount </th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Remarks</th>
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
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> user -> FullName); ?></a></h5>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> ChargeID); ?></a></h5>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-success"><?php echo e($data -> Amount); ?></a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($data -> SubscriptionType); ?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> user -> email); ?></a></h5>
                            </div>
                        </td>
                        <td>
                            <div>
                                <?php if($data -> IsPaid == 1): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Successfull Payment </a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> updated_at -> format("d-m-Y")); ?></p>
                                <?php endif; ?>
                                <?php if($data -> IsPaid != 1): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Due Payment </a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> updated_at -> format("d-m-Y")); ?></p>
                                <?php endif; ?>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data ->  Remarks); ?></a></h5>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-2">
                                <?php if($data -> IsPaid == 1): ?>
                                <a href="<?php echo e(route('RecieptPayment', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-warning waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Reciept">
                                    <i class="mdi mdi-receipt font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('MakeItDuePayment', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-danger waves-effect waves-light due" data-bs-toggle="tooltip" data-bs-placement="top" title="Make it Due">
                                    <i class="mdi mdi-cash-remove font-size-16 align-middle"></i>
                                </a>
                                <?php endif; ?>
                                <?php if($data -> IsPaid != 1): ?>
                                <a href="<?php echo e(route('EditSponsor', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-info waves-effect waves-light email" data-bs-toggle="tooltip" data-bs-placement="top" title="Email Sponsor">
                                    <i class="mdi mdi-email-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('MakeItPaidPayment', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-success waves-effect waves-light paid" data-bs-toggle="tooltip" data-bs-placement="top" title="Make it Paid">
                                    <i class="mdi mdi-cash-check font-size-16 align-middle"></i>
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
    $('.email').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to email this sponsor?'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.paid').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to make it paid?'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.due').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to due this payment?'
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

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Payment/All.blade.php ENDPATH**/ ?>