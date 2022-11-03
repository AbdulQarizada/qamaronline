@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')



@section('title') @lang('translation.Dashboards') @endsection
@section('css')

<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

<!-- tui charts Css -->
<link href="{{ URL::asset('/assets/libs/tui-chart/tui-chart.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')


<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">

                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <div class="avatar-xl rounded-circle mini-stat-icon">
                            <span class="avatar-title rounded-circle bg-dark">
                                @if(Auth::user()->IsEmployee == 1)
                                <img class="rounded-circle header-profile-user avatar-xl" src="{{ isset(Auth::user()->Profile) ? asset('/uploads/User/Employees/Profiles/'.Auth::user() -> Profile) : asset('/uploads/User/avatar-1.png') }}" alt="Profile">

                                @else
                                <img class="rounded-circle header-profile-user avatar-xl" src="{{ isset(Auth::user()->Profile) ? asset('/uploads/User/Sponsors/Profiles/'.Auth::user() -> Profile) : asset('/uploads/User/avatar-1.png') }}" alt="Profile">
                                @endif
                            </span>
                        </div>
                    </div>

                    <div class="flex-grow-1">
                        <div class="text-muted">
                            <h5>{{ Str::ucfirst(Auth::user()->FullName) }}</h5>
                            <p class="mb-1">{{ Str::ucfirst(Auth::user()->email) }}</p>
                            <p class="mb-0">{{ Str::ucfirst(Auth::user()->Job) }}</p>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>

    <div class="col-xl-8">
        <div class="row">
            <div class="col-sm-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <i class="mdi mdi-bitcoin h2 text-warning mb-0"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-2"></p>
                                <h5 class="mb-0"> <span class="font-size-14 text-muted"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <i class="mdi mdi-ethereum h2 text-primary mb-0"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-2"></p>
                                <h5 class="mb-0"><span class="font-size-14 text-muted"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <i class="mdi mdi-litecoin h2 text-info mb-0"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-2"></p>
                                <h5 class="mb-0"><span class="font-size-14 text-muted"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end row -->
<br />
<br />
<div class="row mb-4">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Select Dashboard Reports</label>

            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                <optgroup label="Qamar Care Card">
                    <option value="AK">Operatons</option>
                    <option value="HI">Food Packs</option>
                </optgroup>
            </select>

        </div>
    </div>
    <div class="col-md-2">
        <div class="mb-3 mt-4">
            <label class="form-label"></label>

            <button class="btn btn-primary form-control">Filter</button>

        </div>
    </div>
</div>

@if(Auth::user()->IsEmployee == 1)
@if(Cookie::get('Layout') == 'LayoutNoSidebar')

<div class="row">
    @if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1)

    <h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">Projects</h1>
    @endif

    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-4 mb-2">
                <a href="{{route('IndexOrphansRelief')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Orphans Relief</p>
                                        <h6 class="text-muted mb-0">Orphans</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bx-smile font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsAidAndRelief == 1)
            <div class="col-md-4 mb-2">
                <a href="AidAndRelief">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Aid and Relief</p>
                                        <h6 class="text-muted mb-0">Aid and Relief</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-briefcase-alt-2 font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsWash == 1)
            <div class="col-md-4 mb-2">
                <a href="Wash">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Wash</p>
                                        <h6 class="text-muted mb-0">Wash</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-gas-pump font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsEducation == 1)
            <div class="col-md-4 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Education</p>
                                        <h6 class="text-muted mb-0">Education</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-graduation font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            @if(Auth::user()->IsInitiative == 1)
            <div class="col-md-4 mb-2">
                <a href="Initiative">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Initiative</p>
                                        <h6 class="text-muted mb-0">Initiative</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-bulb font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            @if(Auth::user()->IsMedicalSector == 1)
            <div class="col-md-4 mb-2">
                <a href="MedicalSector">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Medical Sector</p>
                                        <h6 class="text-muted mb-0">Medical Sector</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bxs-ambulance font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- end row -->


