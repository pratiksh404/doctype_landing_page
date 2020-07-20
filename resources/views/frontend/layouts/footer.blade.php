<footer class="footer_area p_120">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h3>About Me</h3>
                    </div>
                    <p>{{$landing->landing_excerpt}}</p>
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </aside>
            </div>
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                    <div class="f_title">
                        <h3>Newsletter</h3>
                    </div>
                    <p>Stay updated with our latest trends</p>
                    <div id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="subscribe_form relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </aside>
            </div>
            <div class="col-lg-2">
                <aside class="f_widget social_widget">
                    <div class="f_title">
                        <h3>Follow Me</h3>
                    </div>
                    <p>Let us be social</p>
                    <ul class="list">
                        @if (isset($landing))


                        @if($landing->landing_facebook)
                        <li><a href="{{$landing->landing_facebook}}"><i class="fa fa-facebook"></i></a></li>
                        @endif

                        @if ($landing->landing_instagram)
                        <li><a href="{{$landing->landing_instagram}}"><i class="fa fa-instagram"></i></a></li>
                        @endif

                        @if ($landing->landing_messenger)
                        <li><a href="{{$landing->landing_messenger}}"><i class="fa fa-facebook-messenger"></i></a></li>
                        @endif
                        @if ($landing->landing_github)
                        <li><a href="{{$landing->landing_github}}"><i class="fa fa-github"></i></a></li>
                        @endif

                        @if ($landing->landing_linkedin)
                        <li><a href="{{$landing->landing_linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                        @endif

                        @if ($landing->landing_email)
                        <li><a href="{{$landing->landing_email}}"><i class="fa fa-envelope-square"></i></a></li>
                        @endif

                        @if ($landing->landing_patreon)
                        <li><a href="{{$landing->landing_patreon}}"><i class="fa fa-patreon"></i></a></li>
                        @endif


                        @endif
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</footer>