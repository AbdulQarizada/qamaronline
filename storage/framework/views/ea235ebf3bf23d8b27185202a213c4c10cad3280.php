

<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('IndexOrphansRelief')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <?php if($PageInfo == 'All'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>All Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Pending'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Pending Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Approved'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Approved Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Rejected'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Rejected Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Waiting'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Waiting Orphans</span>
        <?php endif; ?>
        <?php if($PageInfo == 'Sponsored'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Sponsored Orphans</span>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <select class="form-select  form-select-lg mb-3 <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="window.location.href=this.value;">
            <option value="<?php echo e(route('AllOrphans')); ?>">Please Filter Your Choices</option>
            <option value="<?php echo e(route('AllOrphans')); ?>">All</option>
            <option value="<?php echo e(route('PendingOrphans')); ?>">Pending</option>
            <option value="<?php echo e(route('ApprovedOrphans')); ?>">Approved</option>
            <option value="<?php echo e(route('RejectedOrphans')); ?>">Rejected</option>
            <option value="<?php echo e(route('WaitingOrphans')); ?>">Waiting</option>
            <option value="<?php echo e(route('SponsoredOrphans')); ?>">Sponsored</option>
        </select>
    </div>
    <div class="col-9">
        <a href="<?php echo e(route('AllGridOrphans')); ?>" class="btn  btn-lg waves-effect  waves-light mb-3 m-1 float-end"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="<?php echo e(route('CreateOrphans')); ?>" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD ORPHAN</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>
            <div class="card-body">

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone Numbers</th>
                            <th>Family Status</th>
                            <th>Status</th>
                            <th>Sponsor</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data -> id); ?></td>
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
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Sponosred </a></h5>
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
                                    <?php if($data -> Status == 'Assigned'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info"><?php echo e($data -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                    <?php endif; ?>
                                    <?php if($data -> Status == 'Released'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success"><?php echo e($data -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                    <?php endif; ?>
                                    <?php if($data -> Status == 'Printed'): ?>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark"><?php echo e($data -> Status); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($data -> created_at -> format("j F Y")); ?></p>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <?php if( $data -> IsSponsored != 1): ?>
                                <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Yet Sponsored</a></h3>
                                <?php endif; ?>
                                <?php if( $data -> IsSponsored == 1): ?>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data ->  SFullName); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e(Carbon\Carbon::parse($data -> Sponsored_StartDate) -> format("j F Y")); ?></p>
                                    <p class="text-muted mb-0"><?php echo e(Carbon\Carbon::parse($data -> Sponsored_EndDate) -> format("j F Y")); ?></p>
                                </div>
                                <?php endif; ?>
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
                                    <a href="<?php echo e(route('StatusOrphans', ['data' => $data -> id])); ?>" class="btn btn-warning waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View Details">
                                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                    </a>
                                    <?php if($data -> Status == 'Pending'): ?>
                                    <a href="<?php echo e(route('DeleteOrphan', ['data' => $data -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm" data-toggle="tooltip" data-placement="top" title="Delete Record">
                                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                    </a>
                                    <a href="<?php echo e(route('EditOrphan', ['data' => $data -> id])); ?>" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit Details">
                                        <i class=" bx bx-edit font-size-16 align-middle"></i>
                                    </a>
                                    <?php endif; ?>
                                    <?php if( $data -> Status == 'Approved'): ?>
                                    <?php if( $data -> IsSponsored == 1): ?>
                                    <a href="<?php echo e(route('AssignToSponsorOrphan', ['data' => $data -> id])); ?>" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Reassign To Sponsor">
                                        <i class="mdi mdi-account-convert font-size-16 align-middle"></i>
                                    </a>
                                    <?php else: ?>
                                    <a href="<?php echo e(route('AssignToSponsorOrphan', ['data' => $data -> id])); ?>" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Assign To Sponsor">
                                        <i class="bx bx-user-plus   font-size-16 align-middle"></i>
                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if( $data -> Status == 'Rejected'): ?>
                                    <a href="<?php echo e(route('DeleteOrphan', ['data' => $data -> id])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm" data-toggle="tooltip" data-placement="top" title="Delete Record">
                                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row"></div>
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
             <?php echo $datas->links(); ?> <span class="m-2 text-white badge badge-soft-dark"><?php echo e($datas->total()); ?> Total Records</span>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>

<script>
    $('.delete-confirm').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });


    $('#datatable').DataTable({
        responsive: true,

        lengthMenu: [
            [100, 200, 300, 400, 500, 1000, -1],
            [100, 200, 300, 400, 500, 1000, "All"]
        ],

        dom: 'lBfrtip',
        buttons: [{
            autoFilter: true,
            extend: 'excel',
            text: 'Download To Excel',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }]
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Orphan/All.blade.php ENDPATH**/ ?>