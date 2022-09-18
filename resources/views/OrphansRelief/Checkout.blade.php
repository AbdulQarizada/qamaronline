@extends('layouts.master-layouts')

@section('title') ORPHAN CHECKOUT @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/css/mystyle/Payment.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
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
                        @foreach($datas as $data)
                        <tr>
                            <td><img src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data['item']['Profile'])}}" alt="" class="avatar-sm"></td>
                            <td>
                                <h5 class="text-truncate font-size-18"><a href="#" class="text-dark">{{$data['item']['FirstName']}} {{$data['item']['LastName']}}</a></h5>
                                <h5 >Montly :  <b class="text-success text-uppercase">$40 USD</b></h5>
                            <td><span class="text-danger text-uppercase">Waiting Since: </span>{{$data['item']['created_at'] -> todatestring()}}</td>
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
                <a href="{{route('AllGridOrphans')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 m-1 float-end"><i class="bx bx-plus-circle  font-size-16 align-middle"></i></a>

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


<form method="POST" class="form-horizontal" action="{{ route('Payment') }}" enctype="multipart/form-data">
    @csrf
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
                                        Pay ${{ $totalPrice }}
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
                                        Pay ${{ $totalPriceYearly = $totalPrice * 12  }}
                                    </div>
                                </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="FullName" class="label ">Full Name </label>
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
                                        <label for="email" class="label">Email </label>
                                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" required>

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
                                        <input type="text" class="form-control form-control-lg @error('ValidMonth') is-invalid @enderror" value="{{ old('ValidMonth') }}" id="ValidMonth" name="ValidMonth" placeholder="MM"   minlength="2" maxlength="2" required>

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
                                        <input type="text" class="form-control form-control-lg @error('ValidYear') is-invalid @enderror" value="{{ old('ValidYear') }}" id="ValidYear" name="ValidYear" placeholder="YY"   minlength="2" maxlength="2" required>

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
                                <div class="mt-3 text-center">
                                    <button class="btn1 btn-info btn-lg waves-effect waves-light" type="submit">Pay Now</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 justify-content-center ">
                            <img src="{{URL::asset('/assets/images/payment.jpg')}}" alt="" class="img-fluid mx-auto d-block ">

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

@endsection