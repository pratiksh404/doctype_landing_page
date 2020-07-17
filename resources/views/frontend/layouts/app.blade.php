<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Nexus SaaS</title>
	@include('landing::frontend.layouts.links')
	<style>
		.btn-store {
			color: #777777;
			min-width: 254px;
			padding: 12px 20px !important;
			border-color: #dddddd !important;
		}

		.btn-store:focus,
		.btn-store:hover {
			color: #ffffff !important;
			background-color: #168eea;
			border-color: #168eea !important;
		}

		.btn-store .btn-label,
		.btn-store .btn-caption {
			display: block;
			text-align: left;
			line-height: 1;
		}

		.btn-store .btn-caption {
			font-size: 24px;
		}
	</style>
	@livewireStyles
	@livewireScripts
	<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>

	{{------------------------- Scripts -------------------------}}
	@include('landing::frontend.layouts.scripts')
	{{-- ---------------------------------------------------- --}}


</head>

<body>

	<!--================Header Menu Area =================-->
	@include('landing::frontend.layouts.header')
	<!--================Header Menu Area =================-->

	{{--==================== Content Area ====================--}}
	@yield('content')
	{{-- ==================================================== --}}

	<!--================Footer Area =================-->

	@include('landing::frontend.layouts.footer')

	<!--================End Footer Area =================-->


</body>

</html>