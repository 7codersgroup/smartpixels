@include('layouts.ordinary_header')

@extends('layouts.searchnavbar')
    <!--		second section-->

    <div class="container-fluid mt-push-top">
        <div class="row pt-3">
            <div class="col-lg-3 mb-3">
                <div class="author_bio">
                    <div class="align-item row">
                        <div class="col-4">
                            <img src="img/avatar.jpg" class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-6">
                            <a href="artist.html">{{$user->firstname}} {{$user->lastname}}</a>
                        </div>
                    </div>

                    <div class="my-3">
                        <button class="btn btn-pixel-outline btn-block follow" data-id="{{ $user->id }}">
                            <strong>
                                @if(Auth::user()->isFollowing($user))
                                    UnFollow
                                @else
                                    Follow
                                @endif
                            </strong>

                        </button>
                    </div>
                    <hr />
                    <div class="row text-center">
                        <div class="col-4">
                            <p class="small mb-1">Resources</p>
                            <p>{{$total_resources}}</p>
                        </div>
                        <div class="col-4">
                            <p class="small mb-1 tl-follower">Followers</p>
                            <p>{{$user->followings()->count()}}</p>

                        </div>
                        <div class="col-4">
                            <p class="small mb-1">Downloads</p>
                            <p>{{$total_downloads}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <!-- Product Catagories Area Start -->
                <div class="products-catagories-area clearfix">
                    <div class="amado-pro-catagory clearfix">
                        <!-- Single Catagory -->
                    @foreach($images  as $detail)
                        <!-- Single Catagory -->
                            <div class="single-products-catagory clearfix">
                                <a href="shop.html">
                                    <img src="{{$detail->url}}" alt=""/>

                                </a>

                                <!-- Hover Content -->
                                <span class="like">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-heart"></i>
          </span>

                                <span class="artist">
            <a href="artist.html{{$detail->user_id}}"> <i class="fa fa-user-o text-white"></i></a>
          </span>
                                <form action="{{route ('product.add.cart')}}" method="post" role="form" id="addToCart">
                                    @csrf
                                    <figcaption>
                                        <div>
                                            <p class="img-title mb-0">{{$detail->title}}</p>
                                            <div class="stats">
                                                <i class="fa fa-cloud-download"> </i> 2k
                                                <i class="fa fa-heart"> </i> {{$detail->likes}}
                                            </div>
                                        </div>

                                        <dd>

                                            <input type="hidden" name="imageId" value="{{ $detail->id }}">
                                            <input type="hidden" name="title" value="{{ $detail->title }}">
                                            <input type="hidden" name="url" value="{{ $detail->url }}">
                                            <input type="hidden" name="price" id="finalPrice" value="{{ $detail->price }}">

                                        </dd>

                                        <button class="btn btn-primary ml-auto" type="submit" data-toggle="modal"
                                                data-target="#addToCart">Buy
                                        </button>


                                    </figcaption>
                                </form>
                            </div>
                    @endforeach

                    </div>
                </div>
                <!-- Product Catagories Area End -->

            </div>
        </div>
    </div>

@include('layouts.footercity')
<script src="{{ asset('js/follow.js') }}" defer></script>