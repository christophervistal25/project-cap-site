
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Alerts - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             
                <span class="avatar avatar-online"><img src="/theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right">
                    <a class="dropdown-item" href="#">
                      <span class="avatar avatar-online">
                        <span class="user-name text-bold-700 ml-1">John Doe</span>
                      </span>
                    </a>
                    <a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="">
              <h3 class="brand-text">QR Code</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href=""><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href=""><i class="ft-plus"></i><span class="menu-title" data-i18n="">Add Personnel</span></a>
          </li>
          <li class=" nav-item"><a href=""><i class="ft-plus"></i><span class="menu-title" data-i18n="">View Personnel</span></a>
          </li>
          <li class=" nav-item"><a href=""><i class="ft-plus"></i><span class="menu-title" data-i18n="">Settings</span></a>
          </li>
        </ul>
      </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank">Download PRO!</a>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Alerts</h3>
          </div>
        </div>
        <div class="content-body"><!-- Basic Alerts start -->
<section id="basic-alerts">
	<div class="row match-height">
		<div class="col-xl-6 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Basic Alerts</h4>
					<a class="heading-elements-toggle">
						<i class="la la-ellipsis-v font-medium-3"></i>
					</a>
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
						<p>Alerts are available for any length of text, as well as an optional dismiss button. Add
							<code>.alert.alert-COLOR</code> classes for alert with all theme colors.</p>
						<h6>Primary Alert</h6>
						<div class="alert alert-primary mb-2" role="alert">
							<strong>Good Morning!</strong> Start your day with some alerts.
						</div>
						<h6>Secondary Alert</h6>
						<div class="alert alert-secondary mb-2" role="alert">
							<strong>Hello!</strong> This is secondary alert - check it out.
						</div>
						<h6>Success Alert</h6>
						<div class="alert alert-success mb-2" role="alert">
							<strong>Well done!</strong> You successfully read this important alert message.
						</div>
						<h6>Danger Alert</h6>
						<div class="alert alert-danger mb-2" role="alert">
							<strong>Oh snap!</strong> Change a few things up and submit again.
						</div>
						<h6>Warning Alert</h6>
						<div class="alert alert-warning mb-2" role="alert">
							<strong>Warning!</strong> Better check yourself, you're not looking too good.
						</div>
						<h6>Info Alert</h6>
						<div class="alert alert-info mb-2" role="alert">
							<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
						</div>
						<h6>Light Alert</h6>
						<div class="alert alert-light mb-2" role="alert">
							<strong>Hello!</strong> This is light alert - check it out.
						</div>
						<h6>Dark Alert</h6>
						<div class="alert alert-dark mb-2" role="alert">
							<strong>Hello!</strong> This is dark alert - check it out.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Alerts with Links</h4>
					<a class="heading-elements-toggle">
						<i class="la la-ellipsis-v font-medium-3"></i>
					</a>
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
						<p> Add
							<code>.alert-link</code> class to add links to alerts.</p>
						<h6>Primary Alert</h6>
						<div class="alert alert-primary mb-2" role="alert">
							<strong>Good Morning!</strong> Start
							<a href="#" class="alert-link">your day</a> with some alerts.
						</div>
						<h6>Secondary Alert</h6>
						<div class="alert alert-secondary mb-2" role="alert">
							<strong>Hello!</strong> This is
							<a href="#" class="alert-link">secondary alert</a> - check it out.
						</div>
						<h6>Success Alert</h6>
						<div class="alert alert-success mb-2" role="alert">
							<strong>Well done!</strong> You successfully read this
							<a href="#" class="alert-link">important</a> alert message.
						</div>
						<h6>Danger Alert</h6>
						<div class="alert alert-danger mb-2" role="alert">
							<strong>Oh snap!</strong> Change a
							<a href="#" class="alert-link">few things up</a> and submit again.
						</div>
						<h6>Warning Alert</h6>
						<div class="alert alert-warning mb-2" role="alert">
							<strong>Warning!</strong> Better check yourself, you're not
							<a href="#" class="alert-link">looking too good</a>.
						</div>
						<h6>Info Alert</h6>
						<div class="alert alert-info mb-2" role="alert">
							<strong>Heads up!</strong> This alert needs
							<a href="#" class="alert-link">your attention</a>, but it's not super important.
						</div>
						<h6>Light Alert</h6>
						<div class="alert alert-light mb-2" role="alert">
							<strong>Hello!</strong> This is
							<a href="#" class="alert-link">light alert</a> - check it out.
						</div>
						<h6>Dark Alert</h6>
						<div class="alert alert-dark mb-2" role="alert">
							<strong>Hello!</strong> This is
							<a href="#" class="alert-link">dark alert</a> - check it out.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Basic Alerts end -->



<!-- Dismissible Alerts & Round Alerts with icons end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">ThemeSelection</a></span>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
{{-- @extends('admin.layouts.app')
@section('page-small-title','Dashboard')
@section('page-title','Dashboard')
@prepend('meta-data')
<meta name="chart-labels" content="{{ $cities }}">
<meta name="chart-labels-value" content="{{ $citiesValue }}">
@endprepend
@section('content')
<div class="row">
  <div class="col-lg-3"># of Admins : {{ $admins }}</div>
  <div class="col-lg-3"># of Municipal Accounts : {{ $municipals_account }}</div>
  <div class="col-lg-3"># of Place {{ $noOfCities }}</div>
  <div class="col-lg-3"># of Personnel {{ $peoples }}</div>
</div>
<div class="row">
  <div class="col-lg-8">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Personnel Chart</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="myAreaChart" style="display: block; width: 810px; height: 320px;" width="810" height="320" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
</div>

    <div class="col-xl-4">
      <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Personnel Body Temperature Pie Chart</h6>
              <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </div>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="myPieChart" width="299" height="245" class="chartjs-render-monitor" style="display: block; width: 299px; height: 245px;"></canvas>
              </div>
              <div class="mt-4 text-center small">
                  <span class="mr-2">
                      <i class="fas fa-circle text-danger"></i> Not Normal  - {{ $notNormal }}
                  </span>
                  <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Normal - {{ $normal }}
                  </span>
                  <span class="mr-2" >
                    <i class="fas fa-circle text-warning"></i> Total - {{ $notNormal + $normal }}
                </span>
              </div>
          </div>
      </div>
  </div>
</div>

@push('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Poppins';
Chart.defaults.global.defaultFontColor = '#858796';



// Area Chart Example
let personnelChartLabels = $('meta[name="chart-labels"]').attr('content').split(',');
let personnelChartValues = $('meta[name="chart-labels-value"]').attr('content').split(',')
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: personnelChartLabels,
    datasets: [{
      label: "Personnel : ",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: personnelChartValues,
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      
      yAxes: [{
        ticks: {
          precision : 0,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return value;
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel +  tooltipItem.yLabel;
        }
      }
    }
  }
});


// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Not Normal", "Normal"],
    datasets: [{
      data: [{{ $notNormal}}, {{ $normal }}],
      backgroundColor: ['#e74a3b', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>
@endpush
@endsection --}}