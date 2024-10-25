@extends('layouts.app-driver')

@section('content')

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Change Password</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('driver.dashboard') }}">Home</a></li>
                <li>Change password</li>
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
                <div class="col-lg-6">
                    <div class="personal-info">
                        <div class="personal-details">

                            <x-validation-errors class="mb-4" />

                            @if (session('status') === 'success')
                                <x-success-msg>
                                    {{ __('Password updated successfully.') }}
                                </x-success-msg>
                            @elseif (session('status') === 'failed')
                                <x-failed-msg>
                                    {{ __('Something went wrong! Please try again.') }}
                                </x-failed-msg>
                            @endif

                            <form method="POST" action="{{ route('driver.change-password.update', ['update' => $user_id]) }}" class="mt-6 space-y-6" onsubmit="return editF(this);">
                                @csrf
                                @method('patch')

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="current_password">Current Password</label>
                                            <input type="password" class="form-control text-muted" id="current_password" name="current_password" required autofocus>
                                            <x-input-error for="current_password" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input type="password" class="form-control text-muted" id="password" name="password" required>
                                            <x-input-error for="password" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="form-control text-muted" id="password_confirmation" name="password_confirmation" required>
                                            <x-input-error for="password_confirmation" class="mt-2" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                      <div class="align">
                                        <button class="button button-dark" name="Edit">
                                            {{ __('Update Password') }}
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