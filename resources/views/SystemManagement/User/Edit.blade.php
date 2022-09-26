@extends(Auth::user()->IsEmployee == 1 ? 'layouts.master-layouts' : 'layouts.master')

@section('title') UPDATE USER @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />


@endsection


@section('content')

@if(Auth::user()->IsEmployee == 1)
<div class="row">
    <div class="col-12">
        <a href="{{route('AllUser')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-primary  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">UPDATE USER</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>

@endif
<form class="needs-validation" action="{{route('UpdateUser', [$data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
@method('PUT')

    @csrf


    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-primary text-white ">PEROSNAL INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="FirstName" class="form-label ">First Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('FirstName') is-invalid @enderror" value="{{$data -> FirstName}}" id="FirstName" name="FirstName" required>
                                        @error('FirstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="LastName" class="form-label ">Last Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('LastName') is-invalid @enderror" value="{{$data -> LastName}}" id="LastName" name="LastName" required>

                                        @error('LastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="FullName" class="form-label ">Full Name </label>
                                        <input type="text" class="form-control form-control-lg @error('FullName') is-invalid @enderror" value="{{$data -> FullName}}" id="FullName" name="FullName">

                                        @error('FullName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="Job" class="form-label ">Job </label>
                                        <input type="text" class="form-control form-control-lg @error('Job') is-invalid @enderror" value="{{$data -> Job}}" id="Job" name="Job">

                                        @error('Job')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                        <label for="email" class="form-label ">Email (User Name)<i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{$data -> email}}" id="email" name="email" readonly>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6 ">
                            <div class="mb-3 position-relative">
                                <label for="DOB" class="form-label">Date of Birth <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group " id="example-date-input">

                                    <input class="form-control form-select-lg @error('DOB') is-invalid @enderror" value="{{$data -> DOB}}" type="date" id="example-date-input" name="DOB" id="DOB" required>
                                    @error('DOB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                        </div>
                                <!-- <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="password" class="form-label ">Password <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="hstack gap-3">
                                            <input class="form-control form-control-lg me-auto @error('password') is-invalid @enderror" value="{{$data -> password}}" type="text" name="password" id="QCC" readonly>
                                            <button type="button" class="btn btn-lg btn-outline-danger" onclick="Random();"><i class=" bx bxs-magic-wand  font-size-16 align-middle"></i> </button>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> -->


                            </div>

                        </div>
                        <div class="col-md-2 justify-content-center">
                            <!-- <label for="Profile" class="form-label"> <i class="mdi mdi-asterisk text-danger"></i></label> -->
                            <input type="file" class="my-pond @error('Profile') is-invalid @enderror" value="{{$data -> Profile}}" id="Profile" name="Profile" />
                            @error('Profile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
           
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Gender_ID" class="form-label">Gender <i class="mdi mdi-asterisk text-danger"></i></label>
                                <select class="form-select  form-select-lg @error('Gender_ID') is-invalid @enderror" value="{{$data -> Gender_ID}}" id="Gender_ID" name="Gender_ID" required>
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
                                        <label for="Tazkira_ID" class="form-label ">Tazkira ID <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="number" class="form-control form-control-lg @error('Tazkira_ID') is-invalid @enderror" value="{{$data -> Tazkira_ID}}" id="Tazkira_ID" name="Tazkira_ID"  required>
                                        @error('TazkiraID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                         <!-- 
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Country_ID" class="form-label">Country <i class="mdi mdi-asterisk text-danger"></i></label>
                                <select class="form-select  form-select-lg  @error('Country_ID') is-invalid @enderror" value="{{ old('Country_ID') }}" required id="Country_ID" name="Country_ID">
                              
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
                       <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Tribe_ID" class="form-label">Tribe <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select  form-select-lg @error('Tribe') is-invalid @enderror" value="{{ old('Tribe_ID') }}" required id="Tribe_ID" name="Tribe_ID">
                                        <option>Select Your Tribe</option>
                                        @foreach($tribes as $tribe)
                                        <option value="{{ $tribe -> id}}">{{ $tribe -> Name}}</option>

                                        @endforeach


                                    </select>
                                    @error('Tribe_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Language_ID" class="form-label">Language <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select  form-select-lg @error('Language_ID') is-invalid @enderror" value="{{ old('Language_ID') }}" required id="Language_ID" name="Language_ID">
                                        <option value="">Select Your Language</option>
                                        @foreach($languages as $language)
                                        <option value="{{ $language -> id}}">{{ $language -> Name}}</option>

                                        @endforeach

                                    </select>
                                    @error('Language_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="CurrentJob_ID" class="form-label">Current Job <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select  form-select-lg @error('CurrentJob_ID') is-invalid @enderror" value="{{ old('CurrentJob_ID') }}" required name="CurrentJob_ID" id="CurrentJob_ID">
                                        <option value="">Select Your Current Job</option>
                                        @foreach($currentjobs as $currentjob)
                                        <option value="{{ $currentjob -> id}}">{{ $currentjob -> Name}}</option>

                                        @endforeach



                                    </select>
                                    @error('CurrentJob_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="FutureJob_ID" class="form-label">What type of job you can do? <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select  form-select-lg @error('FutureJob_ID') is-invalid @enderror" value="{{ old('FutureJob_ID') }}" required name="FutureJob_ID" id="FutureJob_ID">
                                        <option value="">Select Your Future Job</option>
                                        @foreach($futurejobs as $futurejob)
                                        <option value="{{ $futurejob -> id}}">{{ $futurejob -> Name}}</option>

                                        @endforeach



                                    </select>
                                    @error('FutureJob_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="EducationLevel_ID" class="form-label">Education Level <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select  form-select-lg @error('EducationLevel_ID') is-invalid @enderror" value="{{ old('EducationLevel_ID') }}" required name="EducationLevel_ID" id="EducationLevel_ID">
                                        <option value="">Select Your Education Level</option>
                                        @foreach($educationlevels as $educationlevel)
                                        <option value="{{ $educationlevel -> id}}">{{ $educationlevel -> Name}}</option>

                                        @endforeach



                                    </select>
                                    @error('EducationLevel_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="QamarSupport_ID" class="form-label">How Qamar Should Support You? <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select  form-select-lg @error('QamarSupport_ID') is-invalid @enderror" value="{{ old('QamarSupport_ID') }}" required name="QamarSupport_ID" id="QamarSupport_ID">
                                        <option value="">Select How Qamar Should Support You? </option>
                                        @foreach($whatqamarcandos as $whatqamarcando)
                                        <option value="{{ $whatqamarcando -> id}}">{{ $whatqamarcando -> Name}}</option>

                                        @endforeach



                                    </select>
                                    @error('QamarSupport_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div> -->
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




    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-primary text-white ">ADDRESS AND CONTACT</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->


                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Province_ID" class="form-label">Province <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">
                                    <select class="form-select Province form-select-lg @error('Province_ID') is-invalid @enderror" required name="Province_ID" value="{{$data -> Province_ID}}" id="Province_ID">
                                        <option value="">Select Your Province</option>
                                        @foreach($provinces as $province)
                                        <option value="{{ $province -> id}}">{{ $province -> Name}}</option>

                                        @endforeach

                                    </select>
                                    @error('Province_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="District_ID" class="form-label">District <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">
                                    <select class="form-select  District form-select-lg @error('District_ID') is-invalid @enderror" required name="District_ID" value="{{$data -> District_ID}}" id="District_ID">
                                        <option value="">Select Your District</option>


                                    </select>
                                    @error('District_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="District" class="form-label">District <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <input type="text" class="form-control  form-control-lg" id="District @error('District') is-invalid @enderror" value="{{ old('District') }}"  name="District"
                                        required>
                                        @error('District')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                                </div>
                            </div> -->
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Village" class="form-label">Village <i class="mdi mdi-asterisk text-danger"></i></label>
                                <input type="text" class="form-control  form-control-lg @error('Village') is-invalid @enderror" value="{{$data -> Village}}" id="Village" name="Village" required>
                                @error('Village')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="PrimaryNumber" class="form-label">Primary Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <input type="number" class="form-control  form-control-lg @error('PrimaryNumber') is-invalid @enderror" value="{{$data -> PrimaryNumber}}" id="PrimaryNumber" name="PrimaryNumber" max="999999999" aria-describedby="PrimaryNumber" required>
                                    @error('PrimaryNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="SecondaryNumber" class="form-label">Secondary Number</label>
                                <div class="input-group">

                                    <input type="number" class="form-control  form-control-lg @error('SecondaryNumber') is-invalid @enderror" value="{{$data -> SecondaryNumber}}" id="SecondaryNumber" name="SecondaryNumber" max="999999999" aria-describedby="SecondaryNumber">
                                    @error('SecondaryNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="row">

                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="RelativeName" class="form-label">Relative Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <input type="text" class="form-control  form-control-lg @error('RelativeName') is-invalid @enderror" value="{{ old('RelativeName') }}" id="RelativeName" name="RelativeName" aria-describedby="Email" required>
                                    @error('RelativeName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="RelativeRelationship_ID" class="form-label">Relationship <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select  form-select-lg @error('RelativeRelationship_ID') is-invalid @enderror" value="{{ old('RelativeRelationship_ID') }}" required name="RelativeRelationship_ID" id="RelativeRelationship_ID">
                                        <option value="">Select Your Relationship</option>
                                        @foreach($relationships as $relationship)
                                        <option value="{{ $relationship -> id}}">{{ $relationship -> Name}}</option>

                                        @endforeach

                                    </select>
                                    @error('RelativeRelationship_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="RelativeNumber" class="form-label">Relative Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <input type="number" class="form-control  form-control-lg @error('RelativeNumber') is-invalid @enderror" value="{{ old('RelativeNumber') }}" id="RelativeNumber" name="RelativeNumber" max="999999999" aria-describedby="RelativeNumber" required>
                                    @error('RelativeNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div> -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->





    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-primary text-white ">DOCUMENTS</h4>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <label for="Tazkira" class="form-label">Tazkira</label>
                            <input type="file" class="my-pond @error('Tazkira') is-invalid @enderror" value="{{ old('Tazkira') }}" name="Tazkira" id="Tazkira" />
                            @error('Tazkira')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div> -->
    <!-- end row -->
    <div>

        <button class="btn btn-success btn-lg" type="submit">Update </button>
        <a class="btn btn-danger btn-lg" href="{{route('AllUser')}}">Cancel</a>
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

            url: '../Employees_Profile',
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
        const result = Math.random().toString(36).substring(2,7);
        document.getElementById('QCC').value = result;
    };





    $(document).ready(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#SpuoseTazkiraID').hide();
        $('.SpuoseTazkiraID').hide();
        $('#No').prop("checked", true);

    });
    $('#Yes').click(function() {
        $('#SpuoseName').show();
        $('.SpuoseName').show();
        $('#SpuoseTazkiraID').show();
        $('.SpuoseTazkiraID').show();
    });



    $('#Single').click(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#SpuoseTazkiraID').hide();
        $('.SpuoseTazkiraID').hide();
    });
    $('#Divorced').click(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#SpuoseTazkiraID').hide();
        $('.SpuoseTazkiraID').hide();
    });
    $('#Widow').click(function() {
        $('#SpuoseName').hide();
        $('.SpuoseName').hide();
        $('#SpuoseTazkiraID').hide();
        $('.SpuoseTazkiraID').hide();
    });
</script>
@endsection