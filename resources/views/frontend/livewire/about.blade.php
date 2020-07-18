<section class="screen_area text-center p_120">
    <div class="container">
        <div class="main_title">
            <h2>About {{$landing->landing_name ?? config('landing.app_name','Doctype Admin')}}</h2>
            <p>
                {{$landing->landing_excerpt ?? ''}}
            </p>
            <p>
                {!! $landing->landing_about ?? '' !!}
            </p>
        </div>
        <img src="{{$landing->landing_app_img ? asset('storage').'/'.$landing->landing_app_img : ''}}"
            alt="{{$landing->landing_name ?? config('landing.app_name','Doctype Admin')}}" class="img-fluid">
        <hr>
        <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item"
                src="{{$landing->landing_app_video ?? 'https://www.youtube.com/embed/5g-yAFDbtlQ'}}"></iframe>
        </div>
    </div>
</section>