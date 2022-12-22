<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle ?? setting('site-name') }}</title>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="apartments, interior design, home appliances, interior, tinselcollections, tinsel, collections, short-let apartments, short stay, long stay, appartment" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"  />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" integrity="sha512-GqP/pjlymwlPb6Vd7KmT5YbapvowpteRq9ffvufiXYZp0YpMTtR9tI6/v3U3hFi1N9MQmXum/yBfELxoY+S1Mw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- REVOLUTION SLIDER 4 STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rev-slider-4.css') }}"> 
   

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navigation.css') }}">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet"> 

</head>
<body class="footer-fixed">

    @include('layouts.header')

     <!-- CONTENT START -->
    <div class="page-content">
        @yield('banner')
        @yield('content')
    </div>
    <!-- CONTENT END -->

@include('layouts.footer')
<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{ asset('js/jquery-1.12.4.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->



<script  src="{{ asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->

<script  src="{{ asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->


<script  src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script src="{{ asset('js/jquery.owl-filter.js') }}"></script>

<script  src="{{ asset('js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   --> 
<script  src="{{ asset('js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   --> 

<script src="{{ asset('js/particles.js') }}"></script><!-- CANVAS EFFECT   --> 
<script src="{{ asset('js/app.js') }}"></script><!-- CANVAS EFFECT   -->

<script  src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{ asset('js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->

@stack('scripts')

@include('partials.notify')

</body>

</html>

