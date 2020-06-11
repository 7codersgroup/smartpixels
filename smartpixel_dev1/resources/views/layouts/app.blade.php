<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit==no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/all.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/hamburgers.css')}}"/>
    <title>@yield('title') | Fricapix</title>
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
