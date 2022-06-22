@extends('layouts.master-layouts')

@section('title') ADD QAMAR CARE CARD @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />


@endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Qamar Care / Add Qamar Care Card @endslot
@slot('title') @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <a href="{{route('AllScholarshipEducation')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-primary  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">ADD SCHOLARSHIP</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>



<form class="needs-validation" action="{{route('CreateScholarship')}}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf


    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-primary text-white "></h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <!-- <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="ScholarshipName" class="form-label ">Scholarship Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('ScholarshipName') is-invalid @enderror" value="{{ old('ScholarshipName') }}" id="ScholarshipName" name="ScholarshipName" required>
                                        @error('ScholarshipName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="FirstNameLocal" class="form-label ">First Name (Local Language) <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('FirstNameLocal') is-invalid @enderror" value="{{ old('FirstNameLocal') }}" id="FirstNameLocal" name="FirstNameLocal" required>

                                        @error('FirstNameLocal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="LastNameLocal" class="form-label ">Last Name (Local Language) </label>
                                        <input type="text" class="form-control form-control-lg @error('LastNameLocal') is-invalid @enderror" value="{{ old('LastNameLocal') }}" id="LastNameLocal" name="LastNameLocal">

                                        @error('LastNameLocal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="TazkiraID" class="form-label ">Tazkira ID <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="number" class="form-control form-control-lg @error('TazkiraID') is-invalid @enderror" value="{{ old('TazkiraID') }}" id="TazkiraID" name="TazkiraID" max="999999999" required>
                                        @error('TazkiraID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="QCC" class="form-label ">Qamar Care Card Number</label>
                                        <div class="hstack gap-3">
                                            <label class="form-label ">QCC-</label>
                                            <input class="form-control form-control-lg me-auto @error('QCC') is-invalid @enderror" value="{{ old('QCC') }}" type="text" name="QCC" id="QCC" readonly>
                                          <button type="button" class="btn btn-lg btn-outline-danger" onclick="Random();"><i class=" bx bxs-magic-wand  font-size-16 align-middle"></i> </button>
                                            @error('QCC')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                 
                         
                            </div>

                        </div>
                        <div class="col-md-2 justify-content-center">
                            <label for="Profile" class="form-label"> <i class="mdi mdi-asterisk text-danger"></i></label>
                            <input type="file" class="my-pond @error('Profile') is-invalid @enderror" value="{{ old('Profile') }}" id="Profile" name="Profile" />
                            @error('Profile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="ScholarshipName" class="form-label ">Scholarship Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                <input type="text" class="form-control form-control-lg @error('ScholarshipName') is-invalid @enderror" value="{{ old('ScholarshipName') }}" id="ScholarshipName" name="ScholarshipName" required>
                                @error('ScholarshipName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="ScholarshipType_ID" class="form-label">Scholarship Type <i class="mdi mdi-asterisk text-danger"></i></label>
                                <select class="form-select  form-select-lg @error('ScholarshipType_ID') is-invalid @enderror" value="{{ old('ScholarshipType_ID') }}" id="ScholarshipType_ID" name="ScholarshipType_ID" required>
                                    <option value="">Select Scholarship Type</option>
                                    @foreach($scholarshiptypes as $scholarshiptype)
                                    <option value="{{ $scholarshiptype -> id}}">{{ $scholarshiptype -> Name}}</option>

                                    @endforeach
                                </select>
                                @error('ScholarshipType_ID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Country_ID" class="form-label">Country <i class="mdi mdi-asterisk text-danger"></i></label>
                                <select class="form-select  form-select-lg  @error('Country_ID') is-invalid @enderror" value="{{ old('Country_ID') }}" required id="Country_ID" name="Country_ID">
                                    <option value="">Select Your Country</option>
                                    @foreach($countries as $country)
                                    <option value="{{ $country -> id}}">{{ $country -> Name}}</option>

                                    @endforeach


                                </select>
                                @error('Country_ID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="mb-3 position-relative">
                                <label for="StartDate" class="form-label">Application Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
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
                        <div class="col-md-4 ">
                            <div class="mb-3 position-relative">
                                <label for="EndDate" class="form-label">Application End Date <i class="mdi mdi-asterisk text-danger"></i></label>
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
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Seats" class="form-label ">Seats <i class="mdi mdi-asterisk text-danger"></i></label>
                                <input type="number" class="form-control form-control-lg @error('Seats') is-invalid @enderror" value="{{ old('Seats') }}" id="Seats" name="Seats" max="999999" required>
                                @error('Seats')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <!--                     
                        <div class="row">
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="DOB" class="form-label">Date of Birth</label>
                                    <div class="input-group " id="example-date-input">
                                      
                                    <input class="form-control form-select-lg @error('DOB') is-invalid @enderror" value="{{ old('DOB') }}" type="date"  id="example-date-input" name="DOB" id="DOB" required>
                                    @error('DOB')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                                   
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Gender" class="form-label">Gender</label>
                                    <select class="form-select  form-select-lg @error('Gender') is-invalid @enderror" value="{{ old('Gender') }}" id="Gender"  name="Gender" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                 </select>
                                 @error('Gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                                </div>
                            </div>
                      
                   
                        </div> -->
                    <div class="row">

                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->







    <div>

        <button class="btn btn-success btn-lg" type="submit">Save </button>
        <a class="btn btn-danger btn-lg" href="{{route('IndexQamarCareCard')}}">Cancel</a>
    </div>





</form>

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>



<script src="{{ URL::asset('/assets/libs/filepond/js/filepond.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-file-validate-type.js') }}"></script>


<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

<!-- Bootstrap rating js -->
<script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js') }} "></script>

<script src="{{ URL::asset('/assets/js/pages/rating-init.js') }}"></script>


<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);




    // Get a reference to the file input element
    const inputProfile = document.querySelector('input[name="Profile"]');

    // Get a reference to the file input element
    const inputTazkira = document.querySelector('input[name="Tazkira"]');



    // Create a FilePond instance
    const Profile = FilePond.create(inputProfile, {
        labelIdle: 'Profile <span class="bx bx-upload"></span >',


    });


    // Create a FilePond instance
    const Tazkira = FilePond.create(inputTazkira, {
        labelIdle: 'Click to upload Tazkira <span class="bx bx-upload"></span >',
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Beneficiaries_Tazkira',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });



    Profile.setOptions({
        server: {

            url: '../Beneficiaries_Profile',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        instantUpload: true,
        imagePreviewHeight: 100,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 10,
        imageResizeTargetHeight: 10,
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'right bottom',
        styleButtonRemoveItemPosition: 'left bottom',
        styleButtonProcessItemPosition: 'right bottom'
    });


    $(document).ready(function() {
        var rnd = Math.floor(Math.random() * 99999) + 1;
        document.getElementById('QCC').value = rnd;
    });


    $(document).ready(function() {
        $('.Province').on('change', function() {
            var dID = $(this).val();
            if (dID) {
                $.ajax({
                    url: '/GetDistricts/' + dID,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('.District').empty();
                            //  $('.District').append('<option value="None" hidden>All</option>'); 
                            $.each(data, function(key, course) {
                                $('select[name="District_ID"]').append('<option value="' + course.id + '">' + course.Name + '</option>');
                            });
                        } else {
                            $('.District').empty();
                        }
                    }
                });
            } else {
                $('.District').empty();
            }
        });
    });

    function Random() {
        var rnd = Math.floor(Math.random() * 99999) + 1;
        document.getElementById('QCC').value = rnd;
    };

    $(document).ready(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#No').prop("checked", true);

    });
    $('#Yes').click(function() {
        $('#SpuoseName').show();
        $('.SpuoseName').show();

    });



    $('#No').click(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
    });
</script>
@endsection