<div class="row ">
    @if(Auth::user()->IsFoodAppeal == 1 || Auth::user()->IsQamarCareCard == 1 || Auth::user()->IsAppealsDistributions == 1 || Auth::user()->IsDonorsAndDonorBoxes == 1)
    <h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">Benef. Services</h1>
    @endif

    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsFoodAppeal == 1)
            <div class="col-md-4 mb-2">
                <a href="FoodAppeal">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Food Appeal</p>
                                        <h6 class="text-muted mb-0">Food Appeal</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-fingerprint  font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsQamarCareCard == 1)
            <div class="col-md-4 mb-2">
                <a href="{{route('IndexCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Care Card</p>
                                        <h6 class="text-muted mb-0">Care Card</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bx-credit-card font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsAppealsDistributions == 1)
            <div class="col-md-4 mb-2">
                <a href="AppealsDistributions">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Appeals' Distributions</p>
                                        <h6 class="text-muted mb-0">Appeals' Distributions</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bx-task font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsDonorsAndDonorBoxes == 1)

            <div class="col-md-4 mb-2">
                <a href="Donors&DonorBoxes">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">Donors & Donor Boxes</p>
                                        <h6 class="text-muted mb-0">Donors & Donor Boxes</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <i class="bx bxs-box font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>

            @endif

        </div>
    </div>
</div>
<!-- end row -->




