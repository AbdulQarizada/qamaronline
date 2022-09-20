@extends('layouts.master-layouts')

@section('title') ADD QAMAR CARE CARD @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

 
@endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Qamar Care / Add Qamar Care Card @endslot
@slot('title')   @endslot
@endcomponent

<div class="row">
        <div class="col-12">
           <a href="{{route('AllQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>


     <div class="row">
        <div class="col-12">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-primary  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">ADD CARE CARD</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>



<form class="needs-validation"  action="{{route('CreateQamarCareCard')}}" method="POST" enctype="multipart/form-data" novalidate>
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
                                    <input type="text" class="form-control form-control-lg @error('FirstName') is-invalid @enderror" value="{{ old('FirstName') }}"  id="FirstName" name="FirstName"
                                          required>
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
                                    <input type="text" class="form-control form-control-lg @error('LastName') is-invalid @enderror" value="{{ old('LastName') }}" id="LastName" name="LastName"
                                          required>
                                          @error('LastName')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                           @enderror
                               
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="TazkiraID" class="form-label ">Tazkira ID <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <input type="number" class="form-control form-control-lg @error('TazkiraID') is-invalid @enderror" value="{{ old('TazkiraID') }}" id="TazkiraID" name="TazkiraID" max="999999999"
                                          required>
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
                                    <input class="form-control form-control-lg me-auto @error('QCC') is-invalid @enderror" value="{{ old('QCC') }}" type="text"  name="QCC" id="QCC" readonly>
                                    <!-- <button type="button" class="btn btn-lg btn-outline-danger" onclick="Random();"><i class=" bx bxs-magic-wand  font-size-16 align-middle"></i> </button> -->
                                    @error('QCC')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                           @enderror
                                 </div>
                              </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="mb-3 position-relative">
                                    <label for="DOB" class="form-label">Date of Birth <i class="mdi mdi-asterisk text-danger"></i></label>
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
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="Gender" class="form-label">Gender <i class="mdi mdi-asterisk text-danger"></i></label>
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
                     </div>

                    </div>
                    <div class="col-md-2 justify-content-center">
                               <!-- <label for="Profile" class="form-label"> <i class="mdi mdi-asterisk text-danger"></i></label> -->
                                <input type="file" class="my-pond @error('Profile') is-invalid @enderror" value="{{ old('Profile') }}" id="Profile" name="Profile"  />
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
                                    <label for="Country" class="form-label">Country <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <select class="form-select  form-select-lg  @error('Country') is-invalid @enderror" value="{{ old('Country') }}" required id="Country" name="Country">
                                    <option value="Afghanistan">Afghanistan</option>
                                 

                                    </select>
                                    @error('Country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Tribe" class="form-label">Tribe <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('Tribe') is-invalid @enderror" value="{{ old('Tribe') }}" required id="Tribe" name="Tribe">
                                    <option>Select Option</option>
                                    
                                    <option value="Pashtoon">Pashtoon</option>
                                    <option value="Tajik">Tajik</option>
                                    <option value="Hazara">Hazara</option>
                                    <option value="Nooristani">Nooristani</option>
                                    <option value="Uzbak">Uzbak</option>
                                    <option value="Turkman">Turkman</option>
                                    <option value="Baloch">Baloch</option>
                                    

                                    </select>
                                    @error('Tribe')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Language" class="form-label">Language <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('Language') is-invalid @enderror" value="{{ old('Language') }}" required id="Language" name="Language">
                                    <option>Select Option</option>
                                    
                                    <option value="Pashto">Pashto</option>
                                    <option value="Dari">Dari</option>
                                    <option value="Pashai">Pashai</option>
                                    <option value="Nooristani">Nooristani</option>
                                    <option value="Uzbaki">Uzbaki</option>
                                    <option value="Turkmani">Turkmani</option>
                                    <option value="Balochi">Balochi</option>
                                    

                                    </select>
                                    @error('Language')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
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
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="CurrentJob" class="form-label">Current Job <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('CurrentJob') is-invalid @enderror" value="{{ old('CurrentJob') }}" required name="CurrentJob"  id="CurrentJob">
                                    <option>Select Option</option>
                                    
                                    <option value="Jobless">Jobless</option>
                                    <option value="Cooking">Cooking</option>
                                    <option value="SecurityGuard">Security Guard</option>
                                     <option value="Driving">Driving</option>
                                     <option value="Cleaning">Cleaning</option>
                                     <option value="ShopKeeping">Shop Keeping</option>
                                     <option value="HouseWife">House Wife</option>



                               </select>
                               @error('CurrentJob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="FutureJob" class="form-label">What type of job you can do? <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('FutureJob') is-invalid @enderror" value="{{ old('FutureJob') }}" required name="FutureJob"  id="FutureJob">
                                    <option>Select Option</option>
                                    
                                    <option value="Cooking">Cooking</option>
                                    <option value="SecurityGuard">Security Guard</option>
                                     <option value="Driving">Driving</option>
                                     <option value="Cleaning">Cleaning</option>
                                     <option value="ShopKeeping">Shop Keeping</option>


                               </select>
                               @error('FutureJob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="EducationLevel" class="form-label">Education Level <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('EducationLevel') is-invalid @enderror" value="{{ old('EducationLevel') }}" required name="EducationLevel"  id="EducationLevel">
                                    <option>Select Option</option>
                                    
                                    <option value="NoEducation">No Education</option>
                                    <option value="NoEducation">Only Read and Write</option>
                                    <option value="Bachularate">School</option>
                                     <option value="University">University Graduate</option>
                                     <option value="Master">Master</option>
                                     <option value="PhD">PhD</option>



                               </select>
                               @error('EducationLevel')
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
                                      
                                        <input type="number" class="form-control  form-control-lg @error('PrimaryNumber') is-invalid @enderror" value="{{ old('PrimaryNumber') }}" id="PrimaryNumber" name="PrimaryNumber" max="999999999"
                                             aria-describedby="PrimaryNumber"
                                            required>
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
                                      
                                        <input type="number" class="form-control  form-control-lg @error('SecondaryNumber') is-invalid @enderror" value="{{ old('SecondaryNumber') }}" id="SecondaryNumber" name="SecondaryNumber" max="999999999"
                                            aria-describedby="SecondaryNumber"
                                            >
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
                                    <label for="Email" class="form-label">Email</label>
                                    <div class="input-group">
                                      
                                        <input type="email" class="form-control  form-control-lg @error('Email') is-invalid @enderror" value="{{ old('Email') }}" id="Email" name="Email"
                                            aria-describedby="Email"
                                            >
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
                                    <label for="Province" class="form-label">Province <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">
                                    <select class="form-select  form-select-lg @error('Province') is-invalid @enderror" required name="Province" value="{{ old('Province') }}" id="Province">
                                    <option>Select Option</option>
                                     <option value="Badakhshan"> Badakhshan</option>
    <option value="Badghis"> Badghis</option>
    <option value="Baghlan"> Baghlan</option>
    <option value="Balkh"> Balkh</option>
    <option value="Bamyan"> Bamyan</option>
   <option value="Daykundi">  Daykundi</option>
   <option value="Farah">  Farah</option>
    <option value="Faryab"> Faryab</option>
    <option value="Ghazni"> Ghazni</option>
    <option value="Ghor"> Ghor</option>
    <option value="Helmand"> Helmand</option>
    <option value="Herat"> Herat</option>
   <option value="Jowzjan">  Jowzjan</option>
    <option value="Kabul"> Kabul</option>
    <option value="Kandahar"> Kandahar</option>
   <option value="Kapisa">  Kapisa</option>
   <option value="Khost">  Khost</option>
  <option value="Kunar">   Kunar</option>
  <option value="Kunduz">   Kunduz</option>
   <option value="Laghman">  Laghman</option>
    <option value="Logar"> Logar</option>
   <option value="Nangarhar">  Nangarhar</option>
    <option value="Nimruz"> Nimruz</option>
    <option value="Nuristan"> Nuristan</option>
   <option value="Paktia">  Paktia</option>
    <option value="Paktika"> Paktika</option>
    <option value="Panjshir"> Panjshir</option>
    <option value="Parwan"> Parwan</option>
   <option value="Samangan">  Samangan</option>
   <option value="Sar-e Pol">  Sar-e Pol</option>
    <option value="Takhar"> Takhar</option>
   <option value="Urozgan"> Urozgan</option>
    <option value="Wardak"> Wardak</option>
    <option value="Zabul"> Zabul</option>

                                    </select>
                                    @error('Province')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                               </div>
                                </div>
                            </div>
                            <div class="col-md-4">
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
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Village" class="form-label">Village <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <input type="text" class="form-control  form-control-lg @error('Village') is-invalid @enderror" value="{{ old('Village') }}" id="Village"  name="Village"
                                        required>
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
                                    <label for="RelativeName" class="form-label">Relative Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">
                                      
                                        <input type="text" class="form-control  form-control-lg @error('RelativeName') is-invalid @enderror" value="{{ old('RelativeName') }}" id="RelativeName" name="RelativeName"
                                            aria-describedby="Email"
                                            required>
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
                                    <label for="RelativeRelationship" class="form-label">Relationship <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('RelativeRelationship') is-invalid @enderror" value="{{ old('RelativeRelationship') }}" required name="RelativeRelationship"  id="RelativeRelationship">
                                    <option>Select Option</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                     <option value="Brother">Brother</option>
                                     <option value="Sister">Sister</option>
                                     <option value="Uncle">Uncle</option>
                                     <option value="Aunt">Aunt</option>
                                  </select>
                                  @error('RelativeRelationship')
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
                                      
                                        <input type="number" class="form-control  form-control-lg @error('RelativeNumber') is-invalid @enderror" value="{{ old('RelativeNumber') }}" id="RelativeNumber" name="RelativeNumber" max="999999999"
                                             aria-describedby="RelativeNumber"
                                            required>
                                            @error('RelativeNumber')
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
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="FatherName" class="form-label">Father's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <input type="text" class="form-control  form-control-lg @error('FatherName') is-invalid @enderror" value="{{ old('FatherName') }}" id="FatherName" name="FatherName"
                                          required>
                                          @error('FatherName')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="SpuoseName" class="form-label">Spuose's Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <input type="text" class="form-control  form-control-lg @error('SpuoseName') is-invalid @enderror" value="{{ old('SpuoseName') }}" id="SpuoseName"  name="SpuoseName"
                                         required>
                                         @error('SpuoseName')
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
                                      
                                        <input type="number" class="form-control form-control-lg @error('EldestSonAge') is-invalid @enderror" value="{{ old('EldestSonAge') }}" id="EldestSonAge" name="EldestSonAge" max="150"
                                             aria-describedby="EldestSonAge"
                                            required>
                                            @error('EldestSonAge')
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
                                    <label for="MonthlyFamilyIncome" class="form-label">Monthly Family Income <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">
                                    <div class="input-group-text">&#1547;</div>
                                       <input type="number" class="form-control form-control-lg @error('MonthlyFamilyIncome') is-invalid @enderror" value="{{ old('MonthlyFamilyIncome') }}" id="MonthlyFamilyIncome" name="MonthlyFamilyIncome" max="999999"
                                            aria-describedby="MonthlyFamilyIncome"
                                            required>
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
                                        <input type="number" class="form-control form-control-lg @error('MonthlyFamilyExpenses') is-invalid @enderror" value="{{ old('MonthlyFamilyExpenses') }}" id="MonthlyFamilyExpenses" name="MonthlyFamilyExpenses" max="999999"
                                             aria-describedby="MonthlyFamilyExpenses"
                                            required>
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
                                    <label for="NumberFamilyMembers" class="form-label">Number of  Family Members <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg @error('NumberFamilyMembers') is-invalid @enderror" value="{{ old('NumberFamilyMembers') }}" id="NumberFamilyMembers" name="NumberFamilyMembers" max="40"
                                             aria-describedby="NumberFamilyMembers"
                                            required>
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
                                    <label for="IncomeStreem" class="form-label">Income Streem <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">
                                    <select class="form-select form-select-lg @error('IncomeStreem') is-invalid @enderror" value="{{ old('IncomeStreem') }}" required name="IncomeStreem" id="IncomeStreem">
                                    <option>Select Option</option>
                                    <option value="Shop">Shop</option>
                                    <option value="Orphan">Fields</option>
                              </select>
                                            @error('IncomeStreem')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="FamilyStatus" class="form-label">Family Status <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">

                                    <select class="form-select form-select-lg @error('FamilyStatus') is-invalid @enderror" value="{{ old('FamilyStatus') }}" required name="FamilyStatus" id="FamilyStatus">
                                    <option>Select Option</option>
                                    <option value="Poor">Poor</option>
                                    <option value="Orphan">Orphan</option>
                                    <option value="Widow">Widow</option>
                                    <option value="Handicap">Handicap</option>
                                    <option value="In debt">In debt</option>
                                    <option value="Low Income">Low Income</option>
                              </select>
                              @error('FamilyStatus')
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
                                                        <input type="hidden" class="rating @error('LevelPoverty') is-invalid @enderror" value="{{ old('LevelPoverty') }}" data-filled="mdi mdi-star text-warning " data-empty="mdi mdi-star-outline text-muted" name="LevelPoverty" id="LevelPoverty"/>
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


<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

<!-- Bootstrap rating js -->
<script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js') }} "></script>

<script src="{{ URL::asset('/assets/js/pages/rating-init.js') }}"></script>


<script>

	  FilePond.registerPlugin(FilePondPluginImagePreview);



	// Get a reference to the file input element
	  const inputProfile = document.querySelector('input[name="Profile"]');

      // Get a reference to the file input element
	  const inputTazkira = document.querySelector('input[name="Tazkira"]');

      

	  // Create a FilePond instance
	  const Profile = FilePond.create(inputProfile,
		  {
			  labelIdle: 'Profile <span class="bx bx-upload"></span >',


		  });


          	  // Create a FilePond instance
	  const Tazkira = FilePond.create(inputTazkira,
		  {
			  labelIdle: 'Click to upload Tazkira <span class="bx bx-upload"></span >',
              server:
			  {

				  url: '../Upload_Tazkira',
				  headers:
				  {
					  'X-CSRF-TOKEN': '{{ csrf_token() }}'
				  }

			  },
			  instantUpload: true,


		  });



          Profile.setOptions(
		  {
			  server:
			  {

				  url: '../Upload_Profile',
				  headers:
				  {
					  'X-CSRF-TOKEN': '{{ csrf_token() }}'
				  }

			  },
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



	  $(document).ready(function () {
		  $("#select1").change(function () {
			  var dID = $(this).val();
			  $.getJSON("/Lecturers/Courses/GetSubTabs/"+dID,
				  function (data) {
					  var select = $("#select2");
					  $("#select2").show();
					  select.empty();
					  select.append('<option>SelectOption</option>');
					  $.each(data, function (index, itemData) {

						  select.append($('<option/>', {
							  value: itemData.value,
							  text: itemData.text
						  }));
					  });
				  });
		  });
	  });


	  $(document).ready(function () {
		  $("#select2").change(function () {
			  var dID = $(this).val();
			  $.getJSON("/Lecturers/Courses/GetSubTabs/" + dID,
				  function (data) {
					  var select = $("#select3");
					  $("#select3").show();
					  select.empty();
					  select.append('<option>SelectOption</option>');
					  $.each(data, function (index, itemData) {
						  select.append($(
							  '<option/>', {
							  value: itemData.value,
							  text: itemData.text
						  }));
					  });
				  });
		  });
	  });

      $(document).ready(function () {
        var rnd = Math.floor(Math.random() * 100000000);
        document.getElementById('QCC').value = rnd;
    });
</script>
@endsection