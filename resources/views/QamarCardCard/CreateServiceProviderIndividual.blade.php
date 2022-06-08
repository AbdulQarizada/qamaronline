@extends('layouts.master-layouts')

@section('title') Service Provider @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

 
@endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Qamar Care / Service Provider @endslot
@slot('title')   @endslot
@endcomponent

<div class="row">
        <div class="col-12">
           <a href="{{route('ServiceProviderIndexQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>


     <div class="row">
        <div class="col-12">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-primary  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">SERVICE PROVIDER</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>



<form class="needs-validation"  action="{{route('CreateServiceProviderIndividual')}}" method="POST" enctype="multipart/form-data" novalidate>
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
                                    <label for="Province" class="form-label">Province</label>
                                    <div class="input-group">
                                    <select class="form-select  Province form-select-lg @error('Province') is-invalid @enderror" required name="Province" value="{{ old('Province') }}" id="Province">
                                    <option>Select Option</option>
                                    @foreach($provinces as $province)
                                    <option value="{{$province -> id}}">{{$province -> Name}}</option>
                                    @endforeach
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
                                    <label for="District" class="form-label">District</label>
                                    <div class="input-group">
                                    <select class="form-select District form-select-lg @error('District') is-invalid @enderror" required name="District" value="{{ old('District') }}" id="Province">
                                    

                                    </select>
                                    @error('District')
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
                                    <label for="CurrentJob" class="form-label">Current Job<i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">
                                      
                                        <input type="text" class="form-control  form-control-lg @error('CurrentJob') is-invalid @enderror" value="{{ old('CurrentJob') }}" id="CurrentJob" name="CurrentJob" 
                                             aria-describedby="CurrentJob"
                                            required>
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
                                    <label for="Profession" class="form-label">Profession<i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('Profession') is-invalid @enderror" value="{{ old('Profession') }}" required name="Profession"  id="Profession">
                                    <option>Select Option</option>
                                    <option value="Jobless">None</option>
                                    <option value="Cooking">Doctor</option>
                                    <option value="SecurityGuard">Engineer</option>
                                     <option value="Driving">Pharmacist</option>
                                     <option value="Cleaning">Shoopkeeper</option>


                               </select>
                               @error('Profession')
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
    <h4 class="card-header bg-primary text-white ">SERIVCE AND CONTACT</h4>

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
                                    <label for="ProvinceService" class="form-label">Province (Service)</label>
                                    <div class="input-group">
                                    <select class="form-select  ProvinceService form-select-lg @error('ProvinceService') is-invalid @enderror" required name="ProvinceService" value="{{ old('ProvinceService') }}" id="ProvinceService">
                                    <option>Select Option</option>
                                    @foreach($provinces as $province)
                                    <option value="{{$province -> id}}">{{$province -> Name}}</option>
                                    @endforeach
                                    </select>
                                    @error('ProvinceService')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                               </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="DistrictService" class="form-label">District (Service)</label>
                                    <div class="input-group">
                                    <select class="form-select DistrictService form-select-lg @error('DistrictService') is-invalid @enderror" required name="DistrictService" value="{{ old('DistrictService') }}" id="DistrictService">
                                    

                                    </select>
                                    @error('DistrictService')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                               @enderror
                               </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="ServiceType" class="form-label">Service Type</label>
                                    <div class="input-group " id="example-date-input">
                                  <select class="form-select select2 form-select-lg @error('ServiceType') is-invalid @enderror" required name="ServiceType" value="{{ old('ServiceType') }}" id="ServiceType">
                                        <option>Select</option>
                                        @foreach($servicetypes as $servicetype)
                                        @if($servicetype -> Parent_ID == null)
                                           <optgroup label="{{$servicetype -> Name}}">
                                            @foreach($servicetypes as $servicetypeSub)
                                            @if($servicetypeSub -> Parent_ID == $servicetype -> id )
                                           <option value="{{$servicetypeSub -> Name}}">{{$servicetypeSub -> Name}}</option>
                                           @endif
                                            @endforeach
                                           </optgroup>
                                        @endif
                                        @endforeach
                                    </select> 
                                    @error('ServiceType')
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
    <h4 class="card-header bg-primary text-white ">SERIVCE LOCATION AND TYPE</h4>

                <div class="card-body">
                   <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> 
                 
                    <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Province" class="form-label">Province <i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">
                                    <select class="form-select  form-select-lg @error('Province') is-invalid @enderror" required name="Province" value="{{ old('Province') }}" id="Province">
                                    <option>Select Option</option>

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
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Province" class="form-label">Service Type<i class="mdi mdi-asterisk text-danger"></i></label>
                                    <div class="input-group">
                                    <select class="form-select  form-select-lg @error('Province') is-invalid @enderror" required name="Province" value="{{ old('Province') }}" id="Province">
                                    <option>Select Option</option>

                                    </select>
                                    @error('Province')
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
    
</div> -->




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
</div>
<div> -->

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

				  url: '../ServiceProvider_Profile',
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


          $(document).ready(function() {
            $('.Province').on('change', function() {
               var dID = $(this).val();
               if(dID) {
                   $.ajax({
                       url: '/GetDistricts/'+dID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('.District').empty();
                            $('.District').append('<option hidden>Choose District</option>'); 
                            $.each(data, function(key, course){
                                $('select[name="District"]').append('<option value="'+ key +'">' + course.Name+ '</option>');
                            });
                        }else{
                            $('.District').empty();
                        }
                     }
                   });
               }else{
                 $('.District').empty();
               }
            });
            });

            $(document).ready(function() {
            $('.ProvinceService').on('change', function() {
               var dID = $(this).val();
               if(dID) {
                   $.ajax({
                       url: '/GetDistricts/'+dID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('.DistrictService').empty();
                            $('.DistrictService').append('<option hidden>Choose District</option>'); 
                            $.each(data, function(key, course){
                                $('select[name="DistrictService"]').append('<option value="'+ key +'">' + course.Name+ '</option>');
                            });
                        }else{
                            $('.DistrictService').empty();
                        }
                     }
                   });
               }else{
                 $('.DistrictService').empty();
               }
            });
            });



            $(document).ready(function () {
        var rnd = Math.floor(Math.random() * 100000000);
        document.getElementById('QCC').value = rnd;
    });
</script>
@endsection