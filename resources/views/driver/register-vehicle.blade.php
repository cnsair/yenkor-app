@extends('layouts.app-driver')

@section('content')

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Register Vehicle</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('driver.dashboard') }}">Home</a></li>
                <li>Register vehicle</li>
            </ol>
        </div>
    </div>

    <div class="div-padding driver-dashboard-div">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="passanger-name">
                        <div class="media">
                            @php
                                $user_id = Auth::user()->id;
                                $file = Auth()->user()->profile_photo_path;
                                $photo_path  = asset('storage/' . $file);
                            @endphp

                            @if ($file)
                                <img class="me-3 profile-picture" src="{{ asset($photo_path) }}" alt="partner-img" alt="ProfilePicture">
                            @else
                                <img class="me-3 profile-picture" src="{{ asset('assets/assets/images/avatar.png') }}">
                            @endif

                            <div class="media-body">
                                <h2 class="mt-0">{{ Auth()->user()->firstname .' '.Auth()->user()->lastname }}</h2>
                                <p>{{ 'ID: ' . Auth()->user()->yenkor_id }}</p>
                                <p>{{ 'Email: ' . Auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 right-text">
                    <h2>Driver</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="personal-info">
                        <div class="personal-details">

                            @livewire('register-vehicle-form')

                        </div>
                    </div>
                </div>
            </div>

        <!-- Ends here -->   
        </div>
    </div>

@endsection