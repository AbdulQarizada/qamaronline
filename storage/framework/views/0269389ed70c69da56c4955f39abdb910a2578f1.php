
<?php $__env->startSection('title'); ?> Checkout <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/css/mystyle/Payment.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/css/mystyle/tab.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/css/mystyle/paymentswitch.css')); ?>" rel="stylesheet" type="text/css" />
<style>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('AllGridOrphans')); ?>" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Checkout</span>
    </div>
</div>
<?php if(Session::has('cart')): ?>
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>Profile</th>
                                <th>Personal Info</th>
                                <th>Amount</th>
                                <th>Waiting Since</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="avatar-lg">
                                            <img src="<?php echo e(URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data['item']['Profile'])); ?>" alt="" class="avatar-lg rounded-circle">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-18 fw-semibold "><a href="#" class="text-dark"><?php echo e($data['item']['FirstName']); ?> </a></h5>
                                    <p class="text-wrap text-muted text-break"><?php echo e($data['item']['WhyShouldYouHelpMe']); ?></p>
                                </td>
                                <td> $40 / Montly</td>
                                <td><span class="badge bg-danger"><?php echo e($data['item']['created_at'] -> format("j F Y")); ?></span></td>
                                <td>
                                    <a href="<?php echo e(route('RemoveFromCartPayment', $data['item']['id'])); ?>" class="btn btn-sm text-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove From List">
                                        <i class=" bx bx-x-circle  font-size-16 align-middle"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <span><a href="<?php echo e(route('AllGridOrphans')); ?>" class="btn btn-outline-success btn-sm waves-effect  waves-light m-1 float-end"><i class="bx bx-plus-circle  font-size-16 align-middle"></i></a></span>
                        <span class="waves-effect  waves-light float-end font-size-14 text-uppercase mt-2">Add one more orphan <i class="bx bx-right-arrow-alt "></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3 text-center">Payment Options</h4>
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="pricingTable">
                            <div class="inner d-flex tabsBtnHolder">
                                <ul>
                                    <li>
                                        <p id="monthly" class="active">Monthly</p>
                                    </li>
                                    <li>
                                        <p id="yearly" class="">Yearly</p>
                                    </li>
                                    <li class="indicator"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody id="Monthly">
                            <tr>
                                <td>Total :</td>
                                <td>$ <?php echo e($totalPriceMonthly = count($datas) * 40); ?></td>
                            </tr>
                             <tr>
                                <td>Transaction Fee : </td>
                                <td>$ <?php echo e($TransactionFeeMonthly = ($totalPriceMonthly * 3) / 100); ?> (3%)</td>
                            </tr>
                            <tr>
                                <th>Grand Total :</th>
                                <th>$ <?php echo e($GrandtotalPriceMonthly = $totalPriceMonthly + $TransactionFeeMonthly); ?></th>
                            </tr>
                        </tbody>
                        <tbody id="Yearly" class="d-none">
                            <tr>
                                <td>Total :</td>
                                <td>$ <?php echo e($totalPriceYearly = count($datas) * 40 * 12); ?></td>
                            </tr>
                            <tr>
                                <td>Transaction Fee : </td>
                                <td>$ <?php echo e($TransactionFeeYearly = ($totalPriceYearly * 3) / 100); ?> (3%)</td>
                            </tr>
                            <tr>
                                <th>Grand Total :</th>
                                <th>$ <?php echo e($GrandtotalPriceYearly = $totalPriceYearly + $TransactionFeeYearly); ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<form method="POST" class="form-horizontal" action="<?php echo e(route('StorePayment')); ?>" enctype="multipart/form-data" id="Payment">
    <?php echo csrf_field(); ?>
    <input type="text" class="form-control d-none form-control-lg <?php $__errorArgs = ['SubscriptionType'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('SubscriptionType')); ?>" id="SubscriptionType" name="SubscriptionType" required>
    <input type="text" class="form-control d-none form-control-lg <?php $__errorArgs = ['Amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Amount')); ?>" id="Amount" name="Amount" required>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-12">
                    <div id="charge-error" class="alert alert-danger <?php echo e(!Session::has('error') ? 'd-none' : ''); ?>">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label for="FullName" class="label mb-3">Full Name </label>
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
                                <label for="Email" class="label">Email </label>
                                <input type="email" class="form-control form-control-lg <?php $__errorArgs = ['Email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('Email')); ?>" id="Email" name="Email" required>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ValidMonth')); ?>" id="ValidMonth" name="ValidMonth" placeholder="MM" minlength="2" maxlength="2" required>
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ValidYear')); ?>" id="ValidYear" name="ValidYear" placeholder="YY" minlength="2" maxlength="2" required>

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
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('CVV')); ?>" id="CVV" name="CVV" placeholder="674" maxlength="3" required>

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
                        <div class="m-3 text-center">
                            <button class="btn1 btn-info btn-lg waves-effect waves-light float-end" type="button" id="Loading" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
                            <button class="btn1 btn-info btn-lg waves-effect waves-light float-end" type="submit" id="PayNow">Pay Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-muted text-dark">secured by stripe <i class="fab fa-cc-stripe "></i> </p>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</form>
<?php else: ?>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>Please select an Orphan. Thanks</h2>
    </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/pages/Payment.js')); ?>"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    Stripe.setPublishableKey('<?php echo e(env('STRIPE_KEY')); ?>');
    var $form = $('#Payment');
    var loading = $('#Loading');
    var paynow = $('#PayNow');
    loading.hide();
    $form.submit(function(event) {
        $('#charge-error').addClass('d-none');
        event.preventDefault();
        loading.show();
        paynow.hide();
        Stripe.card.createToken({
            number: $('#CardNumber').val(),
            cvc: $('#CVV').val(),
            exp_month: $('#ValidMonth').val(),
            exp_year: $('#ValidYear').val(),
            name: $('#FullName').val()
        }, stripeResponseHandler);
        return false;
    });

    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#charge-error').removeClass('d-none');
            $('#charge-error').text(response.error.message);
            loading.hide();
            paynow.show();
        } else {
            var token = response.id;
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));
            $form.get(0).submit();
        }
    }

    $(document).ready(function() {
        $("input[name=SubscriptionType]").val('Monthly');
        $("input[name=Amount]").val('<?php echo e($GrandtotalPriceMonthly); ?>');
        $("#monthly").click(function() {
            $("#Yearly").addClass('d-none')
            $("#Monthly").removeClass('d-none');
            $("#Monthly").addClass('fadeIn');
            $(".indicator").css("left", "2px");
            $("#monthly").addClass('active');
            $("#yearly").removeClass('active');
            $("input[name=SubscriptionType]").val('Monthly');
            $("input[name=Amount]").val('<?php echo e($GrandtotalPriceMonthly); ?>');
        })
        $("#yearly").click(function() {
            $("#Monthly").addClass('d-none');
            $("#Yearly").removeClass('d-none');
            $("#Yearly").addClass('fadeIn');
            $("#yearly").addClass('active');
            $("#monthly").removeClass('active');
            $(".indicator").css("left", "164px");
            $("input[name=SubscriptionType]").val('Yearly');
            $("input[name=Amount]").val('<?php echo e($GrandtotalPriceYearly); ?>');
        })
    })
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\Qamar\qamaronline\resources\views/OrphansRelief/Payment/Checkout.blade.php ENDPATH**/ ?>