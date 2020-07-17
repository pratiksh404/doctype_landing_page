@if (isset($features))
@if (count($features) > 0)
<section class="made_life_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Features</h2>
        </div>
        <div class="made_life_inner">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($features as $feature)
                <li class="nav-item">
                    <a class="nav-link" id="feature_{{$feature->id}}-tab" data-toggle="tab"
                        href="#feature_{{$feature->id}}" role="tab" aria-controls="feature_{{$feature->id}}"
                        aria-selected="{{$loop->first ? 'true' : 'false'}}">{{$feature->feature_name}}</a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($features as $feature)
                <div class="tab-pane fade" id="feature_{{$feature->id}}" role="tabpanel"
                    aria-labelledby="feature_{{$feature->id}}-tab">
                    <div class="row made_life_text">
                        <div class="col-lg-6">
                            <div class="left_side_text">
                                <h3>{{$feature->feature_name}}</h3>
                                <p>
                                    {!! $feature->feature_about !!}
                                </p>
                                <a class="main_btn" href="#">Get Started Now</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="chart_img">
                                <img class="img-fluid" src="{{asset('storage').'/'.$feature->feature_image}}"
                                    alt="{{$feature->feature_name}}">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endif
@endif