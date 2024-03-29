@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/mystyle/select2.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{route('AllSponsor')}}" class="btn btn-outline-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-outline-dark  waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-nowrap">
                <tr>
                    <td>
                        <a target="_Blanck" href="{{URL::asset('/uploads/User/Profiles/'.$data -> Profile)}}" class="badge badge-soft-info">
                            <img src="{{URL::asset('/uploads/User/Profiles/'.$data -> Profile)}}" style="width: 130px; height: 135px;" class="rounded">
                        </a>
                    </td>
                    <td style="float:right;">
                        <div class="text-center">
                            <h4 class="font-size-18 mb-1"><a href="#" class="badge badge-soft-success">Scan Me </a></h4>
                            <div class="mb-3" class="rounded">
                                {!! DNS2D::getBarcodeSVG(''.$data->id, 'QRCODE', 6, 6, true) !!}
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-nowrap">
                <h5 style="font-weight: bold;" class="card-header  text-dark">Personal Information</h5>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">First Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> FirstName}} </td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Last Name</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> LastName}}</td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Email</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> email}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Password</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;"><a href="#" class="badge badge-soft-success">Saved</a></td>
                </tr>
                <tr>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Primary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> PrimaryNumber}}</td>
                    <td style="width: 20%; border: 2px solid #000; padding: 5px;">Secondary Number</td>
                    <td style="width: 40%; border: 2px solid #000; padding: 5px;">{{ $data -> SecondaryNumber}}</td>
                </tr>
            </table>
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
            <div class="card shadow-none card-body text-muted mb-0" style="border: 2px dashed #50a5f1;" >
                <form class="needs-validation" action="{{route('CreateSubscription')}}" method="POST" enctype="multipart/form-data" novalidate>
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
                                                                    <input type="text" class="form-control  form-control-lg @error('Sponsor_ID') is-invalid @enderror" value="{{ $data -> id}} " id="Sponsor_ID" name="Sponsor_ID" required />
                                                                    @error('Sponsor_ID')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="StartDate" class="form-label">Subscription Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <input class="form-control form-select-lg @error('StartDate') is-invalid @enderror" value="{{$data -> StartDate}}" type="date" id="example-date-input" name="StartDate" id="StartDate" required>
                                                                        @error('StartDate')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="EndDate" class="form-label">Subscription End Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <input class="form-control form-select-lg @error('EndDate') is-invalid @enderror" value="{{$data -> EndDate}}" type="date" id="example-date-input" name="EndDate" id="EndDate" required>
                                                                        @error('EndDate')
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
                                            <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit">Submit </button>
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
        <a href="{{route('StatusOrphans', ['data' => $orphan -> id])}}">
            <div class="card-one text-center border border-secondary">
                <div class="float-end">
                    <a href="{{ route('DeActivateSubscription', ['data' => $orphan -> pivot -> id]) }}" class="btn btn-sm text-danger waves-effect waves-light DeactivateSubscription" data-bs-toggle="tooltip" data-bs-placement="top" title="End Subscription">
                        <i class=" bx bx-x-circle   font-size-24 align-middle"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                            @if ($orphan -> Gender_ID == 60)
                            <!-- if male -->
                            <img class="rounded-circle avatar-sm" src="{{ URL::asset('/uploads/OrphansRelief/Orphans/Profiles/avatar-male.jpg') }}" alt="">
                            @endif
                            @if ($orphan -> Gender_ID == 61)
                            <!-- if female -->
                            <img class="rounded-circle avatar-sm" src="{{ URL::asset('/uploads/OrphansRelief/Orphans/Profiles/avatar-female.jpg') }}" alt="">
                            @endif
                        </span>
                    </div>
                    <h5 class="font-size-15"><a href="{{route('StatusOrphans', ['data' => $orphan -> id])}}" class="text-dark">{{$orphan -> FirstName}} {{$orphan -> LastName}}</a></h5>
                    <p class="text-muted">{{$orphan -> IntroducerName}} </p>
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
<div class="row mt-4">
    <div class="col-md-10">
        <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Payment Cards</h5>
    </div>
    <div class="col-md-2 col-sm-2 mb-2">
        <a data-bs-toggle="collapse" data-bs-target="#addCard" aria-expanded="false" aria-controls="addCard" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded text-uppercase"><i class="mdi mdi-plus me-1"></i>ADD CARD</a>
    </div>
