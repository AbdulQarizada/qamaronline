@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Education and Scholarship @endsection
@section('css')
@endsection
@section('content')
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="{{route('IndexEducation')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @if($PageInfo == 'All')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>All Scholarships</span>
        @endif
        @if($PageInfo == 'Active')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Active Scholarships</span>
        @endif
        @if($PageInfo == 'Expired')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Expired Scholarships</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-12 mb-2">
        <select class="form-select  form-select-lg @error('Country') is-invalid @enderror" onchange="window.location.href = this.value;">
            <option value="{{route('AllScholarship')}}">Please Filter Your Choices</option>
            <option value="{{route('AllScholarship')}}" {{ $PageInfo == 'All' ? 'selected' : '' }}>All</option>
            <option value="{{route('ActiveScholarship')}}" {{ $PageInfo == 'Active' ? 'selected' : '' }}>Active</option>
            <option value="{{route('ExpiredScholarship')}}" {{ $PageInfo == 'Expired' ? 'selected' : '' }}>Expired</option>
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <livewire:search />
    </div>
    <div class="col-md-5 col-sm-12 mb-2">
        <a href="#" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Scholarships Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a data-bs-toggle="collapse" data-bs-target="#addUser" aria-expanded="false" aria-controls="addUser" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD SCHOLARSHIP</a>
    </div>
</div>
<div class="row ">
    <div class="col-md-12">
        <div class="collapse hide" id="addUser">
            <div class="card shadow-none card-body text-muted mb-0 mb-4" style="border: 2px dashed #50a5f1;">
                <form class="needs-validation" action="{{route('CreateScholarship')}}" method="POST" enctype="multipart/form-data" novalidate>
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
                                                                    <input type="text" class="form-control form-control-lg @error('ScholarshipName') is-invalid @enderror" value="{{ old('ScholarshipName') }}" id="ScholarshipName" name="ScholarshipName" required>
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
                                                                    <select class="form-select  form-select-lg @error('ScholarshipType_ID') is-invalid @enderror" value="{{ old('ScholarshipType_ID') }}" id="ScholarshipType_ID" name="ScholarshipType_ID" required>
                                                                        <option value="">Select Scholarship Type</option>
                                                                        @foreach($scholarshiptypes as $scholarshiptype)
                                                                        <option value="{{ $scholarshiptype -> id}}">{{ $scholarshiptype -> Name}}</option>
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
                                                                    <select class="form-select  form-select-lg  @error('Country_ID') is-invalid @enderror" value="{{ old('Country_ID') }}" required id="Country_ID" name="Country_ID">
                                                                        <option value="">Select Your Country</option>
                                                                        @foreach($countries as $country)
                                                                        <option value="{{ $country -> id}}">{{ $country -> Name}}</option>
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
                                                                        <input class="form-control form-select-lg @error('StartDate') is-invalid @enderror" value="{{ old('StartDate') }}" type="date" id="example-date-input" name="StartDate" id="StartDate" required>
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
                                                                        <input class="form-control form-select-lg @error('EndDate') is-invalid @enderror" value="{{ old('EndDate') }}" type="date" id="example-date-input" name="EndDate" id="EndDate" required>
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
                                                                    <input type="number" class="form-control form-control-lg @error('Seats') is-invalid @enderror" value="{{ old('Seats') }}" id="Seats" name="Seats" max="999999" required>
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
                        <th>Avalible Seats</th>
                        <th>Application Duration</th>
                        <th>Status</th>
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
                                @if(Carbon\Carbon::now() >= $data -> EndDate)
                                <a href="{{route('StatusScholarship', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-warning  waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Modules"><i class="mdi mdi-format-list-bulleted-square font-size-16 align-middle"></i> </a>
                                @endif
                                <a href="{{route('StatusScholarship', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                                    <i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('DeleteScholarship', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record"><i class="mdi mdi-delete-outline font-size-16 align-middle"></i></a>
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
