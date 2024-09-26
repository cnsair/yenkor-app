@extends('layouts.app-home')

@section('content')

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Services</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
            </ol>
        </div>
    </div>

    <div class="div-padding our-service-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/assets/images/icon/service-icon-1.webp" alt="service icon">
                        <h4>Taxi</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis
                            risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/assets/images/icon/service-icon-2.webp" alt="service icon">
                        <h4>Car Book</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis
                            risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/images/icon/service-icon-3.webp" alt="service icon">
                        <h4>Share</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis
                            risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/images/icon/service-icon-4.webp" alt="service icon">
                        <h4>Rental</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis
                            risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/images/icon/service-icon-5.webp" alt="service icon">
                        <h4>Food</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis
                            risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/images/icon/service-icon-6.webp" alt="service icon">
                        <h4>Airport Transfer</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis
                            risus scelerisque. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection