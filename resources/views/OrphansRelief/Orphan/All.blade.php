@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
@endsection
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
    <div class="col-md-12">
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h3 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Filter </h3>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="{{route('SearchOrphans')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="position-relative">
                                <div class="input-group">
                                    <select class="form-select Province form-select-lg @error('Province_ID') is-invalid @enderror" name="Province_ID" value="{{ old('Province_ID') }}" id="Province_ID">
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
                        <div class="col-md-12 mb-2">
                            <div class="position-relative">
                                <div class="input-group">
                                    <select class="form-select  District form-select-lg @error('District_ID') is-invalid @enderror" name="District_ID" value="{{ old('District_ID') }}" id="District_ID">
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
                        <div class="col-md-12 mb-2">
                            <div class="hstack gap-2">
                                <input type="text" name="PageInfo" value="{{ $PageInfo }}" class="d-none">
                                <input class="form-control form-control-lg" type="text" name="data">
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg"><i class="mdi mdi-magnify me-1"></i>Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-12 mb-2">
        <div class="hstack gap-3">
            <a class="btn  btn-lg waves-effect  waves-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" data-bs-toggle="tooltip" data-bs-placement="top" title="Filter"> <i class="mdi mdi-filter-menu-outline font-size-24 align-middle"></i></a>
            <select class="form-select  form-select-lg @error('Country') is-invalid @enderror" onchange="window.location.href=this.value;">
                <option value="{{route('AllOrphans')}}">Please Filter Your Choices</option>
                <option value="{{route('AllOrphans')}}" {{ $PageInfo == 'All' ? 'selected' : '' }}>All</option>
                <option value="{{route('PendingOrphans')}}" {{ $PageInfo == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="{{route('ApprovedOrphans')}}" {{ $PageInfo == 'Approved' ? 'selected' : '' }}>Approved</option>
                <option value="{{route('RejectedOrphans')}}" {{ $PageInfo == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                <option value="{{route('WaitingOrphans')}}" {{ $PageInfo == 'Waiting' ? 'selected' : '' }}>Waiting</option>
                <option value="{{route('SponsoredOrphans')}}" {{ $PageInfo == 'Sponsored' ? 'selected' : '' }}>Sponsored</option>
            </select>
        </div>
    </div>
    <div class="col-md-8 col-sm-12 mb-2">
        <a href="{{route('AllGridOrphans')}}" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Orphans Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="{{route('CreateOrphans')}}" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD ORPHAN</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="card-header bg-dark text-white mb-3"></h3>
        <div class="table-responsive">
            <table class="table  table-striped table-hover dt-responsive nowrap w-100 m-4">
                <thead class="table-light">
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="checkAll">
                        </th>
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
                <tbody class="table-hover">
                    @foreach($datas as $data)
                    <tr>
                        <td>
                            <input class="form-check-input ids" type="checkbox" id="formCheck1" name="ids[]" value="{{$data -> id }}">
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
                                <a href="{{route('StatusOrphans', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                    <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                </a>
                                @if($data -> Status == 'Pending')
                                <a href="{{route('EditOrphan', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                                    <i class=" bx bx-edit font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('DeleteOrphan', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                    <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                </a>
                                @endif
                                @if( $data -> Status == 'Approved')
                                @if( $data -> IsSponsored == 1)
                                <a data-bs-toggle="modal" data-bs-target=".bs-{{$data ->  id }}-modal-center" class="btn btn-sm btn-outline-info  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Reassign To Sponsor">
                                    <i class="mdi mdi-account-convert font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('RemoveSponsorOrphan', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect removeSponsor waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Sponsor">
                                    <i class="mdi mdi-account-multiple-remove-outline font-size-16 align-middle"></i>
                                </a>
                                <div class="modal fade bs-{{$data ->  id }}-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Reassign To Sponsor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" action="{{route('AssignSponsorOrphan', ['data' => $data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3 position-relative">
                                                                <label for="Sponsor_ID" class="form-label">Sponsor</label>
                                                                <div class="input-group " id="example-date-input">
                                                                    <select class="form-control  form-control-lg" id="Sponsor_ID" name="Sponsor_ID" value="{{ old('Sponsor_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                                        @foreach($sponsors as $sponsor)
                                                                        <option value="{{$sponsor -> id}}">{{$sponsor -> FullName}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3 position-relative">
                                                                <label for="Sponsored_StartDate" class="form-label">Sponsored Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                <div class="input-group " id="example-date-input">
                                                                    <input class="form-control form-select-lg @error('Sponsored_StartDate') is-invalid @enderror" value="{{ old('Sponsored_StartDate') }}" type="date" id="example-date-input" name="Sponsored_StartDate" id="Sponsored_StartDate" required>
                                                                    @error('Sponsored_StartDate')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3 position-relative">
                                                                <label for="Sponsored_EndDate" class="form-label">Sponsored End Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                <div class="input-group " id="example-date-input">
                                                                    <input class="form-control form-select-lg @error('Sponsored_EndDate') is-invalid @enderror" value="{{ old('Sponsored_EndDate') }}" type="date" id="example-date-input" name="Sponsored_EndDate" id="Sponsored_EndDate" required>
                                                                    @error('Sponsored_EndDate')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg">Reassign</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <a data-bs-toggle="modal" data-bs-target=".bs-{{$data ->  id }}-modal-center" class="btn btn-sm btn-outline-success waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign To Sponsor">
                                    <i class="bx bx-user-plus font-size-16 align-middle"></i>
                                </a>
                                <div class="modal fade bs-{{$data ->  id }}-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Assign To Sponsor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" action="{{route('AssignSponsorOrphan', ['data' => $data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3 position-relative">
                                                                <label for="Sponsor_ID" class="form-label">Sponsor</label>
                                                                <div class="input-group " id="example-date-input">
                                                                    <select class="form-control  form-control-lg" id="Sponsor_ID" name="Sponsor_ID" value="{{ old('Sponsor_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                                                        @foreach($sponsors as $sponsor)
                                                                        <option value="{{$sponsor -> id}}">{{$sponsor -> FullName}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3 position-relative">
                                                                <label for="Sponsored_StartDate" class="form-label">Sponsored Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                <div class="input-group " id="example-date-input">
                                                                    <input class="form-control form-select-lg @error('Sponsored_StartDate') is-invalid @enderror" value="{{ old('Sponsored_StartDate') }}" type="date" id="example-date-input" name="Sponsored_StartDate" id="Sponsored_StartDate" required>
                                                                    @error('Sponsored_StartDate')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3 position-relative">
                                                                <label for="Sponsored_EndDate" class="form-label">Sponsored End Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                <div class="input-group " id="example-date-input">
                                                                    <input class="form-control form-select-lg @error('Sponsored_EndDate') is-invalid @enderror" value="{{ old('Sponsored_EndDate') }}" type="date" id="example-date-input" name="Sponsored_EndDate" id="Sponsored_EndDate" required>
                                                                    @error('Sponsored_EndDate')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg">Assign</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endif
                                @if( $data -> Status == 'Rejected')
                                <a href="{{route('DeleteOrphan', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                    <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a  class="btn btn-outline-primary waves-effect float-end  waves-light mt-3 ExportOrphans" id="ExportOrphans" name="ExportOrphans"><i class="mdi mdi-microsoft-excel me-1"></i>Export To Excel</a>
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
@section('script')
<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

<!-- Sweetalert -->
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
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

    $('.removeSponsor').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'Do you want to remove sponsr?!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
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

    $(document).ready(function() {
        $('.ExportOrphans').on('click', function() {
            var dID = $('.ids').val();
            if (dID)
            {
                $.ajax({
                    url: '{{route('ExportOrphans')}}',
                    type: "GET",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "ids":dID
                    },
                    success: function(data) {
                        if (data) {
                            $('.District').empty();
                            $.each(data, function(key, course) {
                                $('select[name="District_ID"]').append('<option value="' + course.id + '">' + course.Name + '</option>');
                            });
                        }
                    }
                });
            }
        });
    });

    $("#checkAll").click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>
@endsection