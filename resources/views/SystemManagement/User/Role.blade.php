@extends(Auth::user()->IsEmployee == 1 ? 'layouts.master-layouts' : 'layouts.master')

@section('title') ADD ROLE TO USER@endsection

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
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">ROLE USER</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>

@endif
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
                                        <img class="rounded avatar-lg" src="{{URL::asset('/uploads/User/Employees/Profiles/'.$data -> Profile)}}" alt="">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FirstName}} {{$data -> LastName}}</a></h5>
                                    <p class="text-muted mb-0">ID: {{$data -> id}}</p>
                                </td>
                                <td>

                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"> TazkiraID</a></h5>
                                    <p class="text-muted mb-0">{{$data -> Tazkira_ID}}</p>
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
                                    </div>
                                </td>
                                <td>
                                </td>
                                <td>
                                <p class="text-muted mb-0 text-danger">{{$data -> Job}}</p>
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
<form class="needs-validation" action="{{route('AssignRoleUser', [$data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
@method('PUT')

    @csrf




    @if(Auth::user()->IsSuperAdmin == 1)

    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-primary text-white ">ROLE AND PERMISSION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <div class="row">
                        <!-- <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsEmployee') is-invalid @enderror" type="checkbox" value="1" id="IsEmployee" name="IsEmployee">
                                    <label class="form-check-label" for="IsEmployee">
                                        IsEmployee
                                    </label>
                                    @error('IsEmployee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsActive') is-invalid @enderror" type="checkbox" value="1" id="IsActive" name="IsActive">
                                    <label class="form-check-label" for="IsActive">
                                       IsActive
                                    </label>
                                    @error('IsActive')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsSuperAdmin') is-invalid @enderror" type="checkbox" value="1" id="IsSuperAdmin" name="IsSuperAdmin">
                                    <label class="form-check-label" for="IsSuperAdmin">
                                    IsSuperAdmin
                                    </label>
                                    @error('IsSuperAdmin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsOrphanSponsor') is-invalid @enderror" type="checkbox" value="1" id="IsOrphanSponsor" name="IsOrphanSponsor">
                                    <label class="form-check-label" for="IsOrphanSponsor">
                                    IsOrphanSponsor
                                    </label>
                                    @error('IsOrphanSponsor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsOrphanRelief') is-invalid @enderror" type="checkbox" value="1" id="IsOrphanRelief" name="IsOrphanRelief">
                                    <label class="form-check-label" for="IsOrphanRelief">
                                    IsOrphanRelief
                                    </label>
                                    @error('IsOrphanRelief')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsAidAndRelief') is-invalid @enderror" type="checkbox" value="1" id="IsAidAndRelief" name="IsAidAndRelief">
                                    <label class="form-check-label" for="IsAidAndRelief">
                                    IsAidAndRelief
                                    </label>
                                    @error('IsAidAndRelief')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsWash') is-invalid @enderror" type="checkbox" value="1" id="IsWash" name="IsWash">
                                    <label class="form-check-label" for="IsWash">
                                    IsWash
                                    </label>
                                    @error('IsWash')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsEducation') is-invalid @enderror" type="checkbox" value="1" id="IsEducation" name="IsEducation">
                                    <label class="form-check-label" for="IsEducation">
                                    IsEducation
                                    </label>
                                    @error('IsEducation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsInitiative') is-invalid @enderror" type="checkbox" value="1" id="IsInitiative" name="IsInitiative">
                                    <label class="form-check-label" for="IsInitiative">
                                    IsInitiative
                                    </label>
                                    @error('IsInitiative')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsMedicalSector') is-invalid @enderror" type="checkbox" value="1" id="IsMedicalSector" name="IsMedicalSector">
                                    <label class="form-check-label" for="IsMedicalSector">
                                    IsMedicalSector
                                    </label>
                                    @error('IsMedicalSector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsFoodAppeal') is-invalid @enderror" type="checkbox" value="1" id="IsFoodAppeal" name="IsFoodAppeal">
                                    <label class="form-check-label" for="IsFoodAppeal">
                                    IsFoodAppeal
                                    </label>
                                    @error('IsFoodAppeal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsQamarCareCard') is-invalid @enderror" type="checkbox" value="1" id="IsQamarCareCard" name="IsQamarCareCard">
                                    <label class="form-check-label" for="IsQamarCareCard">
                                    IsQamarCareCard
                                    </label>
                                    @error('IsQamarCareCard')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsAppealsDistributions') is-invalid @enderror" type="checkbox" value="1" id="IsAppealsDistributions" name="IsAppealsDistributions">
                                    <label class="form-check-label" for="IsAppealsDistributions">
                                    IsAppealsDistributions
                                    </label>
                                    @error('IsAppealsDistributions')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 position-relative">
                                <div class="form-check mb-3">
                                    <input class="form-check-input @error('IsDonorsAndDonorBoxes') is-invalid @enderror" type="checkbox" value="1" id="IsDonorsAndDonorBoxes" name="IsDonorsAndDonorBoxes">
                                    <label class="form-check-label" for="IsDonorsAndDonorBoxes">
                                    IsDonorsAndDonorBoxes
                                    </label>
                                    @error('IsDonorsAndDonorBoxes')
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
    @endif



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