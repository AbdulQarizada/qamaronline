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


$(document).ready(function()
  {
    $('.ExportOrphans').click(function(){



        ids= new Array();
        $("input[name='ids[]']:checked").each(function(){ ids.push(this.value); });
      $.ajax({
        xhrFields: {
        responseType: 'blob',
    },
        url: '{{ route('ExportOrphans')}}',
        data: {
               'ids': ids,
               "_token": "{{ csrf_token() }}"
              },
        type: 'POST',
        success: function(result, status, xhr) {


// The actual download
var blob = new Blob([result], {
    type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
});
var link = document.createElement('a');
link.href = window.URL.createObjectURL(blob);
link.download = filename;
document.body.appendChild(link);
link.click();
document.body.removeChild(link);
}
    });



  });
 });




 function downloadExcel() {
    ids= new Array();
        $("input[name='ids[]']:checked").each(function(){ ids.push(this.value); });
$.ajax({
    xhrFields: {
        responseType: 'blob',
    },
    type: 'POST',
    url: '{{ route('ExportOrphans')}}',
    data: {
        ids: ids
    },
    success: function(result, status, xhr) {


        // The actual download
        var blob = new Blob([result], {
            type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        });
        var link = document.createElement('a');
        link.href = window.URL.createObjectURL(blob);
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
});
}







        var table = $('#datatable').DataTable({
        responsive: true,
        pageLength: 100,
        bPaginate: false,
        bInfo: false,
        buttons: [{
            autoFilter: true,
            extend: 'excel',
            text: 'Export To Excel',
            className: 'd-none',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }],

    });
    $("#ExportExcel").on("click", function() {
        table.button('.buttons-excel').trigger();
    });
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
