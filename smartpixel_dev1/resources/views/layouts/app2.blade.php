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
<script src="{{ asset('js/utility.js') }}"></script>
<script src="https://kit.fontawesome.com/e9480ff5ec.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
      <div class="container-fluid">
        <nav
             class="navbar navbar-expand-lg navbar-light py-md-1 mob-pad px-md-0"
             >
          <a class="navbar-brand" href="index.html"
             ><img
                   src="img/logo.svg"
                   alt="Smartpixels logo"
                   width="90"
                   class="mob"
                   /></a>
          <button
                  class="hamburger hamburger--3dx-r navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarNav"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                  >
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto landing-page">
              <li class="nav-item mx-md-4 my-md-0 postion-relative">
                <a class="nav-link px-0" href="index.html">Home.</a>
              </li>
            @guest
            @if (Route::has('register'))
              <li c lass="nav-item mx-md-4 my-md-0 postion-relative">
                <a class="nav-link px-0" href="{{ route('register') }}">Sell.</a>
              </li>
            
              <li class="nav-item mx-md-4 my-md-0 postion-relative">
                <a class="nav-link px-0" href="{{ route('login') }}">Sign in.</a>
              </li>
            @endif
            @else
            <li class="nav-item mx-md-4 my-md-0 postion-relative">
              <a class="nav-link px-0" href="upload.html">Upload.</a>
            </li>

            <li class="dropdown nav-item mx-md-4 my-md-0 postion-relative">
              <a class="dropdown-toggle nav-link px-0" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                 {{ Auth::user()->firstname }}
              </a>
              <ul class="dropdown-menu drop-left" aria-labelledby="dropdownMenuButton">
                <li class="nav-item">
                  <a class="dropdown-item nav-link text-dark font-13" href="dashboard.html">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item nav-link text-dark font-13" href="accounts.html">Manage Account</a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item nav-link text-dark font-13" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>

              </ul>
            </li>
            @endguest
              <li class="nav-item mx-md-4 my-md-0 postion-relative">
                <a class="nav-link px-0" href="faq.html">FAQ.</a>
              </li>

              <li class="nav-item mx-md-4 my-md-0 postion-relative">
                <a class="nav-link px-0" href="contact.html">Contact Us.</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--   navigation ends-->

    @yield('content_new')
   
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

   
  </body>

</html>
