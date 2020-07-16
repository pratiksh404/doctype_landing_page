<section class="price_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Choose Your Price Plan</h2>

        </div>
        <div class="price_inner row">
            @foreach ($plans as $plan)
            <div class="col-lg-4">
                <div class="price_item">
                    <div class="price_head" style="background-color: {{$plan->plan_color}}">
                        <h4>{{$plan->plan_name}}</h4>
                    </div>
                    <div class="price_body">
                        <ul class="list">
                            @foreach ($plan->plan_services as $service)
                            <li>{{$service}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="price_footer">
                        <h3><span class="dlr">{{$plan->plan_currency_symbol}}</span> {{$plan->plan_price}} <span
                                class="month">Per <br />{{$plan->plan_period}}</span></h3>
                        <a class="main_btn" href="#">Get Started</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>