@extends(Cookie::get('Layout') == 'LayoutSidebar' ? 'Layouts.master' : 'Layouts.master-layouts')
@section('title') Dashboard @endsection
@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
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
                                <img class="rounded-circle header-profile-user avatar-xl" src="{{  asset('/uploads/User/Profiles/'.Auth::user() -> Profile) }}" alt="Profile">
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
            <div class="col-sm-12">
                <blockquote class="p-4 border-light border rounded mb-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <p class="mb-0 display-6 p-3" dir="rtl" style="float: right;"> {{ $QuranArabic }}</p>
                            <p class="mb-0 font-size-18"> {{ $QuranEnglish }}</p>
                        </div>
                        <div class="me-3">
                            <i class="bx bxs-quote-alt-right text-mute font-size-24"></i>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<br />
<br />
@if(Cookie::get('Layout') == 'LayoutNoSidebar')
<div class="row">
    @if(Auth::user()->IsOrphanRelief == 1 ||Auth::user()->IsAidAndRelief == 1 || Auth::user()->IsWash == 1 || Auth::user()->IsEducation == 1 || Auth::user()->IsInitiative == 1|| Auth::user()->IsMedicalSector == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Projects</h1>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsOrphanRelief == 1 || Auth::user()->IsOrphanSponsor == 1 )
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexOrphansRelief')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-account-child  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Orphans Relief</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsAidAndRelief == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexOrphansRelief')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-briefcase-alt-2 display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Aid and Relief</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsWash == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexOrphansRelief')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-gas-pump  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Wash</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsEducation == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-graduation  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Education</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsInitiative == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-bulb  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Initiative</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsMedicalSector == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-ambulance  display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Medical Sector</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
<div class="row ">
    @if(Auth::user()->IsFoodAppeal == 1 || Auth::user()->IsQamarCareCard == 1 || Auth::user()->IsAppealsDistributions == 1 || Auth::user()->IsDonorsAndDonorBoxes == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">Benefeciary Services</h1>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsQamarCareCard == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-credit-card display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Care Card</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsFoodAppeal == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexEducation')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-fingerprint display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Appeals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsAppealsDistributions == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bx-task display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Distribution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @if(Auth::user()->IsDonorsAndDonorBoxes == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexCareCard')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="bx bxs-box display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
<div class="row">
    @if(Auth::user()->IsSuperAdmin == 1)
    <h1 class="font-size-24 mt-4 mb-4 fw-medium text-dark text-muted">System Management</h1>
    @endif
    <div class="col-xl-12">
        <div class="row">
            @if(Auth::user()->IsSuperAdmin == 1)
            <div class="col-md-2 mb-2">
                <a href="{{route('IndexSystemManagement')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body text-center">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <i class="mdi mdi-application-cog display-5 "></i>
                                    <p class="my-0 text-dark mt-2 font-size-18">System</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
@endif
@if(Cookie::get('Layout') == 'LayoutSidebar')
@if(Auth::user()->IsQamarCareCard == 1)
<div class="row mb-4">
    <div class="col-xl-4 mb-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="GenderChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Gender</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 mb-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="TribeChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Tribes</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div id="AllInOne" class="apex-charts" dir="ltr"></div>
                <h5 class=" text-dark text-center">Care Cards</h5>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-xl-6">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="FamilyStatusChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Family Status</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="AfghanistanChart"></div>
                    <h5 class=" text-dark text-center">Provincial Care Cards</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-xl-12">
        <div class="card">
            <h5 class="card-header text-dark bg-secondary bg-soft"></h5>
            <div class="card-body">
                <div class="">
                    <div id="DataInsertionChart" class="apex-charts" dir="ltr"></div>
                    <h5 class=" text-dark text-center">Cards Insertion Timeline</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif
@endsection
@apexchartsScripts
@section('script')
<!-- Afghanistan Map -->
<script src="{{ URL::asset('/assets/libs/afghanistanmap/highmaps.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/afghanistanmap/exporting.js') }}"></script>
<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<!-- Reporting Charts for Care Card -->
<script>
    // Tribe base Chart
    (async () => {
        const Tribe = await fetch('{{ route('Tribe_Chart')}}').then(response => response.json());
        var TribeChart = {
            series: [Tribe.Pashtun, Tribe.Tajik, Tribe.Hazara, Tribe.Uzbek, Tribe.Turkman, Tribe.Pashayi, Tribe.Aimaq, Tribe.Baloch, Tribe.Pamiri, Tribe.Sadat, Tribe.Nooristani, Tribe.Arab, Tribe.Gojar, Tribe.Brahawi, Tribe.qazalbash, Tribe.kochi, ],
            labels: ['Pashtun', 'Tajik', 'Hazara', 'Uzbek', 'Turkman', 'Pashayi', 'Aimaq', 'Baloch', 'Pamiri', 'Sadat', 'Nooristani', 'Arab', 'Gojar', 'Brahawi', 'qazalbash', 'kochi'],
            colors: ["#34c38f", "#556ee6", "#f46a6a", "#50a5f1", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c", "#f1b44c"],
            chart: {
                width: 380,
                type: 'pie',
            },
            dataLabels: {
                enabled: true
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
    })();

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

    // Gender base Chart
    (async () => {
        const Gender_ChartJson = await fetch('{{ route('Gender_Chart')}}').then(response => response.json());
        var GenderChart = {
            series: [Gender_ChartJson.Male, Gender_ChartJson.Female],
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
    })();

    // Family Status base Chart
    (async () => {
        const FamilyStatus_ChartJson = await fetch('{{ route('FamilyStatus_Chart')}}').then(response => response.json());
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
            series: [FamilyStatus_ChartJson.Poor, FamilyStatus_ChartJson.LowIncome, FamilyStatus_ChartJson.Widow, FamilyStatus_ChartJson.Orphans, FamilyStatus_ChartJson.DisabledIndividual, FamilyStatus_ChartJson.ElderlyIndividual, FamilyStatus_ChartJson.DisplacedFamily, FamilyStatus_ChartJson.DisasterAffected],
            labels: ['Poor', 'Low Income', 'Widow', 'Orphans', 'Disabled Individual', 'Elderly Individual', 'Displaced Family', 'Disaster Affected'],
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
    })();

    // all in one care card operation Chart
    (async () => {
        const AllinOne_ChartJson = await fetch('{{ route('AllinOne_Chart')}}').then(response => response.json());
        var AllinOne = {
            series: [AllinOne_ChartJson.All, AllinOne_ChartJson.Pending, AllinOne_ChartJson.Approved, AllinOne_ChartJson.Printed,  AllinOne_ChartJson.Rejected],
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
            colors: ['#f1b44c', '#74788d',  '#34c38f', '#050505', '#f46a6a', ],
            labels: ['All','Pending',  'Approved', 'Printed', 'Rejected'],
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
        var AllinOneChart = new ApexCharts(document.querySelector("#AllinOne"), AllinOne);
        AllinOneChart.render();
    })();

    (async () => {

        const ProvincialData = await fetch('{{ route('ProvincialData_Chart')}}').then(response => response.json());
        const topology = await fetch('{{ URL::asset('/assets/libs/afghanistanmap/af-all.topo.json')}}').then(response => response.json());
        const data = [
            ['af-kt', ProvincialData.khost],
            ['af-pk', ProvincialData.paktika],
            ['af-gz', ProvincialData.ghazni],
            ['af-bd', ProvincialData.badakhshan],
            ['af-nr', ProvincialData.nuristan],
            ['af-kr', ProvincialData.kunar],
            ['af-kz', ProvincialData.kunduz],
            ['af-ng', ProvincialData.nangarhar],
            ['af-tk', ProvincialData.takhar],
            ['af-bl', ProvincialData.baghlan],
            ['af-kb', ProvincialData.kabul],
            ['af-kp', ProvincialData.kapisa],
            ['af-2030', ProvincialData.panjshir],
            ['af-la', ProvincialData.laghman],
            ['af-lw', ProvincialData.logar],
            ['af-pv', ProvincialData.parwan],
            ['af-sm', ProvincialData.samangan],
            ['af-vr', ProvincialData.wardak],
            ['af-pt', ProvincialData.paktya],
            ['af-bg', ProvincialData.badghis],
            ['af-hr', ProvincialData.herat],
            ['af-bk', ProvincialData.balkh],
            ['af-jw', ProvincialData.jawzjan],
            ['af-bm', ProvincialData.bamyan],
            ['af-gr', ProvincialData.ghor],
            ['af-fb', ProvincialData.faryab],
            ['af-sp', ProvincialData.sar_e_pol],
            ['af-fh', ProvincialData.farah],
            ['af-hm', ProvincialData.helmand],
            ['af-nm', ProvincialData.nimroz],
            ['af-2014', ProvincialData.daykundi],
            ['af-oz', ProvincialData.uruzgan],
            ['af-kd', ProvincialData.kandahar],
            ['af-zb', ProvincialData.zabul]
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
