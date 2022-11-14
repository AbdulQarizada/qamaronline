@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')


@section('title') Food Packs @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')


<div class="row mt-4">
    <div class="col-4">
        @if(Cookie::get('Layout') == 'LayoutNoSidebar')

<a href="{{route('IndexCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
@if(Cookie::get('Layout') == 'LayoutSidebar')

<a href="{{route('IndexCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20 "></i>Eligible Beneficiaries</span>
    </div>
</div>
<div class="row">


</div>
<form class="needs-validation" action="{{route('SearchEligibleBeneficieriesFoodPack')}}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="row">

        <div class="col-md-2">
            <div class="mb-3 position-relative">
                <!-- <label for="Province_ID" class="form-label">Province</label> -->
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
        <div class="col-md-2">
            <div class="mb-3 position-relative">
                <!-- <label for="District_ID" class="form-label">District</label> -->
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
        <div class="col-md-2">
            <div class="mb-3 position-relative">
                <!-- <label for="FamilyStatus_ID" class="form-label">Family Status</label> -->
                <div class="input-group">

                    <select class="form-select form-select-lg @error('FamilyStatus_ID') is-invalid @enderror" value="{{ old('FamilyStatus_ID') }}" required name="FamilyStatus_ID" id="FamilyStatus_ID">
                        <option value="All">All</option>
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
        <div class="col-md-2">
            <div class="mb-3 position-relative">
                <!-- <label for="LevelPoverty" class="form-label">Level Of Poverty</label> -->
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
        <div class="col-md-2">
            <div class="mb-3 position-relative">
                <button class="btn btn-success btn-lg btn-info" type="submit">Filter </button>
            </div>
        </div>
    </div>

</form>

