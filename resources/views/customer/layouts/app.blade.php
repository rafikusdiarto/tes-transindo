<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Customers - Dashboard</title>
	<!--favicon-->
	<link rel="icon" href="{{asset('assets-merchant/images/favicon-32x32.png')}}" type="image/png" />
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
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="{{asset('assets-merchant/images/logo-icon.png')}}" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Syndash</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard Customers</div>
					</a>
					<ul>
						<li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
						</li>
						<li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Sales</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Web Apps</li>
				<li>
					<a href="emailbox.html">
						<div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
						</div>
						<div class="menu-title">Email</div>
					</a>
				</li>
				<li>
					<a href="chat-box.html">
						<div class="parent-icon icon-color-3"> <i class="bx bx-conversation"></i>
						</div>
						<div class="menu-title">Chat Box</div>
					</a>
				</li>
				<li>
					<a href="file-manager.html">
						<div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
						</div>
						<div class="menu-title">File Manager</div>
					</a>
				</li>
				<li>
					<a href="contact-list.html">
						<div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
						</div>
						<div class="menu-title">Contatcs</div>
					</a>
				</li>
				<li>
					<a href="to-do.html">
						<div class="parent-icon icon-color-6"><i class="bx bx-task"></i>
						</div>
						<div class="menu-title">Todo List</div>
					</a>
				</li>
				<li>
					<a href="invoice.html">
						<div class="parent-icon icon-color-7"><i class="bx bx-file"></i>
						</div>
						<div class="menu-title">Invoice</div>
					</a>
				</li>
				<li>
					<a href="fullcalender.html">
						<div class="parent-icon icon-color-8"> <i class="bx bx-calendar-check"></i>
						</div>
						<div class="menu-title">Calendar</div>
					</a>
				</li>
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="widgets.html">
						<div class="parent-icon icon-color-9"><i class="bx bx-ghost"></i>
						</div>
						<div class="menu-title">Widgets</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-10"><i class="bx bx-spa"></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>Alerts</a>
						</li>
						<li> <a href="component-bedges.html"><i class="bx bx-right-arrow-alt"></i>Badge</a>
						</li>
						<li> <a href="component-buttons.html"><i class="bx bx-right-arrow-alt"></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class="bx bx-right-arrow-alt"></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class="bx bx-right-arrow-alt"></i>Carousel</a>
						</li>
						<li> <a href="component-acordians.html"><i class="bx bx-right-arrow-alt"></i>Acordians</a>
						</li>
						<li> <a href="component-list-groups.html"><i class="bx bx-right-arrow-alt"></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class="bx bx-right-arrow-alt"></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i>Modal</a>
						</li>
						<li> <a href="component-navs.html"><i class="bx bx-right-arrow-alt"></i>Navs</a>
						</li>
						<li> <a href="components-navbar.html"><i class="bx bx-right-arrow-alt"></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.html"><i class="bx bx-right-arrow-alt"></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class="bx bx-right-arrow-alt"></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class="bx bx-right-arrow-alt"></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class="bx bx-right-arrow-alt"></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class="bx bx-right-arrow-alt"></i>Notifications</a>
						</li>
						<li> <a href="components-avtars-chips.html"><i class="bx bx-right-arrow-alt"></i>Avatrs & Chips</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-11"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Content</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class="bx bx-right-arrow-alt"></i>Grid System</a>
						</li>
						<li> <a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i>Text Utilities</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-12"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Icons</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Forms & Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-1"> <i class="bx bx-comment-edit"></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
						</li>
						<li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-2"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class="bx bx-right-arrow-alt"></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.html"><i class="bx bx-right-arrow-alt"></i>Data Table</a>
						</li>
						<li> <a href="table-editable.html"><i class="bx bx-right-arrow-alt"></i>Editable Table</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Pages</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-3"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li> <a href="authentication-login.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Login</a>
						</li>
						<li> <a href="authentication-register.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Register</a>
						</li>
						<li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
						</li>
						<li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
						</li>
						<li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="user-profile.html">
						<div class="parent-icon icon-color-4"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="timeline.html">
						<div class="parent-icon icon-color-5"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-6"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Errors</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.html">
						<div class="parent-icon icon-color-7"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.html">
						<div class="parent-icon icon-color-8"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li>
				<li class="menu-label">Charts & Maps</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-9"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-10"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://codervent.com/syndash/documentation/index.html" target="_blank">
						<div class="parent-icon icon-color-12"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				<div class="flex-grow-1 search-bar">
					<div class="input-group">
						<div class="input-group-prepend search-arrow-back">
							<button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
							</button>
						</div>
						<input type="text" class="form-control" placeholder="search" />
						<div class="input-group-append">
							<button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-toggle="dropdown">	<span class="msg-count">6</span>
								<i class="bx bx-comment-detail vertical-align-middle"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">6 New</h6>
										<p class="msg-header-subtitle">Application Messages</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-right">5 sec
													ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Althea Cabardo <span class="msg-time float-right">14
													sec ago</span></h6>
												<p class="msg-info">Many desktop publishing packages</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Oscar Garner <span class="msg-time float-right">8 min
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Katherine Pechon <span class="msg-time float-right">15
													min ago</span></h6>
												<p class="msg-info">Making this the first true generator</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Amelia Doe <span class="msg-time float-right">22 min
													ago</span></h6>
												<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Cristina Jhons <span class="msg-time float-right">2 hrs
													ago</span></h6>
												<p class="msg-info">The passage is attributed to an unknown</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">James Caviness <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">The point of using Lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Peter Costanzo <span class="msg-time float-right">6 hrs
													ago</span></h6>
												<p class="msg-info">It was popularised in the 1960s</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">David Buckley <span class="msg-time float-right">2 hrs
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-right">2 days
													ago</span></h6>
												<p class="msg-info">If you are going to use a passage</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Johnny Seitz <span class="msg-time float-right">5 days
													ago</span></h6>
												<p class="msg-info">All the Lorem Ipsum generators</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								<span class="msg-count">8</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">8 New</h6>
										<p class="msg-header-subtitle">Application Notifications</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Customers<span class="msg-time float-right">14 Sec
													ago</span></h6>
												<p class="msg-info">5 new user registered</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Orders <span class="msg-time float-right">2 min
													ago</span></h6>
												<p class="msg-info">You have recived new orders</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-shineblue text-shineblue"><i class="bx bx-file"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">24 PDF File<span class="msg-time float-right">19 min
													ago</span></h6>
												<p class="msg-info">The pdf files generated</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-cyne text-cyne"><i class="bx bx-send"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Time Response <span class="msg-time float-right">28 min
													ago</span></h6>
												<p class="msg-info">5.1 min avarage time response</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-purple text-purple"><i class="bx bx-home-circle"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Product Approved <span
													class="msg-time float-right">2 hrs ago</span></h6>
												<p class="msg-info">Your new product has approved</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-warning text-warning"><i class="bx bx-message-detail"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Comments <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">New customer comments recived</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Your item is shipped <span class="msg-time float-right">5 hrs
													ago</span></h6>
												<p class="msg-info">Successfully shipped your item</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-sinata text-sinata"><i class='bx bx-user-pin'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New 24 authors<span class="msg-time float-right">1 day
													ago</span></h6>
												<p class="msg-info">24 new authors joined last week</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-mehandi text-mehandi"><i class='bx bx-door-open'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Defense Alerts <span class="msg-time float-right">2 weeks
													ago</span></h6>
												<p class="msg-info">45% less alerts last 4 weeks</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0">Jessica Doe</p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-tachometer"></i><span>Dashboard</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-wallet"></i><span>Earnings</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cloud-download"></i><span>Downloads</span></a>
								<div class="dropdown-divider mb-0"></div>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="dropdown-item">
                                        <i class="bx bx-power-off"></i><span>Logout</span>
                                    </button>
                                </form>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-language">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="lang d-flex">
									<div><i class="flag-icon flag-icon-um"></i>
									</div>
									<div><span>En</span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-de"></i><span>German</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-fr"></i><span>French</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-um"></i><span>English</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-in"></i><span>Hindi</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-cn"></i><span>Chinese</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-ae"></i><span>Arabic</span></a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-12 col-lg-4">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-flex mb-2">
										<div>
											<p class="mb-0 font-weight-bold">Sessions</p>
											<h2 class="mb-0">501</h2>
										</div>
										<div class="ml-auto align-self-end">
											<p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i>  <span>1.01% 31 days ago</span>
											</p>
										</div>
									</div>
									<div id="chart1"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-flex mb-2">
										<div>
											<p class="mb-0 font-weight-bold">Visitors</p>
											<h2 class="mb-0">409</h2>
										</div>
										<div class="ml-auto align-self-end">
											<p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i>  <span>0.49% 31 days ago</span>
											</p>
										</div>
									</div>
									<div id="chart2"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-flex mb-2">
										<div>
											<p class="mb-0 font-weight-bold">Page Views</p>
											<h2 class="mb-0">2,346</h2>
										</div>
										<div class="ml-auto align-self-end">
											<p class="mb-0 font-14 text-danger"><i class='bx bxs-down-arrow-circle'></i>  <span>130.68% 31 days ago</span>
											</p>
										</div>
									</div>
									<div id="chart3"></div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-8">
							<div class="card radius-15">
								<div class="card-header border-bottom-0">
									<div class="d-lg-flex align-items-center">
										<div>
											<h5 class="mb-lg-0">New VS Returning Visitors</h5>
										</div>
										<div class="ml-lg-auto mb-2 mb-lg-0">
											<div class="btn-group-round">
												<div class="btn-group">
													<button type="button" class="btn btn-white">This Month</button>
													<div class="dropdown-menu">	<a class="dropdown-item" href="javaScript:;">This Week</a>
														<a class="dropdown-item" href="javaScript:;">This Year</a>
													</div>
													<button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div id="chart4"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-lg-flex align-items-center">
										<div>
											<h5 class="mb-4">Devices of Visitors</h5>
										</div>
									</div>
									<div id="chart5"></div>
								</div>
								<ul class="list-group list-group-flush mb-0">
									<li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Mobile<span class="badge badge-danger badge-pill">25%</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Desktop<span class="badge badge-primary badge-pill">65%</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Tablet<span class="badge badge-warning badge-pill">10%</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-6">
							<div class="card-deck flex-column flex-lg-row">
								<div class="card radius-15 bg-info">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-time'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white">2m 28s</h4>
										<p class="mb-0 text-white">Avg. Time on Site</p>
									</div>
								</div>
								<div class="card radius-15 bg-wall">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-bookmark-alt'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white">4.68</h4>
										<p class="mb-0 text-white">Pages/Session</p>
									</div>
								</div>
								<div class="card radius-15 bg-rose">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-bulb'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white">78%</h4>
										<p class="mb-0 text-white">New Sessions</p>
									</div>
								</div>
							</div>
							<div class="card-deck flex-column flex-lg-row">
								<div class="card radius-15 bg-danger">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-line-chart'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white">23.4%</h4>
										<p class="mb-0 text-white">Bounce Rate</p>
									</div>
								</div>
								<div class="card radius-15 bg-primary">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-group'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white">4,286</h4>
										<p class="mb-0 text-white">New Users</p>
									</div>
								</div>
								<div class="card radius-15 bg-success">
									<div class="card-body text-center">
										<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-cloud-download'></i>
										</div>
										<h4 class="mb-0 font-weight-bold mt-3 text-white">78%</h4>
										<p class="mb-0 text-white">Downloads</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12 col-xl-6">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-lg-flex align-items-center mb-4">
										<div>
											<h5 class="mb-0">Social Media Traffic</h5>
										</div>
										<div class="ml-auto">
											<h3 class="mb-0"><span class="font-14">Total Visits:</span> 874</h3>
										</div>
									</div>
									<hr/>
									<div class="dashboard-social-list">
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="widgets-social bg-youtube rounded-circle text-white"><i class='bx bxl-youtube'></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">YouTube</h6>
													</div>
												</div>
												<div class="ml-auto">298</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="widgets-social bg-facebook rounded-circle text-white"><i class='bx bxl-facebook'></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Facebook</h6>
													</div>
												</div>
												<div class="ml-auto">324</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="widgets-social bg-linkedin rounded-circle text-white"><i class='bx bxl-linkedin'></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Linkedin</h6>
													</div>
												</div>
												<div class="ml-auto">127</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="widgets-social bg-twitter rounded-circle text-white"><i class='bx bxl-twitter'></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Twitter</h6>
													</div>
												</div>
												<div class="ml-auto">325</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="widgets-social bg-tumblr rounded-circle text-white"><i class='bx bxl-tumblr'></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Tumblr</h6>
													</div>
												</div>
												<div class="ml-auto">287</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="widgets-social bg-dribbble rounded-circle text-white"><i class='bx bxl-dribbble'></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Dribbble</h6>
													</div>
												</div>
												<div class="ml-auto">154</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-8">
							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
										<h5 class="mb-0">Geographic</h5>
									</div>
									<hr/>
									<div id="geographic-map"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12 col-xl-4">
							<div class="card radius-15">
								<div class="card-body">
									<div class="d-lg-flex align-items-center mb-4">
										<div>
											<h5 class="mb-0">Top countries</h5>
										</div>
										<div class="ml-auto">
											<h3 class="mb-0"><span class="font-14">Total Visits:</span> 9587</h3>
										</div>
									</div>
									<hr/>
									<div class="dashboard-top-countries">
										<ul class="list-group list-group-flush">
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="font-20"><i class="flag-icon flag-icon-in"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">India</h6>
													</div>
												</div>
												<div class="ml-auto">647</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="font-20"><i class="flag-icon flag-icon-us"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">United States</h6>
													</div>
												</div>
												<div class="ml-auto">435</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="font-20"><i class="flag-icon flag-icon-vn"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Vietnam</h6>
													</div>
												</div>
												<div class="ml-auto">287</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="font-20"><i class="flag-icon flag-icon-au"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Australia</h6>
													</div>
												</div>
												<div class="ml-auto">432</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="font-20"><i class="flag-icon flag-icon-dz"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Angola</h6>
													</div>
												</div>
												<div class="ml-auto">345</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="font-20"><i class="flag-icon flag-icon-ax"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Aland Islands</h6>
													</div>
												</div>
												<div class="ml-auto">134</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="font-20"><i class="flag-icon flag-icon-ar"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Argentina</h6>
													</div>
												</div>
												<div class="ml-auto">147</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<div class="media align-items-center">
													<div class="font-20"><i class="flag-icon flag-icon-be"></i>
													</div>
													<div class="media-body ml-2">
														<h6 class="mb-0">Belgium</h6>
													</div>
												</div>
												<div class="ml-auto">210</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="card-deck flex-column flex-lg-row">
						<div class="card radius-15">
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Browsers Statistics </h5>
								</div>
								<hr/>
								<div class="media align-items-center">
									<div>
										<img src="{{asset('assets-merchant/images/icons/chrome.png')}}" width="35" height="35" alt="" />
									</div>
									<div class="media-body ml-3">
										<h6 class="mb-0">587</h6>
										<p class="mb-0">Chrome</p>
									</div>
									<p class="mb-0">24.3%</p>
								</div>
								<hr/>
								<div class="media align-items-center">
									<div>
										<img src="{{asset('assets-merchant/images/icons/firefox.png')}}" width="35" height="35" alt="" />
									</div>
									<div class="media-body ml-3">
										<h6 class="mb-0">358</h6>
										<p class="mb-0">Firefox</p>
									</div>
									<p class="mb-0">12.3%</p>
								</div>
								<hr/>
								<div class="media align-items-center">
									<div>
										<img src="{{asset('assets-merchant/images/icons/edge.png')}}" width="35" height="35" alt="" />
									</div>
									<div class="media-body ml-3">
										<h6 class="mb-0">867</h6>
										<p class="mb-0">Edge</p>
									</div>
									<p class="mb-0">24.3%</p>
								</div>
								<hr/>
								<div class="media align-items-center">
									<div>
										<img src="{{asset('assets-merchant/images/icons/opera.png')}}" width="35" height="35" alt="" />
									</div>
									<div class="media-body ml-3">
										<h6 class="mb-0">752</h6>
										<p class="mb-0">Opera</p>
									</div>
									<p class="mb-0">27.3%</p>
								</div>
								<hr/>
								<div class="media align-items-center">
									<div>
										<img src="{{asset('assets-merchant/images/icons/safari.png')}}" width="35" height="35" alt="" />
									</div>
									<div class="media-body ml-3">
										<h6 class="mb-0">586</h6>
										<p class="mb-0">Safari</p>
									</div>
									<p class="mb-0">14.5%</p>
								</div>
							</div>
						</div>
						<div class="card radius-15">
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Traffic Sources </h5>
								</div>
								<hr/>
								<div class="table-responsive">
									<table class="table table-striped mb-0">
										<thead>
											<tr>
												<th>Source</th>
												<th>Visitors</th>
												<th>Bounce Rate</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>(direct)</td>
												<td>56</td>
												<td>10%</td>
											</tr>
											<tr>
												<td>google</td>
												<td>29</td>
												<td>12%</td>
											</tr>
											<tr>
												<td>linkedin.com</td>
												<td>68</td>
												<td>33%</td>
											</tr>
											<tr>
												<td>bing</td>
												<td>14</td>
												<td>24%</td>
											</tr>
											<tr>
												<td>facebook.com</td>
												<td>87</td>
												<td>22%</td>
											</tr>
											<tr>
												<td>other</td>
												<td>98</td>
												<td>27%</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card radius-15">
							<div class="card-body">
								<div class="card-title">
									<h5 class="mb-0">Visitors By Gender </h5>
								</div>
								<hr/>
								<div id="chart6"></div>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h5 class="mb-0">Top pages by views </h5>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table mb-0">
									<thead class="thead-dark">
										<tr>
											<th>#</th>
											<th>Title</th>
											<th>Views</th>
											<th>Avg. Time</th>
											<th>Bounce Rate</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="https://themeforest.net/item/synadmin-bootstrap4-admin-template/29014766" target="_blank">https://themeforest.net/item/synadmin-bootstrap4-admin-template/29014766</a>
											</td>
											<td>660</td>
											<td>55s</td>
											<td>3.6%</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="https://codervent.com/wipe-admin-dark/dashboard/v3" target="_blank">https://codervent.com/wipe-admin-dark/dashboard/v3</a>
											</td>
											<td>352</td>
											<td>16s</td>
											<td>8.4%</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="https://themeforest.net/item/dashtreme-multipurpose-bootstrap4-admin-template/23059455" target="_blank">https://themeforest.net/item/dashtreme-multipurpose-bootstrap4-admin-template/23059455</a>
											</td>
											<td>101</td>
											<td>10s</td>
											<td>6.7%</td>
										</tr>
										<tr>
											<td>4</td>
											<td><a href="https://themeforest.net/item/rukada-responsive-bootstrap-4-admin-template/22820477" target="_blank">https://themeforest.net/item/rukada-responsive-bootstrap-4-admin-template/22820477</a>
											</td>
											<td>95</td>
											<td>57s</td>
											<td>5.2%</td>
										</tr>
										<tr>
											<td>5</td>
											<td><a href="https://codervent.com/rocker-angular/dashboard/v1" target="_blank">https://codervent.com/rocker-angular/dashboard/v1</a>
											</td>
											<td>102</td>
											<td>45s</td>
											<td>7.2%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
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
			<p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkSidebar">
				<label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
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
