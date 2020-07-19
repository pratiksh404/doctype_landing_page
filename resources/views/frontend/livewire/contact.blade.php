<section class="contact_area p_120">
    <div class="container">

        <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="{{$landing->landing_google_map ?? ''}}" width="600" height="450"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>{{$landing->landing_location ?? 'Kathmandu, Nepal'}}</h6>
                    </div>
                    <hr>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6>{{$landing->landing_contact ?? '123456'}}</h6>
                    </div>
                    <hr>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6>{{$landing->landing_email}}</h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                @if ($message = Session::has('success'))
                <a href="#" class="genric-btn info radius">{{$message}}</a>
                @endif
                <form class="row contact_form" action="{{url('/contact')}}" method="post" id="contactForm"
                    novalidate="novalidate">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="contact_name"
                                placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="contact_email"
                                placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="contact_subject"
                                placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="contact_message" id="message" rows="1"
                                placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>