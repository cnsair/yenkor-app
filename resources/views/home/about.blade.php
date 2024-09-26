@extends('layouts.app-home')

@section('content')

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">About Us</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About</li>
            </ol>
        </div>
    </div>

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

    <div class="about-us-area div-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-text">
                        <h2 class="div-title pb-4 mb-4">Trusted Cab Services <span class="d-block">in the World</span>
                        </h2>
                        <p>
                            Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec,
                            auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at
                            euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula
                            sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque
                            libero.
                        </p>
                        <p>
                            Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id
                            egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur
                            euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero
                            sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a.
                        </p>
                        <a href="#" class="button button-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="div-padding counter-area">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="assets/images/icon/counter-icon-1.webp" alt>
                        </div>
                        <h2 class="text-white">
                            <span class="counter">7,50,000</span>
                        </h2>
                        <p class="counter-text mb-0 text-white">Vehicles</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="assets/images/icon/counter-icon-2.webp" alt>
                        </div>
                        <h2 class="text-white">
                            <span class="counter">220</span> +
                        </h2>
                        <p class="counter-text mb-0 text-white">Cities</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="assets/images/icon/counter-icon-3.webp" alt>
                        </div>
                        <h2 class="text-white">
                            <span class="counter">5,50,000</span>
                        </h2>
                        <p class="counter-text mb-0 text-white">Entreprenurs Partners</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="assets/images/icon/counter-icon4.webp" alt>
                        </div>
                        <h2 class="text-white">
                            <span class="counter">75,00,000</span>
                        </h2>
                        <p class="counter-text mb-0 text-white">Passengers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="div-padding how-work-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">How It Work</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="icons-div">
                        <div class="single-icon">
                            <img src="assets/images/icon/1.webp" alt>
                        </div>
                        <div class="single-icon">
                            <img src="assets/images/icon/2.webp" alt>
                        </div>
                        <div class="single-icon">
                            <img src="assets/images/icon/3.webp" alt>
                        </div>
                        <div class="single-icon">
                            <img src="assets/images/icon/4.webp" alt>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="assets/images/icon/1.webp" alt>
                    </div>
                    <div class="how-work-text">
                        <h4>Book in Just 2 Tabs</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae
                            sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="assets/images/icon/2.webp" alt>
                    </div>
                    <div class="how-work-text">
                        <h4>Get a Driver</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae
                            sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="assets/images/icon/3.webp" alt>
                    </div>
                    <div class="how-work-text">
                        <h4>Track your Driver</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae
                            sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="assets/images/icon/4.webp" alt>
                    </div>
                    <div class="how-work-text">
                        <h4>Arrive safely</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae
                            sapien.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <section class="testimonial-sec  div-padding pb-0 testimonial-area">
        <div class="container">
            <div class="testimonial-slider dots-hide">
                <div class="row">
                    <div class="col-md-12 testimo-slider testimonial-carousel owl-carousel" id="testimonial-test">
                        <div class="testimonial-slide">
                            <p>“Originally, creative and with an innate understanding of their customer’s need. The team
                                at Miles are always a pleasure to work with. Recommended.”</p>
                            <div class="thmb-row">
                                <div class="thmb-img">
                                    <img src="assets/images/client-1.webp" alt>
                                </div>
                                <div class="thmb-info">
                                    <h3>Bobby Hanesto</h3>
                                    <span>Director of <em>Inivisionapp</em></span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <p>“Originally, creative and with an innate understanding of their customer’s need. The team
                                at Miles are always a pleasure to work with. Recommended.”</p>
                            <div class="thmb-row">
                                <div class="thmb-img">
                                    <img src="assets/images/client-1.webp" alt>
                                </div>
                                <div class="thmb-info">
                                    <h3>Bobby Hanesto</h3>
                                    <span>Director of <em>Inivisionapp</em></span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <p>“Originally, creative and with an innate understanding of their customer’s need. The team
                                at Miles are always a pleasure to work with. Recommended.”</p>
                            <div class="thmb-row">
                                <div class="thmb-img">
                                    <img src="assets/images/client-1.webp" alt>
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

    <div class="div-padding team-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">The Team Behind Carrgo</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/assets/images/driver-1.webp') }}" alt>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name mb-1">John Doe</h4>
                            <p class="theme-color mb-2">Co-Founder and CEO</p>
                            <p class="mb-0">Duis leo ipsum, consequat sollicitudin enim id, accumsan condimentum felis.
                                Donec nisl dolor, malesuada tincidunt ultricies et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team-member">
                        <div class="member-img">
                            <img src="assets/assets/images/driver-2.webp" alt>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name mb-1">John Doe</h4>
                            <p class="theme-color mb-2">Co-Founder and CEO</p>
                            <p class="mb-0">Duis leo ipsum, consequat sollicitudin enim id, accumsan condimentum felis.
                                Donec nisl dolor, malesuada tincidunt ultricies et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                    <div class="single-team-member">
                        <div class="member-img">
                            <img src="assets/images/driver-3.webp" alt>
                        </div>
                        <div class="member-info">
                            <h4 class="member-name mb-1">John Doe</h4>
                            <p class="theme-color mb-2">Co-Founder and CEO</p>
                            <p class="mb-0">Duis leo ipsum, consequat sollicitudin enim id, accumsan condimentum felis.
                                Donec nisl dolor, malesuada tincidunt ultricies et.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection