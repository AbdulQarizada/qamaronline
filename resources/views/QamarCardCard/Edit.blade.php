@extends('layouts.master-layouts')

@section('title') Edit Qamar Care Card @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

 
@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Qamar Care / Edit Qamar Care Card @endslot
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
                      <blockquote class="blockquote border-info  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">EDIT CARE CARD</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>



<form class="needs-validation"  action="{{route('UpdateQamarCareCard', [$data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
                    @method('PUT')
                        @csrf
     

<div class="row">
    <div class="col-lg-12">
    <div class="card ">
    <h4 class="card-header bg-info text-white ">PEROSNAL INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                 
                 <div class="row">
                    <div class="col-md-10">
                      <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="FirstName" class="form-label ">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="FirstName" name="FirstName" value="{{$data -> FirstName}}"
                                          required>
                              
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="LastName" class="form-label ">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="LastName" name="LastName" value="{{$data -> LastName}}"
                                          required>
                               
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="TazkiraID" class="form-label ">Tazkira ID</label>
                                    <input type="number" class="form-control form-control-lg" id="TazkiraID" name="TazkiraID" value="{{$data -> TazkiraID}}"
                                          required>
                                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="QCC" class="form-label ">Qamar Care Card Number</label>
                                    <div class="hstack gap-3">
                                    <label class="form-label ">QCC-</label>
                                    <input class="form-control form-control-lg me-auto" type="text"  name="QCC" id="QCC"  value="{{$data -> QCC}}" readonly>
                                    <button type="button" class="btn btn-lg btn-outline-danger" onclick="Random();"><i class=" bx bxs-magic-wand  font-size-16 align-middle"></i> </button>
                                
                                 </div>
                                </div>
                            </div>
                            
                     </div>

                    </div>
                    <div class="col-md-2 justify-content-center">
                               <label for="Profile" class="form-label"></label>
                                <input type="file" class="my-pond" id="Profile" name="Profile" value="{{ $data -> Profile }}"  />
                          
                    </div>
                </div>

                        <div class="row">
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="DOB" class="form-label">Date of Birth</label>
                                    <div class="input-group" id="datepicker2">
                                      
                                    <input type="text" class="form-control form-control-lg" 
                                    data-date-format="dd M, yyyy" data-date-container='#datepicker2'
                                    data-provide="datepicker" data-date-autoclose="true" name="DOB" id="DOB"  value="{{$data -> DOB}}" required>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Gender" class="form-label">Gender</label>
                                    <select class="form-select  form-select-lg" id="Gender"  name="Gender"  value="{{$data -> Gender}}" required>
                                    <option value="Male">Male</option>
                                    <option>Female</option>
                                 </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Language" class="form-label">Language</label>
                                    <select class="form-select  form-select-lg" required id="Language" name="Language"  value="{{$data -> Language}}">
                                    <option value="Pashto">Pashto</option>
                                    <option value="Dari">Dari</option>

                                    </select>
                                </div>
                            </div>
                   
                        </div>
                    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="CurrentJob" class="form-label">Current Job</label>
                                    <input type="text" class="form-control  form-control-lg" id="CurrentJob" name="CurrentJob" value="{{$data -> CurrentJob}}"
                                          required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="FutureJob" class="form-label">What type of job you can do?</label>
                                    <input type="text" class="form-control  form-control-lg" id="FutureJob"  name="FutureJob" value="{{$data -> FutureJob}}"
                                         required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="EducationLevel" class="form-label">Education Level</label>
                                    <select class="form-select  form-select-lg" required name="EducationLevel"  id="EducationLevel" value="{{$data -> EducationLevel}}">
                                    <option value="NoEducation">No Education</option>
                                    <option value="Bachularate">Bachularate</option>
                                     <option value="University">University Graduate</option>

                               </select>
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
    <h4 class="card-header bg-info text-white ">ADDRESS AND CONTACT</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                 
            
                        <div class="row">
                         
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="PrimaryNumber" class="form-label">Primary Number</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control  form-control-lg" id="PrimaryNumber" name="PrimaryNumber" value="{{$data -> PrimaryNumber}}"
                                             aria-describedby="PrimaryNumber"
                                            required>
                                    </div>
                                </div>
                            </div>
                                     
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="SecondaryNumber" class="form-label">Secondary Number</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control  form-control-lg" id="SecondaryNumber" name="SecondaryNumber" value="{{$data -> SecondaryNumber}}"
                                            aria-describedby="SecondaryNumber"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="EmergencyNumber" class="form-label">Emergency Number</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control  form-control-lg" id="EmergencyNumber" name="EmergencyNumber" value="{{$data -> EmergencyNumber}}"
                                             aria-describedby="EmergencyNumber"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Province" class="form-label">Province</label>
                                    <select class="form-select  form-select-lg" required name="Province" id="Province" value="{{$data -> Province}}">
                                    <option value="Kabul">Kabul</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="District" class="form-label">District</label>
                                    <input type="text" class="form-control  form-control-lg" id="District"  name="District" value="{{$data -> District}}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Village" class="form-label">Village</label>
                                    <input type="text" class="form-control  form-control-lg" id="Village"  name="Village" value="{{$data -> Village}}"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                                       
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Email" class="form-label">Email</label>
                                    <div class="input-group">
                                      
                                        <input type="email" class="form-control  form-control-lg" id="Email" name="Email" value="{{$data -> Email}}"
                                            aria-describedby="Email"
                                            required>
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
    <h4 class="card-header bg-info text-white ">FAMILY AND INCOME INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="FatherName" class="form-label">Father's Name</label>
                                    <input type="text" class="form-control  form-control-lg" id="FatherName" name="FatherName" value="{{$data -> FatherName}}"
                                          required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="SpuoseName" class="form-label">Spuose's Name</label>
                                    <input type="text" class="form-control  form-control-lg" id="SpuoseName"  name="SpuoseName" value="{{$data -> SpuoseName}}"
                                         required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="EldestSonAge" class="form-label">Eldest Son Age</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg" id="EldestSonAge" name="EldestSonAge" value="{{$data -> EldestSonAge}}"
                                             aria-describedby="EldestSonAge"
                                            required>
                                    </div>
                                </div>
                            </div>
                     
                        </div>
                        <div class="row">
                         
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="MonthlyFamilyIncome" class="form-label">Monthly Family Income</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg" id="MonthlyFamilyIncome" name="MonthlyFamilyIncome" value="{{$data -> MonthlyFamilyIncome}}"
                                            aria-describedby="MonthlyFamilyIncome"
                                            required>
                                    </div>
                                </div>
                            </div>
                                     
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="MonthlyFamilyExpenses" class="form-label">Monthly Family Expenses</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg" id="MonthlyFamilyExpenses" name="MonthlyFamilyExpenses" value="{{$data -> MonthlyFamilyExpenses}}"
                                             aria-describedby="MonthlyFamilyExpenses"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="NumberFamilyMembers" class="form-label">Number of  Family Members</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg" id="NumberFamilyMembers" name="NumberFamilyMembers" value="{{$data -> NumberFamilyMembers}}"
                                             aria-describedby="NumberFamilyMembers"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="IncomeStreem" class="form-label">Income Streem</label>
                                    <div class="input-group">
                                      
                                        <input type="text" class="form-control form-control-lg" id="IncomeStreem" name="IncomeStreem" value="{{$data -> IncomeStreem}}"
                                             aria-describedby="IncomeStreem"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="LevelPoverty" class="form-label">Level Of Poverty</label>
                                    <select class="form-select form-select-lg" required name="LevelPoverty" id="LevelPoverty" value="{{$data -> LevelPoverty}}">
                                   <option value="Poorest">Poorest</option>
                           </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltip04" class="form-label">District</label>
                                    <input type="text" class="form-control" id="validationTooltip04" placeholder="District" name="District"
                                        required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid state.
                                    </div>
                                </div>
                            </div> -->
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
    <h4 class="card-header bg-info text-white ">DOCUMENTS</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                         <a href="{{Storage::url('app/public/assets/uploads/Tazkiras/'. $data -> Tazkira)}}">Tazkira</a>
                        <div class="row">
                          <div class="col-md-4">
                               <label for="Tazkira" class="form-label">Tazkira</label>
                                <input type="file" class="my-pond" name="Tazkira" id="Tazkira" />
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

<button class="btn btn-success btn-lg" type="submit">Update </button>
<a class="btn btn-danger btn-lg" href="{{route('IndexQamarCareCard')}}">Cancel</a>
</div>





</form>

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

<script src="{{ URL::asset('/assets/libs/filepond/js/filepond.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-image-preview.min.js') }}"></script>


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

      function Random() {
        var rnd = Math.floor(Math.random() * 100000000);
        document.getElementById('QCC').value = rnd;
    };
</script>
@endsection