<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="banner_content">
                        <h2>{{$landing ? $landing->landing_name ?? 'Doctype Admin' : 'Doctype Admin'}}</h2>
                        <p>
                            {{$landing ? $landing->landing_excerpt ?? 'Laravel Admin Panel for lazy developers containing role and permission management, user management and integratable
                            packages' : ''}}
                        </p>
                        @if ($landing)
                        <a class="banner_btn" href="{{$landing->landing_documentation ?? url('/doc')}}">Get Started</a>
                        <a class="banner_btn2" href="{{$landing->landing->download ?? ''}}">Download</a>
                        @endif

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="home_left_img">
                        <img class="img-fluid"
                            src="{{$landing->landing_app_img ? asset('storage').'/'.$landing->landing_app_img : ''}}"
                            alt="{{$landing ? $landing->landing_name ?? 'Doctype Admin' : 'Doctype Admin'}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>