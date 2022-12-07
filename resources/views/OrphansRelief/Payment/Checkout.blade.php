@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Checkout @endsection
@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/Payment.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/mystyle/tab.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/mystyle/paymentswitch.css') }}" rel="stylesheet" type="text/css" />
<style>
</style>
@endsection
@section('content')
<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('AllGridOrphans')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Checkout</span>
    </div>
</div>
@if(Session::has('cart'))
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
                            @foreach($datas as $data)
                            <tr>
                                <td>
                                    <div class="avatar-lg">
                                            <img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data['item']['Profile'])}}" alt="" class="avatar-lg rounded-circle">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="text-truncate font-size-18 fw-semibold "><a href="#" class="text-dark">{{$data['item']['FirstName']}} </a></h5>
                                    <p class="text-wrap text-muted text-break">{{$data['item']['WhyShouldYouHelpMe']}}</p>
                                </td>
                                <td> $40 / Montly</td>
                                <td><span class="badge bg-danger">{{$data['item']['created_at'] -> format("j F Y")}}</span></td>
                                <td>
                                    <a href="{{route('RemoveFromCartPayment', $data['item']['id'])}}" class="btn btn-sm text-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove From List">
                                        <i class=" bx bx-x-circle  font-size-16 align-middle"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <span><a href="{{route('AllGridOrphans')}}" class="btn btn-outline-success btn-sm waves-effect  waves-light m-1 float-end"><i class="bx bx-plus-circle  font-size-16 align-middle"></i></a></span>
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
                                <td>$ {{ $totalPriceMonthly = count($datas) * 40}}</td>
                            </tr>
                             <tr>
                                <td>Transaction Fee : </td>
                                <td>$ {{ $TransactionFeeMonthly = ($totalPriceMonthly * 3) / 100}} (3%)</td>
                            </tr>
                            <tr>
                                <th>Grand Total :</th>
                                <th>$ {{ $GrandtotalPriceMonthly = $totalPriceMonthly + $TransactionFeeMonthly }}</th>
                            </tr>
                        </tbody>
                        <tbody id="Yearly" class="d-none">
                            <tr>
                                <td>Total :</td>
                                <td>$ {{ $totalPriceYearly = count($datas) * 40 * 12}}</td>
                            </tr>
                            <tr>
                                <td>Transaction Fee : </td>
                                <td>$ {{ $TransactionFeeYearly = ($totalPriceYearly * 3) / 100}} (3%)</td>
                            </tr>
                            <tr>
                                <th>Grand Total :</th>
                                <th>$ {{ $GrandtotalPriceYearly = $totalPriceYearly + $TransactionFeeYearly }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<form method="POST" class="form-horizontal" action="{{ route('StorePayment') }}" enctype="multipart/form-data" id="Payment">
    @csrf
    <input type="text" class="form-control d-none form-control-lg @error('SubscriptionType') is-invalid @enderror" value="{{ old('SubscriptionType') }}" id="SubscriptionType" name="SubscriptionType" required>
    <input type="text" class="form-control d-none form-control-lg @error('Amount') is-invalid @enderror" value="{{ old('Amount') }}" id="Amount" name="Amount" required>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-12">
                    <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'd-none' : ''  }}">
                        {{ Session::get('error') }}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label for="FullName" class="label mb-3">Full Name </label>
                                <input type="text" class="form-control form-control-lg @error('FullName') is-invalid @enderror" value="{{ old('FullName') }}" id="FullName" name="FullName" required>
                                @error('FullName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label for="Email" class="label">Email </label>
                                <input type="email" class="form-control form-control-lg @error('Email') is-invalid @enderror" value="{{ old('Email') }}" id="Email" name="Email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label for="CardNumber" class="label ">Card Number </label>
                                <div id="input--cc" class="creditcard-icon">
                                    <input type="text" class="form-control CardNumber form-control-lg @error('CardNumber') is-invalid @enderror" value="{{ old('CardNumber') }}" id="CardNumber" name="CardNumber" required>
                                </div>
                                @error('CardNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <label for="ValidMonth" class="label">Valid Month </i></label>
                                <input type="text" class="form-control form-control-lg @error('ValidMonth') is-invalid @enderror" value="{{ old('ValidMonth') }}" id="ValidMonth" name="ValidMonth" placeholder="MM" minlength="2" maxlength="2" required>
                                @error('ValidMonth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <label for="ValidYear" class="label">Valid Year </i></label>
                                <input type="text" class="form-control form-control-lg @error('ValidYear') is-invalid @enderror" value="{{ old('ValidYear') }}" id="ValidYear" name="ValidYear" placeholder="YY" minlength="2" maxlength="2" required>

                                @error('ValidYear')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <label for="CVV" class="label">CVV / CVC * </i></label>
                                <input type="text" class="form-control form-control-lg @error('CVV') is-invalid @enderror" value="{{ old('CVV') }}" id="CVV" name="CVV" placeholder="674" maxlength="3" required>

                                @error('CVV')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
@else
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>Please select an Orphan. Thanks</h2>
    </div>
</div>
@endif

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/Payment.js') }}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    Stripe.setPublishableKey('{{ env('STRIPE_KEY') }}');
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
        $("input[name=Amount]").val('{{  $GrandtotalPriceMonthly }}');
        $("#monthly").click(function() {
            $("#Yearly").addClass('d-none')
            $("#Monthly").removeClass('d-none');
            $("#Monthly").addClass('fadeIn');
            $(".indicator").css("left", "2px");
            $("#monthly").addClass('active');
            $("#yearly").removeClass('active');
            $("input[name=SubscriptionType]").val('Monthly');
            $("input[name=Amount]").val('{{ $GrandtotalPriceMonthly}}');
        })
        $("#yearly").click(function() {
            $("#Monthly").addClass('d-none');
            $("#Yearly").removeClass('d-none');
            $("#Yearly").addClass('fadeIn');
            $("#yearly").addClass('active');
            $("#monthly").removeClass('active');
            $(".indicator").css("left", "164px");
            $("input[name=SubscriptionType]").val('Yearly');
            $("input[name=Amount]").val('{{ $GrandtotalPriceYearly }}');
        })
    })
</script>

@endsection
