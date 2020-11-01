<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title') | Fricapix</title>
    <!--favicicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset ('img/favicon/site.webmanifest')}}">

    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="description" content="Search millions of royalty free stock images, and photos from Africa. Get inspired by 1000s of new, high-resolution stock images added frequently." />
    <link rel="canonical" href="http://www.fricapix.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="African Stock Photos, royalty-free images | Fricapix" />
    <meta property="og:description" content="Search millions of royalty free stock images, and photos from Africa. Get inspired by 1000s of new, high-resolution stock images added frequently." />
    <meta property="og:url" content="http://www.fricapix.com/" />
    <meta property="og:site_name" content="fricapix" />
    <meta property="og:image" content="https://www.fricapix.com/img/social_og_image.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Search millions of royalty free stock images, and photos from Africa. Get inspired by 1000s of new, high-resolution stock images added frequently." />
    <meta name="twitter:title" content="African Stock Photos, royalty-free images | Fricapix" />
    <meta name="twitter:url" content="http://www.fricapix.com/" />
    <meta name="twitter:image" content="https://www.fricapix.com/img/social_og_image.jpg" />
    <script type='application/ld+json'>
        {"@context":"https://schema.org","@type":"WebSite","@id":"http://www.fricapix.com/#website","url":"http://www.fricapix.com/","name":"fricapix","potentialAction":{"@type":"SearchAction","target":"http://www.fricapix.com/?s={search_term_string}","query-input":"required name=search_term_string"}
        </script>

    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/global.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/custom-animation.css')}}"/>
    <link rel="stylesheet" href="{{asset ('css/hamburgers.css')}}"/>

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>

<body class="landing">
