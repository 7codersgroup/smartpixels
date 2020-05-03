<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit==no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Smartpixels" />
    <!--favicicon-->
    <link rel="shortcut icon" href="img/favicon.jpg" />
    <link rel="apple-touch-icon" href="img/favicon.jpg" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'African stock images | FricaPix') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/utility.js') }}"></script>
    <script src="https://kit.fontawesome.com/e9480ff5ec.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hamburgers.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-animation.css') }}" rel="stylesheet">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>

<body class="landing">
<div class="">
    @extends('layouts.searchnavbar')
</div>
<!--   navigation ends-->

@yield('content_search')

<!--		Footer section-->
<section class="font-circular">
    <div class="container--flex cityline">
        <img class="cityline__image" src="img/cityline.svg" alt="cityline" />
    </div>

    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div
                        class="col-lg-3 col-sm-6 col-12 about-widget aos-init aos-animate"
                        data-aos="fade-up"
                >
                    <a href="index.html" class="logo"
                    ><img src="img/logo.svg" alt="smartpixels logo" width="120"
                        /></a>
                    <a href="#" class="email" title="Send a mail to Smartpixels"
                    >hello@smartpixels.com</a
                    >
                    <a href="#" class="phone" title="Call Smartpixels"
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
                        <li><a href="#" title="smartpixels blog">Blog</a></li>
                        <li>
                            <a href="#" title="Contact Smartpixels for questions"
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
                        <li><a href="#" title="About smartpixels">About us</a></li>
                        <li>
                            <a href="#" title="The team behind smartpixels">Team</a>
                        </li>
                        <li>
                            <a href="#" title="Smartpixels Media Resources">Media</a>
                        </li>
                    </ul>
                </div>
                <!-- /.footer-list -->
                <div class="col-lg-3 col-lg-2 col-sm-6 col-12 footer-information">
                    <h5 class="title">Our Address</h5>
                    <p>Smartpixels Plaza, Victoria Island <br />Lagos, Nigeria</p>
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
                                    title="Smartpixels privacy policy"
                            >Privacy &amp; Policy.</a
                            >
                        </li>
                        <li>
                            <a
                                    href="faq.html"
                                    title="Smartpixels Frequently asked questions policy"
                            >Faq.</a
                            >
                        </li>
                        <li>
                            <a href="terms.html" title="Smartpixels Terms of Use"
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


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addToCart">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="addToCart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h6 class="modal-title text-left">Asset Added to your Cart</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="img/close.png" alt="close modal" />
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-4">Woman with mask in quarantine looking at the</p>
                <div class="row">
                    <div class="col-lg-6 my-2">
                        <button class="btn btn-pixel-outline btn-block" data-dismiss="modal">CONTINUE</button>
                    </div>
                    <div class="col-lg-6 my-2">
                        <a href="cart-items.html" class="btn btn-pixel btn-block">CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
