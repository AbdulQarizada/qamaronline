@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')

@section('title') Orphan and Sponsorships @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('IndexOrphansRelief')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @if($PageInfo == 'All')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>All Orphans</span>
        @endif
        @if($PageInfo == 'Pending')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Pending Orphans</span>
        @endif
        @if($PageInfo == 'Approved')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Approved Orphans</span>
        @endif
        @if($PageInfo == 'Rejected')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Rejected Orphans</span>
        @endif
        @if($PageInfo == 'Waiting')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Waiting Orphans</span>
        @endif
        @if($PageInfo == 'Sponsored')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Sponsored Orphans</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-3">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror" onchange="window.location.href=this.value;">
            <option value="{{route('AllOrphans')}}">Please Filter Your Choices</option>
            <option value="{{route('AllOrphans')}}">All</option>
            <option value="{{route('PendingOrphans')}}">Pending</option>
            <option value="{{route('ApprovedOrphans')}}">Approved</option>
            <option value="{{route('RejectedOrphans')}}">Rejected</option>
            <option value="{{route('WaitingOrphans')}}">Waiting</option>
            <option value="{{route('SponsoredOrphans')}}">Sponsored</option>
        </select>
    </div>
    <div class="col-9">
        <a href="{{route('AllGridOrphans')}}" class="btn  btn-lg waves-effect  waves-light mb-3 m-1 float-end"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="{{route('CreateOrphans')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD ORPHAN</a>
    </div>
</div>


<div class="row">
    <div class="col-12">

        <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>
            <div class="card-body">

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone Numbers</th>
                            <th>Family Status</th>
                            <th>Status</th>
                            <th>Sponsor</th>
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
                                <p class="text-muted mb-0">{{$data -> IntroducerName}}</p>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ProvinceName}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> DistrictName}}</p>

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
                                <div>


                                    @if($data -> Status == 'Pending')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$data -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at -> format("j F Y")}}</p>

                                    @endif

                                    @if($data -> Status == 'Approved')
                                    @if($PageInfo == 'Waiting')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">Waiting </a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at -> format("j F Y")}}</p>
                                    @elseif($PageInfo == 'Sponsored')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Sponosred </a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at -> format("j F Y")}}</p>
                                    @else
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$data -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at -> format("j F Y")}}</p>
                                    @endif
                                    @endif

                                    @if($data -> Status == 'Rejected')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$data -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at -> format("j F Y")}}</p>

                                    @endif



                                    @if($data -> Status == 'Assigned')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">{{$data -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at -> format("j F Y")}}</p>
                                    @endif

                                    @if($data -> Status == 'Released')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$data -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at -> format("j F Y")}}</p>

                                    @endif

                                    @if($data -> Status == 'Printed')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">{{$data -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> created_at -> format("j F Y")}}</p>

                                    @endif

                                </div>
                            </td>
                            <td>
                                @if( $data -> IsSponsored != 1)
                                <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Yet Sponsored</a></h3>
                                @endif
                                @if( $data -> IsSponsored == 1)
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data ->  SFullName }}</a></h5>
                                    <p class="text-muted mb-0">{{ Carbon\Carbon::parse($data -> Sponsored_StartDate) -> format("j F Y")}}</p>
                                    <p class="text-muted mb-0">{{ Carbon\Carbon::parse($data -> Sponsored_EndDate) -> format("j F Y")}}</p>


                                </div>
                                @endif
                            </td>
                            <td>
                                @if( $data -> Created_By !="")

                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data ->  UFirstName }} {{$data ->  ULastName }}</a></h5>
                                    <p class="text-muted mb-0">{{$data ->  UJob }}</p>

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
                                    <a href="{{route('StatusOrphans', ['data' => $data -> id])}}" class="btn btn-warning waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View Details">
                                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                    </a>
                                    @if($data -> Status == 'Pending')
                                    <a href="{{route('DeleteOrphan', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm" data-toggle="tooltip" data-placement="top" title="Delete Record">
                                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                    </a>
                                    <a href="{{route('EditOrphan', ['data' => $data -> id])}}" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit Details">
                                        <i class=" bx bx-edit font-size-16 align-middle"></i>
                                    </a>
                                    @endif
                                    @if( $data -> Status == 'Approved')
                                    @if( $data -> IsSponsored == 1)
                                    <a href="{{route('AssignToSponsorOrphan', ['data' => $data -> id])}}" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Reassign To Sponsor">
                                        <i class="mdi mdi-account-convert font-size-16 align-middle"></i>
                                    </a>
                                    @else
                                    <a href="{{route('AssignToSponsorOrphan', ['data' => $data -> id])}}" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Assign To Sponsor">
                                        <i class="bx bx-user-plus   font-size-16 align-middle"></i>
                                    </a>
                                    @endif
                                    @endif
                                    @if( $data -> Status == 'Rejected')
                                    <a href="{{route('DeleteOrphan', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm" data-toggle="tooltip" data-placement="top" title="Delete Record">
                                        <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                    </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {!! $datas->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>



<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>

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


    $('#datatable').DataTable({
        responsive: true,

        lengthMenu: [
            [100, 200, 300, 400, 500, 1000, -1],
            [100, 200, 300, 400, 500, 1000, "All"]
        ],

        dom: 'lBfrtip',
        buttons: [{
            autoFilter: true,
            extend: 'excel',
            text: 'Download To Excel',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }]
    });
</script>
@endsection