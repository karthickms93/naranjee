<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!DOCTYPE html>
<html lang="en-US">
<!--<![endif]-->
<head>
    @include('includes.head')
</head>
<body>
<!-- Preloader -->
<!-- <div id="preloader">
<div><img src="{{url('assets/images/webloading.gif')}}"></div>
</div> -->
<div class="container_custom">
    @if(SITE_MAINTENANCE=='NO')
    <header class="">
        @include('includes.header')
    </header>
    @endif
    <div id="main" class="row m-0">
        @if(Request::segment(1)=='home1')
        <video id="bg_video" muted loop autoplay>
            <source src="assets/cloud_1.mp4" type="video/mp4">      
        </video>
        @elseif(Request::segment(1)=='home2')
        <img id="bg_video" src="assets/images/banner.png" class="w-100"/>
        @else
        <video id="bg_video" muted loop autoplay>
            <source src="assets/cloud.webm" type="video/webm">      
        </video>
        @endif

        @yield('content')
    </div>
</div>
@include('includes.foot')
</body>
</html>