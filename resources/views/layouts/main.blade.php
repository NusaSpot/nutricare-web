
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>@yield('title') &dash; {{ config('app.name', 'Laravel')}}</title>

	<!-- Site favicon -->
    <link href="{{ asset('assets/img/nutricare.png') }}" rel="icon">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('main/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('main/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('main/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('main/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('main/vendors/izitoast/iziToast.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('main/vendors/styles/style.css')}}">

	@stack('style')

	<style>
		.sidebar-light .sidebar-menu .sidebar-small-cap {
			color: #28a745;
		}

		.sidebar-light .sidebar-menu .dropdown-toggle:hover, .sidebar-light .sidebar-menu .show>.dropdown-toggle, .sidebar-light .sidebar-menu .submenu li a.active, .sidebar-light .sidebar-menu .submenu li a:hover {
			background-color: #28a745;
		}

		.sidebar-light .sidebar-menu>ul>li>.dropdown-toggle.active {
			background-color: #28a745;
			font-weight: bold;
		}

		.brand-logo-text {
			color: #28a745 !important;
			font-weight: bold !important;
		}

		.pre-loader .bar {
			background-color: #28a745;
		}

		.brand-title {
			color: #28a745;
			font-size: 2rem;
		}

		.brand-logo {
			border-bottom: none;
		}

		.sidebar-light .menu-block .mCS-dark-2.mCSB_scrollTools .mCSB_draggerRail {
			background-color: #e4e4e4;
		}

		.left-side-bar .mCS-dark-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
			background-color: #28a745;
		}

		.custom-file-input:focus, .custom-select:focus, .form-control:focus {
			border-color: #28a745;
		}

		.page-item.active .page-link {
			background-color: #28a745;
			border-color: #28a745;
		}

		.page-link {
			color: #28a745;
		}

		.blog-list ul li:hover .blog-caption h4 a, .fontawesome-icon-list .fa-hover:hover a, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_desc:after {
			color: #28a745;
		}

		.back-button {
			display: flex;
			align-items: center;
			gap: 6px;
			margin-bottom: .3em;
		}

		.back-button span {
			font-size: 12px;
		}

		.input-100 {
			width: 100%;
		}

		@media screen and (max-width: 768px) {
			[class*='col-xl-'], [class*='col-md-'] {
				padding-left: 0px;
				padding-right: 0px;
			}
		}
	</style>

</head>
<body class="header-white sidebar-light">
	{{-- @include('components/_loader') --}}

	@include('components/_header')

	@include('components/_right-sidebar')

	@include('components/_left-sidebar')

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			@yield('content')
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('main/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('main/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('main/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('main/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('main/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('main/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('main/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('main/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('main/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('main/vendors/izitoast/iziToast.min.js')}}"></script>
	<script src="{{asset('main/vendors/scripts/dashboard.js')}}"></script>
	@stack('script')
</body>
</html>