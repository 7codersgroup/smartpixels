@include('layouts.ordinary_header')

@extends('layouts.searchnavbar')
    <!--		second section-->

    <div class="container-fluid mt-push-top">
        <div class="row pt-3">
            <div class="col-lg-3 mb-3">
                <div class="author_bio">
                    <div class="align-item row">
                        <div class="col-4">
                            <img src="https://res.cloudinary.com/demo/image/upload/d_avatar.png/non_existing_id.png"
                                 class="img-fluid rounded-circle"/>
                        </div>
                        <div class="col-6">
                            <a href="{{url ("artist/{$user->id}")}}">{{$user->firstname}} {{$user->lastname}}</a>
                        </div>
                    </div>

                    <div class="my-3">
                        @if (Auth::user() != $user)
                            <button class="btn btn-pixel-outline btn-block follow" data-id="{{ $user->id }}">
                                <strong>
                                    @if(Auth::user()->isFollowing($user))
                                        UnFollow
                                    @else
                                        Follow
                                    @endif
                                </strong>

                            </button>
                        @endif

                    </div>
                    <hr />
                    <div class="row text-center">
                        <div class="col-4">
                            <p class="small mb-1">Resources</p>
                            <p>{{$total_resources}}</p>
                        </div>
                        <div class="col-4">
                            <p class="small mb-1 tl-follower">Followers</p>
                            <p class="tl-follower">{{$user->followers()->count()}}</p>

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
                        @if (empty($images))

                        @endif
                        @include('layouts.image_listing')

                    </div>
                </div>
                <!-- Product Catagories Area End -->

            </div>
        </div>
    </div>

@include('layouts.footercity')
<script src="{{ asset('js/follow.js') }}" defer></script>