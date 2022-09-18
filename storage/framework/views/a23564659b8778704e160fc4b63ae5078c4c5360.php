

<?php $__env->startSection('title'); ?> ORPHAN CHECKOUT <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/css/mystyle/Payment.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('AllGridOrphans')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>

    </div>
    <!-- <div class="col-6">
                                <h1 class="fw-medium font-size-24 ">Orphans List</h1>
        </div> -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-dark  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">CHECKOUT</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>
<?php if(Session::has('cart')): ?>
<div class="row">
    <div class="col-lg-12">
        <div class="">
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap align-middle table-borderless">
                    <thead>
                        <!-- <tr>
                                <th scope="col" style="width: 100px">#</th>
                                <th scope="col">Projects</th>
                                <th scope="col">Due Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Team</th>
                                <th scope="col">Action</th>
                            </tr> -->
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data['item']['Profile'])); ?>" alt="" class="avatar-sm"></td>
                            <td>
                                <h5 class="text-truncate font-size-18"><a href="#" class="text-dark"><?php echo e($data['item']['FirstName']); ?> <?php echo e($data['item']['LastName']); ?></a></h5>
                                <h5 >Montly :  <b class="text-success text-uppercase">$40 USD</b></h5>
                            <td><span class="text-danger text-uppercase">Waiting Since: </span><?php echo e($data['item']['created_at'] -> todatestring()); ?></td>
                            <td><span class="badge bg-success">Verified</span></td>
                            <!-- <td>
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block">
                                                <img src="<?php echo e(URL::asset('/assets/images/users/avatar-4.jpg')); ?>" alt=""
                                                    class="rounded-circle avatar-xs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block">
                                                <img src="<?php echo e(URL::asset('/assets/images/users/avatar-5.jpg')); ?>" alt=""
                                                    class="rounded-circle avatar-xs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block">
                                                <div class="avatar-xs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                        A
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block">
                                                <img src="<?php echo e(URL::asset('/assets/images/users/avatar-2.jpg')); ?>" alt=""
                                                    class="rounded-circle avatar-xs">
                                            </a>
                                        </div>
                                    </div>
                                </td> -->
                            <td>
                                <a href="<?php echo e(route('RemoveFromCartOrphans', $data['item']['id'])); ?>" class="btn btn-danger waves-effect waves-light delete-confirm">
                                    <i class=" bx bx-x-circle  font-size-16 align-middle"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
                <a href="<?php echo e(route('AllGridOrphans')); ?>" class="btn btn-success btn-lg waves-effect  waves-light mb-3 m-1 float-end"><i class="bx bx-plus-circle  font-size-16 align-middle"></i></a>

            </div>
        </div>
    </div>
</div>

<!-- end row -->

<!-- <div class="row">
        <div class="col-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-success"><i
                        class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
            </div>
        </div> 
    </div> -->
<!-- end row -->


<form method="POST" class="form-horizontal" action="<?php echo e(route('Payment')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card ">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">

                            <div class="row">
                            <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                    <label for="card" class="method card">
                                    <div class="card-logos">
                                        <h1>Montly</h1>

                                    </div>

                                    <div class="radio-input">
                                        <input id="card" type="radio" name="payment">
                                        Pay $<?php echo e($totalPrice); ?>

                                    </div>
                                </label>
                                    </div>
                                </div>     
                                 <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                    <label for="paypal" class="method paypal">
                                    <h1>Yearly</h1>
                                    <div class="radio-input">
                                        <input id="paypal" type="radio" name="payment">
                                        Pay $<?php echo e($totalPriceYearly = $totalPrice * 12); ?>

                                    </div>
                                </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="FullName" class="label ">Full Name </label>
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
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="CardNumber" class="label ">Card Number </label>
                                        <div id="input--cc" class="creditcard-icon">
                                        <input type="text" class="form-control CardNumber form-control-lg <?php $__errorArgs = ['CardNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('CardNumber')); ?>" id="CardNumber" name="CardNumber" required>
                                        </div>
                                        <?php $__errorArgs = ['CardNumber'];
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
                                        <label for="email" class="label">Email </label>
                                        <input type="email" class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" id="email" name="email" required>

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
                                <div class="col-md-2">
                                    <div class="mb-3 position-relative">
                                        <label for="ValidMonth" class="label">Valid Month </i></label>
                                        <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['ValidMonth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ValidMonth')); ?>" id="ValidMonth" name="ValidMonth" placeholder="MM"   minlength="2" maxlength="2" required>

                                        <?php $__errorArgs = ['ValidMonth'];
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
                                <div class="col-md-2">
                                    <div class="mb-3 position-relative">
                                        <label for="ValidYear" class="label">Valid Year </i></label>
                                        <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['ValidYear'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ValidYear')); ?>" id="ValidYear" name="ValidYear" placeholder="YY"   minlength="2" maxlength="2" required>

                                        <?php $__errorArgs = ['ValidYear'];
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
                                <div class="col-md-2">
                                    <div class="mb-3 position-relative">
                                        <label for="CVV" class="label">CVV / CVC * </i></label>
                                        <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['CVV'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('CVV')); ?>" id="CVV" name="CVV" required>

                                        <?php $__errorArgs = ['CVV'];
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
                                    <label class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</label>

                                    </div>

                                </div>
                                <div class="mt-3 text-center">
                                    <button class="btn1 btn-info btn-lg waves-effect waves-light" type="submit">Pay Now</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 justify-content-center ">
                            <img src="<?php echo e(URL::asset('/assets/images/payment.jpg')); ?>" alt="" class="img-fluid mx-auto d-block ">

                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


</form>



<?php else: ?>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>No Items in Cart!</h2>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<script src="<?php echo e(URL::asset('/assets/js/pages/Payment.js')); ?>"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script>
    Stripe.setPublishableKey('pk_test_m6ZWLYyvkUAqJzr1fvr1uRj2');

var $form = $('#checkout-form');

$form.submit(function(event) {
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        // Submit the form:
        $form.get(0).submit();
    }
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Qamar\QamarOnline\qamaronline\resources\views/OrphansRelief/Checkout.blade.php ENDPATH**/ ?>