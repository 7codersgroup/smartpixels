@include('layouts.ordinary_header')

@section('title', __('African Stock Images'))
@extends('layouts.searchnavbar')
    <!--		second section-->

    <div class="container-fluid mt-push-top">
        <div class="row pt-3">
            <div class="col-lg-3 mb-3">
                <div class="author_bio">
                    <div class="align-item row">
                        <div class="col-4">
                            <img src="{{$user->avatar}}"
                                 class="img-fluid rounded-circle"/>
                        </div>
                        <div class="col-6">
                            <a href="{{url ("artist/{$user->id}")}}">{{$user->firstname}} {{$user->lastname}}</a>
                        </div>
                    </div>

                    <div class="my-3">
                        <p class="text-center font-weight-500 mb-2">{{$user->firstname}} {{$user->lastname}}</p>
                        <p class="text-center small">Adam Perez is a freelance photographer and filmmaker based in Los Angeles, CA. His work centers on intimate stories that expose the nuances of race, gender, identity, and culture.</p>

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
                        <!-- TODO: Insert Following Counter-->
                        {{--Following Count--}}
                        {{--<div class="col-4">
                            <p class="small mb-1 tl-follower">Following</p>
                            <p class="">{{$user->followings()->count()}}</p>
                        </div>--}}
                        <div class="col-4">
                            <p class="small mb-1">Downloads</p>
                            <p>@if ($total_downloads == null)
                                    {{__(0)}}
                                @else
                                    @if($total_downloads >= 1000000)
                                        {{round($total_downloads/1000000, 1)."M"}}
                                    @elseif($total_downloads >= 1000)
                                        {{round($total_downloads/1000, 1)."K"}}
                                    @else
                                        {{$total_downloads}}
                                    @endif
                                @endif</p>
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
