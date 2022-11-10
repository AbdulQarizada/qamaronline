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
                                    <p class="my-0 text-dark mt-2 font-size-18">All Cards</p>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Pending Cards</p>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Approved Cards</p>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Printed Cards</p>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Released Cards</p>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Rejected Cards</p>
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

    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Services: Food Packs</h1>
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
                                    <p class="my-0 text-dark mt-2 font-size-18">Food Packs </p>

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
                                    <p class="my-0 text-dark mt-2 font-size-18">Verify Card</p>
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


<div class="row mb-4">
    <div class="col-xl-12">
                    <div id="DataInsertionChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Cards Insertion Timeline</h5>
    </div>
</div>


@endif




@endsection
@apexchartsScripts
@section('script')

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script>

// Montly Insetion base Chart
    (async () => {
        const MontlyInsertionJson = await fetch('{{ route('MontlyInsertion_Chart')}}').then(response => response.json());

        var MontlyInsertion = {
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
            colors: ["#cd9941", "#34c38f", "#74788d"],
            series: [{
                    name: "New Cards",
                    type: "column",
                    data: [MontlyInsertionJson.PendingJan, MontlyInsertionJson.PendingFeb, MontlyInsertionJson.PendingMarch, MontlyInsertionJson.PendingApril, MontlyInsertionJson.PendingMay, MontlyInsertionJson.PendingJun, MontlyInsertionJson.PendingJuly, MontlyInsertionJson.PendingAugust, MontlyInsertionJson.PendingSep, MontlyInsertionJson.PendingOct, MontlyInsertionJson.PendingNov, MontlyInsertionJson.PendingDec, ]
                },
                {
                    name: "Approved Cards",
                    type: "area",
                    data: [MontlyInsertionJson.ApprovedJan, MontlyInsertionJson.ApprovedFeb, MontlyInsertionJson.ApprovedMarch, MontlyInsertionJson.ApprovedApril, MontlyInsertionJson.ApprovedMay, MontlyInsertionJson.ApprovedJun, MontlyInsertionJson.ApprovedJuly, MontlyInsertionJson.ApprovedAugust, MontlyInsertionJson.ApprovedSep, MontlyInsertionJson.ApprovedOct, MontlyInsertionJson.ApprovedNov, MontlyInsertionJson.ApprovedDec, ]
                },
                {
                    name: "Printed Cards",
                    type: "line",
                    data: [MontlyInsertionJson.PrintedJan, MontlyInsertionJson.PrintedFeb, MontlyInsertionJson.PrintedMarch, MontlyInsertionJson.PrintedApril, MontlyInsertionJson.PrintedMay, MontlyInsertionJson.PrintedJun, MontlyInsertionJson.PrintedJuly, MontlyInsertionJson.PrintedAugust, MontlyInsertionJson.PrintedSep, MontlyInsertionJson.PrintedOct, MontlyInsertionJson.PrintedNov, MontlyInsertionJson.PrintedDec, ]
                }
            ],
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
                    text: "Cards"
                }
            },
            tooltip: {
                shared: !0,
                intersect: !1,
                y: {
                    formatter: function(e) {
                        return void 0 !== e ? e.toFixed(0) + " Cards" : e
                    }
                }
            },
            grid: {
                borderColor: "#f1f1f1"
            }
        };

        var MontlyDataInsertion = new ApexCharts(document.querySelector("#DataInsertionChart"), MontlyInsertion);
        MontlyDataInsertion.render();


    })();

    </script>


@endsection