@extends('layouts.master-layouts')

@section('title') Assign Services @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

 
@endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Qamar Care / Assign Services @endslot
@slot('title')   @endslot
@endcomponent

<div class="row">
        <div class="col-12">
           <a href="{{route('AssigningServiceQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>


     <!-- <div class="row">
        <div class="col-12">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-primary  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">ASSIGN SERVICE</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div> -->



<form class="needs-validation"  action="{{route('AssignServiceQamarCareCard')}}" method="POST" enctype="multipart/form-data" novalidate>
     @csrf
     
     <div class="row">
        <div class="col-lg-12">
            <div>
                <div>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover">
                           @foreach($datas as $data)
                         
                            <tbody>
                                <tr>
                                <td>
                                        <div>
                                            <img  class="rounded-circle avatar-lg" src="{{URL::asset('/uploads/QamarCareCard/Beneficiaries/Profiles/'.$data -> Profile)}}"
                                                alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FirstName}} {{$data -> LastName}}</a></h5>
                                        <p class="text-muted mb-0">QCC-{{$data -> QCC}}</p>
                                </td>
                                <td>
                                    
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"> TazkiraID</a></h5>
                                        <p class="text-muted mb-0">{{$data -> TazkiraID}}</p>
                                </td>
                                <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> Province}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> District}}</p> 
                               
                                    </div>
                                </td>
                                <td>    
                                      <div>
                                      <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$data -> PrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$data -> SecondaryNumber}}</p>
                                         <p class="text-muted mb-0 badge badge-soft-danger">{{$data -> RelativeNumber}}</p>
                                        </div>
                               </td> 
                               <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FamilyStatus}}</a></h5>
                                       @if( $data -> LevelPoverty == 1)
                                         <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-secondary font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>

                                       @endif
                                       @if( $data -> LevelPoverty == 2)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       @endif
                                       @if( $data -> LevelPoverty == 3)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       @endif
                                       @if( $data -> LevelPoverty == 4)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-warning font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       @endif
                                       @if( $data -> LevelPoverty == 5)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-warning font-size-16"></i>
                                         <i class="bx bxs-star text-warning font-size-18"></i>
                                         <i class="bx bxs-star text-warning font-size-20"></i>
                                       @endif
                                    </div>
                                </td>
                                <td>
                                @if( $data -> Created_By !="")

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> Created_By }}</a></h5>
                                    <p class="text-muted mb-0">Employee</p> 
                               
                                </div>
                                @endif
                                @if( $data -> Created_By =="")

                                   <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                    <p class="text-muted mb-0">Requested</p> 

                                  </div>
                                @endif
                                </td>
                                <td>
                                
                                <div class="avatar-lg ">
                                           @if( $data -> LevelPoverty == 1)
                                            <span class="avatar-title bg-danger rounded-circle display-6">20%</span>
                                            @endif
                                            @if( $data -> LevelPoverty == 2)
                                            <span class="avatar-title bg-danger rounded-circle display-6">40%</span>
                                            @endif
                                            @if( $data -> LevelPoverty == 3)
                                            <span class="avatar-title bg-danger rounded-circle display-6">60%</span>
                                            @endif
                                            @if( $data -> LevelPoverty == 4)
                                            <span class="avatar-title bg-danger rounded-circle display-6">80%</span>
                                            @endif
                                            @if( $data -> LevelPoverty == 5)
                                            <span class="avatar-title bg-danger rounded-circle font-size-24">100%</span>
                                            @endif
                                 </div>
                               
                                </td>
                                </tr>
                           
                        
                             
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-4">
   
        </div>
        <div class="col-8 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
           <!-- <a href="{{route('CreateQamarCareCard')}}" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">ADD SERVICE PROVIDER</a> -->
        </div>
     </div>
