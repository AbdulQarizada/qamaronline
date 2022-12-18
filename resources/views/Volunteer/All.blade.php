@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Volunteers @endsection
@section('css')
@endsection
@section('content')
<div class="row mt-4">
    <div class="col-md-4 col-sm-12 ">
        <a href="{{route('root')}}" class="btn btn-outline-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        @if($PageInfo == 'All')
        <span class="my-0   card-title fw-medium font-size-24 text-wrap text-uppercase"><i class="bx bx-caret-right text-secondary font-size-20 "></i>Global Volunteers</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-12 mb-2">
        <select class="form-select  form-select-lg @error('Country') is-invalid @enderror" onchange="window.location.href = this.value;">
            <option value="{{route('AllVolunteer')}}">Please Filter Your Choices</option>
            <option value="{{route('AllVolunteer')}}" {{ $PageInfo == 'All' ? 'selected' : '' }}>Global</option>
            @foreach ($Countries as $Country)
            <option value="{{route('SearchVolunteer', ['data' => $Country -> Country])}}" {{ $PageInfo == $Country -> Country ? 'selected' : '' }}>{{ $Country -> Country}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <livewire:search />
    </div>
    <div class="col-md-5 col-sm-12 mb-2">
        <a href="#" class="btn  btn-lg waves-effect  waves-light  m-1 float-end" data-bs-toggle="tooltip" data-bs-placement="top" title="All Scholarships Grid View"> <i class="bx bx-grid-alt font-size-24 align-middle"></i></a>
        <a href="{{route('CreateVolunteer')}}" class="btn btn-outline-success btn-lg waves-effect  waves-light float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD VOLUNTEER</a>
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
                        <th>Volunteer In</th>
                        <th>Date Of Birth</th>
                        <th>Reason</th>
                        <th>Action</th>
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
                            <p class="text-muted mb-0">{{$data -> Email}}</p>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> Country}}</a></h5>
                                <p class="text-muted mb-0">{{$data -> City}}</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$data -> PrimaryNumber}}</a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning">{{$data -> SecondaryNumber}}</p>
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-success">{{$data -> InterestedDepartment}}</a></h5>
                            <a href="{{URL::asset('/uploads/Volunteer/Resumes/'.$data -> Resume)}}" target="_blank" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Resume">
                                <i class="mdi mdi-file-document-outline text-info font-size-18"></i>Resume</a>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1 text-dark">{{Carbon\Carbon::parse($data -> DOB) -> format("j F Y") }} </h5>
                                <h5 class="font-size-14 mb-1 text-warning"> {{\Carbon\Carbon::parse($data -> DOB)->diff(\Carbon\Carbon::now())->format('%y');}} Years Old </h5>
                                <h5 class="font-size-14 mb-1 text-info">{{ $data -> Gender }}</h5>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="font-size-18 pt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $data -> id }}">Click to Read</a>
                            <div class="col-lg-8">
                                <div class="modal fade" id="staticBackdrop-{{ $data -> id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Reason</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{ $data -> Reason }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Understand</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="{{route('DeleteVolunteer', ['data' => $data -> id])}}" class="btn btn-sm btn-outline-danger waves-effect waves-light delete-confirm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Record">
                                <i class="mdi mdi-delete-outline font-size-16 align-middle"></i>
                            </a>
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

</script>
@endsection
