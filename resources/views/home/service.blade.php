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
                        <p>You can order a ride to and from anywhere in Ghana.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/assets/images/icon/service-icon-2.webp" alt="service icon">
                        <h4>Car Book</h4>
                        <p>You can book shatter for the whole day for your event.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/assets/images/icon/service-icon-3.webp" alt="service icon">
                        <h4>Nation Wide Delivery</h4>
                        <p>We deliver your items safe and in a zoom.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/assets/images/icon/service-icon-4.webp" alt="service icon">
                        <h4>Rental</h4>
                        <p>Some of our vehicles are also for rents.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/assets/images/icon/service-icon-5.webp" alt="service icon">
                        <h4>Food</h4>
                        <p>You can order food from our partners and get it delivered by us.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="assets/assets/images/icon/service-icon-6.webp" alt="service icon">
                        <h4>Airport Transfer</h4>
                        <p>We can help you move your parcels to and from anywhere in the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection