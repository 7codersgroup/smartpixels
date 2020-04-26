<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit==no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Smartpixels') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://kit.fontawesome.com/e9480ff5ec.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="landing-page">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light py-md-1 mob-pad px-md-0">
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
                        <li class="nav-item mx-md-4 my-md-0 postion-relative">
                            <a class="nav-link px-0" href="{{ route('register') }}">Sell.</a>
                        </li>
                        
                        <li class="nav-item mx-md-4 my-md-0 postion-relative">
                            <a class="nav-link px-0" href="{{ route('login') }}">Sign in.</a>
                        </li> 
                        @endif
                    @else
                    <li class="nav-item mx-md-4 my-md-0 postion-relative">
              <a class="nav-link px-0" href="{{ route('upload') }}">Upload.</a>
            </li>
            <li class="nav-item mx-md-4 my-md-0 postion-relative">
            <a class=" nav-link text-dark font-13" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout.') }}
                                    </a>
                    
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
        <!--Header-->
        <!--End Header -->
       
        @yield('content')

    </body>

</html>
