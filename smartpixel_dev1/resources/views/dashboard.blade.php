<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit==no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/all.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/hamburgers.css')}}"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>African Stock Images | Fricapix</title>
</head>

<body class="dashboard">
<!--Header-->
@include('layouts.ordinarynavbar')
@include('flash-message')
<!--End Header -->
<div class="dashboard-info mx-0">
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-lg-3 col-6">
                <p class="small mb-0">Downloads</p>
                <p class="small mb-0">@if ($total_downloads == null)
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

            <div class="col-lg-3 col-6">
                <p class="small mb-0">Likes</p>
                <p class="small mb-0">{{$total_likes}}</p>
            </div>

            <div class="col-lg-3 col-6">
                <p class="small mb-0">Followers</p>
                <p class="small mb-0">{{\Illuminate\Support\Facades\Auth::user ()->followings()->count()}}</p>
            </div>

            <div class="col-lg-3 col-6">
                <p class="small mb-0">Available Earnings</p>
                <p class="small mb-0">&#8358;{{number_format ($earning['current_balance'], 2)}}<a href="" data-toggle="tooltip" data-placement="bottom"
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
                                        <p>Likes <span> {{$image->likers()->get()->count()}}</span></p>
                                        <p>Downloads <span> @if ($image->downloads == null)
                                                    {{__(0)}}
                                                @else
                                                    @if($image->downloads >= 1000000)
                                                        {{round($image->downloads/1000000, 1)."M"}}
                                                    @elseif($image->downloads >= 1000)
                                                        {{round($image->downloads/1000, 1)."K"}}
                                                    @else
                                                        {{$image->downloads}}
                                                    @endif
                                                @endif</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    {{--Todo: Dtee fix pagination position--}}
    {{ $images->links() }}
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
                                        <p>Likes <span> {{$image->likers()->get()->count()}}</span></p>
                                        <p>Downloads <span> @if ($image->downloads == null)
                                                    {{__(0)}}
                                                @else
                                                    @if($image->downloads >= 1000000)
                                                        {{round($image->downloads/1000000, 1)."M"}}
                                                    @elseif($image->downloads >= 1000)
                                                        {{round($image->downloads/1000, 1)."K"}}
                                                    @else
                                                        {{$image->downloads}}
                                                    @endif
                                                @endif</span></p>
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
                                    <img src="{{$image->url}}" class="card-img-top" alt="{{$image->title}}">
                                    <div class="card-body">
                                        <p>Likes <span> {{$image->likers()->get()->count()}}</span></p>
                                        <p>Downloads <span> @if ($image->downloads == null)
                                                    {{__(0)}}
                                                @else
                                                    @if($image->downloads >= 1000000)
                                                        {{round($image->downloads/1000000, 1)."M"}}
                                                    @elseif($image->downloads >= 1000)
                                                        {{round($image->downloads/1000, 1)."K"}}
                                                    @else
                                                        {{$image->downloads}}
                                                    @endif
                                                @endif</span></p>
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
                                        <p>Likes <span> {{$image->likers()->get()->count()}}</span></p>
                                        <p>Downloads <span> @if ($image->downloads == null)
                                                    {{__(0)}}
                                                @else
                                                    @if($image->downloads >= 1000000)
                                                        {{round($image->downloads/1000000, 1)."M"}}
                                                    @elseif($image->downloads >= 1000)
                                                        {{round($image->downloads/1000, 1)."K"}}
                                                    @else
                                                        {{$image->downloads}}
                                                    @endif
                                                @endif</span></p>
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
