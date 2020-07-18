<section class="contact_area p_120">
    <div class="container">

        <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14162.473808096545!2d83.2412452362618!3d27.449999276385558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996eb334fe91fc1%3A0x5793b8b9b8917fcd!2sLumbini%2032900%2C%20Nepal!5e0!3m2!1sen!2sus!4v1595060232979!5m2!1sen!2sus"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
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
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1"
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