<div class="row">
    @if(Auth::user()->IsSuperAdmin == 1)
    <h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted">System Management</h1>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsSuperAdmin == 1)
            <div class="col-md-4 mb-2">
                <a href="{{route('IndexUserManagement')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote  font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">User Managements</p>
                                        <h6 class="text-muted mb-0">Users Management</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-report  font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsSuperAdmin == 1)
            <div class="col-md-4 mb-2">
                <a data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-semibold">ADD LOOK UPS</p>
                                        <!-- <h6 class="text-muted mb-0">Monthly Reports</h4> -->
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-report  font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- center modal -->

                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">ADD LOOK UP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">


                                    <form class="needs-validation" action="{{route('CreateLookups')}}" method="POST" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3 position-relative">
                                                    <label for="Parent_Name" class="form-label">Main Catagory <i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <div class="input-group">

                                                        <select class="form-select  form-select-lg @error('Parent_Name') is-invalid @enderror" value="{{ old('Parent_Name') }}" required id="Parent_Name" name="Parent_Name">
                                                            <!-- <option value="None">Main Catagory</option> -->

                                                            @foreach($catagorys as $catagory)
                                                            <option value="{{ $catagory -> Name}}">{{ $catagory -> Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('Parent_Name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 position-relative">
                                                    <label for="Name" class="form-label ">Name<i class="mdi mdi-asterisk text-danger"></i></label>
                                                    <input type="text" class="form-control form-control-lg @error('Name') is-invalid @enderror" value="{{ old('Name') }}" id="Name" name="Name" required>
                                                    @error('Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-success btn-lg" type="submit">Save </button>
                                        <a class="btn btn-danger btn-lg" href="{{route('root')}}">Cancel</a>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- end card -->
                </div>
            </div>
            @endif


        </div>
    </div>
</div>
<!-- end row -->
@endif


@if(Cookie::get('Layout') == 'LayoutSidebar')

<!-- start page title -->

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft">Lastest Beneficiaries</h5>
            <div class="card-body">

                <!-- <p class="text-muted fw-medium">Beneficiaries</p> -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <td><img class="d-block" src="{{ URL::asset('/assets/images/qcc/front.jpeg') }}" height="185px" alt="First slide"></td>

                        </div>
                        @foreach($qamarcarecardsLastFive as $qamarcarecard)
                        <div class="carousel-item ">
                            <table class="table project-list-table table-nowrap align-middle table-borderless">
                                <tbody>
                                    <tr>
                                        <td><img class="d-block img-thumbnail rounded-circle avatar-xl" src="{{URL::asset('/uploads/QamarCareCard/Beneficiaries/Profiles/'.$qamarcarecard -> Profile)}}" alt="First slide"></td>
                                        <td>
                                            <h5 class="text-truncate font-size-18 fw-semibold "><a href="#" class="text-dark">{{ $qamarcarecard -> FirstName }} </a></h5>
                                            <h6 class="text-truncate font-size-18 "><a href="#" class="text-dark">{{ $qamarcarecard -> FamilyStatus }} </a></h6>

                                            <span class="text-danger text-uppercase">Created At: </span>{{ $qamarcarecard -> created_at -> format("d-m-Y")}}
                                            <div class="d-flex flex-wrap gap-2">
                                                <a href="{{route('StatusCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-warning waves-effect waves-light">
                                                    <i class="bx bx-show-alt font-size-16 align-middle"></i> Visit Profile
                                                </a>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header text-dark bg-secondary bg-soft">General</h5>
                <div class="card-body">
                    <div id="AllInOne" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4 text-center ">
                <div class="card">
                    <h5 class="card-header text-dark bg-secondary bg-soft">Total Care Cards</h5>
                    <div class="card-body">
                        <h2 class=" rounded display-2 bg-warning text-white">{{$qamarcarecardsCount}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-dark bg-secondary bg-soft">Pending Care Cards</h5>
                    <div class="card-body">
                        <div class="" dir="ltr">
                            <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="{{$qamarcarecardsCount}}" data-displayprevious="false" value="{{$qamarcarecardsPending}}" data-linecap="round" data-fgcolor="#74788d">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-dark bg-secondary bg-soft">Approved Care Cards</h5>
                    <div class="card-body">
                        <div class="" dir="ltr">
                            <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="{{$qamarcarecardsCount}}" data-displayprevious="false" value="{{$qamarcarecardsApproved}}" data-linecap="round" data-fgcolor="#34c38f">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-dark bg-secondary bg-soft">Printed Care Cards</h5>
                    <div class="card-body">
                        <div class="" dir="ltr">
                            <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="{{$qamarcarecardsCount}}" data-displayprevious="false" value="{{$qamarcarecardsPrinted}}" data-linecap="round" data-fgcolor="#343a40">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-dark bg-secondary bg-soft">Released Care Cards</h5>
                    <div class="card-body">
                        <div class="" dir="ltr">
                            <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="{{$qamarcarecardsCount}}" data-displayprevious="false" value="{{$qamarcarecardsReleased}}" data-linecap="round" data-fgcolor="#34c38f">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-dark bg-secondary bg-soft">Rejected Care Cards</h5>
                    <div class="card-body">
                        <div class="" dir="ltr">
                            <input class="knob" data-width="150" data-readOnly=true data-angleoffset="0" data-max="{{$qamarcarecardsCount}}" data-displayprevious="false" value="{{$qamarcarecardsRejected}}" data-linecap="round" data-fgcolor="#f46a6a">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>


<!-- end row -->
<div class="row mb-4">
    <div class="col-xl-4 mb-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft">Gender</h5>
            <div class="card-body">
                <div class="">
                    <div id="GenderChart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 mb-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft">Tribes</h5>
            <div class="card-body">
                <div class="">
                    <div id="TribeChart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-xl-6">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft">Family Status</h5>
            <div class="card-body">
                <div class="">
                    <div id="FamilyStatusChart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft">Provincial Care Cards</h5>
            <div class="card-body">
                <div class="">
                    <div id="AfghanistanChart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-xl-12">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft">Cards Insertion Timeline</h5>
            <div class="card-body">
                <div class="">
                    <div id="DataInsertionChart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
        <h4 class="card-header text-dark bg-secondary bg-soft">Latest Transaction</h4>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>Address</th>
                                <th>Phone Numbers</th>
                                <th>Family Status</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach($qamarcarecardsLastFive as $qamarcarecard)
                            <tr>
                                <!-- <td>{{ $qamarcarecard->id }}</td> -->
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> FirstName}} {{$qamarcarecard -> LastName}}</a></h5>
                                    <p class="text-muted mb-0">QCC-{{$qamarcarecard -> QCC}}</p>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> ProvinceName}}</a></h5>
                                        <p class="text-muted mb-0">{{$qamarcarecard -> DistrictName}}</p>
                                        <p class="text-muted mb-0">{{$qamarcarecard -> Village}}</p>

                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$qamarcarecard -> PrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$qamarcarecard -> SecondaryNumber}}</p>
                                        <p class="text-muted mb-0 badge badge-soft-danger">{{$qamarcarecard -> RelativeNumber}}</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard -> FamilyStatus}}</a></h5>
                                        @if( $qamarcarecard -> LevelPoverty == 1)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-secondary font-size-14"></i>
                                        <i class="bx bxs-star text-secondary font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>

                                        @endif
                                        @if( $qamarcarecard -> LevelPoverty == 2)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-secondary font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        @endif
                                        @if( $qamarcarecard -> LevelPoverty == 3)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-warning font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        @endif
                                        @if( $qamarcarecard -> LevelPoverty == 4)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-warning font-size-16"></i>
                                        <i class="bx bxs-star text-warning font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        @endif
                                        @if( $qamarcarecard -> LevelPoverty == 5)
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


                                        @if($qamarcarecard -> Status == 'Pending')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$qamarcarecard -> Status}}</a></h5>
                                        <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("j F Y")}}</p>

                                        @endif

                                        @if($qamarcarecard -> Status == 'Approved')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$qamarcarecard -> Status}} </a></h5>
                                        <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("j F Y")}}</p>

                                        @endif

                                        @if($qamarcarecard -> Status == 'Rejected')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$qamarcarecard -> Status}} </a></h5>
                                        <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("j F Y")}}</p>

                                        @endif



                                        @if($qamarcarecard -> Status == 'ReInitiated')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">{{$qamarcarecard -> Status}}</a></h5>
                                        <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("j F Y")}}</p>

                                        @endif

                                        @if($qamarcarecard -> Status == 'Released')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$qamarcarecard -> Status}}</a></h5>
                                        <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("j F Y")}}</p>

                                        @endif

                                        @if($qamarcarecard -> Status == 'Printed')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">{{$qamarcarecard -> Status}}</a></h5>
                                        <p class="text-muted mb-0">{{$qamarcarecard -> created_at -> format("j F Y")}}</p>

                                        @endif

                                    </div>
                                </td>
                                <td>
                                    @if( $qamarcarecard -> Created_By !="")

                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$qamarcarecard ->  UFirstName }} {{$qamarcarecard ->  ULastName }}</a></h5>
                                        <p class="text-muted mb-0">{{$qamarcarecard ->  UJob }}</p>

                                    </div>
                                    @endif
                                    @if( $qamarcarecard -> Created_By =="")

                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                        <p class="text-muted mb-0">Requested</p>

                                    </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="{{route('StatusCareCard', ['data' => $qamarcarecard -> id])}}" class="btn btn-warning waves-effect waves-light">
                                            <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                        </a>




                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endif
