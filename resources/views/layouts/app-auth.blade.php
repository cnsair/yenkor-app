<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Yenkor - Lets Go') }}</title>
    <meta name="description" content="Yenkor - A ride hailing App for everyone">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/images/yenkor-favicon.ico') }}">
    
    <x-css-links></x-css-links>
</head>

<body class="striped-bg theme-3">
    <header class="theme-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    @yield('content')
    
    <x-auth-footer></x-auth-footer>

    <x-js-scripts></x-js-scripts>
</body>

</html>