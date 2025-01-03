<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Yenkor - Lets Go') }}</title>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="follow, download App" />
    <meta name="description" content="Yencor - A ride hailing app for everyone">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/images/yenkor-favicon.ico') }}">

    <x-css-links></x-css-links>
</head>

<body class="theme-1">
    <x-header-desktop-home></x-header-desktop-home>

    <x-header-mobile-home></x-header-mobile-home>

    @yield('content')

    <x-footer></x-footer>

    <x-js-scripts></x-js-scripts>
</body>

</html>
