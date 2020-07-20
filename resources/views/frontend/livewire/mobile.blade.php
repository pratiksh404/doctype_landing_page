<section class="made_life_area p_120">
    @if (isset($landing->landing_android_app) || isset($landing->landing_ios_app) || isset($landing->landing_web_app))
    <div class="container">
        <div class="made_life_inner">
            <div class="row made_life_text">
                <div class="col-lg-6">
                    <div class="left_side_text">
                        <h3>Download Our App</h3>
                        <h6>{{config('landing.download_our_app_Heading','We are here to listen from you deliver exellence')}}
                        </h6>
                        <p>
                            {{config('landing.download_our_app_description','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim.')}}
                        </p>
                        <a class="main_btn" href="{{url('/docs')}}">Get Started Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row text-center">
                        <p>
                            @if (isset($landing->landing_ios_app))
                            <a href="{{$landing->landing_ios_app ?? ''}}" class="btn btn-store">
                                <span class="fa fa-apple fa-3x pull-left"></span>
                                <span class="btn-label">Download on the</span>
                                <span class="btn-caption">App Store</span>
                            </a>
                            @endif
                            @if (isset($landing->landing_android_app))
                            <a href="{{$landing->landing_android_app ?? ''}}" class="btn btn-store">
                                <span class="fa fa-android fa-3x pull-left"></span>
                                <span class="btn-label">Download on the</span>
                                <span class="btn-caption">Google Play</span>
                            </a>
                            @endif
                            @if (isset($landing->landing_web_app))
                            <a href="{{$landing->landing_web_app ?? ''}}" class="btn btn-store">
                                <span class="fa fa-windows fa-3x pull-left"></span>
                                <span class="btn-label">Download on the</span>
                                <span class="btn-caption">Windows Store</span>
                            </a>
                            @endif
                            {{--
                                        <a href="#" class="btn btn-store">
                                            <span class="fa fa-amazon fa-3x pull-left"></span>
                                            <span class="btn-label">Download on the</span>
                                            <span class="btn-caption">Amazon Store</span>
                                        </a> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</section>