</div>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="collapse hide" id="addCard">
            <div class="card shadow-none card-body text-muted mb-0" style="border: 2px dashed #50a5f1;" >
                <form class="needs-validation" action="{{ route('CreateCard') }}" id="Card" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active bg-info" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="bx bxl-mastercard   d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Payment card</p>
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
                                                            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'd-none' : ''  }}">
                                                                {{ Session::get('error') }}
                                                            </div>
                                                            <div class="col-md-4 d-none">
                                                                <div class="mb-3 position-relative">
                                                                    <input type="text" class="form-control  form-control-lg @error('Sponsor_ID') is-invalid @enderror" value="{{ $data -> id}} " id="Sponsor_ID" name="Sponsor_ID" required />
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
                                    <i>{{$card -> CardLastFourDigit}}</i>
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
                                <a href="{{route('ActivateCard', ['data' => $card -> id])}}" class="btn btn-sm btn-outline-success waves-effect ActivateCard waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Activate Card">
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
<div class="row mt-4">
    <div class="col-md-12">
        <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Payments</h5>
    </div>
</div>
<div class="row">
    <div class="col-12">
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
                    @foreach($payments as $payment)
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox" id="formCheck1" name="ids[]" value="{{$payment -> id }}">
                        </td>
                        <td>
                            <div class="avatar-xs">
                                <span class="avatar-title bg-dark rounded-circle">
                                    {{$loop->iteration}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$payment -> FullName}}</a></h5>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$payment -> ChargeID}}</a></h5>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-success">{{$payment -> Amount}}</a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning">{{$payment -> SubscriptionType}}</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$payment -> Email}}</a></h5>
                            </div>
                        </td>
                        <td>
                            <div>
                                @if($payment -> IsPaid == 1)
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Successfull Payment </a></h5>
                                <p class="text-muted mb-0">{{$payment -> updated_at -> format("d-m-Y")}}</p>
                                @endif
                                @if($payment -> IsPaid != 1)
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Due Payment </a></h5>
                                <p class="text-muted mb-0">{{$payment -> updated_at -> format("d-m-Y")}}</p>
                                @endif
                            </div>
                        </td>
                        <td>
                            @if( $payment -> Created_By !="")
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data ->  UFirstName }} {{$data ->  ULastName }}</a></h5>
                                <p class="text-muted mb-0">{{$data ->  UJob }}</p>
                            </div>
                            @endif
                            @if( $payment -> Created_By =="")
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Online</a></h5>
                                <p class="text-muted mb-0">Registration</p>
                            </div>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-2">
                                @if($payment -> IsPaid == 1)
                                <a href="{{route('RecieptPayment', ['data' => $payment -> id])}}" class="btn btn-sm btn-outline-warning waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Reciept">
                                    <i class="mdi mdi-receipt font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('MakeItDuePayment', ['data' => $payment -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light due" data-bs-toggle="tooltip" data-bs-placement="top" title="Make it Due">
                                    <i class="mdi mdi-cash-remove font-size-16 align-middle"></i>
                                </a>
                                @endif
                                @if($payment -> IsPaid != 1)
                                <a href="{{route('EditSponsor', ['data' => $payment -> id])}}" class="btn btn-sm btn-outline-info waves-effect waves-light email" data-bs-toggle="tooltip" data-bs-placement="top" title="Email Sponsor">
                                    <i class="mdi mdi-email-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('MakeItPaidPayment', ['data' => $payment -> id])}}" class="btn btn-sm btn-outline-success waves-effect waves-light paid" data-bs-toggle="tooltip" data-bs-placement="top" title="Make it Paid">
                                    <i class="mdi mdi-cash-check font-size-16 align-middle"></i>
                                </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-nowrap">
            <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Sponsor Status</h5>
            @if($data -> IsOrphanSponsor == 1)
            <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Orphan Sponsor</a></span>
            @endif
            @if($data -> IsActive == 1)
            <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-success">Active</a></span>
            @endif
            @if($data -> IsActive != 1)
            <span class="font-size-18 m-3"><a href="#" class="badge badge-soft-danger">InActive</a></span>
            @endif
        </table>
        @if($data -> IsActive == 1)
        <a href="{{route('DeActivateSponsor', ['data' => $data -> id])}}" class="btn btn-outline-danger btn-lg waves-effect  waves-light btn-rounded w-lg  deactivateSponsor m-3" data-toggle="tooltip" data-placement="top" title="DeActivate">
            De-ACTIVATE
        </a>
        @endif
        @if($data -> IsActive == 0)
        <a href="{{route('ActivateSponsor', ['data' => $data -> id])}}" class="btn btn-outline-success btn-lg waves-effect  waves-light btn-rounded w-lg activateSponsor m-3" data-toggle="tooltip" data-placement="top" title="Activate">
            ACTIVATE
        </a>
        @endif
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<!-- Form Validation -->
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


    $('.activateSponsor').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to Activite this sponsor?'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.deactivateSponsor').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to De-Activite this sponsor?'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
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
