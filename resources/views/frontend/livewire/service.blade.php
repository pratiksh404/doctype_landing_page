<section class="work_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="work_inner row">
            @if (isset($services))
            @foreach ($services as $service)
            <div class="col-lg-4">
                <div class="work_item">
                    <i class="{{$service->service_icon}}"></i>
                    <a href="#">
                        <h4>{{$service->service_name}}</h4>
                    </a>
                    <p>{!! $service->service_excerpt !!}</p>
                </div>
            </div>
            @endforeach
            @endif
            {{--             <div class="col-lg-4">
                <div class="work_item">
                    <i class="lnr lnr-code"></i>
                    <a href="#">
                        <h4>Stunning Visuals</h4>
                    </a>
                    <p>Here, I focus on a range of items and features that we use in life without giving them a
                        second thought such as Coca Cola.</p>
                </div>
            </div>
        --}}
        </div>
    </div>
</section>