@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Orphan and Sponsorships @endsection
@section('css')
@endsection
@section('content')
<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('IndexOrphansRelief')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @if($PageInfo == 'All')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>All Payments</span>
        @endif
        @if($PageInfo == 'Active')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Due Payments</span>
        @endif
        @if($PageInfo == 'InActive')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20"></i>Successfull Payments</span>
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
                <option value="{{route('AllSponsor')}}">Please Filter Your Choices</option>
                <option value="{{route('AllSponsor')}}" {{ $PageInfo == 'All' ? 'selected' : '' }}>All</option>
                <option value="{{route('ActiveSponsor')}}" {{ $PageInfo == 'Active' ? 'selected' : '' }}>Due</option>
                <option value="{{route('InActiveSponsor')}}" {{ $PageInfo == 'InActive' ? 'selected' : '' }}>Successfull</option>
            </select>
        </div>
    </div>
    <div class="col-md-8 col-sm-12 mb-2">
        <!-- <a class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Orphans Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a> -->
        <!-- <a href="{{route('CreateSponsor')}}" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD SPONSOR</a> -->
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="card-header bg-dark text-white"></h3>
        <div class="table-responsive">
            <table class="table  table-striped table-hover dt-responsive nowrap w-100">
                <thead class="table-light">
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="checkAll">
                        </th>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Charge ID</th>
                        <th>Payment </h>
                        <th>Email</th>
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
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FullName}}</a></h5>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> ChargeID}}</a></h5>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-success">{{$data -> PaymentAmount}}</a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning">{{$data -> PaymentOption}}</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> Email}}</a></h5>
                            </div>
                        </td>
                        <td>
                            <div>
                                @if($data -> IsActive == 1)
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Successfull Payment </a></h5>
                                <p class="text-muted mb-0">{{$data -> updated_at -> format("d-m-Y")}}</p>
                                @endif
                                @if($data -> IsActive != 1)
                                <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">Due Payment </a></h5>
                                <p class="text-muted mb-0">{{$data -> updated_at -> format("d-m-Y")}}</p>
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
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Online</a></h5>
                                <p class="text-muted mb-0">Registration</p>
                            </div>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{route('RecieptPayment', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-warning waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Reciept">
                                    <i class="mdi mdi-receipt font-size-16 align-middle"></i>
                                </a>
                                @if($data -> IsActive == 0)
                                <a href="{{route('EditSponsor', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-info waves-effect waves-light email" data-bs-toggle="tooltip" data-bs-placement="top" title="Email Sponsor">
                                    <i class="mdi mdi-email-outline font-size-16 align-middle"></i>
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
    $('.email').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'Do you want to email this sponsor?',
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