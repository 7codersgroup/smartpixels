@foreach($images  as $detail)
    <!-- Single Catagory -->
    <div class="single-products-catagory clearfix">
        <a href="">
            <img src="{{$detail->url}}" alt=""/>

        </a>

        <!-- Hover Content -->
        <span class="like">
            <i id="like{{$detail->id}}" class="fa {{ Auth::user()->hasLiked($detail) ? 'fa-heart' : 'fa-heart-o' }}"></i>
          </span>

        <span class="artist">
            <a href="{{route ('artist')}}/{{$detail->user_id}}"> <i class="fa fa-user-o text-white"></i></a>
          </span>
        <form action="{{route ('product.add.cart')}}" method="post" role="form" id="addToCart">
            @csrf
            <figcaption>
                <div>
                    <p class="img-title mb-0">{{$detail->title}}</p>
                    <div class="stats">
                        <i class="fa fa-cloud-download"> </i> 2k
                        <i class="fa fa-heart"> </i> {{ $detail->likers()->get()->count() }}
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

