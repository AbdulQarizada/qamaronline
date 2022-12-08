
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="<?php echo e(route('IndexOrphansRelief')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <?php if($PageInfo == 'All'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>All Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Pending'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Pending Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Approved'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Approved Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Rejected'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Rejected Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Waiting'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Waiting Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Sponsored'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Sponsored Orphans</span>
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
            <option value="<?php echo e(route('AllOrphans')); ?>">Please Filter Your Choices</option>
            <option value="<?php echo e(route('AllOrphans')); ?>" <?php echo e($PageInfo == 'All' ? 'selected' : ''); ?>>All</option>
            <option value="<?php echo e(route('PendingOrphans')); ?>" <?php echo e($PageInfo == 'Pending' ? 'selected' : ''); ?>>Pending</option>
            <option value="<?php echo e(route('ApprovedOrphans')); ?>" <?php echo e($PageInfo == 'Approved' ? 'selected' : ''); ?>>Approved</option>
            <option value="<?php echo e(route('RejectedOrphans')); ?>" <?php echo e($PageInfo == 'Rejected' ? 'selected' : ''); ?>>Rejected</option>
            <option value="<?php echo e(route('WaitingOrphans')); ?>" <?php echo e($PageInfo == 'Waiting' ? 'selected' : ''); ?>>Waiting</option>
            <option value="<?php echo e(route('SponsoredOrphans')); ?>" <?php echo e($PageInfo == 'Sponsored' ? 'selected' : ''); ?>>Sponsored</option>
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search', [])->html();
} elseif ($_instance->childHasBeenRendered('tz7gFMs')) {
    $componentId = $_instance->getRenderedChildComponentId('tz7gFMs');
    $componentTag = $_instance->getRenderedChildComponentTagName('tz7gFMs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tz7gFMs');
} else {
    $response = \Livewire\Livewire::mount('search', []);
    $html = $response->html();
    $_instance->logRenderedChild('tz7gFMs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <div class="col-md-5 col-sm-12 mb-2">
        <a href="<?php echo e(route('AllGridOrphans')); ?>" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Orphans Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="<?php echo e(route('CreateOrphans')); ?>" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD ORPHAN</a>
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
                        <th>Contacts</th>
                        <th>Family Status</th>
                        <th>Status</th>
                        <?php if($PageInfo == 'Waiting' || $PageInfo == 'Sponsored'): ?>
                        <th>Sponsor</th>
                        <?php endif; ?>
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
                            <p class="text-muted mb-0"><?php echo e($data -> IntroducerName); ?></p>
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
                                <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($data -> RelativeNumber); ?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> FamilyStatus); ?></a></h5>
                                <?php if( $data -> LevelPoverty == 1): ?>
                                <i class="bx bxs-star text-warning font-size-12"></i>
                                <i class="bx bxs-star text-secondary font-size-14"></i>
                                <i class="bx bxs-star text-secondary font-size-16"></i>
                                <i class="bx bxs-star text-secondary font-size-18"></i>
                                <i class="bx bxs-star text-secondary font-size-20"></i>
                                <?php endif; ?>
                                <?php if( $data -> LevelPoverty == 2): ?>
                                <i class="bx bxs-star text-warning font-size-12"></i>
                                <i class="bx bxs-star text-warning font-size-14"></i>
                                <i class="bx bxs-star text-secondary font-size-16"></i>
                                <i class="bx bxs-star text-secondary font-size-18"></i>
                                <i class="bx bxs-star text-secondary font-size-20"></i>
                                <?php endif; ?>
                                <?php if( $data -> LevelPoverty == 3): ?>
                                <i class="bx bxs-star text-warning font-size-12"></i>
                                <i class="bx bxs-star text-warning font-size-14"></i>
                                <i class="bx bxs-star text-warning font-size-16"></i>
                                <i class="bx bxs-star text-secondary font-size-18"></i>
                                <i class="bx bxs-star text-secondary font-size-20"></i>
                                <?php endif; ?>
                                <?php if( $data -> LevelPoverty == 4): ?>
                                <i class="bx bxs-star text-warning font-size-12"></i>
                                <i class="bx bxs-star text-warning font-size-14"></i>
                                <i class="bx bxs-star text-warning font-size-16"></i>
                                <i class="bx bxs-star text-warning font-size-18"></i>
                                <i class="bx bxs-star text-secondary font-size-20"></i>
                                <?php endif; ?>
                                <?php if( $data -> LevelPoverty == 5): ?>
                                <i class="bx bxs-star text-warning font-size-12"></i>
                                <i class="bx bxs-star text-warning font-size-14"></i>
                                <i class="bx bxs-star text-warning font-size-16"></i>
                                <i class="bx bxs-star text-warning font-size-18"></i>
                                <i class="bx bxs-star text-warning font-size-20"></i>
                                <?php endif; ?>
                            </div>
                        </td>
                        <td>
                            <div>
                                <?php if($data -> Status == 'Pending'): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary"><?php echo e($data -> Status); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php endif; ?>
                                <?php if($data -> Status == 'Approved'): ?>
                                <?php if($PageInfo == 'Waiting'): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">Waiting </a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php elseif($PageInfo == 'Sponsored'): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">Sponsored</a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php else: ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($data -> Status); ?> </a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php if($data -> Status == 'Rejected'): ?>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger"><?php echo e($data -> Status); ?> </a></h5>
                                <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                <?php endif; ?>

                            </div>
                        </td>
                        <?php if($PageInfo == 'Sponsored'): ?>
                        <td>
                            <?php $__currentLoopData = $data -> user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($users -> pivot -> IsActive == 1 ): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($users ->  FullName); ?></a></h5>
                                <p class="text-muted mb-0"><a href="#" class="text-success"> <?php echo e(Carbon\Carbon::parse($users -> pivot -> StartDate) -> format("j F Y")); ?></a></p>
                                <p class="text-muted mb-0"><a href="#" class="text-danger"><?php echo e(Carbon\Carbon::parse($users -> pivot ->  EndDate) -> format("j F Y")); ?></a></p>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <?php endif; ?>
                        <?php if($PageInfo == 'Waiting'): ?>
                        <td>
                            <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Yet Sponsored</a></h3>
                            <p class="text-muted mb-0"><a href="#" class="text-danger">Waiting Since: </a><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                        </td>
                        <?php endif; ?>
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
                                <a href="<?php echo e(route('StatusOrphans', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                    <i class="mdi mdi-eye-settings-outline font-size-16 align-middle"></i>
                                </a>
                                <?php if($PageInfo == 'Sponsored'): ?>
                                <a href="<?php echo e(route('StatusOrphans', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-info  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Sponsor">
                                    <i class="mdi mdi-account-convert font-size-16 align-middle"></i>
                                </a>
                                <?php endif; ?>
                                <?php if($PageInfo == 'Waiting'): ?>
                                <a href="<?php echo e(route('StatusOrphans', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign To Sponsor">
                                    <i class="mdi mdi-account-child-outline font-size-16 align-middle"></i>
                                </a>
                                <?php endif; ?>
                                <?php if($data -> Status == 'Pending'): ?>
                                <a href="<?php echo e(route('EditOrphan', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                                    <i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="<?php echo e(route('DeleteOrphan', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                    <i class="mdi mdi-delete-outline font-size-16 align-middle"></i>
                                </a>
                                <?php endif; ?>
                                <?php if( $data -> Status == 'Rejected'): ?>
                                <a href="<?php echo e(route('DeleteOrphan', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
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
            <?php echo $datas->links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($datas->total()); ?> Total Records</span>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

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
    // Remove Sponsor Confirmation
    $('.removeSponsor').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to remove sponsr?!'
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
    // Search All Districts
    $(document).ready(function() {
        $('.Sponsor').on('change', function() {
            var dID = $(this).val();
            if (dID) {
                $.ajax({
                    url: "<?php echo e(route('GetCardAjax')); ?>"
                    , type: "GET"
                    , data: {
                        "_token": "<?php echo e(csrf_token()); ?>"
                        , "data": dID
                    }
                    , dataType: "json"
                    , success: function(data) {
                        if (data) {
                            $('.Card').empty();
                            $.each(data, function(key, course) {
                                $('select[name="Card_ID"]').append('<option value="' + course.id + '">******************' + course.CardLastFourDigit + '</option>');
                            });
                        } else {
                            $('.Card').empty();
                        }
                    }
                });
            } else {
                $('.Card').empty();
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

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/All.blade.php ENDPATH**/ ?>