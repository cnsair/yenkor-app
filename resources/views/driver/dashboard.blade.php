@extends('layouts.app-driver')

@section('content')
    
    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Dashboard</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('driver.dashboard') }}">Home</a></li>
                <li>My Dashboard</li>
            </ol>
        </div>
    </div>

    <div class="div-padding driver-dashboard-div">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="passanger-name">
                        <div class="media">
                            <img class="me-3" src="{{ asset('assets/assets/images/partner-img.webp') }}" alt="partner-img">
                            <div class="media-body">
                                <h2 class="mt-0">{{ Auth()->user()->firstname .' '.Auth()->user()->lastname }}</h2>
                                <p>{{ 'ID: ' . Auth()->user()->yenkor_id }}</p>
                                <p>{{ 'Email: ' . Auth()->user()->email }}</p>
                                
                                <a class="btn btn-secondary" style="color: #fffddd" href="{{ route('driver.edit-profile.edit') }}">Edit Profile</a>
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
                    <div class="tab-dashboard">
                        <ul class="nav nav-tabs tab-navigation" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#dashboard" aria-controls="dashboard" class="active" role="tab"
                                    data-toggle="tab">Dashboard</a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#info" aria-controls="info" role="tab" data-toggle="tab">Profile
                                    Information</a>
                            </li>
                            <li role="presentation">
                                <a href="#vehicles" aria-controls="vehicles" role="tab" data-toggle="tab">My Vehicles</a>
                            </li>
                            <li role="presentation">
                                <a href="#rides" aria-controls="rides" role="tab" data-toggle="tab">My Rides</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="dashboard">
                                <div class="dashboard-info">
                                    <!-- <div class="ride-chart small-div">
                                        <h4>Ride Chart</h4>
                                        <div class="small-div-item">
                                            <div id="ride-chart"></div>
                                        </div>
                                    </div> -->
                                    <div class="overview-counter small-div">
                                        <h4>Overview</h4>
                                        <div class="counter-wrapper bg-gray small-div-item">
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">18</h2>
                                                <p class="counter-text">Today Rides</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">75445</h2>
                                                <p class="counter-text">Total Rides</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number inline">150</h2>
                                                <p class="counter-text">Position</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">21785</h2>
                                                <p class="counter-text">Total Earnings</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="earning-details small-div">
                                        <h4>Total earnings today</h4>
                                        <div class="total-earning-table table-responsive small-div-item">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Vehicle</th>
                                                        <th scope="col">Earnigns</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">From</th>
                                                        <th scope="col">To</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Lashibi</td>
                                                        <td>Cirle</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                        <td>$856.56</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Sakumono Estate</td>
                                                        <td>Accra Market</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="button button-dark">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="info">
                                <div class="personal-info small-div">
                                    <div class="div-heading">
                                        <h4 class="heading-item heading-item-1">Profile Information</h4>
                                        <p class="heading-item heading-item-2 right">
                                            <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                                        </p>
                                    </div>
                                    <div class="personal-details small-div-item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputFirstName">First Name</label>
                                                    <input type="text" class="form-control text-muted"
                                                        id="inputFirstName" readonly value="John">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputLastName">Last Name</label>
                                                    <input type="text" class="form-control text-muted"
                                                        id="inputLastName" readonly value="Doe">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputEmail">Your Email</label>
                                                    <input type="text" class="form-control text-muted" id="inputEmail"
                                                        readonly value="johndoe@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputWebsite">Your Website</label>
                                                    <input type="text" class="form-control text-muted" id="inputWebsite"
                                                        readonly value="www.johndoe.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputBirthday">Your Birthday</label>
                                                    <input type="text" class="form-control text-muted"
                                                        id="inputBirthday" readonly value="01 June 1984">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputPhoneNumber">Your Phone Number</label>
                                                    <input type="text" class="form-control text-muted"
                                                        id="inputPhoneNumber" readonly value="+91 - 123 456 7890">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputGender">Your Gender</label>
                                                    <input type="text" class="form-control text-muted" id="inputGender"
                                                        readonly value="Male">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="inputStatus">Status</label>
                                                    <input type="text" class="form-control text-muted" id="inputStatus"
                                                        readonly value="Married">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="inputDesc">Write a little description about you</label>
                                                    <textarea class="form-control text-muted" id="inputDesc"
                                                        readonly>Vestibulum suscipit faucibus dolor, vitae mollis justo consequat vel. Vestibulum in nisi ut neque tristique accumsan vel eu eros. Quisque pellentesque urna et hendrerit lacinia. Mauris vitae tellus neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in placerat tortor, sit amet dictum sem. Donec et orci condimentum eros pulvinar maximus. Suspendisse accumsan imperdiet mauris vitae tincidunt. Donec imperdiet purus eget diam tristique vestibulum. Vestibulum posuere placerat lacus commodo sollicitudin. Nullam eget justo fermentum, rhoncus leo eget, viverra augue. Fusce odio odio, egestas id turpis at, faucibus consectetur nulla. Sed vel volutpat ligula, quis vulputate odio. Sed condimentum, neque nec aliquam sodales, dolor erat euismod erat, porta venenatis odio leo non dolor. Donec ut lacus non quam convallis sodales.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div role="tabpanel" class="tab-pane" id="vehicles">
                                <div class="vahicles-container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>My vehicles</h4>
                                        </div>
                                        <div class="col-lg-6 text-end">
                                            <a href="#" class="button button-dark">Register New Vehicle</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>BMW 5 <small>"4976ART RU"</small></h4>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="single-vehicle-container">
                                                    <img src="{{ asset('assets/assets/images/home/1.webp') }}" alt="Vehicle">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <h4>Audi <small>"4876ORT AU"</small></h4>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="single-vehicle-container">
                                                    <img src="{{ asset('assets/assets/images/dashboard/vehicle-1.webp') }}" alt="Vehicle">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div role="tabpanel" class="tab-pane" id="rides">
                                <div class="rides-details">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Rides</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rides-filter">
                                                <ul>
                                                    <li>
                                                        <a href="#">Yesterday</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Last Week</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Last Month</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Last 6 Month</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Last Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row small-div">
                                        <div class="col-lg-12">
                                            <div class="total-earning-table table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Vehicle</th>
                                                            <th scope="col">Earnigns</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">From</th>
                                                            <th scope="col">To</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                            <td>$337.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Lashibi</td>
                                                            <td>Circle</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                            <td>$856.56</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Sakumono Estate</td>
                                                            <td>Accra Market</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-center">
                                                <a href="#" class="button button-dark">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

        <!-- Ends here -->   
        </div>
    </div>

@endsection