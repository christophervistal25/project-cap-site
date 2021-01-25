@extends('municipal.layouts.app')
@section('page-title', 'Dashboard')
@prepend('meta-data')
<meta name="chart-labels" content="{{ $barangays }}">
<meta name="chart-labels-value" content="{{ $barangaysValue }}">
@endprepend
@section('content')
<div class="row">
  <div class="col-lg-3 col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Total Personnel Added:</h4>
          <div class=""><i style="font-size:70px;" class="ft-user">{{ $peoples }}</i></div>
      </div>
    </div>
  </div>


  <div class="col-lg-3 col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Barangays:</h4>
          <div class=""><i style="font-size:70px;" class="ft-location">{{ $noOfBarangays }}</i></div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Checkers:</h4>
          <div class=""><i style="font-size:70px;" class="ft-location">{{ $checkers }}</i></div>
      </div>
    </div>
  </div>

</div>

<!-- line chart section start -->
<section id="chartjs-line-charts">
  <!-- Line Chart -->
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">People Registered</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body chartjs">
                          <div class="height-500">
                      <canvas id="line-chart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
       <!-- Simple Pie Chart -->
       <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Personnel Temperature Chart</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                        <div class="height-400">
                    <canvas id="simple-pie-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Covid-19 Updates Surigao del Sur-->
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                <h3 class="card-title">COVID-19 Updates</h3>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-sm-12 col-lg-12">
                    <h3 class="card-sub-title display-4 text-center font-weight-bold mt-1">
                    <img src="{{ url('/theme-assets/images/ico/covid.png')}}" width="10%">
                    Surigao Del Sur
                    <img src="{{ url('/theme-assets/images/ico/covid.png')}}" width="10%">
                    </h3>
                </div>
            </div>
                    <div class="row mt-2">
                    <div class="col-lg-4 border bg-yellow">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Confirmed Case</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/positive.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">769</div>
                    </div>
                    <div class="col-lg-4 border bg-success">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Recovered</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/recovered.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">623</div>
                    </div>
                    <div class="col-lg-4 border bg-danger">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Death</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/deaths.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Covid-19 Updates Philippines-->
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                <h3 class="card-title">COVID-19 Updates</h3>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-lg-12">
                    <h3 class="card-sub-title display-4 text-center font-weight-bold mt-1">
                    <img src="{{ url('/theme-assets/images/ico/covid.png')}}" width="10%">
                    Philippines
                    <img src="{{ url('/theme-assets/images/ico/covid.png')}}" width="10%">
                    </h3>
                </div>
            </div>
                    <div class="row mt-2">
                    <div class="col-lg-4 border bg-yellow">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Confirmed Case</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/positive.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">769</div>
                    </div>
                    <div class="col-lg-4 border bg-success">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Recovered</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/recovered.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">623</div>
                    </div>
                    <div class="col-lg-4 border bg-danger">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Death</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/deaths.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Covid-19 Updates Worldwide-->
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                <h3 class="card-title">COVID-19 Updates</h3>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-lg-12">
                    <h3 class="card-sub-title display-4 text-center font-weight-bold mt-1">
                    <img src="{{ url('/theme-assets/images/ico/covid.png')}}" width="10%">
                    Worldwide
                    <img src="{{ url('/theme-assets/images/ico/covid.png')}}" width="10%">
                    </h3>
                </div>
            </div>
                    <div class="row mt-2">
                    <div class="col-lg-4 border bg-yellow">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Confirmed Case</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/positive.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">769</div>
                    </div>
                    <div class="col-lg-4 border bg-success">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Recovered</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/recovered.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">623</div>
                    </div>
                    <div class="col-lg-4 border bg-danger">
                        <div class="col-lg-12 pt-1 h2 text-center font-weight-bold">Death</div>
                        <div class="col-lg-12 pt-1 text-center"><img src="{{ url('/theme-assets/images/ico/deaths.png')}}" width="40%"></div>
                        <div class="col-lg-12 pt-1 display-4 text-center text-black font-weight-bold">50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>







  </div>

</section>
<!-- // line chart section end -->

@push('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
let personnelChartLabels = $('meta[name="chart-labels"]').attr('content').split(',');
let personnelChartValues = $('meta[name="chart-labels-value"]').attr('content').split(',')
$(window).on("load", function(){

//Get the context of the Chart canvas element we want to select
var ctx = $("#line-chart");

// Chart Options
var chartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
        position: 'bottom',
    },
    hover: {
        mode: 'label'
    },
    scales: {
        xAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
                labelString: 'Month'
            }
        }],
        yAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
                labelString: 'Value'
            },
        }]
    },
    title: {
        display: false,
        text: 'Chart.js Line Chart - Legend'
    }
};

// Chart Data
var chartData = {
    labels: personnelChartLabels,
    datasets: [{
        label: "People Registered",
        data: personnelChartValues,
        fill: false,
        borderDash: [5, 5],
        borderColor: "#9C27B0",
        pointBorderColor: "#9C27B0",
        pointBackgroundColor: "#FFF",
        pointBorderWidth: 2,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
    }, 
]
};

var config = {
    type: 'line',

    // Chart Options
    options : chartOptions,

    data : chartData
};

// Create the chart
var lineChart = new Chart(ctx, config);
});
</script>
<script>
    //Get the context of the Chart canvas element we want to select
    var pieCtx = $("#simple-pie-chart");

    // Chart Options
    var pieChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
    };

    // Chart Data
    var pieChartData = {
        labels: ["High Temperature", "Normal Temperature"],
        datasets: [{
            label: "Person",
            data: [{{ $notNormal}}, {{ $normal }}],
            backgroundColor: ['#d32f2f', '#666EE8'],
        }]
    };

    var pieConfig = {
        type: 'pie',

        // Chart Options
        options : pieChartOptions,

        data : pieChartData
    };

    // Create the chart
    var pieSimpleChart = new Chart(pieCtx, pieConfig);
</script>

@endpush
@endsection
   

    

