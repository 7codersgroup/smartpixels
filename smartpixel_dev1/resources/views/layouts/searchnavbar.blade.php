@include('flash-message')
<div class="">
    <div class="container-fluid">
        <nav
                class="navbar navbar-expand-lg navbar-light py-md-1 mob-pad fixed-top bg-white"
        >
            <a class="navbar-brand" href="{{route ('home')}}"
            ><img
                        src="{{asset ('img/fricapix-logo-x2.png')}}"
                        alt="Fricapix logo"
                        width="120"
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

            <div class="padding-top-large motmot ml-lg-5 w-45">
                <form
                        method="get"
                        action="/search"
                        class="js-search-form"
                        name="query"
                >

                    <div class="container-relative white hero-input-group">
                        <div class="input-box" data-active="input">
                            <div class="container-table">
                                <div
                                        class="container-table-cell container-full container-relative"
                                >
                                    <input
                                            name="query"
                                            class="js-search-text-input input--silent input--full light input--xlarge"
                                            type="text"
                                            placeholder="Search"
                                            autocomplete="off"
                                            required
                                            value="{{old ('query')}}"
                                    />
                                </div>
                                <div class="container-table-cell no-stretch">
                                    <div class="px-4 position-relative">
                                        <img
                                                src="{{asset ('img/camera.svg')}}"
                                                class="img-fluid position-absolute"
                                                width="35"
                                                style="bottom: -15px; left: 0px;"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto landing-page">
                    <li class="nav-item mx-md-4 my-md-0 postion-relative">
                        <a class="nav-link px-0" href="{{ route ('home') }}">Home.</a>
                    </li>
                    @guest
                        @if ( Route::has('register') )
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

                        <li class="dropdown nav-item mx-md-4 my-md-0 postion-relative">
                            <a class="dropdown-toggle nav-link px-0" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                               Hi {{ Auth::user()->firstname }}
                            </a>
                            <ul class="dropdown-menu drop-left" aria-labelledby="dropdownMenuButton">
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link text-dark font-13" href="{{ route ('dashboard') }}">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link text-dark font-13" href="{{ route ('account') }}">Manage Account</a>
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
                        <li class="nav-item mx-md-4 my-md-0 postion-relative">
                            <a class="nav-link px-0" href="{{ route('checkout.cart') }}">View Cart.<span class="badge badge-secondary">{{\Cart::session(Auth::id())->getContent()->count()}}</span></a>
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
