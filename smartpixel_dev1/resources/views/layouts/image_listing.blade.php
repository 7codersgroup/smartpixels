@foreach($images  as $detail)
    <!-- Single Catagory -->
    <div class="single-products-catagory clearfix" data-id="{{ $detail->id }}">
        <a href="">
            <img loading="lazy" src="{{$detail->url}}" alt="{{$detail->title}}"/>

        </a>
        @guest
            @if (Route::has('register'))
                <span class="like">
            <i id="like{{$detail->id}}" class="fa fa-heart-o"></i>
          </span>
            @endif
        @else

        <!-- Hover Content -->
            <span class="{{ Auth::user()->hasLiked($detail) ? 'liked' : 'like' }}">
            <i id="like{{$detail->id}}"
               class="fa {{ Auth::user()->hasLiked($detail) ? 'fa-heart' : 'fa-heart-o' }}"></i>
          </span>
        @endguest
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
                </dd>

                <button class="btn btn-primary ml-auto" type="submit" data-toggle="modal"
                        data-target="#addToCart">Buy
                </button>


            </figcaption>
        </form>
    </div>
@endforeach


