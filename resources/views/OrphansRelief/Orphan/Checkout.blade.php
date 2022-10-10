@extends('layouts.master-layouts')

@section('title') ORPHAN CHECKOUT @endsection

@section('css')

<link href="{{ URL::asset('/assets/css/mystyle/Payment.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/mystyle/tab.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
    #loader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.75) url("{{URL::asset('/assets/images/loading.gif')}}") no-repeat center center;
        z-index: 10000;
    }
</style>
@endsection

@section('content')
<div id="loader"></div>
<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('AllGridOrphans')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>

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
@if(Session::has('cart'))
<div class="row">
    <div class="col-lg-12">
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
                    @foreach($datas as $data)
                    <tr>
                        <td><img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data['item']['Profile'])}}" alt="" class="avatar-lg rounded-circle"></td>
                        <td>
                            <h5 class="text-truncate font-size-18 fw-semibold "><a href="#" class="text-dark">{{$data['item']['FirstName']}} </a></h5>
                            <span class="fw-semibold">$40 USD /</span><span class="fw-semibold text-success text-uppercase">Montly</span>

                        <td><span class="text-danger text-uppercase">Waiting Since: </span>{{$data['item']['created_at'] -> format("d-m-Y")}}</td>
                        <td><span class="badge bg-success">Verified</span></td>
                        <!-- <td>
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block">
                                                <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block">
                                                <img src="{{ URL::asset('/assets/images/users/avatar-5.jpg') }}" alt=""
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
                                                <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xs">
                                            </a>
                                        </div>
                                    </div>
                                </td> -->
                        <td>
                            <a href="{{route('RemoveFromCartOrphans', $data['item']['id'])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                                <i class=" bx bx-x-circle  font-size-16 align-middle"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <span><a href="{{route('AllGridOrphans')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 m-1 float-end"><i class="bx bx-plus-circle  font-size-16 align-middle"></i></a></span>
        <span class="waves-effect  waves-light mb-3 m-1 mt-3 float-end font-size-18 text-uppercase">Add one more orphan <i class="bx bx-right-arrow-alt "></i></span>

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


<form method="POST" class="form-horizontal" action="{{ route('PaymentOrphan') }}" enctype="multipart/form-data" id="Payment">
    @csrf
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="display-6 fw-semibold text-success text-uppercase"> Payment Options</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="container">
                        <div class="top-text-wrapper text-center">
                            <!-- <h4>Please Select your option</h4> -->
                        </div>
                        <div class="grid-wrapper grid-col-auto">
                            <label for="Montly" class="radio-card">
                                <input type="radio" name="radio-card" id="Montly" />
                                <div class="card-content-wrapper">
                                    <span class="check-icon"></span>
                                    <div class="card-content">
                                        <img src="{{ URL::asset('/assets/images/checkout/give.jpg') }}" alt="" />

                                        <input id="MontlyPaymentOption" type="radio" name="PaymentOption" value="Montly" hidden>
                                        <input id="MontlyPaymentAmount" type="radio" name="PaymentAmount" value="{{ $totalPriceMontly =  count($datas) * 40}}" hidden>

                                        <p class="fw-semibold display-6">${{ $totalPriceMontly =  count($datas) * 40}}</p>
                                        <p class="font-size-24 fw-semibold text-success text-uppercase">Pay Montly</p>
                                    </div>
                                </div>
                            </label>
                            <!-- /.radio-card -->

                            <label for="Yearly" class="radio-card">
                                <input type="radio" name="radio-card" id="Yearly" />
                                <div class="card-content-wrapper">
                                    <span class="check-icon"></span>
                                    <div class="card-content">
                                        <img src="{{ URL::asset('/assets/images/checkout/give.jpg') }}" alt="" />
                                        <input id="YearlyPaymentOption" type="radio" name="PaymentOption" value="Yearly" hidden>
                                        <input id="YearlyPaymentAmount" type="radio" name="PaymentAmount" value="{{ $totalPriceYearly = count($datas) * 40 * 12}}" hidden>

                                        <p class="fw-semibold display-6">${{ $totalPriceYearly = count($datas) * 40 * 12}}</p>
                                        <p class="font-size-24 fw-semibold text-success text-uppercase">Pay Yearly</p>
                                    </div>
                                </div>
                            </label>
                            <!-- /.radio-card -->
                        </div>
                        <!-- /.grid-wrapper -->
                    </div>
                </div>
            </div>
            <div class="card " id="PaymentPart">
               <div class="card-header">
                </div>

                <div class="card-body">
                    <!-- <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="display-6 fw-semibold text-success text-uppercase"> Payment Options</p>
                            <hr />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="container">
                                <div class="top-text-wrapper text-center">
                                </div>
                                <div class="grid-wrapper grid-col-auto">
                                    <label for="Montly" class="radio-card">
                                        <input type="radio" name="radio-card" id="Montly" />
                                        <div class="card-content-wrapper">
                                            <span class="check-icon"></span>
                                            <div class="card-content">
                                                <img src="{{ URL::asset('/assets/images/checkout/give.jpg') }}" alt="" />

                                                <input id="MontlyPaymentOption" type="radio" name="PaymentOption" value="Montly" hidden>
                                                <input id="MontlyPaymentAmount" type="radio" name="PaymentAmount" value="{{ $totalPriceMontly =  count($datas) * 40}}" hidden>

                                                <p class="fw-semibold display-6">${{ $totalPriceMontly =  count($datas) * 40}}</p>
                                                <p class="font-size-24 fw-semibold text-success text-uppercase">Pay Montly</p>
                                            </div>
                                        </div>
                                    </label>

                                    <label for="Yearly" class="radio-card">
                                        <input type="radio" name="radio-card" id="Yearly" />
                                        <div class="card-content-wrapper">
                                            <span class="check-icon"></span>
                                            <div class="card-content">
                                                <img src="{{ URL::asset('/assets/images/checkout/give.jpg') }}" alt="" />
                                                <input id="YearlyPaymentOption" type="radio" name="PaymentOption" value="Yearly" hidden>
                                                <input id="YearlyPaymentAmount" type="radio" name="PaymentAmount" value="{{ $totalPriceYearly = count($datas) * 40 * 12}}" hidden>

                                                <p class="fw-semibold display-6">${{ $totalPriceYearly = count($datas) * 40 * 12}}</p>
                                                <p class="font-size-24 fw-semibold text-success text-uppercase">Pay Yearly</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="row justify-content-center text-center">
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label for="card" class="method card" id="Montly">
                                    <div class="radio-input">
                                        <input id="MontlyPaymentOption" type="radio" name="PaymentOption" value="Montly" hidden>
                                        <input id="MontlyPaymentAmount" type="radio" name="PaymentAmount" value="{{ $totalPriceMontly =  count($datas) * 40}}" hidden>

                                        <p class="fw-semibold display-6">${{ $totalPriceMontly =  count($datas) * 40}}</p>
                                        <p class="font-size-24 fw-semibold text-success text-uppercase">Pay Montly</p>

                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label for="paypal" class="method paypal" id="Yearly">
                                    <div class="radio-input">
                                        <input id="YearlyPaymentOption" type="radio" name="PaymentOption" value="Yearly" hidden>
                                        <input id="YearlyPaymentAmount" type="radio" name="PaymentAmount" value="{{ $totalPriceYearly = count($datas) * 40 * 12}}" hidden>

                                        <p class="fw-semibold display-6">${{ $totalPriceYearly = count($datas) * 40 * 12}}</p>
                                        <p class="font-size-24 fw-semibold text-success text-uppercase">Pay Yearly</p>

                                    </div>
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <div class="row" >
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
                                <div class="col-md-2">
                                    <div class="mb-3 position-relative">
                                        <label for="ValidMonth" class="label">Valid Month </i></label>
                                        <input type="text" class="form-control form-control-lg @error('ValidMonth') is-invalid @enderror" value="{{ old('ValidMonth') }}" id="ValidMonth" name="ValidMonth" placeholder="MM" maxlength="2" required>

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
                                        <input type="text" class="form-control form-control-lg @error('CVV') is-invalid @enderror" value="{{ old('CVV') }}" id="CVV" name="CVV" required>

                                        @error('CVV')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</label>

                                    </div>

                                </div>
                                <div class="m-3 text-center">
                                    <button class="btn1 btn-info btn-lg waves-effect waves-light" type="submit">Pay Now</button>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="col-md-3 justify-content-center ImagePart" id="ImagePart">
                            <img src="{{URL::asset('/assets/images/payment.jpg')}}" alt="" class="img-fluid mx-auto d-block img-thumbnail rounded  ">

                        </div> -->
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-success font-size-18 fw-semibold text-success">We are secured and powered by <i class="fab fa-cc-stripe "></i></p>
                    
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


</form>



@else
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>No Items in Cart!</h2>
    </div>
</div>
@endif
@endsection

@section('script')


<script src="{{ URL::asset('/assets/js/pages/Payment.js') }}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script>
   

   Stripe.setPublishableKey('pk_live_Xj0fQHaIs5afu4twa3A7Eob5');
    var $form = $('#Payment');
    var spinner = $('#loader');
    $form.submit(function(event) {
        $('#charge-error').addClass('d-none');
        event.preventDefault();
            spinner.show();
        $form.find('button').prop('disabled', true);
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
            $form.find('button').prop('disabled', false);
            spinner.hide();
        } else {
            var token = response.id;
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));
            // Submit the form:
            $form.get(0).submit();
        }
    }


    $(document).ready(function() {
        $('#PaymentPart').hide();
        $("#MontlyPaymentOption").prop("checked", false);
        $("#MontlyPaymentAmount").prop("checked", false);
        $("#YearlyPaymentOption").prop("checked", false);
        $("#YearlyPaymentAmount").prop("checked", false);

    });

    $('#Montly').click(function() {
        $('#PaymentPart').show();
        $("#MontlyPaymentOption").prop("checked", true);
        $("#MontlyPaymentAmount").prop("checked", true);

        $("#YearlyPaymentOption").prop("checked", false);
        $("#YearlyPaymentAmount").prop("checked", false);




    });

    $('#Yearly').click(function() {
        $('#PaymentPart').show();
        $("#YearlyPaymentOption").prop("checked", true);
        $("#YearlyPaymentAmount").prop("checked", true);

        $("#MontlyPaymentOption").prop("checked", false);
        $("#MontlyPaymentAmount").prop("checked", false);

    });

    $('#submit').click(function() {
        $("body").attr("disabled", true);
    });



    // var spinner = $('#loader');
    // $(function() {
    //     $('form').submit(function(e) {
    //         e.preventDefault();
    //         spinner.show();
    //         $.ajax({
    //             url: 't2228.php',
    //             data: $(this).serialize(),
    //             method: 'post',
    //             dataType: 'JSON'
    //         }).done(function(resp) {
    //             spinner.hide();
    //             alert(resp.status);
    //         });
    //     });
    // });
</script>

@endsection