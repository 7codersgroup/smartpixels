<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit==no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset ('css/all.css')}}" />
    <link rel="stylesheet" href="{{asset ('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset ('css/hamburgers.css')}}" />
    <title>{{ config('app.name', 'Frikapix') }}</title>
</head>


<body class="landing-page">
@include('layouts.ordinarynavbar')
<!--Header-->
<!--End Header -->
@include('flash-message')
@yield('content')

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset ('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset ('js/popper.min.js')}}"></script>
<script src="{{asset ('js/bootstrap.min.js')}}"></script>
<script src="{{asset ('js/utility.js')}}"></script>
<script src="https://kit.fontawesome.com/e9480ff5ec.js" crossorigin="anonymous"></script>

</html>