@else

@endif
@endsection

@apexchartsScripts

@section('script')

<script src="{{ URL::asset('/assets/libs/jquery-knob/jquery-knob.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/jquery-knob.init.js') }}"></script>

<!-- tui charts plugins -->

<script src="{{ URL::asset('/assets/libs/tui-chart/tui-chart-all.min.js') }}"></script>

<!-- tui charts map -->
<script src="{{ URL::asset('/assets/libs/tui-chart/maps/usa.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/tui-chart/maps/afghanistan.js') }}"></script>


<!-- tui charts plugins -->
<script src="{{ URL::asset('/assets/js/pages/tui-charts.init.js') }}"></script>

<!-- Afghanistan Map -->
<script src="{{ URL::asset('/assets/libs/afghanistanmap/highmaps.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/afghanistanmap/exporting.js') }}"></script>


<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>

<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<script>
options = {
chart: {
    height: 350,
    type: "line",
    stacked: !1,
    toolbar: {
        show: !1
    }
},
stroke: {
    width: [0, 2, 4],
    curve: "smooth"
},
plotOptions: {
    bar: {
        columnWidth: "50%"
    }
},
colors: ["#f46a6a", "#556ee6", "#34c38f"],
series: [{
    name: "New Care Card",
    type: "column",
    data: [ {{ $PendingJan}},{{ $PendingFeb}}, {{ $PendingMarch}}, {{ $PendingApril}}, {{ $PendingMay}}, {{ $PendingJun}}, {{ $PendingJuly}}, {{ $PendingAugust}}, {{ $PendingSep}}, {{ $PendingOct}}, {{ $PendingNov}}, {{ $PendingDec}},]
}, {
    name: "Approved Care Card",
    type: "area",
    data: [{{ $ApprovedJan}}, {{ $ApprovedFeb}}, {{ $ApprovedMarch}}, {{ $ApprovedApril}}, {{ $ApprovedMay}}, {{ $ApprovedJun}}, {{ $ApprovedJuly}}, {{ $ApprovedAugust}}, {{ $ApprovedSep}}, {{ $ApprovedOct}}, {{ $ApprovedNov}}, {{ $ApprovedDec}},]},
    {
    name: "Printed Care Card",
    type: "line",
    data: [{{ $PrintedJan}}, {{ $PrintedFeb}}, {{ $PrintedMarch}}, {{ $PrintedApril}}, {{ $PrintedMay}}, {{ $PrintedJun}}, {{ $PrintedJuly}}, {{ $PrintedAugust}}, {{ $PrintedSep}}, {{ $PrintedOct}}, {{ $PrintedNov}}, {{ $PrintedDec}}, ]}],
fill: {
    opacity: [.85, .25, 1],
    gradient: {
        inverseColors: !1,
        shade: "light",
        type: "vertical",
        opacityFrom: .85,
        opacityTo: .55,
        stops: [0, 100, 100, 100]
    }
},
labels: ["Jan", "Feb", "March", "April", "May", "Jun", "July", "August", "Sep", "Oct", "Nov", "Dec"],
markers: {
    size: 0
},
xaxis: {
    type: "date"
},
yaxis: {
    title: {
        text: "Points"
    }
},
tooltip: {
    shared: !0,
    intersect: !1,
    y: {
        formatter: function(e) {
            return void 0 !== e ? e.toFixed(0) + " points" : e
        }
    }
},
grid: {
    borderColor: "#f1f1f1"
}
};
(chart = new ApexCharts(document.querySelector("#DataInsertionChart"), options)).render();


    var options = {
          series: [{{$qamarcarecardsCount}}, {{$qamarcarecardsApproved}}, {{$qamarcarecardsRejected}}],
          chart: {
          height: 270,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            offsetY: 0,
            startAngle: 0,
            endAngle: 270,
            hollow: {
              margin: 5,
              size: '30%',
              background: 'transparent',
              image: undefined,
            },
            dataLabels: {
              name: {
                show: false,
              },
              value: {
                show: false,
              }
            }
          }
        },
        colors: ['#cd9941', '#34c38f', '#f46a6a',],
        labels: ['All', 'Approved', 'Rejected'],
        legend: {
          show: true,
          floating: true,
          fontSize: '12px',
          position: 'left',
          offsetX: 0,
          offsetY: 0,
          labels: {
            useSeriesColors: true,
          },
          markers: {
            size: 0
          },
          formatter: function(seriesName, opts) {
            return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
          },
          itemMargin: {
            vertical: 3
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
                show: false
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#AllinOne"), options);
        chart.render();

    var GenderChart = {
        series: [{{$qamarcarecardsMale}}, {{$qamarcarecardsFemale}}],
        chart: {
            width: 380,
            type: 'pie',
        },
        title: {
            text: "",
            align: "left",
            style: {
                fontWeight: "500"
            }
        },
        labels: ['Male', 'Female'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var GenderChart = new ApexCharts(document.querySelector("#GenderChart"), GenderChart);
    GenderChart.render();



    var FamilyStatusChart = {
        chart: {
            height: 400,
            type: "donut"
        },
        title: {
            text: "",
            align: "left",
            style: {
                fontWeight: "500"
            }
        },
        series: [{{$qamarcarecardsPoor}}, {{$qamarcarecardsLowIncome}},{{$qamarcarecardsWidow}}, {{$qamarcarecardsOrphans}},{{$qamarcarecardsDisabledIndividual}}, {{$qamarcarecardsElderlyIndividual}},{{$qamarcarecardsDisplacedFamily}}, {{$qamarcarecardsDisasterAffected}}],
        labels: ['Poor', 'Low Income',  'Widow', 'Orphans', 'Disabled Individual', 'Elderly Individual', 'Displaced Family', 'Disaster Affected'],
        colors: ["#34c38f", "#556ee6", "#f46a6a", "#50a5f1", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c"],
        legend: {
            show: !0,
            position: "right",
            horizontalAlign: "center",
            verticalAlign: "middle",
            floating: !1,
            fontSize: "14px",
            offsetX: 0
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    height: 240
                },
                legend: {
                    show: !1
                }
            }
        }]
    };

    var FamilyStatusChart = new ApexCharts(document.querySelector("#FamilyStatusChart"), FamilyStatusChart);
    FamilyStatusChart.render();








    var TribeChart = {
        series: [{{$Pashtun}}, {{$Tajik}},{{$Hazara}}, {{$Uzbek}},{{$Turkman}}, {{$Pashayi}},{{$Aimaq}}, {{$Baloch}}, {{$Pamiri}}, {{$Sadat}}, {{$Nooristani}}, {{$Arab}}, {{$Gojar}}, {{$Brahawi}}, {{$qazalbash}}, {{$kochi}}],
        labels: ['Pashtun', 'Tajik',  'Hazara', 'Uzbek', 'Turkman', 'Pashayi', 'Aimaq', 'Baloch', 'Pamiri', 'Sadat', 'Nooristani', 'Arab', 'Gojar', 'Brahawi', 'qazalbash', 'kochi'],
        colors: ["#34c38f", "#556ee6", "#f46a6a", "#50a5f1", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c"],
        chart: {
            width: 380,
            type: 'pie',
        },
        title: {
            text: "",
            align: "left",
            style: {
                fontWeight: "500"
            }
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var TribeChart = new ApexCharts(document.querySelector("#TribeChart"), TribeChart);
    TribeChart.render();





    (async () => {

const topology = await fetch('{{ URL::asset('/assets/libs/afghanistanmap/af-all.topo.json')}}').then(response => response.json());




const data = [
    ['af-kt', {{$khost}}], ['af-pk', {{$paktika}}], ['af-gz', {{$ghazni}}], ['af-bd', {{$badakhshan}}],
    ['af-nr', {{$nuristan}}], ['af-kr', {{$kunar}}], ['af-kz', {{$kunduz}}], ['af-ng', {{$nangarhar}}],
    ['af-tk', {{$takhar}}], ['af-bl', {{$baghlan}}], ['af-kb', {{$kabul}}], ['af-kp', {{$kapisa}}],
    ['af-2030', {{$panjshir}}], ['af-la', {{$laghman}}], ['af-lw', {{$logar}}], ['af-pv', {{$parwan}}],
    ['af-sm', {{$samangan}}], ['af-vr', {{$wardak}}], ['af-pt', {{$paktya}}], ['af-bg', {{$badghis}}],
    ['af-hr', {{$herat}}], ['af-bk', {{$balkh}}], ['af-jw', {{$jawzjan}}], ['af-bm', {{$bamyan}}],
    ['af-gr', {{$ghor}}], ['af-fb', {{$faryab}}], ['af-sp', {{$sar_e_pol}}], ['af-fh', {{$farah}}],
    ['af-hm', {{$helmand}}], ['af-nm', {{$nimroz}}], ['af-2014', {{$daykundi}}], ['af-oz', {{$uruzgan}}],
    ['af-kd', {{$kandahar}}], ['af-zb', {{$zabul}}]
];

// Create the chart
Highcharts.mapChart('AfghanistanChart', {
    chart: {
        map: topology
    },

    title: {
        text: '',
        align: "left",
            style: {
                color: "#444",
                fontWeight: "500"
            }
    },



    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Total',
        states: {
            hover: {
                color: '#556ee6'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

})();



</script>
@endsection