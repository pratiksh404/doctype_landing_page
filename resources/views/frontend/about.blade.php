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

<!--================Feature Area =================-->
@livewire('feature')
<!--================End Feature Area =================-->

<!--================Screen Area =================-->
@include('landing::frontend.layouts.app_description_1')
<!--================End Screen Area =================-->

<!--================Made Life Area =================-->
<section class="made_life_area p_120">
    <div class="container">
        <div class="made_life_inner">
            <div class="row made_life_text">
                <div class="col-lg-6">
                    <div class="left_side_text">
                        <h3>We’ve made a life <br />that will change you</h3>
                        <h6>We are here to listen from you deliver exellence</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        <a class="main_btn" href="#">Get Started Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chart_img">
                        <img class="img-fluid" src="img/browser.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Made Life Area =================-->

<!--================Impress Area =================-->
<section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner">
            <h2>Got Impressed to our features?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <a class="banner_btn2" href="#">Request Free Demo</a>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->
@endsection