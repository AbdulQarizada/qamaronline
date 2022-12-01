@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
@endsection
@section('content')
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="{{route('IndexOrphansRelief')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @if($PageInfo == 'All')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>All Cards</span>
        @endif
        @if($PageInfo == 'Active')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Active Cards</span>
        @endif
        @if($PageInfo == 'InActive')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>In Active Cards</span>
        @endif

    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-12 mb-2">
        <div class="hstack gap-3">
            <a class="btn  btn-lg waves-effect  waves-light" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" data-bs-toggle="tooltip" data-bs-placement="top" title="Filter"> <i class="mdi mdi-filter-menu-outline font-size-24 align-middle"></i></a>
            <select class="form-select  form-select-lg @error('Country') is-invalid @enderror" onchange="window.location.href=this.value;">
                <option value="{{route('AllCard')}}">Please Filter Your Choices</option>
                <option value="{{route('AllCard')}}" {{ $PageInfo == 'All' ? 'selected' : '' }}>All</option>
                <option value="{{route('ActiveCard')}}" {{ $PageInfo == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="{{route('InActiveCard')}}" {{ $PageInfo == 'InActive' ? 'selected' : '' }}>InActive</option>
            </select>
        </div>
    </div>
        <div class="col-md-8 col-sm-12 mb-2">
        <a href="#" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Card Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="{{route('CreateCard')}}" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded text-uppercase"><i class="mdi mdi-plus me-1"></i>ADD Card</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="collapse" id="collapseWidthExample">
            <form action="{{route('SearchOrphans')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-2 mb-2">
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
                    <div class="col-md-2 mb-2">
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
                    <div class="col-md-3 mb-2">
                        <input type="text" name="PageInfo" value="{{ $PageInfo }}" class="d-none">
                        <input class="form-control form-control-lg" type="text" name="data">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-outline-danger btn-lg waves-effect  waves-light"><i class="mdi mdi-magnify me-1"></i>Filter</button>
                    </div>
                </div>
            </form>
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
                        <th>Email</th>
                        <th>Contacts</th>
                        <th>Card Number</th>
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
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data ->  user -> FullName}}</a></h5>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $data -> user -> email}}</a></h5>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$data -> user -> PrimaryNumber}}</a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning">{{$data -> user -> SecondaryNumber}}</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i class="mdi mdi-asterisk text-danger"></i>
                                <i >{{$data -> CardLastFourDigit}}</i>
                            </div>
                        </td>
                        <td>                          
                            @if($data -> IsActive != 1)
                            <h3 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">InActive</a></h3>
                            @endif
                            @if($data -> IsActive == 1)
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active</a></h5>
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
                                @if( $data -> IsActive == 1)
                                <a href="{{route('DeActivateCard', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect DeActivateCard waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="De-Activate Card">
                                    <i class="mdi mdi-credit-card-remove-outline font-size-16 align-middle"></i>
                                </a>
                                @endif
                                @if($data -> IsActive != 1)
                                <a href="{{route('ActivateCard', ['data' => $data -> id])}}"  class="btn btn-sm btn-outline-success waves-effect ActivateCard waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Activate Card">
                                    <i class="mdi mdi-credit-card-check-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('EditCard', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-info waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                                    <i class="mdi mdi-square-edit-outline font-size-16 align-middle"></i>
                                </a>
                                <a href="{{route('DeleteCard', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
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
    // DeACtivate Card Confirmation
    $('.DeActivateCard').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'Do you want to DeActivate Card?!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
        // Activate Card Confirmation
    $('.ActivateCard').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'Do you want to Activate Card?!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
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
