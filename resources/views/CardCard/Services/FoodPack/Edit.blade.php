@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')


@section('title') Food Packs @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-file-poster.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />



@endsection
@section('content')

<div class="row mt-4">
        <div class="col-4">
           <a href="{{route('AllFoodPack')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
           <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>EDIT FOOD PACKS</span>
        </div>
     </div>


<form class="needs-validation" action="{{route('UpdateFoodPack', [$data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
    @method('PUT')
    @csrf


    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-dark text-white ">FOOD PACK INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="Name" class="form-label ">Full Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('Name') is-invalid @enderror" value="{{$data -> Name}}" id="Name" name="Name" required>
                                        @error('Name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="TotalBudget" class="form-label ">Total Budget <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="number" class="form-control form-control-lg @error('TotalBudget') is-invalid @enderror" value="{{$data -> TotalBudget}}" id="TotalBudget" name="TotalBudget" max="999999999" required>
                                        @error('TotalBudget')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="TargetBeneficiaries" class="form-label ">Target Beneficiaries <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="number" class="form-control form-control-lg @error('TargetBeneficiaries') is-invalid @enderror" value="{{$data -> TargetBeneficiaries}}" id="TargetBeneficiaries" name="TargetBeneficiaries" max="999999999" required>
                                        @error('TargetBeneficiaries')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="ExpectedDate" class="form-label">Expected Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group " id="example-date-input">

                                            <input class="form-control form-select-lg @error('ExpectedDate') is-invalid @enderror" value="{{$data -> ExpectedDate}}" type="date" id="example-date-input" name="ExpectedDate" id="ExpectedDate" required>
                                            @error('ExpectedDate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="Province_ID" class="form-label">Province <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group">
                                            <select class="form-select Province form-select-lg @error('Province_ID') is-invalid @enderror" required name="Province_ID" value="{{ old('Province_ID') }}" id="Province_ID">
                                                <option value="">Select Your Province</option>
                                                @foreach($provinces as $province)
                                                <option value="{{ $province -> id}}" {{ $province -> id == $data -> Province_ID ? 'selected' : '' }}>{{ $province -> Name}}</option>

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
                                                @foreach($districts as $district)
                                        <option value="{{ $district -> id}}" {{ $district -> id == $data -> District_ID ? 'selected' : '' }}>{{ $district -> Name}}</option>
                                        @endforeach
                                            </select>
                                            @error('District_ID')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="Description" class="form-label">Food Packs Descriptions <i class="mdi mdi-asterisk text-danger"></i></label>
                            <textarea id="textarea" class="form-control @error('Description') is-invalid @enderror" maxlength="2205" rows="10" value="{{$data -> Description}}" required name="Description" id="Description" required></textarea>
                            @error('Description')
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

        <button class="btn btn-info btn-lg" type="submit">Update </button>
        <a class="btn btn-danger btn-lg" href="{{route('AllCareCard')}}">Cancel</a>
    </div>





</form>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>



<script src="{{ URL::asset('/assets/libs/filepond/js/filepond.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-file-poster.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-file-validate-type.js') }}"></script>


<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

<!-- Bootstrap rating js -->
<script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js') }} "></script>

<script src="{{ URL::asset('/assets/js/pages/rating-init.js') }}"></script>


<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    FilePond.registerPlugin(FilePondPluginFilePoster);




    // Get a reference to the file input element
    const inputProfile = document.querySelector('input[name="Profile"]');

    // Get a reference to the file input element
    const inputTazkira = document.querySelector('input[name="Tazkira"]');



    // Create a FilePond instance
    const Profile = FilePond.create(inputProfile, {
        labelIdle: 'Profile <span class="bx bx-upload"></span >',
        server: {

            url: '{{ route('Beneficiaries_Profile')}}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },

        allowImagePreview: true,
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
        styleButtonProcessItemPosition: 'right bottom',

        files: [{
            source: '{{$data -> Profile}}',
            options: {
                type: 'local',
                file: {
                    name: 'No Image',
                    size: 1234,
                    type: 'image/png'
                },
                metadata: {
                    poster: '{{URL::asset('/uploads/QamarCareCard/Beneficiaries/Profiles/'.$data -> Profile)}}'
                }

            }
        }],


    });


    // Create a FilePond instance
    const Tazkira = FilePond.create(inputTazkira, {
        labelIdle: 'Click to upload Tazkira <span class="bx bx-upload"></span >',
        acceptedFileTypes: ['image/png', 'image/jpeg'],
        allowFileTypeValidation: true,
        server: {

            url: '{{ route('Beneficiaries_Tazkira')}}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }

        },
        instantUpload: true,
        files: [{
            source: '{{$data -> Tazkira}}',
            options: {
                type: 'local',
                file: {

                    type: 'image/png'
                },
                metadata: {
                    poster: '{{URL::asset('/uploads/QamarCareCard/Beneficiaries/Tazkiras/'.$data -> Tazkira)}}'
                }

            }
        }],

    });



    Profile.setOptions({



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
        var rnd = Math.floor(Math.random() * 99999) + 1;
        document.getElementById('QCC').value = rnd;
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