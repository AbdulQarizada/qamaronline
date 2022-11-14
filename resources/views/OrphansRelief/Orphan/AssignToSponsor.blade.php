@extends(Auth::user()->IsEmployee == 1 ? 'layouts.master-layouts' : 'layouts.master')

@section('title') Orphan and Sponsorships @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection


@section('content')
<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('AllOrphans')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light "><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i>Assign To Sponsor</span>
    </div>
</div>


@foreach($datas as $data)
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table align-middle table-nowrap table-hover">
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <img class="rounded avatar-lg" src="{{URL::asset('/uploads/OrphansRelief/Orphans/Profiles/'.$data -> Profile)}}" alt="">
                            </div>
                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> FirstName}} {{$data -> LastName}}</a></h5>
                            <p class="text-muted mb-0">ID: {{$data -> id}}</p>
                        </td>
                        <td>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"> TazkiraID</a></h5>
                            <p class="text-muted mb-0">{{$data -> TazkiraID}}</p>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> Province}}</a></h5>
                                <p class="text-muted mb-0">{{$data -> District}}</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$data -> PrimaryNumber}}</a></h5>
                                <p class="text-muted mb-0 badge badge-soft-warning">{{$data -> SecondaryNumber}}</p>
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
                            <p class=" mb-0 text-danger">Waiting Since</p>
                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$data -> created_at -> format("d-m-Y") }}</a></h5>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach

<div class="row">
    <div class="col-lg-12">
        <div class="card ">
            <h4 class="card-header bg-dark text-white "></h4>
            <div class="card-body">
                <form class="needs-validation" action="{{route('AssignSponsorOrphan', ['data' => $data -> id])}}" method="POST" enctype="multipart/form-data" novalidate>
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 position-relative">
                                <label for="Sponsor_ID" class="form-label">Select Sponsor</label>
                                <div class="input-group " id="example-date-input">
                                    <select class="form-control  form-control-lg select2" id="Sponsor_ID" name="Sponsor_ID" value="{{ old('Sponsor_ID') }}" style="height: calc(1.5em + .75rem + 2px) !important;" required>
                                        <option value="None">Select</option>
                                        @foreach($sponsors as $sponsor)
                                        <option value="{{$sponsor -> id}}">{{$sponsor -> FullName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
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
                        <div class="col-md-4 ">
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
                    <button class="btn btn-success btn-lg m-3" type="submit">Assign</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>


<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>

@endsection