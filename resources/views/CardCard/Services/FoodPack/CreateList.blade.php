@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')


@section('title') New List @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/filepond/css/filepond.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />


@endsection


@section('content')

<div class="row mt-4">
    <div class="col-4">
        @if(Cookie::get('Layout') == 'LayoutNoSidebar')

<a href="{{route('AllListFoodPack')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
@if(Cookie::get('Layout') == 'LayoutSidebar')

<a href="{{route('IndexCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>ADD BENEFICARY</span>
    </div>
</div>




<form class="needs-validation" action="{{route('AllCreateFoodPack')}}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf


    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <h4 class="card-header bg-dark text-white ">BENEFICARY INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->

                    <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="FullName" class="form-label ">Full Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('FullName') is-invalid @enderror" value="{{ old('FullName') }}" id="FullName" name="FullName" required>
                                        @error('FullName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="FatherName" class="form-label ">Father Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('FatherName') is-invalid @enderror" value="{{ old('FatherName') }}" id="FatherName" name="FatherName" required>
                                        @error('FatherName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                <!-- </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="TazkiraID" class="form-label ">Tazkira ID <i class="mdi mdi-asterisk text-danger"></i></label>

                                        <input type="number" class="form-control form-control-lg @error('TazkiraID') is-invalid @enderror" value="{{ old('TazkiraID') }}" id="TazkiraID" name="TazkiraID" max="999999999" required>
                                        @error('TazkiraID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="PrimaryNumber" class="form-label ">Primary Number <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="number" class="form-control form-control-lg @error('PrimaryNumber') is-invalid @enderror" value="{{ old('PrimaryNumber') }}" id="PrimaryNumber" name="PrimaryNumber" max="999999999" required>
                                        @error('PrimaryNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 position-relative">
                                        <label for="SecondaryNumber" class="form-label ">Secondary Number </label>
                                        <input type="number" class="form-control form-control-lg @error('SecondaryNumber') is-invalid @enderror" value="{{ old('SecondaryNumber') }}" id="SecondaryNumber" name="SecondaryNumber" max="999999999" >
                                        @error('SecondaryNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

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
                                        <label for="Reference_ID" class="form-label">Reference Person <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group">
                                            <select class="form-select form-select-lg @error('Reference_ID') is-invalid @enderror" required name="Reference_ID" value="{{ old('Reference_ID') }}" id="Reference_ID">
                                                @foreach($users as $user)
                                                <option value="{{ $user -> id}}">{{ $user -> FirstName}} {{ $user -> LastName}}</option>

                                                @endforeach

                                            </select>
                                            @error('Reference_ID')
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

        <button class="btn btn-success btn-lg" type="submit">Save </button>
        <a class="btn btn-danger btn-lg" href="{{route('AllCareCard')}}">Cancel</a>
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
        server: {

            url: '{{ route('Beneficiaries_Profile')}}',
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


    });



    // Profile.setOptions({

    // });


    $(document).ready(function() {
        var rnd = Math.floor(Math.random() * 99999) + 1;
        document.getElementById('QCC').value = rnd;
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