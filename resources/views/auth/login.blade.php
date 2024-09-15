<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yenkor - Lets go</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/images/favicon-16x16.webp') }}">
    
    <x-css-links></x-css-links>
</head>

<body class="striped-bg theme-3">
    <header class="theme-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="div-padding p-t-0 signin-div user-access-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h1 class="h3 mb-3 fw-normal">Sign In</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-access sign-in">

                        <!-- <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#rider" class="active" aria-controls="rider" role="tab"
                                    data-toggle="tab">Rider</a>
                            </li>
                            <li role="presentation">
                                <a href="#driver" aria-controls="driver" role="tab" data-toggle="tab">Driver</a>
                            </li>
                        </ul> -->

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="rider">

                                <x-validation-errors class="mb-4" />

                                @session('status')
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ $value }}
                                    </div>
                                @endsession

                                <form class="mb-4" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-floating mb-4">
                                        <input type="email" name="email" class="form-control" id="floatingInput"
                                            placeholder="name@yenkor.com" :value="old('email')" required 
                                            autofocus autocomplete="username">
                                        <label for="floatingInput">Email address</label>
                                    </div>

                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control" id="floatingPassword"
                                            placeholder="Password" required autocomplete="current-password" >
                                        <label for="floatingPassword">Password</label>
                                    </div>

                                    <div class="checkbox mb-3">
                                        <label for="remember">
                                            <input type="checkbox" value="remember-me" id="remember_me" name="remember"> 
                                            Remember me
                                        </label>
                                    </div>
                                    <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>

                                </form>

                                <p class="acclink">Don't have an account?
                                    <a href="{{ route('register') }}">Sign up
                                        <i class="icofont">double_right</i>
                                    </a>
                                </p>

                                <div class="externel-signup">
                                    <!-- <a href="#" class="btn-block facebook">
                                        <i class="fab fa-facebook-f"></i>
                                        Sign up with Facebook
                                    </a> -->
                                    <a href="#" class="btn-block google">
                                        <i class="fab fa-google"></i>
                                        Sign up with Google
                                    </a> &laquo; Coming soon
                                </div>
                            </div>

                            <!-- <div role="tabpanel" class="tab-pane" id="driver">
                                <form class="mb-4">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInputEmail"
                                            placeholder="name@example.com">
                                        <label for="floatingInputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPass"
                                            placeholder="Password">
                                        <label for="floatingPass">Password</label>
                                    </div>
                                    <div class="checkbox mb-3">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                    </div>
                                    <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
                                </form>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="theme-2">
        <div class="footer-nav-div div-padding theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">
                            <a href="index.html"><img src="assets/images/logo.webp" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="google-p"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="app-download-box">
                            <a href="#"><img src="assets/images/icon/google-play.webp" alt="Google play"></a>
                            <a href="#"><img src="assets/images/icon/apple-store.webp" alt="Apple store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-div theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2022 by Tortoiz. All Right Reserved.</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <x-js-scripts></x-js-scripts>
</body>

<!-- Mirrored from Yenkorhtml.tortoizthemes.com/sign-in by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 19:22:21 GMT -->

</html>