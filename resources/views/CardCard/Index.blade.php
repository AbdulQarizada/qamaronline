@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')

@section('title') Qamar Care Card @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />


<!-- Bootstrap Css -->
<link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ URL::asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ URL::asset('/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection

@section('content')


@if(Cookie::get('Layout') == 'LayoutNoSidebar')
<div class="row">
    <div class="col-12">
        <a href="{{route('root')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<!-- <div class="row">
    <div class="mt-4 mb-4">
        <blockquote class="blockquote border-dark  font-size-14 mb-0">
            <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap">OPERATIONS</p>

        </blockquote>
    </div>
</div> -->


<!--
<div class="col-xl-12">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-4 mb-2">
                <a href="{{route('IndexCareCardOperations')}}">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">OPERATIONS</p>
                                        <h6 class="text-muted mb-0">CARE CARDS OPERATIONS</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bx-id-card   font-size-24"></i>
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

            <div class="col-md-4 mb-2">
                <a href="{{route('IndexCareCardServices')}}">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium">SERIVCES</p>
                                        <h6 class="text-muted mb-0">ASSIGNE TO SERIVCE</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-user-rectangle    font-size-24"></i>
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

        </div>

    </div>
</div> -->
<div class="row">
    @if(Auth::user()->IsQamarCareCard == 1 )

    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Operations</h1>
    @endif

    <div class="col-xl-12">

        <div class="row">
            <div class="col-12 ">
                <a href="{{route('CreateCareCard')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD CARE CARD</a>
            </div>
        </div>
        <div class="row">
            @if(Auth::user()->IsQamarCareCard == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-card-account-details-outline text-warning display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">All Care Cards</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('PendingCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-credit-card-clock-outline text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Pending Care Cards</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('ApprovedCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-card-account-details-star-outline text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Approved Care Cared</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('PrintedCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-printer-check text-dark display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Printed Care Cards</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('ReleasedCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-credit-card-marker-outline text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Released Care Cards</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('RejectedCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-credit-card-remove-outline text-danger display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Rejected Care Cards</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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

<br />

<div class="row">
    @if(Auth::user()->IsQamarCareCard == 1)

    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Food Packs</h1>
    @endif
    <div class="col-xl-12">
        <!-- <div class="row">
            <div class="col-12 ">
                <a href="{{route('CreateFoodPack')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3  btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD FOOD PACK</a>
            </div>
        </div> -->
        <div class="row">
            @if(Auth::user()->IsQamarCareCard == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllFoodPack')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-food text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Food Packs</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('EligibleBeneficiariesFoodPack')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-arrow-right text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Assign Beneficiaries</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('AssignedBeneficiariesFoodPack')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-check text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Assigned Beneficiaries</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('AllListFoodPack')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-group-outline text-dark display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Staff Beneficiaries</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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



<br />

<div class="row">
    @if(Auth::user()->IsQamarCareCard == 1)

    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Service Providers</h1>
    @endif
    <div class="col-xl-12">
        <!-- <div class="row">
            <div class="col-12 ">
                <a href="{{route('CreateFoodPack')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD FOOD PACK</a>
            </div>
        </div> -->
        <div class="row">
            @if(Auth::user()->IsQamarCareCard == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndividualServiceProviders')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-doctor text-primary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Individual</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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
            <div class="col-md-2 mb-2">
                <a href="{{route('OrganizationServiceProviders')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-hospital-building text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Organization</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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


<br />

<div class="row">
    @if(Auth::user()->IsQamarCareCard == 1 )

    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Online</h1>
    @endif
    <div class="col-xl-12">
        <!-- <div class="row">
            <div class="col-12 ">
                <a href="{{route('CreateFoodPack')}}" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-plus me-1"></i>ADD FOOD PACK</a>
            </div>
        </div> -->
        <div class="row">
            @if(Auth::user()->IsQamarCareCard == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('VerifyCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-card-search-outline text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Verify Care Card</p>
                                    <!-- <h6 class="text-muted mb-0">Orphans</h4> -->
                                </div>

                                <!-- <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">

                                            </span>
                                        </div>
                                    </div> -->
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

@endif




@endsection
@section('script')



@endsection