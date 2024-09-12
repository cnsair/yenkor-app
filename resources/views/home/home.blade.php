@extends('home-layouts.home-app')

@section('content')
    
    <x-home-navigation></x-home-navigation>

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
    <section class="div-padding how-work-area">
        <div class="container">
            <div class="row content-wrapper">
                <div class="col-12 col-lg-6 left-content">
                    <div>
                        <h2 class="how-it-works-title pb-4">How It Works</h2>
                        <p class="how-it-works-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="how-it-works-btn button button-dark">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="icons-div-v-2">
                        <div class="icon-item-wrap">
                            <div class="single-icon">
                                <img src="assets/assets/images/icon/1.webp" alt>
                            </div>
                            <div class="how-it-works-text-wrapper">
                                <h3>Book in Just 2 Tabs</h3>
                                <p class="how-it-works-text">
                                    Curabitur ac quam aliquam urna vehicula semper sed vel elit.
                                    Sed et leo purus. Vivamus vitae sapien.
                                </p>
                            </div>
                        </div>
                        <div class="icon-item-wrap">
                            <div class="single-icon">
                                <img src="assets/assets/images/icon/2.webp" alt>
                            </div>
                            <div class="how-it-works-text-wrapper">
                                <h3>Get a Driver</h3>
                                <p class="how-it-works-text">
                                    Curabitur ac quam aliquam urna vehicula semper sed vel elit.
                                    Sed et leo purus. Vivamus vitae sapien.
                                </p>
                            </div>
                        </div>
                        <div class="icon-item-wrap">
                            <div class="single-icon">
                                <img src="assets/assets/images/icon/3.webp" alt>
                            </div>
                            <div class="how-it-works-text-wrapper">
                                <h3>Track your Driver</h3>
                                <p class="how-it-works-text">
                                    Curabitur ac quam aliquam urna vehicula semper sed vel elit.
                                    Sed et leo purus. Vivamus vitae sapien.
                                </p>
                            </div>
                        </div>
                        <div class="icon-item-wrap">
                            <div class="single-icon last-icon">
                                <img src="assets/assets/images/icon/4.webp" alt>
                            </div>
                            <div class="how-it-works-text-wrapper">
                                <h3>Arrive safely</h3>
                                <p class="how-it-works-text">
                                    Curabitur ac quam aliquam urna vehicula semper sed vel elit.
                                    Sed et leo purus. Vivamus vitae sapien.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="who-we-are div-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="who-we-are-left-content">
                        <h2 class="who-we-are-title pb-4">About CarrGo</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco
                        </p>
                        <ul class="who-we-are-list">
                            <li class="who-we-are-list-item">
                                <img width="30" src="assets/assets/images/home/done-icon.svg" alt>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            </li>
                            <li class="who-we-are-list-item">
                                <img width="30" src="assets/assets/images/home/done-icon.svg" alt>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            </li>
                            <li class="who-we-are-list-item">
                                <img width="30" src="assets/assets/images/home/done-icon.svg" alt>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            </li>
                            <li class="who-we-are-list-item">
                                <img width="30" src="assets/assets/images/home/done-icon.svg" alt>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            </li>
                        </ul>
                        <a href="#" class="who-we-are-btn button button-dark">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class=" who-we-are-right-content">
                        <img class="who-we-are-blob" src="assets/assets/images/home/yellow-blob.svg" alt="Yellow blob">
                        <img class="who-we-are-image-1" width="500" src="assets/assets/images/home/who-we-are-01.jpg"
                            alt="Group of people">
                        <img class="who-we-are-image-2" width="300" src="assets/assets/images/home/who-we-are-02.jpg"
                            alt="Group of people">
                        <img class="who-we-are-blob-2" src="assets/assets/images/home/yellow-blob.svg" alt="Yellow blob">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-area bg-2 div-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-text">
                        <h2 class="div-title pb-4 mb-4">
                            Trusted Cab Services <span class="d-block">in the World</span>
                        </h2>
                        <p>
                            Curabitur placerat cursus nisi nec pharetra. Proin quis tortor
                            fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac
                            lectus mattis, sed interdum sem scelerisque.
                        </p>
                        <div class="list-group-flush mb-4">
                            <div class="list-group-item bg-transparent border-bottom-0 p-0">
                                <p class="mb-0">
                                    <i class="fas fa-check-circle mr-4 p-3 grey rounded-circle"
                                        aria-hidden="true"></i>Cras justo odio
                                </p>
                            </div>
                            <div class="list-group-item bg-transparent border-bottom-0 p-0">
                                <p class="mb-0">
                                    <i class="fas fa-check-circle mr-4 mr-4 grey p-3 rounded-circle"
                                        aria-hidden="true"></i>Dapibus ac facilisis in
                                </p>
                            </div>
                            <div class="list-group-item bg-transparent border-bottom-0 p-0">
                                <p class="mb-0">
                                    <i class="fas fa-check-circle mr-4 mr-4 grey p-3 rounded-circle"
                                        aria-hidden="true"></i>Morbi leo risus
                                </p>
                            </div>
                        </div>
                        <a href="#" class="button button-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="download-div div-padding">
        <div class="container">
            <div class="download-content-wrapper">
                <div class="download-left-content">
                    <h2 class="div-title">Download CarrGo</h2>
                    <h3>Download the CarrGo mobile application</h3>
                    <p>
                        Nunc volutpat tincidunt est a scelerisque. Aliquam erat volutpat.
                        Donec varius ex in justo pharetra, nec mollis erat porta. Donec
                        sit amet facilisis neque. In hac habitasse platea dictumst.
                    </p>
                    <div class="app-btns download-buttons">
                        <a href="#" aria-label="download-apple-btn"><img src="assets/assets/images/download-1.webp" alt></a>
                        <a href="#" aria-label="download-android-btn"><img src="assets/assets/images/download-2.webp" alt></a>
                    </div>
                </div>
                <div class="download-right-content">
                    <img class="download-blob" src="assets/assets/images/home/yellow-blob.svg" alt="Yellow blob">
                    <img class="download-phone-img" src="assets/assets/images/home/mobile.jpg" alt="Mobile phone">
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-sec testimonial-sec-v-2 div-padding testimonial-area testimonial-area-v-2">
        <div class="container">
            <div class="testimonial-slider dots-hide">
                <div class="row">
                    <div class="col-md-12 testimo-slider testimonial-carousel owl-carousel" id="testimonial-test">
                        <div class="testimonial-slide-v-2 testimonial-slide">
                            <p>
                                “Originally, creative and with an innate understanding of
                                their customer’s need. The team at Miles are always a pleasure
                                to work with. Recommended.”
                            </p>
                            <div class="thmb-row">
                                <div class="thmb-img">
                                    <img src="assets/assets/images/client-1.webp" alt>
                                </div>
                                <div class="thmb-info">
                                    <h3>Bobby Hanesto</h3>
                                    <span>Director of <em>Inivisionapp</em></span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide-v-2 testimonial-slide">
                            <p>
                                “Originally, creative and with an innate understanding of
                                their customer’s need. The team at Miles are always a pleasure
                                to work with. Recommended.”
                            </p>
                            <div class="thmb-row">
                                <div class="thmb-img">
                                    <img src="assets/assets/images/client-1.webp" alt>
                                </div>
                                <div class="thmb-info">
                                    <h3>Bobby Hanesto</h3>
                                    <span>Director of <em>Inivisionapp</em></span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide-v-2 testimonial-slide">
                            <p>
                                “Originally, creative and with an innate understanding of
                                their customer’s need. The team at Miles are always a pleasure
                                to work with. Recommended.”
                            </p>
                            <div class="thmb-row">
                                <div class="thmb-img">
                                    <img src="assets/assets/images/client-1.webp" alt>
                                </div>
                                <div class="thmb-info">
                                    <h3>Bobby Hanesto</h3>
                                    <span>Director of <em>Inivisionapp</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="div-padding border-0">
        <div class="container">
            <h2 class="div-title text-center">Blog</h2>
            <div class="blog-posts">
                <div class="blog-card col-lg-4 col-md-6">
                    <div>
                        <div class="post-thumb">
                            <img src="assets/assets/images/blog/1.webp" alt class="w-100">
                        </div>
                        <div class="post-info-v-2 post-info">
                            <span class="category-v-2 category">discuss</span>
                            <h2>
                                <a class="blog-link" href="blog-single-post.html" title>5 Things That You Need To Knows
                                    About E-Commerce</a>
                            </h2>
                            <p class="blog-text">
                                Handshake scrum project learning curve termsheet buzz
                                bandwidth alpha pivot analytics supply.
                            </p>
                            <span class="posted-on">May 3rd, 2020, by <a href="#" title>Admin</a></span>
                        </div>
                    </div>

                </div>
                <div class="blog-card col-lg-4 col-md-6">
                    <div>
                        <div class="post-thumb">
                            <img src="assets/assets/images/blog/2.webp" alt class="w-100">
                        </div>
                        <div class="post-info-v-2 post-info">
                            <span class="category-v-2 category">discuss</span>
                            <h2>
                                <a class="blog-link" href="blog-single-post.html" title>5 Things That You Need To Knows
                                    About E-Commerce</a>
                            </h2>
                            <p class="blog-text">
                                Handshake scrum project learning curve termsheet buzz
                                bandwidth alpha pivot analytics supply.
                            </p>
                            <span class="posted-on">May 3rd, 2020, by <a href="#" title>Admin</a></span>
                        </div>
                    </div>

                </div>
                <div class="blog-card col-lg-4 col-md-6">
                    <div>
                        <div class="post-thumb">
                            <img src="assets/assets/images/blog/3.webp" alt class="w-100">
                        </div>
                        <div class="post-info-v-2 post-info">
                            <span class="category-v-2 category">resources</span>
                            <h2>
                                <a class="blog-link" href="blog-single-post.html" title>Branding Mockup Essentials for
                                    Your Projects</a>
                            </h2>
                            <p class="blog-text">
                                Handshake scrum project learning curve termsheet buzz
                                bandwidth alpha pivot analytics supply.
                            </p>
                            <span class="posted-on">April 22th, 2020, by <a href="#" title>Admin</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection