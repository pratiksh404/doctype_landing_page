<section class="screen_area text-center p_120">
    <div class="container">
        <div class="main_title">
            <h2>{{config('landing.app_description_heading_1','Unique Screens that work perfectly')}}</h2>
            <p>
                {{config('landing.app_description_1','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.')}}
            </p>
        </div>
        <img class="img-fluid"
            src="{{\doctype_admin\Landing\Models\Feature::all()->random(1)->first()->feature_image ? asset('storage').'/'.\doctype_admin\Landing\Models\Feature::all()->random(1)->first()->feature_image: ''}}"
            alt="{{\doctype_admin\Landing\Models\Feature::all()->random(1)->first()->feature_name ?? ''}}">
    </div>
</section>