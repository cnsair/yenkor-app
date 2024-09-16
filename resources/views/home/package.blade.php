@extends('home-layouts.home-app')

@section('content')

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Our Packages</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Our Packages</li>
            </ol>
        </div>
    </div>

    <div class="div-padding our-pakages-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">Our Packages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="assets/assets/images/icon/package-icon.webp" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="div-title text-center">Prime</h4>
                            <h2 class="package-price">
                                $599
                                <span>/24hour</span>
                            </h2>
                            <ul>
                                <li>City trave Prime</li>
                                <li>Ac Vehicle</li>
                                <li>Your Choice 3 Tourism </li>
                                <li>Places</li>
                                <li>Tourist Guide</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="#" class="button button-dark tiny">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="assets/assets/images/icon/package-icon.webp" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="div-title text-center">Superior</h4>
                            <h2 class="package-price">
                                $1399
                                <span>/24hour</span>
                            </h2>
                            <ul>
                                <li>Any Location Under 400 Km</li>
                                <li>Ac Vehicle</li>
                                <li>Your Choice 3 Tourism </li>
                                <li>Places</li>
                                <li>Tourist Guide</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="#" class="button button-dark tiny">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="assets/assets/images/icon/package-icon.webp" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="div-title text-center">Prime</h4>
                            <h2 class="package-price">
                                $2599
                                <span>/24hour</span>
                            </h2>
                            <ul>
                                <li>City trave Prime</li>
                                <li>Ac Vehicle</li>
                                <li>Your Choice 3 Tourism </li>
                                <li>Places</li>
                                <li>Tourist Guide</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="#" class="button button-dark tiny">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection