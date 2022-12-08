@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
@endsection
@livewireStyles
@section('content')
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="{{route('IndexOrphansRelief')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @if($PageInfo == 'All')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>All Orphans</span>
        @endif
        @if($PageInfo == 'Pending')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Pending Orphans</span>
        @endif
        @if($PageInfo == 'Approved')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Approved Orphans</span>
        @endif
        @if($PageInfo == 'Rejected')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Rejected Orphans</span>
        @endif
        @if($PageInfo == 'Waiting')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Waiting Orphans</span>
        @endif
        @if($PageInfo == 'Sponsored')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Sponsored Orphans</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-12 mb-2">
        <select class="form-select  form-select-lg @error('Country') is-invalid @enderror" onchange="window.location.href = this.value;">
            <option value="{{route('AllOrphans')}}">Please Filter Your Choices</option>
            <option value="{{route('AllOrphans')}}" {{ $PageInfo == 'All' ? 'selected' : '' }}>All</option>
            <option value="{{route('PendingOrphans')}}" {{ $PageInfo == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="{{route('ApprovedOrphans')}}" {{ $PageInfo == 'Approved' ? 'selected' : '' }}>Approved</option>
            <option value="{{route('RejectedOrphans')}}" {{ $PageInfo == 'Rejected' ? 'selected' : '' }}>Rejected</option>
            <option value="{{route('WaitingOrphans')}}" {{ $PageInfo == 'Waiting' ? 'selected' : '' }}>Waiting</option>
            <option value="{{route('SponsoredOrphans')}}" {{ $PageInfo == 'Sponsored' ? 'selected' : '' }}>Sponsored</option>
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <livewire:search />
    </div>
    <div class="col-md-5 col-sm-12 mb-2">
        <a href="{{route('AllGridOrphans')}}" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Orphans Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="{{route('CreateOrphans')}}" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD ORPHAN</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="card-header bg-dark text-white"></h3>
        <div class="table-responsive">
            <table class="table table-hover table-striped dt-responsive nowrap w-100">
                <thead class="table-light">
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="checkAll">
                        </th>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Contacts</th>
                        <th>Family Status</th>
                        <th>Status</th>
                        @if($PageInfo == 'Waiting' || $PageInfo == 'Sponsored')
                        <th>Sponsor</th>
                        @endif
                        <th>Created By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox" id="formCheck1" name="ids[]" value="{{$data -> id }}">
                        </td>
                        <td>
                            <div class="avatar-xs">
                                <span class="avatar-title bg-dark rounded-circle">
                                    {{$loop->iteration}}
                                </span>
                            </div>
                        </td>
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
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">Sponsored</a></h5>
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

                            </div>
                        </td>
                        @if($PageInfo == 'Sponsored')
                        <td>
                            @foreach($data -> user as $users)
                            @if($users -> pivot -> IsActive == 1 )
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$users ->  FullName }}</a></h5>
                                <p class="text-muted mb-0"><a href="#" class="text-success"> {{ Carbon\Carbon::parse($users -> pivot -> StartDate) -> format("j F Y")}}</a></p>
                                <p class="text-muted mb-0"><a href="#" class="text-danger">{{ Carbon\Carbon::parse($users -> pivot ->  EndDate) -> format("j F Y")}}</a></p>
                            </div>
                            @endif
                            @endforeach
                        </td>
                        @endif
                        @if($PageInfo == 'Waiting')
                        <td>
                            <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Not Yet Sponsored</a></h3>
                            <p class="text-muted mb-0"><a href="#" class="text-danger">Waiting Since: </a>{{$data -> created_at -> format("j F Y")}}</p>
                        </td>
                        @endif
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
                                <a href="{{route('StatusOrphans', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                    <i class="mdi mdi-eye-settings-outline font-size-16 align-middle"></i>
                                </a>
                                @if($PageInfo == 'Sponsored')
                                <a href="{{route('StatusOrphans', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-info  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Sponsor">
                                    <i class="mdi mdi-account-convert font-size-16 align-middle"></i>
                                </a>
                                @endif
                                @if($PageInfo == 'Waiting')
                                <a href="{{route('StatusOrphans', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign To Sponsor">
                                    <i class="mdi mdi-account-child-outline font-size-16 align-middle"></i>
                                </a>
                                @endif
                                @if($data -> Status == 'Pending')
                                <a href="{{route('EditOrphan', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                                    <i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('DeleteOrphan', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                    <i class="mdi mdi-delete-outline font-size-16 align-middle"></i>
                                </a>
                                @endif
                                @if( $data -> Status == 'Rejected')
                                <a href="{{route('DeleteOrphan', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                    <i class="mdi mdi-delete-outline font-size-16 align-middle"></i>
                                </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form class="needs-validation" action="{{route('ExportOrphans')}}" method="POST" enctype="multipart/form-data" id="ExportForm" novalidate>
            @csrf
            <input type="text" class="d-none" name="FormIds" required>
            <a class="btn btn-outline-primary waves-effect float-end  waves-light mt-3 ExportOrphans"><i class="mdi mdi-microsoft-excel me-1"></i> Export To Excel</a>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
            {!! $datas->links() !!} <span class="m-2 text-white badge bg-dark">{{ $datas->total() }} Total Records</span>
        </ul>
    </div>
</div>
@endsection
@livewireScripts
@section('script')
<!-- Sweetalert -->
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>
<!-- Fomr Validation -->
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
<script>
    $('.delete-confirm').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be permanantly deleted!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
    // Remove Sponsor Confirmation
    $('.removeSponsor').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'Do you want to remove sponsr?!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
    // Search All Districts
    $(document).ready(function() {
        $('.Province').on('change', function() {
            var dID = $(this).val();
            if (dID) {
                $.ajax({
                    url: '/GetDistricts/' + dID
                    , type: "GET"
                    , data: {
                        "_token": "{{ csrf_token() }}"
                    }
                    , dataType: "json"
                    , success: function(data) {
                        if (data) {
                            $('.District').empty();
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
    // Search All Districts
    $(document).ready(function() {
        $('.Sponsor').on('change', function() {
            var dID = $(this).val();
            if (dID) {
                $.ajax({
                    url: "{{ route('GetCardAjax') }}"
                    , type: "GET"
                    , data: {
                        "_token": "{{ csrf_token() }}"
                        , "data": dID
                    }
                    , dataType: "json"
                    , success: function(data) {
                        if (data) {
                            $('.Card').empty();
                            $.each(data, function(key, course) {
                                $('select[name="Card_ID"]').append('<option value="' + course.id + '">******************' + course.CardLastFourDigit + '</option>');
                            });
                        } else {
                            $('.Card').empty();
                        }
                    }
                });
            } else {
                $('.Card').empty();
            }
        });
    });
    // Submit form for excel
    $(document).ready(function() {
        $('.ExportOrphans').click(function() {
            ids = new Array();
            $("input[name='ids[]']:checked").each(function() {
                ids.push(this.value);
            });
            $("input[name=FormIds]").val(ids);
            $("#ExportForm").submit();
        });
    });
    // check all checkboxs for excel
    $("#checkAll").click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });

</script>
@endsection
