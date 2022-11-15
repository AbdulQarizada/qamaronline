@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')

@section('title') Orphan and Sponsorships @endsection

@section('css')

@endsection

@section('content')

<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('IndexOrphansRelief')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @if($PageInfo == 'All')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>All Sponsors</span>
        @endif
        @if($PageInfo == 'Active')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Active Sponsors</span>
        @endif
        @if($PageInfo == 'InActive')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>InActive Sponsors</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-3">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror" onchange="window.location.href=this.value;">
            <option value="{{route('AllSponsor')}}">Please Filter Your Choices</option>
            <option value="{{route('AllSponsor')}}">All</option>
            <option value="{{route('ActiveSponsor')}}">Active</option>
            <option value="{{route('InActiveSponsor')}}">InActive</option>
        </select>
    </div>
    <div class="col-9">
        <a href="{{route('CreateSponsor')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD SPONSOR</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>
            <div class="card-body">
                <table class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone Numbers</th>
                            <th>Email</th>
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
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FullName}}</a></h5>
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
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> email}}</a></h5>
                                </div>
                            </td>
                            <td>
                                <div>
                                    @if($data -> IsActive == 1)
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">Active </a></h5>
                                    <p class="text-muted mb-0">{{$data -> updated_at -> format("d-m-Y")}}</p>
                                    @endif
                                    @if($data -> IsActive != 1)
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">InActive </a></h5>
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
                                    <a href="{{route('StatusSponsor', ['data' => $data -> id])}}" class="btn btn-warning waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View Details">
                                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                    </a>
                                    @if($data -> IsActive == 0)
                                    <a href="{{route('EditSponsor', ['data' => $data -> id])}}" class="btn btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit Record">
                                        <i class=" bx bx-edit font-size-16 align-middle"></i>
                                    </a>
                                    <a href="{{route('DeleteSponsor', ['data' => $data -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm" data-toggle="tooltip" data-placement="top" title="Delete Record">
                                       <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                   </a>
                                   @endif
                                   <a data-bs-toggle="modal" data-bs-target=".bs-{{$data ->  id }}-modal-center" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Reset Password">
                                        <i class="mdi mdi-lock-reset    font-size-16 align-middle"></i>
                                    </a>
                                    <div class="modal fade bs-{{$data ->  id }}-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Reset Password</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" action="{{route('ResetPasswordSponsor', [$data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-3 position-relative">
                                                                    <label for="password" class="form-label ">New Password <i class="mdi mdi-asterisk text-danger"></i></label>
                                                                    <div class="hstack gap-3">
                                                                        <input class="form-control form-control-lg me-auto @error('password') is-invalid @enderror" value="{{ old('password') }}" type="text" name="password" id="qcc">
                                                                        <!-- <button type="button" class="btn btn-lg btn-outline-danger" onclick="Random();"><i class=" bx bxs-magic-wand  font-size-16 align-middle"></i> </button> -->
                                                                        @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success btn-lg" type="submit">Change </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
             {!! $datas->links() !!} <span class="m-2 text-white badge badge-soft-dark">{{ $datas->total() }} Total Records</span>
        </ul>
    </div>
</div>
@endsection
@section('script')
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
</script>
@endsection