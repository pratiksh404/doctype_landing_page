@extends('landing::frontend.layouts.app')

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                    <a href="{{url('/')}}">Home</a>
                    <a href="{{url('/about')}}">About</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

{{-- ===============Start About App Area================ --}}
@livewire('about')
{{-- =================================================== --}}

<!--================Feature Area =================-->
@livewire('feature')
<!--================End Feature Area =================-->

<!--================Screen Area =================-->
@include('landing::frontend.layouts.app_description_1')
<!--================End Screen Area =================-->

<!--================Made Life Area =================-->
@include('landing::frontend.layouts.app_description_2')
<!--================End Made Life Area =================-->
@endsection