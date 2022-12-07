
<?php $__env->startSection('title'); ?> Orphan and Sponsorships <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-4">
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>All Payments</span>
    </div>
</div>
<div class="row">
    <div class="col-md-4 mb-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search', [])->html();
} elseif ($_instance->childHasBeenRendered('nozDP4o')) {
    $componentId = $_instance->getRenderedChildComponentId('nozDP4o');
    $componentTag = $_instance->getRenderedChildComponentTagName('nozDP4o');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nozDP4o');
} else {
    $response = \Livewire\Livewire::mount('search', []);
    $html = $response->html();
    $_instance->logRenderedChild('nozDP4o', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> FullName); ?></a></h5>
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
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> Email); ?></a></h5>
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
                            <?php if( $data -> Created_By !=""): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data ->  UFirstName); ?> <?php echo e($data ->  ULastName); ?></a></h5>
                                <p class="text-muted mb-0"><?php echo e($data ->  UJob); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if( $data -> Created_By ==""): ?>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Online</a></h5>
                                <p class="text-muted mb-0">Registration</p>
                            </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-2">
                                <?php if($data -> IsPaid == 1): ?>
                                <a href="<?php echo e(route('RecieptPayment', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-warning waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Reciept">
                                    <i class="mdi mdi-receipt font-size-16 align-middle"></i>
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
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
            <?php echo $datas->links(); ?> <span class="m-2 text-white badge bg-dark"><?php echo e($datas->total()); ?> Total Records</span>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Payment/MyPayment.blade.php ENDPATH**/ ?>