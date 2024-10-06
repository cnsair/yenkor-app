@extends('layouts.app-driver')

@section('content')
    
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
                            
                            @if (Auth()->user()->profile_photo_path)
                                @php
                                    $file = Auth()->user()->profile_photo_path;
                                    $photo_path  = asset('storage/' . $file);
                                @endphp
                                
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
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Profile Information</h4>
                            </div>
                        </div>

                        <div class="personal-details">

                            <x-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('driver.edit-profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6" onsubmit="return uploadF(this);">
                            @csrf

                            <!-- Profile Photo -->
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                                    <!-- Profile Photo File Input -->
                                    <input type="file" id="photo" class="hidden"
                                                wire:model.live="photo"
                                                x-ref="photo"
                                                x-on:change="
                                                        photoName = $refs.photo.files[0].name;
                                                        const reader = new FileReader();
                                                        reader.onload = (e) => {
                                                            photoPreview = e.target.result;
                                                        };
                                                        reader.readAsDataURL($refs.photo.files[0]);
                                                " />

                                    <x-label for="photo" value="{{ __('Photo') }}" />

                                    <!-- Current Profile Photo -->
                                    <div class="mt-2" x-show="! photoPreview">
                                        <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                                    </div>

                                    <!-- New Profile Photo Preview -->
                                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                                        <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                        </span>
                                    </div>

                                    <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                        {{ __('Select A New Photo') }}
                                    </x-secondary-button>

                                    @if ($this->user->profile_photo_path)
                                        <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                                            {{ __('Remove Photo') }}
                                        </x-secondary-button>
                                    @endif

                                    <x-input-error for="photo" class="mt-2" />
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control text-muted" id="firstName"
                                            value="John">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control text-muted" id="lastName"
                                            value="Doe">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="yourEmail">Your Email</label>
                                        <input type="text" class="form-control text-muted" id="yourEmail"
                                            value="johndoe@gmail.com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="yourWebsite">Your Website</label>
                                        <input type="text" class="form-control text-muted" id="yourWebsite"
                                            value="www.johndoe.com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="yourBirthday">Your Birthday</label>
                                        <input type="text" class="form-control text-muted" id="yourBirthday"
                                            value="01 June 1984">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="phoneNumber">Your Phone Number</label>
                                        <input type="text" class="form-control text-muted" id="phoneNumber"
                                            value="+91 - 123 456 7890">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="yourGender">Your Gender</label>
                                        <input type="text" class="form-control text-muted" id="yourGender"
                                            value="Male">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="yourStatus">Status</label>
                                        <input type="text" class="form-control text-muted" id="yourStatus"
                                            value="Married">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="aboutDesc">Write a little description about you</label>
                                        <textarea class="form-control text-muted"
                                            id="aboutDesc">Vestibulum suscipit faucibus dolor, vitae mollis justo consequat vel. Vestibulum in nisi ut neque tristique accumsan vel eu eros. Quisque pellentesque urna et hendrerit lacinia. Mauris vitae tellus neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in placerat tortor, sit amet dictum sem. Donec et orci condimentum eros pulvinar maximus. Suspendisse accumsan imperdiet mauris vitae tincidunt. Donec imperdiet purus eget diam tristique vestibulum. Vestibulum posuere placerat lacus commodo sollicitudin. Nullam eget justo fermentum, rhoncus leo eget, viverra augue. Fusce odio odio, egestas id turpis at, faucibus consectetur nulla. Sed vel volutpat ligula, quis vulputate odio. Sed condimentum, neque nec aliquam sodales, dolor erat euismod erat, porta venenatis odio leo non dolor. Donec ut lacus non quam convallis sodales.</textarea>
                                    </div>
                                    <a href="#" class="button button-dark">Save</a>
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