@extends('landing::frontend.layouts.app')

@section('content')
<!--================Home Banner Area =================-->
@livewire('banner')
<!--================End Home Banner Area =================-->

<!--================Service Area =================-->
@livewire('service')
<!--================End Service Area =================-->

<!--================ Feature Area =================-->
@livewire('feature')
<!--================End Feature Area =================-->

<!--================Screen Area =================-->
@include('landing::frontend.layouts.app_description_1')
<!--================End Screen Area =================-->

<!--================Andriod IOS Area =================-->
@livewire('mobile')
<!--================End Andriod IOS Area =================-->

<!--================Price Area =================-->
@livewire('plan')
<!--================End Price Area =================-->

<!--================Testimonials Area =================-->
{{-- Not Done Comming Soon --}}
{{-- @include('landing::frontend.layouts.testimonial') --}}
<!--================End Testimonials Area =================-->

<!--================Made Life Area =================-->
@include('landing::frontend.layouts.app_description_2')
<!--================End Made Life Area =================-->

<!--================Impress Area =================-->
{{-- <section class="impress_area p_120">
     <div class="container">
        <div class="impress_inner">
            <h2>Got Impressed to our features?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <a class="banner_btn2" href="#">Request Free Demo</a>
        </div>
    </div>
</section> --}}
<!--================End Impress Area =================-->
@endsection