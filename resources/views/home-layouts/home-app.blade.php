<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Yenkor - Lets Go') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="follow, index" />
    <meta name="description"
        content="CarrGo - Ridesharing Taxi HTML Template for building Ridesharing, Car-pooling and transportaion website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/images/favicon-16x16.webp') }}}}>
    <link rel="stylesheet" href="{{ asset('assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/plugins/shortcode/shortcode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/plugins/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/plugins/OwlCarousel/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/main/css/style.css') }}">
</head>

<body class="theme-1">
    
    <x-header-desktop-home></x-header-desktop-home>

    <x-header-mobile-home></x-header-mobile-home>

    @yield('content')

    <x-footer></x-footer>

    <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/assets/plugins/common/common.min.js') }}" type="3f92a221a179e90f658fbd8c-text/javascript"></script>
    <script src="{{ asset('assets/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="3f92a221a179e90f658fbd8c-text/javascript"></script>
    <script src="{{ asset('assets/assets/plugins/OwlCarousel/owl.carousel.min.js') }}" type="3f92a221a179e90f658fbd8c-text/javascript">
    </script>
    <script src="{{ asset('assets/assets/plugins/counterup/waypoints.min.js') }}" type="3f92a221a179e90f658fbd8c-text/javascript"></script>
    <script src="{{ asset('assets/assets/plugins/counterup/jquery.counterup.min.js') }}" type="3f92a221a179e90f658fbd8c-text/javascript">
    </script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&amp;sensor=true"
        type="3f92a221a179e90f658fbd8c-text/javascript"></script>
    <script src="assets/assets/plugins/gmap3/gmap3.min.js" type="3f92a221a179e90f658fbd8c-text/javascript"></script> -->

    <script src="{{ asset('assets/main/js/testimonial-slider-v-2.js') }}" type="3f92a221a179e90f658fbd8c-text/javascript"></script>
    <script src="{{ asset('assets/main/js/scripts.js') }} " type="3f92a221a179e90f658fbd8c-text/javascript"></script>
    <script src="{{ asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="3f92a221a179e90f658fbd8c-|49" defer></script>
</body>

</html>
