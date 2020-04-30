<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>African stock images | Smartpixels</title>
    <meta name="Description" content="Smartpixels" />
    <!--favicicon-->
    <link rel="shortcut icon" href="img/favicon.jpg" />
    <link rel="apple-touch-icon" href="img/favicon.jpg" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/custom-animation.css" />
    <link rel="stylesheet" href="css/hamburgers.css" />

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>

<body class="landing">
@extends('layouts.searchnavbar')
<!--   navigation ends-->

<!--		second section-->

<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix mt-push-top">
    <div class="amado-pro-catagory clearfix">
        @foreach($images ?? '' as $detail)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="{{$detail->url}}" alt="" />

            </a>

            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">{{$detail->title}}</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> {{$detail->likes}}
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>

        </div>
@endforeach
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="img/bg-img/2.jpg" alt="" />
            </a>

            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">Woman with mask in quarantine looking at the...</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> 118
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>
        </div>

        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="img/bg-img/3.jpg" alt="" />
            </a>
            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">Woman with mask in quarantine looking at the...</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> 118
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>
        </div>

        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="img/bg-img/4.jpg" alt="" />
            </a>

            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">Woman with mask in quarantine looking at the...</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> 118
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>
        </div>

        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="img/bg-img/5.jpg" alt="" />
            </a>
            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">Woman with mask in quarantine looking at the...</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> 118
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>
        </div>

        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="img/bg-img/6.jpg" alt="" />
            </a>
            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">Woman with mask in quarantine looking at the...</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> 118
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>
        </div>

        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="img/bg-img/7.jpg" alt="" />
            </a>
            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">Woman with mask in quarantine looking at the...</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> 118
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>
        </div>

        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="img/bg-img/8.jpg" alt="" />
            </a>
            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">Woman with mask in quarantine looking at the...</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> 118
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>
        </div>

        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="img/bg-img/9.jpg" alt="" />
            </a>
            <!-- Hover Content -->
            <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

            <span class="artist">
            <a href="artist.html"> <i class="fa fa-user-o text-white"></i></a>
          </span>

            <figcaption>
                <div>
                    <p class="img-title mb-0">Woman with mask in quarantine looking at the...</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> 118
                    </div>
                </div>

                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addToCart">Buy</button>
            </figcaption>
        </div>
    </div>
</div>
<!-- Product Catagories Area End -->

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

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/utility.js"></script>
</body>
</html>
