<!--		Footer section-->
<section class="font-circular">
    <div class="container--flex cityline">
        <img class="cityline__image" src="{{ asset ('img/cityline.svg')}}" alt="cityline"/>
    </div>

    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div
                        class="col-lg-3 col-sm-6 col-12 about-widget aos-init aos-animate"
                        data-aos="fade-up"
                >
                    <a href="{{route ('home')}}" class="logo"
                    ><img src="{{asset ('img/logo.sv')}}g" alt="Fricapix logo" width="120"
                        /></a>
                    <a href="#" class="email" title="Send a mail to Fricapix"
                    >hello@fricapix.com</a
                    >
                    <a href="#" class="phone" title="Call Fricapix"
                    >514.2505.2231</a
                    >
                </div>
                <!-- /.about-widget -->
                <div
                        class="col-lg-3 col-sm-6 col-12 footer-list aos-init aos-animate"
                        data-aos="fade-up"
                >
                    <h5 class="title">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" title="Fricapix blog">Blog</a></li>
                        <li>
                            <a href="#" title="Contact Fricapix for questions"
                            >Contact Us</a
                            >
                        </li>
                    </ul>
                </div>
                <!-- /.footer-recent-post -->
                <div
                        class="col-lg-3 col-sm-6 col-12 footer-list aos-init aos-animate"
                        data-aos="fade-up"
                >
                    <h5 class="title">About us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" title="About Fricapix">About us</a></li>
                        <li>
                            <a href="#" title="The team behind Fricapix">Team</a>
                        </li>
                        <li>
                            <a href="#" title="Fricapix Media Resources">Media</a>
                        </li>
                    </ul>
                </div>
                <!-- /.footer-list -->
                <div class="col-lg-3 col-lg-2 col-sm-6 col-12 footer-information">
                    <h5 class="title">Our Address</h5>
                    <p>Fricapix Plaza, Victoria Island <br />Lagos, Nigeria</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="bottom-footer mt-0">
                <div class="clearfix">
                    <p class="float-md-left">© 2020 copyright all right reserved</p>

                    <ul class="float-md-right">
                        <li>
                            <a
                                    href="privacy-policy.html"
                                    title="Fricapix privacy policy"
                            >Privacy &amp; Policy.</a
                            >
                        </li>
                        <li>
                            <a
                                    href="faq.html"
                                    title="Fricapix Frequently asked questions policy"
                            >Faq.</a
                            >
                        </li>
                        <li>
                            <a href="terms.html" title="Fricapix Terms of Use"
                            >Terms.</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.bottom-footer -->
        </div>
    </div>
</section>


@extends('layouts.cartmodal')

<script src="{{asset ('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset ('js/popper.min.js')}}"></script>
<script src="{{asset ('js/bootstrap.min.js')}}"></script>
<script src="https://kit.fontawesome.com/e9480ff5ec.js" crossorigin="anonymous"></script>
{{--<script src="{{asset ('js/index.js')}}"></script>--}}
<script src="{{asset ('js/selectize.min.js')}}"></script>
<script src="{{asset ('js/plugins.js')}}"></script>
<script src="{{asset ('js/utility.js')}}"></script>
</body>
</html>