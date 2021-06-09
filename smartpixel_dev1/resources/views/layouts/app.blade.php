<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>African Stock Photos, royalty-free images | Fricapix</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/favicon/site.webmanifest')}}">

    <meta name="description"
          content="Search millions of royalty free stock images, and photos from Africa. Get inspired by 1000s of new, high-resolution stock images added frequently."/>
    <link rel="canonical" href="https://www.fricapix.com/"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="African Stock Photos, royalty-free images | Fricapix"/>
    <meta property="og:description"
          content="Search millions of royalty free stock images, and photos from Africa. Get inspired by 1000s of new, high-resolution stock images added frequently."/>
    <meta property="og:url" content="https://www.fricapix.com/"/>
    <meta property="og:site_name" content="fricapix"/>
    <meta property="og:image" content="https://www.fricapix.com/img/social_og_image.jpg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="Search millions of royalty free stock images, and photos from Africa. Get inspired by 1000s of new, high-resolution stock images added frequently."/>
    <meta name="twitter:title" content="African Stock Photos, royalty-free images | Fricapix"/>
    <meta name="twitter:url" content="https://www.fricapix.com/"/>
    <meta name="twitter:image" content="https://www.fricapix.com/img/social_og_image.jpg"/>
    <script type='application/ld+json'>
        {"@context":"https://schema.org","@type":"WebSite","@id":"https://www.fricapix.com/#website",
        "url":"https://www.fricapix.com/","name":"fricapix","potentialAction":{"@type":"SearchAction",
        "target":"https://www.fricapix.com/?s={search_term_string}","query-input":"required name=search_term_string"}}

    </script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/global.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/custom-animation.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/all.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/hamburgers.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/countrySelect.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/intlTelInput.min.css')}}"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://kit.fontawesome.com/e9480ff5ec.js" crossorigin="anonymous"></script>
<script src="{{asset('js/countrySelect.min.js')}}"></script>
<script src="{{asset('js/intlTelInput.min.js')}}"></script>
<script src="{{asset('js/utility.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

@stack('scripts')
</html>
