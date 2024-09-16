@extends('home-layouts.home-app')

@section('content')

<div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Contact Us</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact</li>
            </ol>
        </div>
    </div>
    <div class="div-padding contact-info-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info text-center">
                        <img src="assets/assets/images/icon/contact_info.webp" alt="icon">
                        <h4>Address</h4>
                        <p>Address : #1153, St No. 58, Hashtag Company Noida, Delhi, India.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info text-center">
                        <img src="assets/assets/images/icon/contact_info-2.webp" alt="icon">
                        <h4>Phone number</h4>
                        <p>Phone : +911234567890, +911267345987</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                    <div class="single-contact-info text-center">
                        <img src="assets/assets/images/icon/contact_info-3.webp" alt="icon">
                        <h4>E-mail</h4>
                        <p>Email : <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                data-cfemail="3c4f48495855534e5d58554946467c5b515d5550125f5351">[email&#160;protected]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection