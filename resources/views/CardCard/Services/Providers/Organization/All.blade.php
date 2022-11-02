@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')


@section('title') Service Provider @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row mt-4">
    <div class="col-6">
        @if(Cookie::get('Layout') == 'LayoutNoSidebar')

<a href="{{route('IndexCareCardServices')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
@if(Cookie::get('Layout') == 'LayoutSidebar')

<a href="{{route('IndexCareCard')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
@endif
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Organization Service Provider</span>

    </div>
</div>
<div class="row">
    <div class="col-4">
    </div>
    <div class="col-8 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
        <a href="{{route('CreateOrganizationServiceProviders')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD SERVICE PROVIDER</a>

    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <h3 class="card-header bg-secondary text-white"></h3>
            <div class="card-body">



                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Service Type</th>
                            <th>Service Address</th>
                            <th>Phone Numbers</th>
                            <th>Status</th>
                            <th>Created By</th>
                            <th>Actions</th>

                        </tr>
                    </thead>


                    <tbody>
                        @foreach($datas as $data)
                        <tr>
                            <td>{{$data -> id}}</td>
                            <td>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FirstName}} {{$data -> LastName}}</a></h5>
                                <p class="text-muted mb-0">QCC-{{$data -> QCC}}</p>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ProvinceName}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> DistrictName }}</p>

                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ServiceType}}</a></h5>

                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ProvinceService }}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> DistrictService }}</p>

                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$data -> PrimaryNumber}}</a></h5>
                                    <p class="text-muted mb-0 badge badge-soft-warning">{{$data -> SecondaryNumber}}</p>
                                </div>
                            </td>
                            <td>
                                <div>


                                    @if($data -> Status == 'Pending')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$data -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at}}</p>

                                    @endif

                                    @if($data -> Status == 'Approved')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$data -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at}}</p>

                                    @endif

                                    @if($data -> Status == 'Rejected')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$data -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at}}</p>

                                    @endif



                                    @if($data -> Status == 'ReInitiated')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">{{$data -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at}}</p>

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
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{route('StatusOrganizationServiceProviders', ['data' => $data -> id])}}" class="btn btn-warning waves-effect waves-light">
                                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                    </a>

                                    @if( $data -> Status !="Approved")
                                    <a href="{{route('DeleteOrganizationServiceProviders', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light Delete">
                                        <i class="bx bx-trash-alt font-size-16 align-middle"></i>
                                    </a>

                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>


<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>

<script>
    $('.approve').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be approved!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.Delete').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be rejected!',
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