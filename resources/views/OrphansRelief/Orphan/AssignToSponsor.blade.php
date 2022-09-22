@extends('layouts.master-layouts')

@section('title') Assign Services @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />


@endsection


@section('content')

<!-- <div class="row">
        <div class="col-12">
           <a href="{{route('AssigningServiceQamarCareCard')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div> -->


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
<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('AssigningServiceQamarCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light "><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="{{route('AssignedServicesQamarCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light assign2" hidden></a>

    </div>
    <div class="col-6">
        <h1 class="fw-medium font-size-24 ">ORPHANS TO SPONSOR</h1>
    </div>
</div>


@foreach($datas as $data)
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
                                        <img class="rounded avatar-lg" src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" alt="">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FirstName}} {{$data -> LastName}}</a></h5>
                                    <p class="text-muted mb-0">ID: {{$data -> id}}</p>
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
                                <p class="text-muted mb-0 text-danger">Waiting Since</p>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> created_at -> format("d-m-Y") }}</a></h5>
                                       

                                </td>
                            </tr>



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

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
                <form class="needs-validation" action="{{route('AssignSponsorOrphan', ['data' => $data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
                @method('PUT')
                @csrf
                    <!-- <input type="text"  value="{{$data -> id }}" id="Assignee_ID" name="Assignee_ID" hidden /> -->




                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Sponsor_ID" class="form-label">Select Sponsor</label>
                                <div class="input-group " id="example-date-input">
                                    <select class="form-control  form-control-lg select2" id="Sponsor_ID" name="Sponsor_ID" value="{{ old('Sponsor_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;">
                                        <option value="None">Select</option>
                                        @foreach($sponsors as $sponsor)
                                        <option value="{{$sponsor -> id}}">{{$sponsor -> FullName}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                        </div>
                        </div>

                    
                          <button class="btn btn-success btn-lg m-3" type="submit">Assign</button>
                     <a class="btn btn-danger btn-lg" href="{{route('IndexQamarCareCard')}}">Cancel</a> 
                </form>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->



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

<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>


<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);



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
        server: {

            url: '../Upload_Tazkira',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,


    });



    Profile.setOptions({
        server: {

            url: '../Upload_Profile',
            headers: {
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
                            $('.District').append('<option value="" >Select District</option>');
                            $('.District').append('<option value="3412" >All</option>');
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

    //     $(document).ready(function() {
    //     $('.District').on('change', function() {
    //         this.form.submit();
    //     });
    // });


    //   $(document).ready(function() {
    //         $('.District').on('change', function() {

    //             var Province = $('.Province').val();
    //             var District = $('.District').val();
    //             var RequestedService = $('.RequestedService').val();
    //             if (Province) {
    //                 $.ajax({
    //                     url: '/QamarCareCard/FindServiceProvider/' + RequestedService + '/' + Province + '/' + District,
    //                     type: "GET",
    //                     data: {
    //                         "_token": "{{ csrf_token() }}"
    //                     },
    //                     //    data: {Province:Province, District:District, RequestedService:RequestedService},
    //                     dataType: "json",
    //                     success: function(data) {
    //                         var res='';
    //                         if (data) {
    //                             $('.ServiceProvider').empty();
    //                             $('.ServiceProvider').append('<option value="" hidden>Choose Service</option>');
    //                             $.each(data, function(key, course) {
    //                                 res +=
    //                                     '<tr>'+
    //                                      '<td>'+course.id+'</td>'+
    //                                      '<td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark">'+course.FirstName +' '+ course.LastName+'</a></h5><p class="text-muted mb-0">QCC-'+ course.QCC+'</p></td>'+


    //                                     '</tr>';
    //                             });
    //                             $('.tbody').html(res);

    //                         } else {
    //                             $('.tbody').html('No Data Found');
    //                         }
    //                     }
    //                 });
    //             } else {
    //                 $('.tbody').html('No Data Found');

    //             }
    //         });
    //     });

    // $(document).ready(function() {
    //     $('.District').on('change', function() {

    //         var Province = $('.Province').val();
    //         var District = $('.District').val();
    //         var RequestedService = $('.RequestedService').val();
    //         if (Province) {
    //             $.ajax({
    //                 url: '/QamarCareCard/FindServiceProvider/' + RequestedService + '/' + Province + '/' + District,
    //                 type: "GET",
    //                 data: {
    //                     "_token": "{{ csrf_token() }}"
    //                 },
    //                 //    data: {Province:Province, District:District, RequestedService:RequestedService},
    //                 dataType: "json",
    //                 success: function(data) {
    //                     if (data) {
    //                         $('.ServiceProvider').empty();
    //                         $('.ServiceProvider').append('<option value="" hidden>Choose Service</option>');
    //                         $.each(data, function(key, course) {
    //                             $('select[name="ServiceProvider_ID"]').append('<option value="' + course.id + '">' + course.FirstName + "   " + course.LastName + "   (" + course.ServiceType + ")" + '</option>');
    //                         });

    //                     } else {
    //                         $('.ServiceProvider').empty();
    //                     }
    //                 }
    //             });
    //         } else {
    //             $('.ServiceProvider').empty();
    //         }
    //     });
    // });

    $('.assign').on('submit', function(event) {
        event.preventDefault();
        const url = $('.assign2').attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record will be assigned!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>
@endsection