@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
@endsection
@section('content')
<div class="row mt-4">
    <div class="col-4">
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>All Cards</span>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-10"> <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Payment Cards</h5></div>
        <div class="col-md-2 col-sm-2 mb-2">
        <a data-bs-toggle="modal" data-bs-target=".bs-addcard-modal-center" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded text-uppercase"><i class="mdi mdi-plus me-1"></i>ADD Card</a>
    </div>
</div>
<div class="row">
    @foreach($cards as $card)
    <div class="col-md-4">
        <div class="card-one mb-4">
            <div class="">
                <div class="card bg-dark text-white visa-card mb-0">
                    <div class="card-body">
                        <div>
                            <i class="bx bxl-mastercard visa-pattern"></i>
                            <div class="float-end">
                                <i class="bx bxl-mastercard display-3"></i>
                            </div>
                            <div>
                                @if($card -> IsActive != 1)
                                  <a href="#" class="btn waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Card is InActive"><i class=" bx bx-x-circle  h1 text-danger"></i></a>
                                @endif
                                @if($card -> IsActive == 1)
                                <div>
                                    <a href="#" class="btn waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Card is Active"><i class="mdi mdi-shield-check-outline h1 text-success"></i></a>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-5">
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-white">Card Number </a></h5>
                            <div class="col-12">
                                <div>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i class="mdi mdi-asterisk text-white"></i>
                                    <i >{{$card -> CardLastFourDigit}}</i>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="d-flex flex-wrap gap-2 float-end">
                                @if( $card -> IsActive == 1)
                                <a href="{{route('DeActivateCard', ['data' => $card -> id])}}" class="btn btn-sm btn-outline-danger waves-effect DeActivateCard waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="De-Activate Card">
                                    <i class="mdi mdi-credit-card-remove-outline font-size-16 align-middle"></i>
                                </a>
                                @endif
                                @if($card -> IsActive != 1)
                                <a href="{{route('ActivateCard', ['data' => $card -> id])}}"  class="btn btn-sm btn-outline-success waves-effect ActivateCard waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Activate Card">
                                    <i class="mdi mdi-credit-card-check-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('DeleteCard', ['data' => $card -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirmCard" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                    <i class="mdi mdi-delete-outline font-size-16 align-middle"></i>
                                </a>
                                @endif
                            </div>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-white">{{$card ->  user -> FullName}} </a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="modal fade bs-addcard-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Payment Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="{{ route('CreateCard') }}" id="Card" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="mdi mdi-account-box-multiple-outline  d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Payment card</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="card-header bg-primary text-white mb-3"></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'd-none' : ''  }}">
                                                                {{ Session::get('error') }}
                                                            </div>
                                                            <div class="col-md-4 d-none">
                                                                <div class="mb-3 position-relative">
                                                                    <input type="text" class="form-control  form-control-lg @error('Sponsor_ID') is-invalid @enderror" value="{{ Auth::user() -> id}} " id="Sponsor_ID" name="Sponsor_ID" required />
                                                                    @error('Sponsor_ID')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="CardNumber" class="form-label ">Card Number (No Dash) </label>
                                                                    <input type="text" class="form-control form-control-lg @error('CardNumber') is-invalid @enderror" value="{{ old('CardNumber') }}" id="CardNumber" name="CardNumber" required />
                                                                    @error('CardNumber')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="ValidMonth" class="form-label ">Valid Month (2 Digit) </label>
                                                                    <input type="text" class="form-control form-control-lg @error('ValidMonth') is-invalid @enderror" value="{{ old('ValidMonth') }}" id="ValidMonth" name="ValidMonth" maxlength="2" minlength="2" placeholder="MM" required />
                                                                    @error('ValidMonth')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="ValidYear" class="form-label ">ValidYear (2 Digit) </label>
                                                                    <input type="text" class="form-control form-control-lg @error('ValidYear') is-invalid @enderror" value="{{ old('ValidYear') }}" id="ValidYear" name="ValidYear" maxlength="2" minlength="2" placeholder="YY" required />
                                                                    @error('ValidYear')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="CVV" class="form-label ">CVV (3 Digit - Back of Card)</label>
                                                                    <input type="text" class="form-control form-control-lg @error('CVV') is-invalid @enderror" value="{{ old('CVV') }}" id="CVV" name="CVV" maxlength="3" placeholder="785" required />
                                                                    @error('CVV')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn1 btn-outline-info btn-lg waves-effect waves-light float-end" type="button" id="Loading" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                            <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit" id="SubmitNow">Submit </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</d
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    Stripe.setPublishableKey('{{ env('STRIPE_KEY') }}');
    $(document).ready(function() {
        var $form = $('#Card');
        var loading = $('#Loading');
        var SubmitNow = $('#SubmitNow');
        loading.hide();
        $form.submit(function(event) {
            $('#charge-error').addClass('d-none');
            event.preventDefault();
            loading.show();
            SubmitNow.hide();
            Stripe.card.createToken({
                number: $('#CardNumber').val()
                , cvc: $('#CVV').val()
                , exp_month: $('#ValidMonth').val()
                , exp_year: $('#ValidYear').val()
            }, stripeResponseHandler);
            return false;
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('#charge-error').removeClass('d-none');
                $('#charge-error').text(response.error.message);
                loading.hide();
                SubmitNow.show();

            } else {
                var token = response.id;
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                loading.hide();
                $form.get(0).submit();
            }
        }

    });
    $('.delete-confirmCard').on('click', function(event) {
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

    // DeACtivate Card Confirmation
    $('.DeActivateCard').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to DeActivate this Card?!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
    // Activate Card Confirmation
    $('.ActivateCard').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to Activate this Card?!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>

@endsection