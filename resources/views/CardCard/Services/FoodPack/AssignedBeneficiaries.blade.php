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
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Assigned Beneficiaries</span>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror" onchange="window.location.href=this.value;" id="item" name="item">
            <option value="{{route('AssignedBeneficiariesFoodPack')}}">Please Filter Your Choices</option>
            <option value="{{route('AssignedBeneficiariesFoodPack')}}">All</option>
            @foreach($foodpacks as $foodpack)
            <option value="{{route('SearchAssignedBeneficiariesFoodPack', ['data' => $foodpack -> id])}}">{{ $foodpack -> Name}} - {{ $foodpack -> ExpectedDate}}</option>

            @endforeach
        </select>
    </div>
    <!-- <div class="col-10 ">
        <a href="{{route('CreateCareCard')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD CARE CARD</a>
    </div> -->
</div>

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
                                <th>Card Number</th>
                                <th>Full Name</th>
                                <th>Father Name</th>
                                <th>Primary Phone Number</th>
                                <th>Secondary Phone Number</th>
                                <th>Food Pack</th>
                                <th>Supporting Organization</th>
                                <th>Created By</th>
                                <th>Finger Print</th>
                                <!-- <th>Actions</th> -->

                            </tr>
                        </thead>


                        <tbody>
                            @foreach($qamarcarecards as $qamarcarecard)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>QCC - {{$qamarcarecard -> QCC}}</td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> FirstName}} {{$qamarcarecard -> LastName}}</a></h5> </td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> FatherName}}</a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$qamarcarecard -> PrimaryNumber}}</a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-warning">{{$qamarcarecard -> SecondaryNumber}}</a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-warning">{{$qamarcarecard -> FoodPackName}}</a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-warning">{{$qamarcarecard -> OrganizationName}}</a></h5></td>
                                <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard ->  UFirstName }} {{$qamarcarecard ->  ULastName }}</a></h5></td>
                                <td></td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div> <!-- end col -->
</div> <!-- end row -->








<!-- Model for Adding food packs -->
<form class="needs-validation" action="{{route('CreateFoodPack')}}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <!-- center modal -->
            <div class="modal fade bs-addfoodpack-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Food Pack</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 position-relative">
                                        <label for="Name" class="form-label ">Food Pack Name<i class="mdi mdi-asterisk text-danger"></i></label>
                                        <input type="text" class="form-control form-control-lg @error('Name') is-invalid @enderror" value="{{ old('Name') }}" id="Name" name="Name" required>
                                        @error('Name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="mb-3 position-relative">
                                        <label for="ExpectedDate" class="form-label">Expected Date Of Delivirence<i class="mdi mdi-asterisk text-danger"></i></label>
                                        <div class="input-group " id="example-date-input">
                                            <input class="form-control form-select-lg @error('ExpectedDate') is-invalid @enderror" value="{{ old('ExpectedDate') }}" type="date" id="example-date-input" name="ExpectedDate" id="ExpectedDate" required>
                                            @error('ExpectedDate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
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