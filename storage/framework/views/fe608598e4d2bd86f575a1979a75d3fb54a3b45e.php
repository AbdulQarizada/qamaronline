
<?php $__env->startSection('title'); ?> Volunteers <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="<?php echo e(route('root')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <?php if($PageInfo == 'All'): ?>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>Global Volunteers</span>
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
            <option value="<?php echo e(route('AllVolunteer')); ?>">Please Filter Your Choices</option>
            <option value="<?php echo e(route('AllVolunteer')); ?>" <?php echo e($PageInfo == 'All' ? 'selected' : ''); ?>>All</option>
            <option value="<?php echo e(route('ActiveScholarship')); ?>" <?php echo e($PageInfo == 'Active' ? 'selected' : ''); ?>>Active</option>
            <option value="<?php echo e(route('ExpiredScholarship')); ?>" <?php echo e($PageInfo == 'Expired' ? 'selected' : ''); ?>>Expired</option>
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search', [])->html();
} elseif ($_instance->childHasBeenRendered('41kL0t4')) {
    $componentId = $_instance->getRenderedChildComponentId('41kL0t4');
    $componentTag = $_instance->getRenderedChildComponentTagName('41kL0t4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('41kL0t4');
} else {
    $response = \Livewire\Livewire::mount('search', []);
    $html = $response->html();
    $_instance->logRenderedChild('41kL0t4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <div class="col-md-5 col-sm-12 mb-2">
        <a href="#" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Scholarships Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="<?php echo e(route('CreateVolunteer')); ?>" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD VOLUNTEER</a>
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
                        <th>Volunteer In</th>
                        <th>Date Of Birth</th>
                        <th>Reason</th>
                        <th>Action</th>
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
                            <p class="text-muted mb-0"><?php echo e($data -> Email); ?></p>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($data -> Country); ?></a></h5>
                               <p class="text-muted mb-0"><?php echo e($data -> City); ?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($data -> PrimaryNumber); ?></a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($data -> SecondaryNumber); ?></p>
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-success"><?php echo e($data -> InterestedDepartment); ?></a></h5>
                            <a href="<?php echo e(URL::asset('/uploads/Volunteer/Resumes/'.$data -> Resume)); ?>" target="_blank" class="text-dark"  data-bs-toggle="tooltip" data-bs-placement="top" title="Resume">
                            <i class="mdi mdi-file-document-outline text-info font-size-18"></i>Resume</a>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1 text-dark"><?php echo e(Carbon\Carbon::parse($data -> DOB) -> format("j F Y")); ?> </h5>
                                <h5 class="font-size-14 mb-1 text-warning"> <?php echo e(\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y')); ?> Years Old </h5>
                                <h5 class="font-size-14 mb-1 text-info"><?php echo e($data -> Gender); ?></h5>
                            </div>
                        </td>
                        <td>
                            <p class="text-muted mb-0"><?php echo e($data -> Reason); ?></p>
                        </td>
                        <td>
                            <a href="<?php echo e(route('DeleteVolunteer', ['data' => $data -> id])); ?>" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                <i class="mdi mdi-delete-outline font-size-16 align-middle"></i>
                            </a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/Volunteer/All.blade.php ENDPATH**/ ?>