<div class="row">
    <div class="col-lg-12">
    <div class="card ">
    <h4 class="card-header bg-primary text-white "></h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                    <input type="text"  value="{{$data -> id }}" id="Assignee_ID" name="Assignee_ID" hidden />
      

                         

                        <div class="row">
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="RequestedService_ID" class="form-label">Requested Service</label>
                                    <div class="input-group " id="example-date-input">
                                  <select class="form-control RequestedService form-control-lg select2" id="RequestedService_ID" name="RequestedService_ID">
                                        <option value="None">Select</option>
                                        @foreach($servicetypes as $servicetype)
                                        @if($servicetype -> Parent_ID == null)
                                           <optgroup label="{{$servicetype -> Name}}">
                                            @foreach($servicetypes as $servicetypeSub)
                                            @if($servicetypeSub -> Parent_ID == $servicetype -> id )
                                           <option value="{{$servicetypeSub -> id}}">{{$servicetypeSub -> Name}}</option>
                                           @endif
                                            @endforeach
                                           </optgroup>
                                        @endif
                                        @endforeach
                                    </select> 
                                   
                                    </div>
                                </div>
                                
                            </div>
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Province_ID" class="form-label">Service Province</label>
                                    <div class="input-group">
                                    <select class="form-select  Province form-select-lg @error('Province_ID') is-invalid @enderror" required name="Province_ID" value="{{ old('Province_ID') }}" id="Province_ID">
                                    <option value="None">Select Province</option>
                                    @foreach($provinces as $province)
                                    <option value="{{$province -> id}}">{{$province -> Name}}</option>
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
                                    <label for="District_ID" class="form-label">Service District</label>
                                    <div class="input-group">
                                    <select class="form-select District form-select-lg @error('District_ID') is-invalid @enderror" required name="District_ID" value="{{ old('District_ID') }}" id="District_ID">
<!--                                     
                                    <option value="None">Select District</option>
                                    <option value="None">All</option> -->


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
                                    <label for="ServiceProvider_ID" class="form-label">Avalible Service Providers</label>
                                <select class="form-select ServiceProvider  form-select-lg  @error('ServiceProvider_ID') is-invalid @enderror" value="{{ old('ServiceProvider_ID') }}" required id="ServiceProvider_ID" name="ServiceProvider_ID">
                              </select>
                                    @error('ServiceProvider_ID')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                   @enderror
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="ServiceType" class="form-label">Service Type</label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('ServiceType') is-invalid @enderror" value="{{ old('ServiceType') }}" required id="ServiceType" name="ServiceType">
                                    <option>Select Option</option>
                                    
                                    <option value="Food Package">Food Package</option>
                                    <option value="Doctor">Doctor</option>
                               
                                    

                                    </select>
                                    @error('ServiceType')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            </div> -->
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="ExpectedDate" class="form-label">Expected Date</label>
                                    <div class="input-group " id="example-date-input">
                                      
                                    <input class="form-control  form-select-lg @error('ExpectedDate') is-invalid @enderror" value="{{ old('ExpectedDate') }}" type="date"  id="example-date-input" name="ExpectedDate" id="ExpectedDate" required>
                                    @error('ExpectedDate')
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
                                    <label for="GOBType" class="form-label">Date of Birth Type</label>
                                    <select class="form-select  form-select-lg" id="GOBType"  name="GOBType">
                                    <option value="Age">Age</option>
                                    <option value="ShamsiDate">Shamsi Date</option>
                                    <option value="Gorogoin Date">Grogorian Date</option>

                                 </select>
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






<div>

<button class="btn btn-success btn-lg" type="submit">Assign</button>
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

<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>


    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
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






	//   $(document).ready(function () {
	// 	  $(".Province").change(function () {
	// 		  var dID = $(this).val();
	// 		  $.getJSON("/GetDistricts/" + dID,
	// 			  function (data) {
	// 				  var select = $(".District");
	// 				  $(".District").show();
	// 				  select.empty();
	// 				  select.append('<option>SelectOption</option>');
	// 				  $.each(data, function (key, value) {
    //                     $select.append(`<option value="${key.id}">${value.Name}</option>`);
	// 				  });
	// 			  });
	// 	  });
	//   });


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
                            $('.District').append('<option value="" >Select District</option>'); 
                             $('.District').append('<option value="0" >All</option>'); 
                            $.each(data, function(key, course){
                                $('select[name="District_ID"]').append('<option value="'+ course.id +'">' + course.Name+ '</option>');
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
            $('.District').on('change', function() {
                
               var Province = $('.Province').val();
               var District = $('.District').val();
               var RequestedService = $('.RequestedService').val();
               if(Province) {
                   $.ajax({
                       url: '/QamarCareCard/FindServiceProvider/' + RequestedService + '/' + Province + '/' + District,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                    //    data: {Province:Province, District:District, RequestedService:RequestedService},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data)
                         {
                            $('.ServiceProvider').empty();
                            $('.ServiceProvider').append('<option value="" hidden>Choose Service</option>'); 
                            $.each(data, function(key, course){
                                $('select[name="ServiceProvider_ID"]').append('<option value="'+ course.id +'">' + course.FirstName+ "   "+ course.LastName+ "   ("+course.ServiceType+")" +'</option>');
                            });
                         
                        }
                        else
                        {
                            $('.ServiceProvider').empty();
                        }
                     }
                   });
               }else{
                 $('.ServiceProvider').empty();
               }
            });
            });


</script>
@endsection