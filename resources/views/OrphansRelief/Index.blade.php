@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'layouts.master' : 'layouts.master-layouts')

@section('title') Orphan and Sponsorships @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')



@if(Cookie::get('Layout') == 'LayoutNoSidebar')
<div class="row">
    <div class="col-12">
        <a href="{{route('root')}}" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
    </div>
</div>
<div class="row">
    @if(Auth::user()->IsOrphanRelief == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Orphans</h1>
    @endif

    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllOrphans')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-alert text-primary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">All Orphans</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllOrphans')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-alert text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Waiting</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllOrphans')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-alert text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Sponsored</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif

        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->



<div class="row">
    @if(Auth::user()->IsOrphanRelief == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Sponsors</h1>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllSponsor')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-male text-info display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">All Sponsors</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllSponsor')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-male text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Active</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllSponsor')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-male text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">InActive</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif

        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->


<div class="row">
    @if(Auth::user()->IsOrphanRelief == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Payments</h1>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllPayment')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cash-outline text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">All Payments</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllPayment')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cash-outline text-secondary display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Pending</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllPayment')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cash-outline text-success display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Successfull</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsOrphanRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('AllPayment')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-cash-outline text-danger display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Failed</p>
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
                        </div>
                    </div>
                </a>
            </div>
            @endif


        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->



@endif

@endsection
@section('script')

@endsection