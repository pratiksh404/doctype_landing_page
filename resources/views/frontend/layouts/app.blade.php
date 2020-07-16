<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Nexus SaaS</title>
	@include('landing::frontend.layouts.links')
	@livewireStyles
</head>

<body>

	<!--================Header Menu Area =================-->
	@include('landing::frontend.layouts.header')
	<!--================Header Menu Area =================-->

	{{--==================== Content Area ====================--}}
	@yield('content')
	{{-- ==================================================== --}}

	<!--================Footer Area =================-->

	@livewire('footer')

	<!--================End Footer Area =================-->

	{{------------------------- Scripts -------------------------}}
	@include('landing::frontend.layouts.scripts')
	{{-- ---------------------------------------------------- --}}
	@livewireScripts
	<script src="{{asset('js/app.js')}}"></script>
</body>

</html>