<form class="needs-validation" action="{{route('AssignToFoodPack')}}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="row">
        <div class="col-12">

            <div class="card">
                <h3 class="card-header bg-dark text-white"></h3>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FirstName</th>
                                    <th>Address</th>
                                    <th>Phone Numbers</th>
                                    <th>Family Status</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th><input class="form-check-input" type="checkbox" id="checkAll">
                                        <label class="form-check-label" for="checkAll">Select</label>

                                    </th>
                                    <!-- <th>Actions</th> -->

                                </tr>
                            </thead>


                            <tbody>
                                @foreach($qamarcarecards as $qamarcarecard)
                                <tr>
                                    <!-- <td>{{ $qamarcarecard->id }}</td> -->
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> FirstName}} {{$qamarcarecard -> LastName}}</a></h5>
                                        <p class="text-muted mb-0">QCC-{{$qamarcarecard -> QCC}}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> ProvinceName}}</a></h5>
                                            <p class="text-muted mb-0">{{$qamarcarecard -> DistrictName}}</p>
                                            <!-- <p class="text-muted mb-0">{{$qamarcarecard -> Village}}</p> -->

                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$qamarcarecard -> PrimaryNumber}}</a></h5>
                                            <p class="text-muted mb-0 badge badge-soft-warning">{{$qamarcarecard -> SecondaryNumber}}</p>
                                            <p class="text-muted mb-0 badge badge-soft-danger">{{$qamarcarecard -> RelativeNumber}}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> FamilyStatus}}</a></h5>
                                            @if( $qamarcarecard -> LevelPoverty == 1)
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-secondary font-size-14"></i>
                                            <i class="bx bxs-star text-secondary font-size-16"></i>
                                            <i class="bx bxs-star text-secondary font-size-18"></i>
                                            <i class="bx bxs-star text-secondary font-size-20"></i>

                                            @endif
                                            @if( $qamarcarecard -> LevelPoverty == 2)
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-warning font-size-14"></i>
                                            <i class="bx bxs-star text-secondary font-size-16"></i>
                                            <i class="bx bxs-star text-secondary font-size-18"></i>
                                            <i class="bx bxs-star text-secondary font-size-20"></i>
                                            @endif
                                            @if( $qamarcarecard -> LevelPoverty == 3)
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-warning font-size-14"></i>
                                            <i class="bx bxs-star text-warning font-size-16"></i>
                                            <i class="bx bxs-star text-secondary font-size-18"></i>
                                            <i class="bx bxs-star text-secondary font-size-20"></i>
                                            @endif
                                            @if( $qamarcarecard -> LevelPoverty == 4)
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-warning font-size-14"></i>
                                            <i class="bx bxs-star text-warning font-size-16"></i>
                                            <i class="bx bxs-star text-warning font-size-18"></i>
                                            <i class="bx bxs-star text-secondary font-size-20"></i>
                                            @endif
                                            @if( $qamarcarecard -> LevelPoverty == 5)
                                            <i class="bx bxs-star text-warning font-size-12"></i>
                                            <i class="bx bxs-star text-warning font-size-14"></i>
                                            <i class="bx bxs-star text-warning font-size-16"></i>
                                            <i class="bx bxs-star text-warning font-size-18"></i>
                                            <i class="bx bxs-star text-warning font-size-20"></i>
                                            @endif
                                        </div>
                                    </td>

                                    <td>
                                        <div>


                                            @if($qamarcarecard -> Status == 'Pending')
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$qamarcarecard -> Status}}</a></h5>
                                            <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("d-m-Y")}}</p>

                                            @endif

                                            @if($qamarcarecard -> Status == 'Approved')
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$qamarcarecard -> Status}} </a></h5>
                                            <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("d-m-Y")}}</p>

                                            @endif

                                            @if($qamarcarecard -> Status == 'Rejected')
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$qamarcarecard -> Status}} </a></h5>
                                            <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("d-m-Y")}}</p>

                                            @endif



                                            @if($qamarcarecard -> Status == 'ReInitiated')
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">{{$qamarcarecard -> Status}}</a></h5>
                                            <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("d-m-Y")}}</p>

                                            @endif

                                            @if($qamarcarecard -> Status == 'Released')
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$qamarcarecard -> Status}}</a></h5>
                                            <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("d-m-Y")}}</p>

                                            @endif

                                            @if($qamarcarecard -> Status == 'Printed')
                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">{{$qamarcarecard -> Status}}</a></h5>
                                            <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("d-m-Y")}}</p>

                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        @if( $qamarcarecard -> Created_By !="")

                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard ->  UFirstName }} {{$qamarcarecard ->  ULastName }}</a></h5>
                                            <p class="text-muted mb-0">{{$qamarcarecard ->  UJob }}</p>

                                        </div>
                                        @endif
                                        @if( $qamarcarecard -> Created_By =="")

                                        <div>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                            <p class="text-muted mb-0">Requested</p>

                                        </div>
                                        @endif
                                    </td>
                                    <td>

                                        <input class="form-check-input" type="checkbox" id="formCheck1" name="Beneficiary_ID[]" value="{{$qamarcarecard ->  id }}">
                                    </td>
                                    <!-- <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a class="btn btn-warning waves-effect waves-light">
                                            <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                        </a>
                                    </div>
                                </td> -->
                                </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
            <a data-bs-toggle="modal" data-bs-target=".bs-foodpack-modal-center" class="btn btn-success waves-effect waves-light float-end">
                Assign To Food Package
            </a>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- Model for assigning food packs -->
    <div class="row">
        <div class="col-lg-6">
            <!-- center modal -->
            <div class="modal fade bs-foodpack-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Food Pack</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="mb-3 position-relative">
                                        <label for="FoodPack_ID" class="form-label">Select Food Pack <i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group">

                                            <select class="form-select  form-select-lg @error('FoodPack_ID') is-invalid @enderror" value="{{ old('FoodPack_ID') }}" required id="FoodPack_ID" name="FoodPack_ID">
                                                <!-- <option value="None">Main Catagory</option> -->
                                                @foreach($foodpacks as $foodpack)
                                                <option value="{{ $foodpack -> id}}">{{ $foodpack -> Name}} - {{ $foodpack -> ExpectedDate}}</option>
                                                @endforeach

                                            </select>
                                            @error('FoodPack_ID')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3 position-relative">
                                        <label for="Parent_Name" class="form-label text-danger">New </label>
                                        <a href="{{route('CreateFoodPack')}}" class="btn btn-info btn-lg"><i class="bx bx-plus-circle "></i></a>

                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-lg" type="submit">Save </button>
                            <!-- <a class="btn btn-danger btn-lg" href="{{route('root')}}">Cancel</a> -->

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- end card -->
        </div>
    </div>

</form>


@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>


<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>


<!-- Bootstrap rating js -->
<script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js') }} "></script>

<script src="{{ URL::asset('/assets/js/pages/rating-init.js') }}"></script>

<script>
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
                            $('.District').append('<option value="All" hidden>All</option>');
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


    $('.delete-confirm').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.release').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This card is released!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });


    $("#checkAll").click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });


    $('#datatable').DataTable( {
        responsive: true,

        lengthMenu: [[100, 200, 300, 400, 500, 1000, -1], [100, 200, 300, 400, 500, 1000, "All"]],

        dom: 'lBfrtip',
        buttons: [
            {
                autoFilter: true,
                extend: 'excel',
                text: 'Download To Excel',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                }
            }
        ]
    } );
</script>
@endsection