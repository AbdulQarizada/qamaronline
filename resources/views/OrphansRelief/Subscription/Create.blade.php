@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('AllSubscription')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light">
            <i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back
        </a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase">
            <i class="bx bx-caret-right text-secondary font-size-20 "></i>Add Subscription
        </span>
    </div>
</div>
<form class="needs-validation" action="{{route('CreateSubscription')}}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="checkout-tabs">
        <div class="row">
            <div class="col-xl-2 col-sm-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
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
                                <h3 class="card-header bg-primary text-white mb-3"></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Sponsor_ID" class="form-label">Sponsor</label>
                                                    <div class="input-group " id="example-date-input">
                                                        <select class="form-control Sponsor form-control-lg" id="Sponsor_ID" name="Sponsor_ID" value="{{ old('Sponsor_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                            <option value="">Select Your Sponsor</option>
                                                            @foreach($sponsors as $sponsor)
                                                            <option value="{{$sponsor -> id}}">{{$sponsor -> FullName}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('Sponsor_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Orphan_ID" class="form-label">Orphan</label>
                                                    <div class="input-group " id="example-date-input">
                                                        <select class="form-control  form-control-lg" id="Orphan_ID" name="Orphan_ID" value="{{ old('Orphan_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                            <option value="">Select Your Orphan</option>
                                                            @foreach($orphans as $orphan)
                                                            <option value="{{ $orphan -> id}}">{{ $orphan -> Firstname}} {{ $orphan -> LastName}}</option>
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
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Type" class="form-label">Type</label>
                                                    <div class="input-group " id="example-date-input">
                                                        <select class="form-control  form-control-lg" id="Type" name="Type" value="{{ old('Type') }}" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                            <option value="Monthly">Monthly</option>
                                                            <option value="Yearly">Yearly</option>
                                                            <option value="Custom">Custom</option>
                                                        </select>
                                                        @error('Type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Amount" class="form-label ">Amount </label>
                                                    <input type="text" class="form-control form-control-lg @error('Amount') is-invalid @enderror" value="{{ old('Amount') }}" id="Amount" name="Amount" required />
                                                    @error('Amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Card_ID" class="form-label">Sponsor's Card</label>
                                                    <div class="input-group">
                                                        <select class="form-select  Card form-select-lg @error('Card_ID') is-invalid @enderror" name="Card_ID" value="{{ old('Card_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;" id="Card_ID" required>
                                                            <option value="">Select Your Card</option>
                                                        </select>
                                                        @error('Card_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="StartDate" class="form-label">Subscription Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group " id="example-date-input">
                                                        <input class="form-control form-select-lg @error('StartDate') is-invalid @enderror" value="{{ old('StartDate') }}" type="date" id="example-date-input" name="StartDate" id="StartDate" required>
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
                                                    <label for="DOB" class="form-label">Subscription End Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group " id="example-date-input">
                                                        <input class="form-control form-select-lg @error('EndDate') is-invalid @enderror" value="{{ old('EndDate') }}" type="date" id="example-date-input" name="EndDate" id="EndDate" required>
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

@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
<script>
    // Search All Districts
    $(document).ready(function () {
        $('.Sponsor').on('change', function () {
            var dID = $(this).val();
            if (dID) {
                $.ajax({
                    url: "{{ route('GetCardAjax') }}",
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "data": dID
                    }
                    , dataType: "json"
                    , success: function (data) {
                        if (data) {
                            $('.Card').empty();
                            $.each(data, function (key, course) {
                                $('select[name="Card_ID"]').append('<option value="' + course.id + '">******************' + course.CardLastFourDigit + '</option>');
                            });
                        } else {
                            $('.Card').empty();
                        }
                    }
                });
            } else {
                $('.Card').empty();
            }
        });
    });

</script>
@endsection
