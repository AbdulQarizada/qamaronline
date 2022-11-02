@section('script')

<script src="{{ URL::asset('/assets/libs/jquery-knob/jquery-knob.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/jquery-knob.init.js') }}"></script>

<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>

<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<script>
    var GenderChart = {
        series: [{{$qamarcarecardsMale}}, {{$qamarcarecardsFemale}}],
        chart: {
            width: 380,
            type: 'pie',
        },
        title: {
            text: "Gender Base Classification",
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
            text: "Family Status Base Classification",
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


    var DataInsertionChart = {

chart: {
    height: 350,
    type: "bar",
    toolbar: {
        show: !1
    }
},
plotOptions: {
    bar: {
        dataLabels: {
            position: "top"
        }
    }
},
dataLabels: {
    enabled: !0,
    formatter: function(e) {
        return e + "%"
    },
    offsetY: -22,
    style: {
        fontSize: "12px",
        colors: ["#304758"]
    }
},
series: [{
    name: "Card Inserted",
    data: [2.5, 3.2, 5, 10.1, 4.2, 3.8, 3, 2.4, 4, 1.2, 3.5, .8]
}],
colors: ["#556ee6"],
grid: {
    borderColor: "#f1f1f1"
},
xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    position: "top",
    labels: {
        offsetY: -18
    },
    axisBorder: {
        show: !1
    },
    axisTicks: {
        show: !1
    },
    crosshairs: {
        fill: {
            type: "gradient",
            gradient: {
                colorFrom: "#D8E3F0",
                colorTo: "#BED1E6",
                stops: [0, 100],
                opacityFrom: .4,
                opacityTo: .5
            }
        }
    },
    tooltip: {
        enabled: !0,
        offsetY: -35
    }
},
fill: {
    gradient: {
        shade: "light",
        type: "horizontal",
        shadeIntensity: .25,
        gradientToColors: void 0,
        inverseColors: !0,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [50, 0, 100, 100]
    }
},
yaxis: {
    axisBorder: {
        show: !1
    },
    axisTicks: {
        show: !1
    },
    labels: {
        show: !1,
        formatter: function(e) {
            return e + "%"
        }
    }
},
title: {
    text: "Montly Data Insertion, 2002",
    floating: !0,
    offsetY: 330,
    align: "center",
    style: {
        color: "#444",
        fontWeight: "500"
    }
}
    };

    var DataInsertionChart = new ApexCharts(document.querySelector("#DataInsertionChart"), DataInsertionChart);
    DataInsertionChart.render();


</script>
@endsection