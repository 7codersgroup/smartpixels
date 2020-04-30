<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit==no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/hamburgers.css" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Frikapix</title>
</head>

<body class="dashboard">
<!--Header-->
<div class="container-fluid bg-white">
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
                    <a class="nav-link px-0" href="{{route ('home')}}">Home.</a>
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
                        <a class="nav-link px-0" href="{{ route('upload') }}">Upload.</a>
                    </li>

                    <li class="dropdown nav-item mx-md-4 my-md-0 postion-relative">
                        <a class="dropdown-toggle nav-link px-0" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            {{ Auth::user()->firstname }}
                        </a>
                        <ul class="dropdown-menu drop-left" aria-labelledby="dropdownMenuButton">
                            <li class="nav-item">
                                <a class="dropdown-item nav-link text-dark font-13" href="{{route ('dashboard')}}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item nav-link text-dark font-13" href="{{route ('account')}}">Manage Account</a>
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
<!--End Header -->
<div class="dashboard-info mx-0">
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-lg-3 col-6">
                <p class="small mb-0">Downloads</p>
                <p class="small mb-0">{{$total_downloads}}</p>
            </div>

            <div class="col-lg-3 col-6">
                <p class="small mb-0">Likes</p>
                <p class="small mb-0">...</p>
            </div>

            <div class="col-lg-3 col-6">
                <p class="small mb-0">Followers</p>
                <p class="small mb-0">...</p>
            </div>

            <div class="col-lg-3 col-6">
                <p class="small mb-0">Available Earnings</p>
                <p class="small mb-0">&#8358; 5,000,000<a href="" data-toggle="tooltip" data-placement="bottom"
                                                          title="To request payment you need at least $25 in available earnings. Additionally, you should not have other pending payouts, and 45 days must have passed since your first sale.">
                        Payout <i class="fa fa-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</div>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab"
           aria-controls="nav-all" aria-selected="true">All</a>
        <a class="nav-item nav-link" id="nav-approved-tab" data-toggle="tab" href="#nav-approved" role="tab"
           aria-controls="nav-approved" aria-selected="false">Approved</a>
        <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab"
           aria-controls="nav-review" aria-selected="false">In review</a>

        <a class="nav-item nav-link" id="nav-rejected-tab" data-toggle="tab" href="#nav-rejected" role="tab"
           aria-controls="nav-rejected" aria-selected="false">Rejected</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
        <div class="dashboard-explore">

            <div class="container-fluid">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-3 my-3">
                            <div class="dashboard-card">
                                <div class="card">
                                    <img src="{{$image->url}}" class="card-img-top">
                                    <div class="card-body">
                                        <p>Likes <span> {{$image->likes}}</span></p>
                                        <p>Downloads <span> {{$image->downloads}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-approved" role="tabpanel" aria-labelledby="nav-approved-tab">
        <div class="dashboard-explore">

            <div class="container-fluid">
                <div class="row">
                    @foreach($images_approved as $image)
                        <div class="col-md-3 my-3">
                            <div class="dashboard-card">
                                <div class="card">
                                    <img src="{{$image->url}}" class="card-img-top">
                                    <div class="card-body">
                                        <p>Likes <span> {{$image->likes}}</span></p>
                                        <p>Downloads <span> {{$image->downloads}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
        <div class="dashboard-explore">

            <div class="container-fluid">
                <div class="row">
                    @foreach($images_review as $image)
                        <div class="col-md-3 my-3">
                            <div class="dashboard-card">
                                <div class="card">
                                    <img src="{{$image->url}}" class="card-img-top">
                                    <div class="card-body">
                                        <p>Likes <span> {{$image->likes}}</span></p>
                                        <p>Downloads <span> {{$image->downloads}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-rejected" role="tabpanel" aria-labelledby="nav-rejected-tab">
        <div class="dashboard-explore">

            <div class="container-fluid">
                <div class="row">
                    @foreach($images_rejected as $image)
                        <div class="col-md-3 my-3">
                            <div class="dashboard-card">
                                <div class="card">
                                    <img src="{{$image->url}}" class="card-img-top">
                                    <div class="card-body">
                                        <p>Likes <span> {{$image->likes}}</span></p>
                                        <p>Downloads <span> {{$image->downloads}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/utility.js"></script>
<script src="https://kit.fontawesome.com/e9480ff5ec.js" crossorigin="anonymous"></script>

</html>
