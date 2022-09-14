@extends('layouts.master-layouts')

@section('title') ADD ORPHAN @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />


@endsection


@section('content')



<div class="row">
    <div class="col-12">
        <a href="{{route('AllOrphans')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-primary  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">ADD ORPHAN</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>



<form class="needs-validation" action="{{route('CreateOrphans')}}" method="POST" enctype="multipart/form-data" novalidate>
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
                                        <input type="text" class="form-control form-control-lg @error('FirstName') is-invalid @enderror" value="{{ old('FirstName') }}" id="FirstName" name="FirstName" required>
                                        @error('FirstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="FirstNameLocal" class="form-label ">First Name (Local Language) <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('FirstNameLocal') is-invalid @enderror" value="{{ old('FirstNameLocal') }}" id="FirstNameLocal" name="FirstNameLocal" required>

                                        @error('FirstNameLocal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div> -->
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
                                        <label for="IntroducerName" class="form-label ">Introducer Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('IntroducerName') is-invalid @enderror" value="{{ old('IntroducerName') }}" id="IntroducerName" name="IntroducerName" required>
                                        @error('IntroducerName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="mb-3 position-relative">
                                        <label for="LastNameLocal" class="form-label ">Last Name (Local Language) </label>
                                        <input type="text" class="form-control form-control-lg @error('LastNameLocal') is-invalid @enderror" value="{{ old('LastNameLocal') }}" id="LastNameLocal" name="LastNameLocal">

                                        @error('LastNameLocal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div> -->
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
                                <!-- <div class="col-md-6">
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
                                </div> -->
                                <div class="col-md-6 ">
                                    <div class="mb-3 position-relative">
                                        <label for="DOB" class="form-label">Date of Birth <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group " id="example-date-input">

                                            <input class="form-control form-select-lg @error('DOB') is-invalid @enderror" value="{{ old('DOB') }}" type="date" id="example-date-input" name="DOB" id="DOB" required>
                                            @error('DOB')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>

                                </div>
                          <div class="col-md-6">
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
                         
                            </div>

                        </div>
                        <div class="col-md-2 justify-content-center">
                            <!-- <label for="Profile" class="form-label"> <i class="mdi mdi-asterisk text-danger"></i></label> -->
                            <input type="file" class="my-pond @error('Profile') is-invalid @enderror" value="{{ old('Profile') }}" id="Profile" name="Profile" />
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
                                <label for="Country_ID" class="form-label">Country <i class="mdi mdi-asterisk text-danger"></i></label>
                                <select class="form-select  form-select-lg  @error('Country_ID') is-invalid @enderror" value="{{ old('Country_ID') }}" required id="Country_ID" name="Country_ID">
                                    <!-- <option value="">Select Your Country</option> -->
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

                                    <select class="form-select  form-select-lg @error('Tribe_ID') is-invalid @enderror" value="{{ old('Tribe_ID') }}" required id="Tribe_ID" name="Tribe_ID">
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
                                            <div class="col-md-12">
                                                <label for="WhyShouldYouHelpMe" class="form-label">Why Should You Help Me?  <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <textarea id="textarea" class="form-control @error('WhyShouldYouHelpMe') is-invalid @enderror" maxlength="2205" rows="10"   value="{{ old('WhyShouldYouHelpMe') }}" required name="WhyShouldYouHelpMe" id="WhyShouldYouHelpMe" required></textarea>
                                                <!-- <input type="textarea" class="my-pond @error('Tazkira') is-invalid @enderror" value="{{ old('Tazkira') }}" name="Tazkira" id="Tazkira" /> -->
                                                @error('WhyShouldYouHelpMe')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                        <!-- <div class="col-md-4">
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
                                <label for="PrimaryNumber" class="form-label">Primary Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <input type="number" class="form-control  form-control-lg @error('PrimaryNumber') is-invalid @enderror" value="{{ old('PrimaryNumber') }}" id="PrimaryNumber" name="PrimaryNumber" max="999999999" aria-describedby="PrimaryNumber" required>
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

                                    <input type="number" class="form-control  form-control-lg @error('SecondaryNumber') is-invalid @enderror" value="{{ old('SecondaryNumber') }}" id="SecondaryNumber" name="SecondaryNumber" max="999999999" aria-describedby="SecondaryNumber">
                                    @error('SecondaryNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="EmergencyNumber" class="form-label">Emergency Number</label>
                                <div class="input-group">

                                    <input type="number" class="form-control  form-control-lg @error('EmergencyNumber') is-invalid @enderror" value="{{ old('EmergencyNumber') }}" id="EmergencyNumber" name="EmergencyNumber" max="999999999" aria-describedby="EmergencyNumber">
                                    @error('EmergencyNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Email" class="form-label">Email</label>
                                <div class="input-group">

                                    <input type="email" class="form-control  form-control-lg @error('Email') is-invalid @enderror" value="{{ old('Email') }}" id="Email" name="Email" aria-describedby="Email">
                                    @error('Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Province_ID" class="form-label">Province <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">
                                    <select class="form-select Province form-select-lg @error('Province_ID') is-invalid @enderror" required name="Province_ID" value="{{ old('Province_ID') }}" id="Province_ID">
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
                                    <select class="form-select  District form-select-lg @error('District_ID') is-invalid @enderror" required name="District_ID" value="{{ old('District_ID') }}" id="District_ID">
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
                                <input type="text" class="form-control  form-control-lg @error('Village') is-invalid @enderror" value="{{ old('Village') }}" id="Village" name="Village" required>
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
                                <label for="InCareName" class="form-label">InCare Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <input type="text" class="form-control  form-control-lg @error('InCareName') is-invalid @enderror" value="{{ old('InCareName') }}" id="InCareName" name="InCareName"  required>
                                    @error('InCareName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="InCareRelationship_ID" class="form-label">Relationship <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select  form-select-lg @error('InCareRelationship_ID') is-invalid @enderror" value="{{ old('InCareRelationship_ID') }}" required name="InCareRelationship_ID" id="InCareRelationship_ID">
                                        <option value="">Select Your Relationship</option>
                                        @foreach($relationships as $relationship)
                                        <option value="{{ $relationship -> id}}">{{ $relationship -> Name}}</option>

                                        @endforeach

                                    </select>
                                    @error('InCareRelationship_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="InCareNumber" class="form-label">InCare Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <input type="number" class="form-control  form-control-lg @error('InCareNumber') is-invalid @enderror" value="{{ old('InCareNumber') }}" id="InCareNumber" name="InCareNumber" max="999999999" aria-describedby="InCareNumber" required>
                                    @error('InCareNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="InCareTazkiraID" class="form-label ">InCare Tazkira ID <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="number" class="form-control form-control-lg @error('InCareTazkiraID') is-invalid @enderror" value="{{ old('InCareTazkiraID') }}" id="InCareTazkiraID" name="InCareTazkiraID" max="999999999" required>
                                        @error('InCareTazkiraID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
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
                <h4 class="card-header bg-primary text-white ">EDUCATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <div class="row">
                      <div class="col-md-4">
                            <div class="row mb-3 position-relative" >
                            <label for="CurrentlyInSchool" class="form-label" >Currently In School? <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="col-6 col-sm-6">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="CurrentlyInSchool" value="No" id="No" checked>
                                        <label class="form-check-label" for="No">
                                            No
                                        </label>
                                    </div>
                                </div>



                                <div class="col-6 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="CurrentlyInSchool" value="Yes" id="Yes">
                                        <label class="form-check-label" for="Yes">
                                            Yes
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
               
                 
          
                    </div>
                    <div class="row InSchoolDiv" id="InSchoolDiv">
                       <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="SchoolName"  class="form-label">School Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                <input type="text" class="form-control  form-control-lg @error('SchoolName') is-invalid @enderror" value="{{ old('SchoolName') }}" id="SchoolName" name="SchoolName" >
                                @error('SchoolName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="SchoolProvince_ID" class="form-label">School Province <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">
                                    <select class="form-select SchoolProvince form-select-lg @error('SchoolProvince_ID') is-invalid @enderror"  name="SchoolProvince_ID" value="{{ old('SchoolProvince_ID') }}" id="SchoolProvince_ID">
                                        <option value="">Select Your Province</option>
                                        @foreach($provinces as $province)
                                        <option value="{{ $province -> id}}">{{ $province -> Name}}</option>

                                        @endforeach

                                    </select>
                                    @error('SchoolProvince_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="SchoolDistrict_ID" class="form-label">School District <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">
                                    <select class="form-select  SchoolDistrict form-select-lg @error('SchoolDistrict_ID') is-invalid @enderror"  name="SchoolDistrict_ID" value="{{ old('SchoolDistrict_ID') }}" id="SchoolDistrict_ID">
                                        <option value="">Select Your District</option>


                                    </select>
                                    @error('SchoolDistrict_ID')
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
                                <label for="SchoolVillage" class="form-label">School Village <i class="mdi mdi-asterisk text-danger"></i></label>
                                <input type="text" class="form-control  form-control-lg @error('SchoolVillage') is-invalid @enderror" value="{{ old('SchoolVillage') }}" id="SchoolVillage" name="SchoolVillage" >
                                @error('SchoolVillage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="SchoolNumber" class="form-label">School Number</label>
                                <div class="input-group">

                                    <input type="number" class="form-control  form-control-lg @error('SchoolNumber') is-invalid @enderror" value="{{ old('SchoolNumber') }}" id="SchoolNumber" name="SchoolNumber" max="999999999" aria-describedby="SchoolNumber">
                                    @error('SchoolNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="SchoolEmail" class="form-label">School Email</label>
                                <div class="input-group">

                                    <input type="email" class="form-control  form-control-lg @error('SchoolEmail') is-invalid @enderror" value="{{ old('SchoolEmail') }}" id="SchoolEmail" name="SchoolEmail" aria-describedby="SchoolEmail">
                                    @error('SchoolEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                                       
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Class" class="form-label">Class <i class="mdi mdi-asterisk text-danger"></i></label>
                                <select class="form-select  form-select-lg  @error('Class') is-invalid @enderror" value="{{ old('Class') }}" required id="Class" name="Class">
                                    <!-- <option value="">Select Your Country</option> -->
                                    @for($i = 1; $i < 13; $i++)
                                    <option value="{{ $i}}">{{ $i}} </option>

                                    @endfor


                                </select>
                                @error('Class')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
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
                <h4 class="card-header bg-primary text-white ">FAMILY AND INCOME INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <div class="row">
      
                        <!-- <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="FatherNameLocal" class="form-label">Father's Name (Local Language) <i class="mdi mdi-asterisk text-danger"></i></label>
                                <input type="text" class="form-control  form-control-lg @error('FatherNameLocal') is-invalid @enderror" value="{{ old('FatherNameLocal') }}" id="FatherNameLocal" name="FatherNameLocal" required>
                                @error('FatherNameLocal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                   
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="EldestSonAge" class="form-label">Eldest Son Age <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <input type="number" class="form-control form-control-lg @error('EldestSonAge') is-invalid @enderror" value="{{ old('EldestSonAge') }}" id="EldestSonAge" name="EldestSonAge" max="150" aria-describedby="EldestSonAge" required>
                                    @error('EldestSonAge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="row mb-3 position-relative" >
                            <label for="MaritalStatus" class="form-label" >Marital Status <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="col-6 col-sm-6">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="MaritalStatus" value="Single" id="No" checked>
                                        <label class="form-check-label" for="No">
                                            Single
                                        </label>
                                    </div>
                                </div>



                                <div class="col-6 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="MaritalStatus" value="Married" id="Yes">
                                        <label class="form-check-label" for="Yes">
                                            Married
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="SpuoseName"  class="form-label SpuoseName">Spuose's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                <input type="text" class="form-control  form-control-lg @error('SpuoseName') is-invalid @enderror" value="{{ old('SpuoseName') }}" id="SpuoseName" name="SpuoseName" >
                                @error('SpuoseName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                         -->
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="FatherName" class="form-label">Father's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                <input type="text" class="form-control  form-control-lg @error('FatherName') is-invalid @enderror" value="{{ old('FatherName') }}" id="FatherName" name="FatherName" required>
                                @error('FatherName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="MonthlyFamilyIncome" class="form-label">Monthly Family Income <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">
                                    <div class="input-group-text">&#1547;</div>
                                    <input type="number" class="form-control form-control-lg @error('MonthlyFamilyIncome') is-invalid @enderror" value="{{ old('MonthlyFamilyIncome') }}" id="MonthlyFamilyIncome" name="MonthlyFamilyIncome" max="999999" aria-describedby="MonthlyFamilyIncome" required>
                                    @error('MonthlyFamilyIncome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="MonthlyFamilyExpenses" class="form-label">Monthly Family Expenses <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">
                                    <div class="input-group-text">&#1547;</div>
                                    <input type="number" class="form-control form-control-lg @error('MonthlyFamilyExpenses') is-invalid @enderror" value="{{ old('MonthlyFamilyExpenses') }}" id="MonthlyFamilyExpenses" name="MonthlyFamilyExpenses" max="999999" aria-describedby="MonthlyFamilyExpenses" required>
                                    @error('MonthlyFamilyExpenses')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="NumberFamilyMembers" class="form-label">Number of Family Members <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <input type="number" class="form-control form-control-lg @error('NumberFamilyMembers') is-invalid @enderror" value="{{ old('NumberFamilyMembers') }}" id="NumberFamilyMembers" name="NumberFamilyMembers" max="40" aria-describedby="NumberFamilyMembers" required>
                                    @error('NumberFamilyMembers')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="IncomeStreem_ID" class="form-label">Income Streem <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">
                                    <select class="form-select form-select-lg @error('IncomeStreem_ID') is-invalid @enderror" value="{{ old('IncomeStreem_ID') }}" required name="IncomeStreem_ID" id="IncomeStreem_ID">
                                        <option value="">Select Your Income Streem</option>
                                        @foreach($incomestreams as $incomestream)
                                        <option value="{{ $incomestream -> id}}">{{ $incomestream -> Name}}</option>

                                        @endforeach
                                    </select>
                                    @error('IncomeStreem_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="LevelPoverty" class="form-label">Level Of Poverty <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="rating-star">
                                    <input type="hidden" class="rating @error('LevelPoverty') is-invalid @enderror" value="{{ old('LevelPoverty') }}" data-filled="mdi mdi-star text-warning " data-empty="mdi mdi-star-outline text-muted" name="LevelPoverty" id="LevelPoverty" />
                                    @error('LevelPoverty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="FamilyStatus_ID" class="form-label">Family Status <i class="mdi mdi-asterisk text-danger"></i></label>
                                <div class="input-group">

                                    <select class="form-select form-select-lg @error('FamilyStatus_ID') is-invalid @enderror" value="{{ old('FamilyStatus_ID') }}" required name="FamilyStatus_ID" id="FamilyStatus_ID">
                                        <option value="">Select Your Family Status</option>
                                        @foreach($familystatus as $familystatu)
                                        <option value="{{ $familystatu -> id}}">{{ $familystatu -> Name}}</option>

                                        @endforeach
                                    </select>
                                    @error('FamilyStatus_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
               
                    </div>
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
                <h4 class="card-header bg-primary text-white ">DOCUMENTS</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

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
                        <div class="col-md-4">
                            <label for="HousePic" class="form-label">House Picture</label>
                            <input type="file" class="my-pond @error('HousePic') is-invalid @enderror" value="{{ old('HousePic') }}" name="HousePic" id="HousePic" />
                            @error('HousePic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="FamilyPic" class="form-label">Family Picture</label>
                            <input type="file" class="my-pond @error('FamilyPic') is-invalid @enderror" value="{{ old('FamilyPic') }}" name="FamilyPic" id="FamilyPic" />
                            @error('FamilyPic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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

 // Get a reference to the file input element
 const inputFamilyPic = document.querySelector('input[name="FamilyPic"]');

// Get a reference to the file input element
const inputHousePic = document.querySelector('input[name="HousePic"]');




    // Create a FilePond instance
    const Tazkira = FilePond.create(inputTazkira, {
        labelIdle: 'Click to upload Tazkira <span class="bx bx-upload"></span >',
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Orphans_Tazkira',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });
    // Create a FilePond instance
    const Profile = FilePond.create(inputProfile, {
        labelIdle: 'Profile <span class="bx bx-upload"></span >',
 

    });

       // Create a FilePond instance
       const FamilyPic = FilePond.create(inputFamilyPic, {
        labelIdle: 'Click to upload Family Picture <span class="bx bx-upload"></span >',
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Orphans_FamilyPic',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });

       // Create a FilePond instance
       const HousePic = FilePond.create(inputHousePic, {
        labelIdle: 'Click to upload House Picture <span class="bx bx-upload"></span >',
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Orphans_HousePic',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });



    Profile.setOptions({
        server: {

            url: '../Orphans_Profile',
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


    
    $(document).ready(function() {
        $('.SchoolProvince').on('change', function() {
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
                            $('.SchoolDistrict').empty();
                            //  $('.District').append('<option value="None" hidden>All</option>'); 
                            $.each(data, function(key, course) {
                                $('select[name="SchoolDistrict_ID"]').append('<option value="' + course.id + '">' + course.Name + '</option>');
                            });
                        } else {
                            $('.SchoolDistrict').empty();
                        }
                    }
                });
            } else {
                $('.District').empty();
            }
        });
    });



    $(document).ready(function()
{
    $('#InSchoolDiv').hide();
    $('.InSchoolDiv').hide();
    $('#No').prop("checked", true);

});
    $('#Yes').click(function() 
    {
    $('#InSchoolDiv').show();
    $('.InSchoolDiv').show();

});



$('#No').click(function() {
    $('#InSchoolDiv').hide();
    $('.InSchoolDiv').hide();
});



</script>
@endsection