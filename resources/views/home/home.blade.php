@extends('home-layouts.home-app')

@section('content')

    <section class="hero-area-v-2 p-0 dark-overlay-3">
        <video autoplay muted loop id="myVideo" width="100">
            <source src="assets/assets/bg-video-2.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hero-area-wrap">
                        <div class="hero-area-left">
                            <h1 class="hero-title-v-2">
                                <span class="hero-title-bg">
                                    Earn. <span class="hero-title-accent-v-2">Connect.</span>
                                    <span>Contribute to Society.</span></span>
                            </h1>
                            <p class="hero-text">
                                Partner with us to drive your own livelihood and more.Partner
                                with us to drive your own livelihood and more.
                            </p>
                            <div class="download-buttons">
                                <a href="#" aria-label="download-apple-btn"><img src="assets/assets/images/download-1.webp"
                                        alt></a>
                                <a href="#" aria-label="download-android-btn"><img src="assets/assets/images/download-2.webp"
                                        alt></a>
                            </div>
                        </div>
                        <div class="hero-area-right">
                            <div class="combine-form">
                                <nav class="navigation">
                                    <div class="nav nav-tabs form-tab" role="tablist">
                                        <button class="nav-link" id="nav-ride-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-ride" type="button" role="tab" aria-controls="nav-ride"
                                            aria-selected="false">
                                            <i class="fas fa-car"></i> Take a Ride
                                        </button>
                                        <button class="nav-link active" id="nav-drive-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-drive" type="button" role="tab"
                                            aria-controls="nav-drive" aria-selected="true">
                                            <i class="far fa-steering-wheel"></i> Apply to Drive
                                        </button>
                                    </div>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="nav-ride" role="tabpanel"
                                        aria-labelledby="nav-ride-tab">
                                        <form action="#" class="form1">
                                            <h2 class="form-title">Get member exclusive rewards</h2>
                                            <p class="form-text">
                                                Egestas sed vulputate eleifend ac adipiscing quisque.
                                                Hac vulputate integer sapien et.
                                            </p>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="firstName"
                                                        id="firstName" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="lastName"
                                                        id="lastName" placeholder="Last Name">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="number" class="form-control" name="number" id="number"
                                                        placeholder="Phone Number">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="text" class="form-control" name="location"
                                                        id="location" placeholder="City">
                                                </div>
                                                <div class="col-12 form-group mt-3">
                                                    <input type="checkbox" id="agree">
                                                    <label for="agree">I agree to the
                                                        <a href="terms.html">Terms and Conditions</a> and
                                                        <a href="privacy.html">Privacy Policy</a></label>
                                                </div>
                                                <div class="form-btn col-12">
                                                    <button class="form-button button button-dark big">
                                                        Sign up to Ride
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="form-messages mb-0 mt-3"></p>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade show active" id="nav-drive" role="tabpanel"
                                        aria-labelledby="nav-drive-tab">
                                        <form action="#" class="form1">
                                            <h2 class="form-title">
                                                Start driving now and get paid
                                            </h2>
                                            <p class="form-text">
                                                Egestas sed vulputate eleifend ac adipiscing quisque.
                                                Hac vulputate integer sapien et.
                                            </p>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="firstName"
                                                        id="firstName2" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="lastName"
                                                        id="lastName2" placeholder="Last Name">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="number" class="form-control" name="number" id="number2"
                                                        placeholder="Phone Number">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="email" class="form-control" name="email" id="email2"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input type="text" class="form-control" name="location"
                                                        id="location2" placeholder="City">
                                                </div>
                                                <div class="col-12 form-group mt-3">
                                                    <input type="checkbox" id="agree2">
                                                    <label for="agree2">I agree to the
                                                        <a href="terms.html">Terms and Conditions</a> and
                                                        <a href="privacy.html">Privacy Policy</a></label>
                                                </div>
                                                <div class="form-btn col-12">
                                                    <button class="form-button button button-dark big">
                                                        Become a Driver
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="form-messages mb-0 mt-3"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    @include('home.howitworks')

    @include('home.trusted')

    @include('home.download')

    @include('home.testimonial')

@endsection