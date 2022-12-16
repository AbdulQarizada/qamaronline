@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Education and Scholarship @endsection
@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{route('AllScholarship')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <a href="javascript:window.print()" class="btn btn-outline-dark mb-3 waves-effect waves-light"><i class=" bx bxs-printer   font-size-18"></i></a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Scholarship Information</h5>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div>
            <div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Avalible Seats</th>
                                <th>Application Duration</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class=" mb-1"><a href="#" class="text-dark">{{$data -> ScholarshipName}}</a></h5>
                                    <p class="text-muted mb-0">{{$data -> ScholarshipType}}</p>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> Country}}</a></h5>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-danger rounded-circle">
                                            {{$data -> Seats}}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1 text-success">{{Carbon\Carbon::parse($data -> StartDate) -> format("j F Y") }}</h5>
                                        <h5 class="font-size-14 mb-1 text-danger">{{ Carbon\Carbon::parse($data -> EndDate) -> format("j F Y") }}</h5>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        @if(Carbon\Carbon::now() < $data -> EndDate)
                                          <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></h5>
                                        @else
                                          <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger ">Expired</a></h5>
                                        @endif
                                    </div>
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
                                        <a data-bs-toggle="collapse" data-bs-target="#EditScholarship" aria-expanded="false" aria-controls="EditScholarship" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Record" class="btn btn-outline-info btn-sm waves-effect  waves-light float-end text-uppercase"><i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="collapse hide" id="EditScholarship">
            <div class="card shadow-none card-body text-muted mb-0 mb-4" style="border: 2px dashed #50a5f1;">
                <form class="needs-validation" action="{{route('UpdateScholarship', [$data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
                    @method('PUT')
                    @csrf
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3 ">
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active bg-info" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="mdi mdi-bullseye-arrow  d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Scholarship</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="card-header bg-info text-white mb-3"></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="ScholarshipName" class="form-label ">Scholarship Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <input type="text" class="form-control form-control-lg @error('ScholarshipName') is-invalid @enderror" value="{{ $data -> ScholarshipName }}" id="ScholarshipName" name="ScholarshipName" required>
                                                                    @error('ScholarshipName')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="ScholarshipType_ID" class="form-label">Scholarship Type <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <select class="form-select  form-select-lg @error('ScholarshipType_ID') is-invalid @enderror" value="{{ $data -> ScholarshipType_ID }}" id="ScholarshipType_ID" name="ScholarshipType_ID" required>
                                                                        <option value="">Select Scholarship Type</option>
                                                                        @foreach($scholarshiptypes as $scholarshiptype)
                                                                        <option value="{{ $scholarshiptype -> id}}" {{ $scholarshiptype -> id ==  $data -> ScholarshipType_ID ? 'selected' : '' }}>{{ $scholarshiptype -> Name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('ScholarshipType_ID')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Country_ID" class="form-label">Country <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <select class="form-select  form-select-lg  @error('Country_ID') is-invalid @enderror" value="{{ $data -> Country_ID }}" required id="Country_ID" name="Country_ID">
                                                                        <option value="">Select Your Country</option>
                                                                        @foreach($countries as $country)
                                                                        <option value="{{ $country -> id}}" {{ $country -> id ==  $data -> Country_ID ? 'selected' : '' }}>{{ $country -> Name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('Country_ID')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="StartDate" class="form-label">Application Start Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <input class="form-control form-select-lg @error('StartDate') is-invalid @enderror" value="{{ $data -> StartDate }}" type="date" id="example-date-input" name="StartDate" id="StartDate" required>
                                                                        @error('StartDate')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="EndDate" class="form-label">Application End Date <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="input-group " id="example-date-input">
                                                                        <input class="form-control form-select-lg @error('EndDate') is-invalid @enderror" value="{{ $data -> EndDate }}" type="date" id="example-date-input" name="EndDate" id="EndDate" required>
                                                                        @error('EndDate')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Seats" class="form-label ">Seats <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <input type="number" class="form-control form-control-lg @error('Seats') is-invalid @enderror" value="{{ $data -> Seats }}" id="Seats" name="Seats" max="999999" required>
                                                                    @error('Seats')
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
                                        </div>
                                        <div>
                                            <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit">Update </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4 mb-4">
    <div class="col-md-12 text-center">
        <div class="hstack gap-3">
            <h2 class="mt-4 mb-4">Scholarship Modules</h2>
            @if(Carbon\Carbon::now() < $data -> EndDate)
                <a data-bs-toggle="collapse" data-bs-target="#CreateModule" aria-expanded="false" aria-controls="CreateModule" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Module" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end"><i class="mdi mdi-plus font-size-16  align-middle me-1"></i>ADD MODULE</a>
                @endif
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="collapse hide" id="CreateModule">
            <div class="card shadow-none card-body text-muted mb-0 mb-4" style="border: 2px dashed #50a5f1;">
                <form class="needs-validation" action="{{route('CreateModuleScholarship')}}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-xl-2 col-sm-3 ">
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active bg-info" id="v-pills-personal-tab" data-bs-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                                        <i class="mdi mdi-bullseye-arrow  d-block check-nav-icon mt-4 mb-2"></i>
                                        <p class="fw-bold mb-4 text-uppercase">Module</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="card-header bg-info text-white mb-3"></h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 d-none">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="Scholarship_ID" class="form-label ">Scholarship Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <input type="text" class="form-control form-control-lg @error('Scholarship_ID') is-invalid @enderror" value="{{ $data -> id }}" id="Scholarship_ID" name="Scholarship_ID" required>
                                                                    @error('Scholarship_ID')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="ModuleName" class="form-label ">Module Name <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <input type="text" class="form-control form-control-lg @error('ModuleName') is-invalid @enderror" value="{{ old('ModuleName') }}" id="ModuleName" name="ModuleName" required>
                                                                    @error('ModuleName')
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
                                        </div>
                                        <div>
                                            <button class="btn btn-outline-danger btn-lg waves-effect  waves-light float-end btn-rounded w-lg" type="submit">Submit </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($data -> modules as $module)
    <div class="col-md-1 mb-1">
        <div class="d-flex flex-wrap gap-2">
            <div class="avatar-xs">
                <span class="avatar-title bg-dark rounded-circle">
                    {{$loop->iteration}}
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-1">
        <div class="d-flex flex-wrap gap-2">
            <h6 class="mb-1"><a href="#" class="text-dark">{{$module -> ModuleName}}</a></h6>
        </div>
    </div>
    <div class="col-md-2 mb-1">
        <div class="d-flex flex-wrap gap-2">
            @if(Carbon\Carbon::now() < $data -> EndDate)
                <a href="{{route('DeleteModuleScholarship', ['data' => $module -> id])}}" class="btn btn-sm text-danger  waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete {{$module -> ModuleName}}"><i class="mdi mdi-delete-outline font-size-16 align-middle"></i></a>
                @endif
        </div>
    </div>
    @endforeach
</div>

<br />
<br />
<br />
<div class="row mt-4">
    <div class="col-md-10">
        <h5 style="font-weight: bold;" class="card-header  text-dark mb-3">Applicants Information</h5>
    </div>
    <div class="col-md-2 col-sm-2 mb-2">
        <a href="{{route('CreateApplication')}}" target="_blank" aria-expanded="false" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD APPLICANT</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="">
            <div class="">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Applied Applicants</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Selected For Interview</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Finalized Applicants</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Accepted Offer</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Rejected</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
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
                                                <th>Avalible Seats</th>
                                                <th>Application Duration</th>
                                                <th>Status</th>
                                                <th>Created By</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data -> applicants as $data)
                                            @if($data -> Status == "Pending")
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
                                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ScholarshipName}}</a></h5>
                                                    <p class="text-muted mb-0">{{$data -> ScholarshipType}}</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> Country}}</a></h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-danger rounded-circle">
                                                            {{$data -> Seats}}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1 text-success">{{Carbon\Carbon::parse($data -> StartDate) -> format("j F Y") }}</h5>
                                                        <h5 class="font-size-14 mb-1 text-danger">{{ Carbon\Carbon::parse($data -> EndDate) -> format("j F Y") }}</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        @if(Carbon\Carbon::now() <= $data -> EndDate)
                                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger ">Expired</a></h5>
                                                            @else
                                                            <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></h5>
                                                            @endif
                                                    </div>
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
                                                        <a href="{{route('StatusApplicant', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Applicant Details"><i class="mdi mdi-format-list-bulleted-square font-size-16 align-middle"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endif
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
                                    {!! $appliedApplicants->links() !!} <span class="m-2 text-white badge bg-dark">{{ $appliedApplicants->total() }} Total Records</span>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile1" role="tabpanel"></div>
                    <div class="tab-pane" id="messages1" role="tabpanel"></div>
                    <div class="tab-pane" id="settings1" role="tabpanel"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>

<script>
    $('.reinitiate').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be re initiated!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

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

    $('.approve').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be approved!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.reject').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?'
            , text: 'This record and it`s details will be rejected!'
            , icon: 'warning'
            , buttons: ["Cancel", "Yes!"]
        , }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    function Random() {
        const result = Math.random().toString(36).substring(2, 7);
        document.getElementById('QCC').value = result;
    };

</script>

@endsection
