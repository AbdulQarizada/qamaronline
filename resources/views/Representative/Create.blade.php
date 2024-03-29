@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Representatives @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row mt-4">
    @if(Auth::check())
    <div class="col-md-4 col-sm-12">
        <a href="{{route('AllRepresentative')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>Add REPRESENTATIVE</span>
    </div>
    @else
    <span class="my-0 mb-3 display-5 text-wrap text-uppercase "></i>REPRESENTATIVE Form</span>
    @endif
</div>
<form class="needs-validation" action="{{route('CreateRepresentative')}}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="checkout-tabs">
        <div class="row">
            <div class="col-xl-2 col-sm-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                        <i class="mdi mdi-account-supervisor-circle-outline d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">REPRESENTATIVE</p>
                    </a>
                </div>
            </div>
            <div class="col-xl-10 col-sm-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <div class="">
                                    <h4 class="card-header bg-primary text-white mb-3"></h4>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="FirstName" class="form-label ">First Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <input type="text" class="form-control form-control-lg @error('FirstName') is-invalid @enderror" value="{{ old('FirstName') }}" id="FirstName" name="FirstName" required>
                                                            @error('FirstName')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="LastName" class="form-label ">Last Name </label>
                                                            <input type="text" class="form-control form-control-lg @error('LastName') is-invalid @enderror" value="{{ old('LastName') }}" id="LastName" name="LastName">
                                                            @error('LastName')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="Email" class="form-label ">Email <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <input type="email" class="form-control form-control-lg @error('Email') is-invalid @enderror" value="{{ old('Email') }}" id="Email" name="Email">
                                                            @error('Email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="PrimaryNumber" class="form-label ">Primary Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <input type="text" class="form-control form-control-lg @error('PrimaryNumber') is-invalid @enderror" value="{{ old('PrimaryNumber') }}" id="PrimaryNumber" name="PrimaryNumber" required>
                                                            @error('PrimaryNumber')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="SecondaryNumber" class="form-label ">Secondary Number </label>
                                                            <input type="text" class="form-control form-control-lg @error('SecondaryNumber') is-invalid @enderror" value="{{ old('SecondaryNumber') }}" id="SecondaryNumber" name="SecondaryNumber">
                                                            @error('SecondaryNumber')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="DOB" class="form-label">Date of Birth <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <div class="input-group " id="example-date-input">
                                                                <input class="form-control form-select-lg @error('DOB') is-invalid @enderror" value="{{ old('DOB') }}" type="date" id="example-date-input" name="DOB" id="DOB" required>
                                                                @error('DOB')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>Applicant should not be more then 22 years old</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="Gender_ID" class="form-label">Gender <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <select class="form-select  form-select-lg @error('Gender_ID') is-invalid @enderror" value="{{ old('Gender_ID') }}" id="Gender_ID" name="Gender_ID" required>
                                                                <option value="">Select Your Gender</option>
                                                                @foreach($genders as $gender)
                                                                <option value="{{ $gender -> id}}">{{ $gender -> Name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('Gender_ID')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="Address" class="form-label ">Address </label>
                                                            <input type="text" class="form-control form-control-lg @error('Address') is-invalid @enderror" value="{{ old('Address') }}" id="Address" name="Address">
                                                            @error('Address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="WeeklyHours" class="form-label ">Hours In a Week You Can Give to Qamar? <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <input type="number" class="form-control form-control-lg @error('WeeklyHours') is-invalid @enderror" value="{{ old('WeeklyHours') }}" id="WeeklyHours" name="WeeklyHours" min="1" max="45" required>
                                                            @error('WeeklyHours')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 position-relative">
                                                            <label for="MediaPresence" class="form-label">Are You Okey To Be Part of Qamar's video Production? <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <select class="form-select  form-select-lg @error('MediaPresence') is-invalid @enderror" value="{{ old('MediaPresence') }}" id="MediaPresence" name="MediaPresence" required>
                                                                <option value="">Select Your Choice</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                            @error('MediaPresence')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 justify-content-center">
                                                <input type="file" class="my-pond @error('Profile') is-invalid @enderror" value="{{ old('Profile') }}" id="Profile" name="Profile" />
                                                @error('Profile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <label for="WhatYouOffer" class="form-label">Please indicate What Can You Offer to Qamar? <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <textarea id="textarea" class="form-control @error('WhatYouOffer') is-invalid @enderror" maxlength="2205" rows="10" value="{{ old('WhatYouOffer') }}" required name="WhatYouOffer" id="WhatYouOffer" placeholder="e.g Find Monthly Funders, Rais Funds, Design Posters etc." required></textarea>
                                                @error('WhatYouOffer')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Passport" class="form-label">Passport <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <input type="file" class="my-pond @error('Passport') is-invalid @enderror" value="{{ old('Passport') }}" name="Passport" id="Passport" />
                                                @error('Passport')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Resume" class="form-label">Resume </i></label>
                                                <input type="file" class="my-pond @error('Resume') is-invalid @enderror" value="{{ old('Resume') }}" name="Resume" id="Resume" />
                                                @error('Resume')
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
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <a class="btn text-muted d-none d-sm-inline-block btn-link"></a>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- Form Validation -->
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
<!-- Filepond -->
<script src="{{ URL::asset('/assets/libs/filepond/js/filepond.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-file-validate-type.js') }}"></script>

<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);

    // Get a reference to the file input element
    const inputProfile = document.querySelector('input[name="Profile"]');
    const Profile = FilePond.create(inputProfile, {
        labelIdle: 'Profile <span class="bx bx-upload"></span >'
        , server: {

            url: '{{ route('Representative_Profile')}}'
            , headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        }
        , acceptedFileTypes: ['image/png', 'image/jpeg']
        , allowFileTypeValidation: true
        , instantUpload: true
        , imagePreviewHeight: 100
        , imageCropAspectRatio: '1:1'
        , imageResizeTargetWidth: 10
        , imageResizeTargetHeight: 10
        , stylePanelLayout: 'compact circle'
        , styleLoadIndicatorPosition: 'center bottom'
        , styleProgressIndicatorPosition: 'right bottom'
        , styleButtonRemoveItemPosition: 'left bottom'
        , styleButtonProcessItemPosition: 'right bottom'

    });

    // Get a reference to the file input element
    const inputResume = document.querySelector('input[name="Resume"]');
    const Resume = FilePond.create(inputResume, {
        labelIdle: 'Drag & Drop your Resume or <span class="filepond--label-action"> Browse </span>'
        , acceptedFileTypes: ['application/pdf', 'image/jpeg']
        , allowFileTypeValidation: true
        , server: {

            url: '{{route('Representative_Resume')}}'
            , headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
        , instantUpload: true
    , });

    // Get a reference to the file input element
    const inputPassport = document.querySelector('input[name="Passport"]');
    const Passport = FilePond.create(inputPassport, {
        labelIdle: 'Drag & Drop your Passport or <span class="filepond--label-action"> Browse </span>'
        , acceptedFileTypes: ['application/pdf', 'image/jpeg']
        , allowFileTypeValidation: true
        , server: {

            url: '{{route('Representative_Passport')}}'
            , headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
        , instantUpload: true
    , });
</script>
@endsection
