<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Merchants - Dashboard</title>
	<!--favicon-->
	<link rel="icon" href="{{asset('assets-merchant/images/logo-sbucks.png')}}" type="image/png" />
	<!-- Vector CSS -->
	<link href="{{asset('assets-merchant/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<!--plugins-->
	<link href="{{asset('assets-merchant/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets-merchant/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets-merchant/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('assets-merchant/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets-merchant/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets-merchant/css/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{asset('assets-merchant/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{asset('assets-merchant/css/app.css')}}" />
	<link rel="stylesheet" href="{{asset('assets-merchant/css/dark-sidebar.css')}}" />
	<link rel="stylesheet" href="{{asset('assets-merchant/css/dark-theme.css')}}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		@include('merchant.components.sidebar')
		<!--end sidebar-wrapper-->
		<!--header-->
		@include('merchant.components.navbar')
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				@yield('content')
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Sbucks @2024 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('assets-merchant/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets-merchant/js/popper.min.js')}}"></script>
	<script src="{{asset('assets-merchant/js/bootstrap.min.j')}}s"></script>
	<!--plugins-->
	<script src="{{asset('assets-merchant/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('assets-merchant/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('assets-merchant/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!-- Vector map JavaScript -->
	<script src="{{asset('assets-merchant/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{asset('assets-merchant/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('assets-merchant/plugins/vectormap/jquery-jvectormap-in-mill.js')}}"></script>
	<script src="{{asset('assets-merchant/plugins/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
	<script src="{{asset('assets-merchant/plugins/vectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
	<script src="{{asset('assets-merchant/plugins/vectormap/jquery-jvectormap-au-mill.js')}}"></script>
	<script src="{{asset('assets-merchant/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets-merchant/js/index.js')}}"></script>
	<!-- App JS -->
	<script src="{{asset('assets-merchant/js/app.js')}}"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
</body>

</html>
