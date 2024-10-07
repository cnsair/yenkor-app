@extends('layouts.app-driver')

@section('content')
    <style>
        input[type="radio"] {
            appearance: radio !important; /* Ensures default radio button styling is used */
            visibility: visible !important;
            display: inline-block !important;
            width: auto !important;
            height: auto !important;
            opacity: 1 !important;
            /* vertical-align: middle !important; */
        }

        .in-line{
            display: inline-block;
        }

        .align{
            align-items: center !important;
            align-content: center !important;
        }
    </style>

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Edit Profile</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('driver.dashboard') }}">Home</a></li>
                <li>Edit Profile</li>
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
                                <img class="me-3" src="{{ asset($photo_path) }}" alt="partner-img">
                            @else
                                <img class="me-3" width="110px" src="{{ asset('assets/assets/images/avatar.png') }}" alt="partner-img">
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
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <h4>Edit Profile</h4>
                            </div>
                        </div> -->

                        <div class="personal-details">

                            <x-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('driver.edit-profile.update', ['update' => $user_id]) }}" enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return editF(this);">
                                @csrf
                                @method('patch')

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="firstName">First Name</label>
                                            <input type="text" class="form-control text-muted" id="firstName" name="firstname" value="{{ old('firstname',Auth()->user()->firstname) }}" required autofocus autocomplete="firstname">
                                            <x-input-error for="firstname" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" class="form-control text-muted" id="lastName" name="lastname" value="{{ old('firstname', Auth()->user()->lastname) }}" required>
                                            <x-input-error for="lastname" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="yourEmail">Your Email</label>
                                            <input type="text" class="form-control text-muted" id="yourEmail" name="email" value="{{ old('firstname', Auth()->user()->email) }}" required>
                                            <x-input-error for="email" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number</label>
                                            <input type="number" class="form-control text-muted" id="phoneNumber" name="phone" value="{{ old('firstname', Auth()->user()->phone) }}" required>
                                            <x-input-error for="phone" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Gender</label>

                                            <div class="in-line">
                                                <label for="male">Male</label>
                                                <input id="male" type="radio" name="gender" value="Male" {{ old('gender', Auth()->user()->gender) == 'Male' ? 'checked' : '' }}>
                                            </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <div class="in-line">
                                                <label for="female">Female</label>
                                                <input id="female" type="radio" name="gender" value="Female" {{ old('gender', Auth()->user()->gender) == 'Female' ? 'checked' : '' }}>
                                                <x-input-error for="gender" class="mt-2" />
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="yourBirthday">Your Birthday</label>
                                            <input type="date" class="form-control text-muted" id="yourBirthday" name="d_o_b" value="{{ old('d_o_b', Auth()->user()->d_o_b) }}"
                                            <x-input-error for="d_o_b" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="aboutDesc">Write a little description about you</label>
                                            <textarea class="form-control text-muted" id="aboutDesc" name="biography">{{ !empty(Auth()->user()->biography) ? old('biography', Auth()->user()->biography) : 'Please write something like: I am a driver for safety from Kumasi, married with 3 children...' }}</textarea>
                                            <x-input-error for="biography" class="mt-2" />
                                        </div>
                                        <!-- <a href="#" class="button button-dark">Save</a> -->
                                      <div class="align">
                                        <button class="button button-dark" name="Edit">
                                            {{ __('Update') }}
                                        </button>
                                        </div>
                                    </div>
                            
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        <!-- Ends here -->   
        </div>
    </div>

@endsection