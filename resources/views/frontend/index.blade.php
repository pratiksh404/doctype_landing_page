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
<section class="screen_area text-center p_120">
    <div class="container">
        <div class="main_title">
            <h2>Unique Screens that work perfectly</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <img class="img-fluid" src="img/banner/home-left-1.png" alt="">
    </div>
</section>
<!--================End Screen Area =================-->

<!--================Andriod IOS Area =================-->
@livewire('mobile')
<!--================End Andriod IOS Area =================-->

<!--================Price Area =================-->
@livewire('plan')
<!--================End Price Area =================-->

<!--================Testimonials Area =================-->
<section class="testimonials_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Feedback from Customers</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="testi_slider owl-carousel">
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="img/testimonials/testi-1.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor,
                                printer, scanner, speaker, projector, hardware.</p>
                            <h4>Mark Alviro Wiens</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="img/testimonials/testi-2.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor,
                                printer, scanner, speaker, projector, hardware.</p>
                            <h4>Mark Alviro Wiens</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="img/testimonials/testi-1.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor,
                                printer, scanner, speaker, projector, hardware.</p>
                            <h4>Mark Alviro Wiens</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="img/testimonials/testi-2.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor,
                                printer, scanner, speaker, projector, hardware.</p>
                            <h4>Mark Alviro Wiens</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="img/testimonials/testi-1.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor,
                                printer, scanner, speaker, projector, hardware.</p>
                            <h4>Mark Alviro Wiens</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testi_item">
                    <div class="media">
                        <div class="d-flex">
                            <img src="img/testimonials/testi-2.png" alt="">
                        </div>
                        <div class="media-body">
                            <p>Accessories Here you can find the best computer accessory for your laptop, monitor,
                                printer, scanner, speaker, projector, hardware.</p>
                            <h4>Mark Alviro Wiens</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Testimonials Area =================-->

<!--================Made Life Area =================-->
<section class="made_life_area made_white p_120">
    <div class="container">
        <div class="made_life_inner">
            <div class="row made_life_text">
                <div class="col-lg-6">
                    <div class="chart_img">
                        <img class="img-fluid" src="img/banner/home-left-1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_side_text">
                        <h3>We’ve made a life <br />that will change you</h3>
                        <h6>We are here to listen from you deliver exellence</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        <a class="main_btn" href="#">Get Started Now</a>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <a class="banner_btn2" href="#">Request Free Demo</a>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->
@endsection