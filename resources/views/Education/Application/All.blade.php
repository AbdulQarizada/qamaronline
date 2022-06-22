@extends('layouts.master-layouts')

@section('title') Qamar Care List @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')


<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('IndexEducation')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>

    </div>
</div>

<div class="row">
    <div class="col-12 ">
        <div class="card border border-3">
            <div class="card-header">
                <blockquote class="blockquote border-info  font-size-14 mb-0">
                    <p class="my-0   card-title fw-medium font-size-24 text-wrap">APPLICANTS</p>

                </blockquote>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-3">
        <select class="form-select  form-select-lg mb-3 @error('Country') is-invalid @enderror" onchange="window.location.href=this.value;">

            <option value="{{route('AllApplicantEducation')}}">Please Filter Your Choices</option>

            <option value="{{route('AllApplicantEducation')}}">All</option>
            <option value="{{route('PendingApplicantsEducation')}}">Pending</option>
            <option value="{{route('ApprovedApplicantsEducation')}}">Approved</option>
            <option value="{{route('RejectedApplicantsEducation')}}">Rejected</option>




        </select>
    </div>
    <div class="col-9 ">
        <!-- <i class="bx bx-plus-circle  font-size-24 label-icon"></i> btn-label -->
        <a href="{{route('CreateApplicationEducation')}}" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">ADD APPLICANTS</a>

        <!-- <a  href="{{route('SuccessApplicationEducation')}}" class="btn btn-primary btn-lg waves-effect  waves-light mb-3 float-end">Sucess</a> -->

    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <h3 class="card-header bg-info text-white"></h3>
            <div class="card-body">

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100 m-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Phone Numbers</th>
                            <th>Education</th>
                            <th>Date of Birth</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </tr>
                    </thead>


                    <tbody>
                        @foreach($applicants as $applicant)
                        <tr>
                            <td>{{$applicant -> id}}</td>
                            <td>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$applicant -> FirstName}} {{$applicant -> LastName}}</a></h5>
                                <p class="text-muted mb-0">TazkiraID:{{$applicant -> TazkiraID}}</p>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$applicant -> CurrentProvince}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> CurrentDistrict}}</p>

                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$applicant -> PrimaryNumber}}</a></h5>
                                    <p class="text-muted mb-0 badge badge-soft-warning">{{$applicant -> SecondaryNumber}}</p>
                                    <!-- <p class="text-muted mb-0 badge badge-soft-danger">{{$applicant -> RelativeNumber}}</p> -->
                                </div>
                            </td>
                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$applicant -> SchoolName}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> SchoolGraduationDate}}</p>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$applicant -> DOB}}</a></h5>
                                    <p class="text-muted mb-0">{{\Carbon\Carbon::parse($applicant -> DOB)->diff(\Carbon\Carbon::now())->format('%y Years Old');}}</p>
                                </div>
                            </td>
                            <td>
                                <div>


                                    @if($applicant -> Status == 'Pending')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$applicant -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p>

                                    @endif

                                    @if($applicant -> Status == 'Approved')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$applicant -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p>

                                    @endif

                                    @if($applicant -> Status == 'Rejected')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$applicant -> Status}} </a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p>

                                    @endif



                                    @if($applicant -> Status == 'ReInitiated')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">{{$applicant -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p>

                                    @endif

                                    @if($applicant -> Status == 'Released')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$applicant -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p>

                                    @endif

                                    @if($applicant -> Status == 'Printed')
                                    <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">{{$applicant -> Status}}</a></h5>
                                    <p class="text-muted mb-0">{{$applicant -> created_at}}</p>

                                    @endif

                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{route('StatusApplicantEducation', ['data' => $applicant -> id])}}" class="btn btn-warning waves-effect waves-light">
                                        <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                    </a>

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

    $('.release').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This card is released!',
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