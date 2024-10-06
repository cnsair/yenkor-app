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
                        <h2 class="who-we-are-title pb-4">About Yenkor</h2>
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

    @include('home.counter')

    @include('home.team')

@endsection