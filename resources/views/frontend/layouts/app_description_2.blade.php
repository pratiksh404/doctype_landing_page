<section class="made_life_area made_white p_120">
    <div class="container">
        <div class="made_life_inner">
            <div class="row made_life_text">
                <div class="col-lg-6">
                    <div class="chart_img">
                        <img class="img-fluid"
                            src="{{\doctype_admin\Landing\Models\Feature::all()->random(1)->first()->feature_image ? asset('storage').'/'.\doctype_admin\Landing\Models\Feature::all()->random(1)->first()->feature_image: ''}}"
                            alt="{{\doctype_admin\Landing\Models\Feature::all()->random(1)->first()->feature_name ?? ''}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_side_text">
                        <h2>{{config('landing.app_description_heading_2','We’ve made a life that will change you')}}
                        </h2>
                        <p>
                            {{config('landing.app_description_2','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim.')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>