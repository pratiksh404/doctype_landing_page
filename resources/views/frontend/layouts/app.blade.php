<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon"
		href="{{\doctype_admin\Landing\Models\Landing::first()->landing_logo ? asset('storage'.'/'.\doctype_admin\Landing\Models\Landing::first()->landing_logo) : asset('vendor/landing/img/logo.png')}}"
		type="image/png">
	<title>
		{{\doctype_admin\Landing\Models\Landing::first()->landing_name ?? config('landing.app_name','Doctype Admin')}}
	</title>
	@include('landing::frontend.layouts.links')

	@livewireStyles
	@livewireScripts
	{{-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" defer
		data-turbolinks-track="reload"></script> --}}

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