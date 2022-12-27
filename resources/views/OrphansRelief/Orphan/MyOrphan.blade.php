@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success {{ !Session::has('done') ? 'd-none' : ''  }}">
            {{ Session::get('done') }}
        </div>
        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'd-none' : ''  }}">
            {{ Session::get('error') }}
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-10">
        <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Sponsored Orphans</h5>
    </div>
    <div class="col-md-2 col-sm-2 mb-2">
        <a data-bs-toggle="collapse" data-bs-target="#addOrphan" aria-expanded="false" aria-controls="addOrphan" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded text-uppercase"><i class="mdi mdi-plus me-1"></i>ADD ORPHAN</a>
    </div>
</div>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="collapse hide" id="addOrphan">
            <div class="card shadow-none card-body text-muted mb-0" style="border: 2px dashed #50a5f1;">
                <form class="needs-validation" action="{{route('CreateSubscriptionByUser')}}" method="POST"  id="Orphan" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3 ">
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active bg-info" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="mdi mdi-account-box-multiple-outline  d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Subscription</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="card-header bg-info text-white mb-3"></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Orphan_ID" class="form-label">Orphan</label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <select class="select2 form-control  form-control-lg" id="Orphan_ID" name="Orphan_ID" value="{{ old('Orphan_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                                            <option value="">Select Your Orphan</option>
                                                                            @foreach($WaitingOrphans as $WaitingOrphan)
                                                                            <option value="{{ $WaitingOrphan -> id}}">{{ $WaitingOrphan -> FirstName}} {{ $WaitingOrphan -> LastName}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('Orphan_ID')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 d-none">
                                                                <div class="mb-3 position-relative">
                                                                    <input type="text" class="form-control  form-control-lg @error('Sponsor_ID') is-invalid @enderror" value="{{ Auth::user() -> id}}" id="Sponsor_ID" name="Sponsor_ID" required />
                                                                    @error('Sponsor_ID')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="SubscriptionType" class="form-label">Type</label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <select class="form-control  form-control-lg" id="Type" name="SubscriptionType" value="{{ old('SubscriptionType') }}" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                                            <option value="Monthly">Monthly</option>
                                                                            <option value="Yearly">Yearly</option>
                                                                        </select>
                                                                        @error('SubscriptionType')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Card_ID" class="form-label">Sponsor's Card</label>
                                                                    <div class="input-group">
                                                                        <select class="form-select  Card form-select-lg @error('Card_ID') is-invalid @enderror" name="Card_ID" value="{{ old('Card_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;" id="Card_ID" required>
                                                                            <option value="">Select Sponsor's Card</option>
                                                                            @foreach($cards as $card)
                                                                            <option value="{{$card -> id}}">************{{$card -> CardLastFourDigit}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('Card_ID')
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
                                        </div>
                                        <div>
                                            <button class="btn1 btn-outline-info btn-lg waves-effect waves-light float-end" type="button" id="Loading" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                            <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit" id="SubmitNow">Pay Now </button>
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
</div>
<div class="row">
    @foreach($orphans as $orphan)
    <div class="col-xl-2 col-sm-6 mb-4">
        <a href="#">
            <div class="card-one text-center border border-secondary">
                <div class="float-end">
                    <a href="{{ route('DeActivateSubscription', ['data' => $orphan -> pivot -> id]) }}" class="btn btn-sm text-danger waves-effect waves-light DeactivateSubscription" data-bs-toggle="tooltip" data-bs-placement="top" title="End Subscription">
                        <i class="mdi mdi-stop-circle-outline  font-size-24 align-middle"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                            <img class="rounded-circle avatar-sm" src="{{ URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$orphan -> Profile) }}" alt="">
                        </span>
                    </div>
                    <h5 class="font-size-15"><a href="#" class="text-dark">{{$orphan -> FirstName}} {{$orphan -> LastName}}</a></h5>
                    <p class="text-muted">{{$orphan -> WhyShouldYouHelpMe}} </p>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="contact-links d-flex">
                        <div class="flex-fill">
                            <a class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Subscription End Date"><i class="mdi mdi-calendar-multiselect"></i> {{ \Carbon\Carbon::parse($orphan ->  pivot -> EndDate)  -> format("j F Y") }} </a>
                        </div>
                        <div class="flex-fill">
                            <p href="">Age: {{\Carbon\Carbon::parse($orphan -> DOB)->diff(\Carbon\Carbon::now())->format('%y');}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                {!! $orphans -> links() !!} <span class="m-2 text-white badge bg-dark">{{ $orphans -> total() }} Total Records</span>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    Stripe.setPublishableKey('{{ env('STRIPE_KEY') }}');
    $(document).ready(function() {
        var $form = $('#Orphan');
        var loading = $('#Loading');
        var SubmitNow = $('#SubmitNow');
        loading.hide();
        $form.submit(function(event) {
            $('#charge-error').addClass('d-none');
            event.preventDefault();
            loading.show();
            SubmitNow.hide();
            $form.get(0).submit();
        });

    });
    // DeACtivate Subscription Confirmation
    $('.DeactivateSubscription').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to end this subscription?!'
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
