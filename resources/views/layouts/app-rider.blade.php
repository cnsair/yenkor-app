<!doctype html>

<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rider - {{ Auth()->user()->firstname }}</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/images/yenkor-favicon.ico') }}">

    <x-css-links/>
</head>

<body class="theme-2">
    
    <x-dashboard-header/>

    @yield('content')
    
    <x-dashboard-footer/>

    <x-dashboard-js-script/>

</body>

</html>