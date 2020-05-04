@include('layouts.ordinary_header')
@extends('layouts.searchnavbar')

<!--   navigation ends-->
<!--		second section-->

<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix mt-push-top">

    <div class="amado-pro-catagory clearfix">

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


<!--		Footer section-->
@include('layouts.footercity')