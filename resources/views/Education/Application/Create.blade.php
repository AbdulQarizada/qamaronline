@extends('layouts.master-layouts')

@section('title') QAMAR SCHOLARSHIP @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />


@endsection


@section('content')
@if (Auth::check()) 
@component('components.breadcrumb')
@slot('li_1') Qamar / Scholarship @endslot
@slot('title') @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <a href="{{route('AllApplicantEducation')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-primary  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">QAMAR SCHOLARSHIP APPLICATION</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>


<form class="needs-validation" action="{{route('CreateApplicationEducation')}}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="checkout-tabs">
        <div class="row">
            <div class="col-xl-2 col-sm-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                        <i class="bx bx-user  d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">PERSONAL INFORMATION</p>
                    </a>
                    <a class="nav-link" id="v-pills-address-tab" data-bs-toggle="pill" href="#v-pills-address" role="tab" aria-controls="v-pills-address" aria-selected="false">
                        <i class="bx bxs-contact d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">ADDRESS AND CONTACTS</p>
                    </a>
                    <!-- <a class="nav-link" id="v-pills-family-tab" data-bs-toggle="pill" href="#v-pills-family" role="tab" aria-controls="v-pills-family" aria-selected="false">
                        <i class="bx bx-home-circle  d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">FAMILY INFORMATION</p>
                    </a> -->
                    <a class="nav-link" id="v-pills-education-tab" data-bs-toggle="pill" href="#v-pills-education" role="tab" aria-controls="v-pills-education" aria-selected="false">
                        <i class="bx bxs-graduation  d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">EDUCATION</p>
                    </a>
                    <a class="nav-link" id="v-pills-work-tab" data-bs-toggle="pill" href="#v-pills-work" role="tab" aria-controls="v-pills-work" aria-selected="false">
                        <i class="bx bx-building-house   d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">WORK EXPERIENCE</p>
                    </a>
                    <a class="nav-link" id="v-pills-document-tab" data-bs-toggle="pill" href="#v-pills-document" role="tab" aria-controls="v-pills-document" aria-selected="false">
                        <i class="bx bx-folder-open  d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">LOI AND SUBMISSION</p>
                    </a>
                </div>
            </div>
            <div class="col-xl-10 col-sm-9">
                <div class="card">
                    <h4 class="card-header bg-primary text-white "></h4>

                    <div class="card-body">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                <div class="card shadow-none border mb-0">
                                    <div class="card-body">
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
                                                            <label for="LastName" class="form-label ">Last Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <input type="text" class="form-control form-control-lg @error('LastName') is-invalid @enderror" value="{{ old('LastName') }}" id="LastName" name="LastName" required>

                                                            @error('LastName')
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
                                                                    <strong>Applicant should not be more then 22 years old</strong>
                                                                </span>
                                                                @enderror

                                                            </div>
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
                                            <!-- <div class="col-md-4 ">
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

                                            </div> -->
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
                                                    <label for="MotherName" class="form-label">Mother's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control  form-control-lg @error('MotherName') is-invalid @enderror" value="{{ old('MotherName') }}" id="MotherName" name="MotherName" required>
                                                    @error('MotherName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="MonthlyFamilyIncome" class="form-label">Total Monthly Family Income <i class="mdi mdi-asterisk text-danger"></i></label>
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
                                            <!-- <div class="col-md-4">
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
                                            </div> -->
                                            <div class="col-md-4">
                                                <div class="row mb-3 position-relative">
                                                    <label for="MaritalStatus" class="form-label">Marital Status <i class="mdi mdi-asterisk text-danger"></i></label>
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
                                
                                        </div>
                                        <div class="row">
                                         <div class="col-md-4">
                                                <label for="Tazkira" class="form-label">Tazkira <i class="mdi mdi-asterisk text-danger"></i></label>
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

                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <a class="btn text-muted d-none d-sm-inline-block btn-link"></a>
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="text-end">
                                            <a onclick="address();" class="btn btn-success">
                                                Next</a>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                                <div class="card shadow-none border mb-0">
                                    <div class="card-body">
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
                                                    <label for="Email" class="form-label">Email <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <input type="email" class="form-control  form-control-lg @error('Email') is-invalid @enderror" value="{{ old('Email') }}" id="Email" name="Email" aria-describedby="Email" required>
                                                        @error('Email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="CurrentProvince_ID" class="form-label">Province (Current) <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">
                                                        <select class="form-select CurrentProvince form-select-lg @error('CurrentProvince_ID') is-invalid @enderror" required name="CurrentProvince_ID" value="{{ old('CurrentProvince_ID') }}" id="CurrentProvince_ID">
                                                            <option value="">Select Your Province</option>
                                                            @foreach($provinces as $province)
                                                            <option value="{{ $province -> id}}">{{ $province -> Name}}</option>

                                                            @endforeach

                                                        </select>
                                                        @error('CurrentProvince_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="CurrentDistrict_ID" class="form-label">District (Current) <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">
                                                        <select class="form-select  CurrentDistrict form-select-lg @error('CurrentDistrict_ID') is-invalid @enderror" required name="CurrentDistrict_ID" value="{{ old('CurrentDistrict_ID') }}" id="CurrentDistrict_ID">
                                                            <option value="">Select Your District</option>


                                                        </select>
                                                        @error('CurrentDistrict_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="CurrentVillage" class="form-label">Village (Current) <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control  form-control-lg @error('CurrentVillage') is-invalid @enderror" value="{{ old('CurrentVillage') }}" id="CurrentVillage" name="CurrentVillage" required>
                                                    @error('CurrentVillage')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
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
                                        </div>
                                        
                                        <!-- <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Province_ID" class="form-label">Province (Permanent) <i class="mdi mdi-asterisk text-danger"></i></label>
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
                                                    <label for="District_ID" class="form-label">District (Permanent) <i class="mdi mdi-asterisk text-danger"></i></label>
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
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Village" class="form-label">Village (Permanent) <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control  form-control-lg @error('Village') is-invalid @enderror" value="{{ old('Village') }}" id="Village" name="Village" required>
                                                    @error('Village')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Facebook" class="form-label">Facebook URL </label>
                                                    <div class="input-group">

                                                        <input type="text" class="form-control  form-control-lg @error('Facebook') is-invalid @enderror" value="{{ old('Facebook') }}" id="Facebook" name="Facebook" aria-describedby="Facebook" required>
                                                        @error('Facebook')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Telegram" class="form-label">Instagram URL</label>
                                                    <div class="input-group">

                                                        <input type="text" class="form-control  form-control-lg @error('Telegram') is-invalid @enderror" value="{{ old('Telegram') }}" id="Telegram" name="Telegram" aria-describedby="Telegram" required>
                                                        @error('Telegram')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Twitter" class="form-label">Twitter URL </label>
                                                    <div class="input-group">

                                                        <input type="text" class="form-control  form-control-lg @error('Twitter') is-invalid @enderror" value="{{ old('Twitter') }}" id="Twitter" name="Twitter" aria-describedby="Twitter" required>
                                                        @error('Twitter')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4">
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
                                            </div> -->

                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <a onclick="personal();" class="btn text-muted d-none d-sm-inline-block btn-link">
                                            <i class="mdi mdi-arrow-left me-1"></i> Back to Personal Information </a>
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="text-end">
                                            <a onclick="education();" class="btn btn-success">
                                            Next </a>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div class="tab-pane fade" id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-education-tab">
                                <div class="card shadow-none border mb-0">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="SchoolName" class="form-label">School's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control  form-control-lg @error('SchoolName') is-invalid @enderror" value="{{ old('SchoolName') }}" id="SchoolName" name="SchoolName" required>
                                                    @error('SchoolName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="SchoolProvince_ID" class="form-label">Province (School) <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">
                                                        <select class="form-select SchoolProvince form-select-lg @error('SchoolProvince_ID') is-invalid @enderror" required name="SchoolProvince_ID" value="{{ old('SchoolProvince_ID') }}" id="SchoolProvince_ID">
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
                                                    <label for="SchoolDistrict_ID" class="form-label">District (School) <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">
                                                        <select class="form-select  SchoolDistrict form-select-lg @error('SchoolDistrict_ID') is-invalid @enderror" required name="SchoolDistrict_ID" value="{{ old('SchoolDistrict_ID') }}" id="SchoolDistrict_ID">
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
                                                    <label for="FatherNameLocal" class="form-label">Father's Name (Local Language) <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control  form-control-lg @error('FatherNameLocal') is-invalid @enderror" value="{{ old('FatherNameLocal') }}" id="FatherNameLocal" name="FatherNameLocal" required>
                                                    @error('FatherNameLocal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div> -->

                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="SchoolPercentage" class="form-label">School Percentage <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <input type="number" class="form-control form-control-lg @error('SchoolPercentage') is-invalid @enderror" value="{{ old('SchoolPercentage') }}" id="SchoolPercentage" name="SchoolPercentage" max="100" aria-describedby="SchoolPercentage" required>
                                                        @error('SchoolPercentage')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                        <div class="mb-3 position-relative">
                                                            <label for="SchoolGraduationDate" class="form-label">Graduation Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                            <div class="input-group " id="example-date-input">

                                                                <input class="form-control form-select-lg @error('SchoolGraduationDate') is-invalid @enderror" value="{{ old('SchoolGraduationDate') }}" type="date" id="example-date-input" name="SchoolGraduationDate" id="SchoolGraduationDate" required>
                                                                @error('SchoolGraduationDate')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                     <div class="mb-3 position-relative">
                                                    <label for="EnglishProficiency_ID" class="form-label">English Profeciancy<i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select form-select-lg @error('EnglishProficiency_ID') is-invalid @enderror" value="{{ old('EnglishProficiency_ID') }}" required name="EnglishProficiency_ID" id="EnglishProficiency_ID">
                                                            <option value="">Select Your English Proficiency</option>
                                                            @foreach($englishproficiencys as $englishproficiency)
                                                            <option value="{{ $englishproficiency -> id}}">{{ $englishproficiency -> Name}}</option>

                                                            @endforeach
                                                        </select>
                                                        @error('EnglishProficiency_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- <div class="col-md-4">
                                                <div class="row mb-3 position-relative">
                                                    <label for="MaritalStatus" class="form-label">Marital Status <i class="mdi mdi-asterisk text-danger"></i></label>
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
                                                    <label for="SpuoseName" class="form-label SpuoseName">Spuose's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control  form-control-lg @error('SpuoseName') is-invalid @enderror" value="{{ old('SpuoseName') }}" id="SpuoseName" name="SpuoseName">
                                                    @error('SpuoseName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                         <div class="col-md-4">
                                                <label for="SchoolDiploma" class="form-label">School Diploma <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <input type="file" class="my-pond @error('SchoolDiploma') is-invalid @enderror" value="{{ old('SchoolDiploma') }}" name="SchoolDiploma" id="SchoolDiploma" />
                                                @error('SchoolDiploma')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="SchoolTranscript" class="form-label">School Transcript <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <input type="file" class="my-pond @error('SchoolTranscript') is-invalid @enderror" value="{{ old('SchoolTranscript') }}" name="SchoolTranscript" id="SchoolTranscript" />
                                                @error('SchoolTranscript')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="EnglishDiploma" class="form-label">English Diploma <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <input type="file" class="my-pond @error('EnglishDiploma') is-invalid @enderror" value="{{ old('EnglishDiploma') }}" name="EnglishDiploma" id="EnglishDiploma" />
                                                @error('EnglishDiploma')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- <div class="row">

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
                                        </div>
                                        <div class="row">
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

                                        </div> -->
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <a onclick="address();" class="btn text-muted d-none d-sm-inline-block btn-link">
                                            <i class="mdi mdi-arrow-left me-1"></i> Back to Address and Contact </a>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="text-end">
                                            <a onclick="work();" class="btn btn-success">
                                            Next </a>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                            <div class="tab-pane fade" id="v-pills-work" role="tabpanel" aria-labelledby="v-pills-work-tab">
                                <div class="card shadow-none border mb-0">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="OraganizationName" class="form-label">Orgianization's Name </label>
                                                    <input type="text" class="form-control  form-control-lg @error('OraganizationName') is-invalid @enderror" value="{{ old('OraganizationName') }}" id="OraganizationName" name="OraganizationName" >
                                                    @error('OraganizationName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3 position-relative">
                                                    <label for="Position" class="form-label">Position </label>
                                                    <input type="text" class="form-control  form-control-lg @error('Position') is-invalid @enderror" value="{{ old('Position') }}" id="Position" name="Position" >
                                                    @error('Position')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                        <div class="mb-3 position-relative">
                                                            <label for="OrganizationStartDate" class="form-label">Start Date </i></label>
                                                            <div class="input-group " id="example-date-input">

                                                                <input class="form-control form-select-lg @error('OrganizationStartDate') is-invalid @enderror" value="{{ old('OrganizationStartDate') }}" type="date" id="example-date-input" name="OrganizationStartDate" id="OrganizationStartDate" >
                                                                @error('OrganizationStartDate')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror

                                                            </div>
                                                        </div>

                                                    </div>            
                                                     <div class="col-md-4 ">
                                                        <div class="mb-3 position-relative">
                                                            <label for="OrganizationEndDate" class="form-label">End Date </label>
                                                            <div class="input-group " id="example-date-input">

                                                                <input class="form-control form-select-lg @error('OrganizationEndDate') is-invalid @enderror" value="{{ old('OrganizationEndDate') }}" type="date" id="example-date-input" name="OrganizationEndDate" id="OrganizationEndDate" >
                                                                @error('OrganizationEndDate')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror

                                                            </div>
                                                        </div>

                                                    </div>
                                            <!-- <div class="col-md-4">
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
                                            </div> -->
                                            <!-- <div class="col-md-4">
                                                <div class="row mb-3 position-relative">
                                                    <label for="MaritalStatus" class="form-label">Marital Status <i class="mdi mdi-asterisk text-danger"></i></label>
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
                                                    <label for="SpuoseName" class="form-label SpuoseName">Spuose's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control  form-control-lg @error('SpuoseName') is-invalid @enderror" value="{{ old('SpuoseName') }}" id="SpuoseName" name="SpuoseName">
                                                    @error('SpuoseName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                         <div class="col-md-4">
                                                <label for="WorkExperienceLetter" class="form-label">Work Experience Letter</label>
                                                <input type="file" class="my-pond @error('WorkExperienceLetter') is-invalid @enderror" value="{{ old('WorkExperienceLetter') }}" name="WorkExperienceLetter" id="WorkExperienceLetter" />
                                                @error('WorkExperienceLetter')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Resume" class="form-label">Updated Resume</label>
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

                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <a onclick="education();" class="btn text-muted d-none d-sm-inline-block btn-link">
                                            <i class="mdi mdi-arrow-left me-1"></i> Back to Education </a>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="text-end">
                                            <a onclick="documents();" class="btn btn-success">
                                                Next </a>
                                        </div>
                                    </div> 
                                </div> 
                            </div>

                            <!-- <div class="tab-pane fade" id="v-pills-family" role="tabpanel" aria-labelledby="v-pills-family-tab">
                                <div class="card shadow-none border mb-0">
                                    <div class="card-body">

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
                                                <div class="row mb-3 position-relative">
                                                    <label for="MaritalStatus" class="form-label">Marital Status <i class="mdi mdi-asterisk text-danger"></i></label>
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
                                                    <label for="SpuoseName" class="form-label SpuoseName">Spuose's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control  form-control-lg @error('SpuoseName') is-invalid @enderror" value="{{ old('SpuoseName') }}" id="SpuoseName" name="SpuoseName">
                                                    @error('SpuoseName')
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
                                        </div>
                                        <div class="row">
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

                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <a onclick="address();" class="btn text-muted d-none d-sm-inline-block btn-link">
                                            <i class="mdi mdi-arrow-left me-1"></i> Back to Address and Contact </a>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="text-end">
                                            <a onclick="documents();" class="btn btn-success">
                                                Proceed to Documents </a>
                                        </div>
                                    </div> 
                                </div> 
                            </div> -->
                            <div class="tab-pane fade" id="v-pills-document" role="tabpanel" aria-labelledby="v-pills-document-tab">
                                <div class="card shadow-none border mb-0">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="WhyChosenPersonalStatement" class="form-label">Please indicate why you have chosen these particular departments and your knowledge about these departments. <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <textarea id="textarea" class="form-control @error('WhyChosenPersonalStatement') is-invalid @enderror" maxlength="2205" rows="10"   value="{{ old('WhyChosenPersonalStatement') }}" required name="WhyChosenPersonalStatement" id="WhyChosenPersonalStatement" required></textarea>
                                                <!-- <input type="textarea" class="my-pond @error('Tazkira') is-invalid @enderror" value="{{ old('Tazkira') }}" name="Tazkira" id="Tazkira" /> -->
                                                @error('WhyChosenPersonalStatement')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <label for="WhyChosenTHisCountryPersonalStatement" class="form-label">Please specify why you decided to come to Malaysia and Al-Bukhary International University for study and indicate the reason why you consider yourself eligible for a tuition exemption.  <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <textarea id="textarea" class="form-control @error('WhyChosenTHisCountryPersonalStatement') is-invalid @enderror" maxlength="2205" rows="10"   value="{{ old('WhyChosenTHisCountryPersonalStatement') }}" required name="WhyChosenTHisCountryPersonalStatement" id="WhyChosenTHisCountryPersonalStatement" required></textarea>
                                                <!-- <input type="textarea" class="my-pond @error('Tazkira') is-invalid @enderror" value="{{ old('Tazkira') }}" name="Tazkira" id="Tazkira" /> -->
                                                @error('WhyChosenTHisCountryPersonalStatement')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <label for="PlanAfterGraduationPersonalStatement" class="form-label">What are your plans for after graduation? <i class="mdi mdi-asterisk text-danger"></i></label>
                                                <textarea id="textarea" class="form-control @error('PlanAfterGraduationPersonalStatement') is-invalid @enderror" maxlength="2205" rows="10"   value="{{ old('PlanAfterGraduationPersonalStatement') }}" required name="PlanAfterGraduationPersonalStatement" id="PlanAfterGraduationPersonalStatement" required></textarea>
                                                <!-- <input type="textarea" class="my-pond @error('Tazkira') is-invalid @enderror" value="{{ old('Tazkira') }}" name="Tazkira" id="Tazkira" /> -->
                                                @error('PlanAfterGraduationPersonalStatement')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                        <div class="col-md-4">
                                                     <div class="mb-3 position-relative">
                                                    <label for="ScholarshipType_ID" class="form-label">Scholarship Type<i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select ScholarshipType form-select-lg @error('ScholarshipType_ID') is-invalid @enderror" value="{{ old('ScholarshipType_ID') }}" required name="ScholarshipType_ID" id="ScholarshipType_ID">
                                                            <option value="">Select Your Scholarship Type</option>
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

                                            </div>
                                            <div class="col-md-4">
                                                     <div class="mb-3 position-relative">
                                                    <label for="Scholarship_ID" class="form-label">Avaliable Scholarships<i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select Scholarship form-select-lg @error('Scholarship_ID') is-invalid @enderror" value="{{ old('Scholarship_ID') }}" required name="Scholarship_ID" id="Scholarship_ID">
                                                          
                                                            <!-- @foreach($familystatus as $familystatu)
                                                            <option value="{{ $familystatu -> id}}">{{ $familystatu -> Name}}</option>

                                                            @endforeach -->
                                                        </select>
                                                        @error('Scholarship_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                 
                                        </div>
                                        <div class="row mt-4">
                                        <div class="col-md-4">
                                                     <div class="mb-3 position-relative">
                                                    <label for="PrefernceOneScholarshipModule_ID" class="form-label">First Preference <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select ScholarshipModule form-select-lg @error('PrefernceOneScholarshipModule_ID') is-invalid @enderror" value="{{ old('PrefernceOneScholarshipModule_ID') }}" required name="PrefernceOneScholarshipModule_ID" id="PrefernceOneScholarshipModule_ID">
                                                           
                                                            <!-- @foreach($familystatus as $familystatu)
                                                            <option value="{{ $familystatu -> id}}">{{ $familystatu -> Name}}</option>

                                                            @endforeach -->
                                                        </select>
                                                        @error('PrefernceOneScholarshipModule_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                     <div class="mb-3 position-relative">
                                                    <label for="PrefernceTwoScholarshipModule_ID" class="form-label">Second Preference <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select ScholarshipModule form-select-lg @error('PrefernceTwoScholarshipModule_ID') is-invalid @enderror" value="{{ old('PrefernceTwoScholarshipModule_ID') }}" required name="PrefernceTwoScholarshipModule_ID" id="PrefernceTwoScholarshipModule_ID">
                                                           
                                                            <!-- @foreach($familystatus as $familystatu)
                                                            <option value="{{ $familystatu -> id}}">{{ $familystatu -> Name}}</option>

                                                            @endforeach -->
                                                        </select>
                                                        @error('PrefernceTwoScholarshipModule_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                     <div class="mb-3 position-relative">
                                                    <label for="PrefernceThreeScholarshipModule_ID" class="form-label">Third Preference <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select ScholarshipModule form-select-lg @error('PrefernceThreeScholarshipModule_ID') is-invalid @enderror" value="{{ old('PrefernceThreeScholarshipModule_ID') }}" required name="PrefernceThreeScholarshipModule_ID" id="PrefernceThreeScholarshipModule_ID">
                                                           
                                                            <!-- @foreach($familystatus as $familystatu)
                                                            <option value="{{ $familystatu -> id}}">{{ $familystatu -> Name}}</option>

                                                            @endforeach -->
                                                        </select>
                                                        @error('PrefernceThreeScholarshipModule_ID')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                      
                                        </div>
                                        <div class="row mt-4">
                                        <div class="col-md-12">
                                        <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="formCheck1" required>
                                <label class="form-check-label" for="formCheck1">
                                I hereby confirm all the information provided by me is correct and true to the best of my knowledge. I agree to inform Qamar Foundation if there is any change to the information provided in this application while I am studying at Al-Bukhary International University. I also certify that Qamar Foundation reserves the right to vary or reverse any decision about my admission to Al-Bukhary International University if the information given by myself is incorrect and untrue. I also consent to the collection, processing, and retention by the Qamar Foundation of my data.
                                </label>
                            </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <a onclick="work();" class="btn text-muted d-none d-sm-inline-block btn-link">
                                            <i class="mdi mdi-arrow-left me-1"></i> Back to Work Experience </a>
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="text-end">
                                            <button class="btn btn-danger" onclick="personal();" type="submit">Submit </button>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end row -->

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
    const inputSchoolDiploma = document.querySelector('input[name="SchoolDiploma"]');

    // Get a reference to the file input element
    const inputSchoolTranscript = document.querySelector('input[name="SchoolTranscript"]');  
    
    // Get a reference to the file input element
    const inputEnglishDiploma = document.querySelector('input[name="EnglishDiploma"]');

    // Get a reference to the file input element
    const inputWorkExperienceLetter = document.querySelector('input[name="WorkExperienceLetter"]');

    
    // Get a reference to the file input element
    const inputResume = document.querySelector('input[name="Resume"]');



    // Create a FilePond instance
    const Profile = FilePond.create(inputProfile, {
        labelIdle:     'Drag & Drop your Profile Picture or <span class="filepond--label-action"> Browse </span>'
,


    });


    Profile.setOptions({
        server: {

            url: '../Scholarship',
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

    // Create a FilePond instance
    const Tazkira = FilePond.create(inputTazkira, {
        labelIdle: 'Drag & Drop your Tazkira or <span class="filepond--label-action"> Browse </span>',
        acceptedFileTypes: ['application/pdf', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Scholarship',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });




        // Create a FilePond instance
        const SchoolDiploma = FilePond.create(inputSchoolDiploma, {
        labelIdle:     'Drag & Drop your Scholl Diploma or <span class="filepond--label-action"> Browse </span>'
,
        acceptedFileTypes: ['application/pdf', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Scholarship',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });

        // Create a FilePond instance
        const SchoolTranscript = FilePond.create(inputSchoolTranscript, {
        labelIdle: 'Drag & Drop your School Transcript or <span class="filepond--label-action"> Browse </span>',
        acceptedFileTypes: ['application/pdf', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Scholarship',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });

        // Create a FilePond instance
        const EnglishDiploma = FilePond.create(inputEnglishDiploma, {
        labelIdle: 'Drag & Drop your English Diploma or <span class="filepond--label-action"> Browse </span>',
        acceptedFileTypes: ['application/pdf', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Scholarship',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });

        // Create a FilePond instance
        const WorkExperienceLetter = FilePond.create(inputWorkExperienceLetter, {
        labelIdle:'Drag & Drop your Work Experience letter or <span class="filepond--label-action"> Browse </span>',
        acceptedFileTypes: ['application/pdf', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Scholarship',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });


        // Create a FilePond instance
        const Resume = FilePond.create(inputResume, {
        labelIdle: 'Drag & Drop your Resume or <span class="filepond--label-action"> Browse </span>',
        acceptedFileTypes: ['application/pdf', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '../Scholarship',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });


    $(document).ready(function() {
        $('.CurrentProvince').on('change', function() {
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
                            $('.CurrentDistrict').empty();
                            //  $('.District').append('<option value="None" hidden>All</option>'); 
                            $.each(data, function(key, course) {
                                $('select[name="CurrentDistrict_ID"]').append('<option value="' + course.id + '">' + course.Name + '</option>');
                            });
                        } else {
                            $('.CurrentDistrict').empty();
                        }
                    }
                });
            } else {
                $('.CurrentDistrict').empty();
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
                $('.SchoolDistrict').empty();
            }
        });
    });

    $(document).ready(function() {
        $('.ScholarshipType').on('change', function() {
            var dID = $(this).val();
            if (dID) {
                $.ajax({
                    url: '/GetScholarship/' + dID,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('.Scholarship').empty();
                             $('.Scholarship').append('<option value="" hidden>Select Your Scholarship</option>'); 
                            $.each(data, function(key, course) {
                                $('select[name="Scholarship_ID"]').append('<option value="' + course.id + '">' + course.ScholarshipName + '</option>');
                            });
                        } else {
                            $('.Scholarship').empty();
                        }
                    }
                });
            } else {
                $('.Scholarship').empty();
            }
        });
    });

    $(document).ready(function() {
        $('.Scholarship').on('change', function() {
            var dID = $(this).val();
            if (dID) {
                $.ajax({
                    url: '/GetScholarshipModule/' + dID,
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('.ScholarshipModule').empty();
                             $('.ScholarshipModule').append('<option value="" hidden>Select Your Scholarship Module</option>'); 
                            $.each(data, function(key, course) {
                                $('select[name="PrefernceOneScholarshipModule_ID"]').append('<option value="' + course.id + '">' + course.ModuleName + '</option>');
                            });
                            $.each(data, function(key, course) {
                                $('select[name="PrefernceTwoScholarshipModule_ID"]').append('<option value="' + course.id + '">' + course.ModuleName + '</option>');
                            });
                            $.each(data, function(key, course) {
                                $('select[name="PrefernceThreeScholarshipModule_ID"]').append('<option value="' + course.id + '">' + course.ModuleName + '</option>');
                            });
                        } else {
                            $('.ScholarshipModule').empty();
                        }
                    }
                });
            } else {
                $('.ScholarshipModule').empty();
            }
        });
    });

    function personal() {
        document.getElementById("v-pills-personal-tab").click();
    }

    function address() {
        document.getElementById("v-pills-address-tab").click();
    }
    function education() {
        document.getElementById("v-pills-education-tab").click();
    }
    function work() {
        document.getElementById("v-pills-work-tab").click();
    }

    function familys() {
        document.getElementById("v-pills-family-tab").click();
    }

    function documents() {
        document.getElementById("v-pills-document-tab").click();
    }
</script>
@endsection