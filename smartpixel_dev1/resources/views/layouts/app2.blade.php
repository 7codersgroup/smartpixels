@include('layouts.ordinary_header')
@include('layouts.ordinarynavbar')
<!--   navigation ends-->
@include('flash-message')
@yield('content_new')

<!--		Footer section-->
@include('layouts.footercity')