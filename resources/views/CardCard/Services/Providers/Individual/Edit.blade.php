@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')


@section('title') Service Provider @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />


@endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Qamar Care / Assign Services @endslot
@slot('title')   @endslot
@endcomponent

<div class="row">
        <div class="col-12">
           @if(Cookie::get('Layout') == 'LayoutNoSidebar')

<a href="{{route('IndividualServiceProviders')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
@if(Cookie::get('Layout') == 'LayoutSidebar')

<a href="{{route('IndexCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
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

                            <tbody>
                                <tr>
                                <td>
                                        <div>
                                            <img  class="rounded-circle avatar-lg" src="{{URL::asset('/uploads/Profiles/'.$data -> Profile)}}"
                                                alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FirstName}} {{$data -> LastName}}</a></h5>
                                        <p class="text-muted mb-0">QCC-{{$data -> QCC}}</p>
                                </td>
                                <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> TazkiraID}}</a></h5>
                                        <!-- <p class="text-muted mb-0">QCC-{{$data -> QCC}}</p> -->
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
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       @endif
                                       @if( $data -> LevelPoverty == 4)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
                                       @endif
                                       @if( $data -> LevelPoverty == 5)
                                       <i class="bx bxs-star text-warning font-size-12"></i>
                                         <i class="bx bxs-star text-warning font-size-14"></i>
                                         <i class="bx bxs-star text-secondary font-size-16"></i>
                                         <i class="bx bxs-star text-secondary font-size-18"></i>
                                         <i class="bx bxs-star text-secondary font-size-20"></i>
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
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-lg-12">
    <div class="card ">
    <h4 class="card-header bg-primary text-white "></h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                    <input type="text"  value="{{$data -> FirstName }} {{$data -> LastName}}" id="Assignee" name="Assignee" hidden />
                    <input type="text"  value="{{$data -> QCC }}" id="QCC" name="QCC" hidden />
                    <input type="text"  value="{{$data -> Province }}" id="Province" name="Province" hidden />
                    <input type="text"  value="{{$data -> District }}" id="District" name="District" hidden />
                    <input type="text"  value="{{$data -> PrimaryNumber }}" id="PrimaryNumber" name="PrimaryNumber" hidden />
                    <input type="text"  value="{{$data -> SecondaryNumber }}" id="SecondaryNumber" name="SecondaryNumber" hidden />
                    <input type="text"  value="{{$data -> RelativeNumber }}" id="RelativeNumber" name="RelativeNumber" hidden />
                    <input type="text"  value="{{$data -> FamilyStatus }}" id="FamilyStatus" name="FamilyStatus" hidden />
                    <input type="text"  value="{{$data -> LevelPoverty }}" id="LevelPoverty" name="LevelPoverty" hidden />
                    <input type="text"  value="{{$data -> TazkiraID }}" id="TazkiraID" name="TazkiraID" hidden />
                    <input type="text"  value="{{$data -> Created_By }}" id="Created_By" name="Created_By" hidden />



                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="AssignedTo" class="form-label">Assigned To</label>
                                    <select class="form-select  form-select-lg  @error('AssignedTo') is-invalid @enderror" value="{{ old('AssignedTo') }}" required id="AssignedTo" name="AssignedTo">

                                    @foreach ($users as $user)
                                     <option value="Afghanistan">{{ $user->name }}</option>
                                    @endforeach



                                    </select>
                                    @error('AssignedTo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Province" class="form-label">Province</label>
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
                                    <label for="ServiceType" class="form-label">Service Type</label>
                                    <div class="input-group">

                                    <select class="form-select  form-select-lg @error('ServiceType') is-invalid @enderror" value="{{ old('ServiceType') }}" required id="ServiceType" name="ServiceType">
                                    <option>Select Option</option>

                                    <option value="Food Package">Food Package</option>
                                    <option value="Doctor">Doctor</option>
                                    <!-- <option value="Pashai">Pashai</option>
                                    <option value="Nooristani">Nooristani</option>
                                    <option value="Uzbaki">Uzbaki</option>
                                    <option value="Turkmani">Turkmani</option>
                                    <option value="Balochi">Balochi</option> -->


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

                        <div class="row">
                        <!-- <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="GOBType" class="form-label">Date of Birth Type</label>
                                    <select class="form-select  form-select-lg" id="GOBType"  name="GOBType">
                                    <option value="Age">Age</option>
                                    <option value="ShamsiDate">Shamsi Date</option>
                                    <option value="Gorogoin Date">Grogorian Date</option>

                                 </select>
                                </div>
                            </div> -->
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="ExpectedService" class="form-label">Expected Service</label>
                                    <div class="input-group " id="example-date-input">

                                    <input class="form-control form-select-lg @error('ExpectedService') is-invalid @enderror" value="{{ old('ExpectedService') }}" type="date"  id="example-date-input" name="ExpectedService" id="ExpectedService" required>
                                    @error('ExpectedService')
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






<div>

<button class="btn btn-info btn-lg" type="submit">Update</button>
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

</script>
@endsection