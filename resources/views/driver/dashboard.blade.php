<!doctype html>

<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Driver - {{ Auth()->user()->firstname }}</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/images/yenkor-favicon.ico') }}">

    <x-css-links></x-css-links>
</head>

<body class="theme-2">
    
<x-dashboard-header></x-dashboard-header>

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
                                <p>ID 1234567890</p>
                                <a href="#">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 right-text">
                    <h2>Partnership with Yenkor</h2>
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
                                <a href="#info" aria-controls="info" role="tab" data-toggle="tab">Personal
                                    Information</a>
                            </li>
                            <li role="presentation">
                                <a href="#message" aria-controls="message" role="tab" data-toggle="tab">Message</a>
                            </li>
                            <li role="presentation">
                                <a href="#vehicles" aria-controls="vehicles" role="tab" data-toggle="tab">Vehicles</a>
                            </li>
                            <li role="presentation">
                                <a href="#drivers" aria-controls="drivers" role="tab" data-toggle="tab">Drivers</a>
                            </li>
                            <li role="presentation">
                                <a href="#rides" aria-controls="rides" role="tab" data-toggle="tab">Rides</a>
                            </li>
                            <li role="presentation">
                                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="dashboard">
                                <div class="dashboard-info">
                                    <div class="ride-chart small-div">
                                        <h4>Ride From the day</h4>
                                        <div class="small-div-item">
                                            <div id="ride-chart"></div>
                                        </div>
                                    </div>
                                    <div class="overview-counter small-div">
                                        <h4>Overview</h4>
                                        <div class="counter-wrapper bg-gray small-div-item">
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">18445</h2>
                                                <p class="counter-text">Total Rides</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">21785</h2>
                                                <p class="counter-text">Total Passengers</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">150</h2>
                                                <p class="counter-text">Drivers</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">75</h2>
                                                <p class="counter-text">Today Rides</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="earning-details small-div">
                                        <h4>Total earnings of last month</h4>
                                        <div class="total-earning-table table-responsive small-div-item">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name of Cabs</th>
                                                        <th scope="col">Earnigns</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Drivers</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Johnson Smith</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                        <td>$856.56</td>
                                                        <td>May 11, 2018</td>
                                                        <td>John Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alto XL <small>“4865ART KU”</small></th>
                                                        <td>$186.00</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Rock William</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Swift Dezire <small>“9856BRU PO”</small></th>
                                                        <td>$847.25</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Jassica</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$1337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Elly Smith</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tesia <small>“68946KUY UK”</small></th>
                                                        <td>$869.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Stone Gold</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi 8 <small>“4976ART RU”</small></th>
                                                        <td>$537.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Rock</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Honda City XL <small>“8766ART TU”</small></th>
                                                        <td>$225.50</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Johnson Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alto XL <small>“3589PMT MB”</small></th>
                                                        <td>$100.00</td>
                                                        <td>May 11, 2018</td>
                                                        <td>John William</td>
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
                                        <h4 class="heading-item heading-item-1">Personal Information</h4>
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
                            <div role="tabpanel" class="tab-pane" id="message">
                                <h4>Messages</h4>
                                <div class="message-box small-div">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="event-msg-left">
                                                <ul class="list-group">
                                                    <li class="list-group-item msg-single ">
                                                        <div class="sidebar-heading">
                                                            <h4>Messages</h4>
                                                        </div>
                                                        <div class="event-sideber-search">
                                                            <form action="#" method="post" class="search-form">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search">
                                                                <i class="fa fa-search"></i>
                                                            </form>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="me-3 img-fluid"
                                                                src="assets/images/messenger/1.webp"
                                                                alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">John</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="me-3 img-fluid"
                                                                src="assets/images/messenger/1.webp"
                                                                alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Rock</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="me-3 img-fluid"
                                                                src="assets/images/messenger/1.webp"
                                                                alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Johnson</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="me-3 img-fluid"
                                                                src="assets/images/messenger/1.webp"
                                                                alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Smith</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="me-3 img-fluid"
                                                                src="assets/images/messenger/1.webp"
                                                                alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Akash</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="me-3 img-fluid"
                                                                src="assets/images/messenger/1.webp"
                                                                alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Akash</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="event-chat-ryt">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <div class="media-img">
                                                                <img class="me-3 img-fluid"
                                                                    src="assets/images/messenger/1.webp"
                                                                    alt="placeholder image">
                                                            </div>
                                                            <div class="media-body">
                                                                <h3 class="mb-0">John</h3>
                                                                <p>Online</p>
                                                            </div>
                                                            <div class="phone-icon">
                                                                <a href="#"><i class="fas fa-phone"></i></a>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="char-area">
                                                            <div class="chat-reciver">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet.</p>
                                                                    </div>
                                                                    <img class="ms-3"
                                                                        src="assets/images/messenger/1.webp" alt="user">
                                                                </div>
                                                            </div>
                                                            <div class="chat-sender">
                                                                <div class="media">
                                                                    <img class="me-3"
                                                                        src="assets/images/messenger/1.webp" alt="user">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur
                                                                            adipisicing elit. Magni, saepe.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-reciver">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur
                                                                            adipisicing elit. Eos, aperiam.</p>
                                                                    </div>
                                                                    <img class="ms-3"
                                                                        src="assets/images/messenger/1.webp" alt="user">
                                                                </div>
                                                            </div>
                                                            <div class="chat-sender">
                                                                <div class="media">
                                                                    <img class="me-3"
                                                                        src="assets/images/messenger/1.webp" alt="user">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur,
                                                                            adipisicing elit. Praesentium, sequi aliquid
                                                                            saepe hic alias optio?</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-reciver">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur
                                                                            adipisicing elit. Eos, aperiam.</p>
                                                                    </div>
                                                                    <img class="ms-3"
                                                                        src="assets/images/messenger/1.webp" alt="user">
                                                                </div>
                                                            </div>
                                                            <div class="chat-sender">
                                                                <div class="media">
                                                                    <img class="me-3"
                                                                        src="assets/images/messenger/1.webp" alt="user">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur,
                                                                            adipisicing elit. Praesentium, sequi aliquid
                                                                            saepe hic alias optio?</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-reciver">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur
                                                                            adipisicing elit. Eos, aperiam.</p>
                                                                    </div>
                                                                    <img class="ms-3"
                                                                        src="assets/images/messenger/1.webp" alt="user">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="char-type">
                                                            <form class="d-flex justify-content-center" action="#"
                                                                method="post">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Type Here...">
                                                                <button class="button button-dark">SEND</button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.webp" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/21_our_vehicles.webp" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/22_our_vehicles.webp" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/23_our_vehicles.webp" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.webp" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/21_our_vehicles.webp" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/22_our_vehicles.webp" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/23_our_vehicles.webp" alt="Vehicle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="drivers">
                                <div class="drivers-info">
                                    <h4>Drivers</h4>
                                    <div class="row small-div">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top"
                                                        src="assets/images/dashboard/driver-1.webp"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top"
                                                        src="assets/images/14_my_driver_dashboard_my_drivers.webp"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/15.webp"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/16.webp"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/15.webp"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/19.webp"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/20.webp"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/21.webp"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
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
                                                            <th scope="col">Name of Cabs</th>
                                                            <th scope="col">Earnigns</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Passengers</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                            <td>$337.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Johnson Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                            <td>$856.56</td>
                                                            <td>May 11, 2018</td>
                                                            <td>John Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Alto XL <small>“4865ART KU”</small></th>
                                                            <td>$186.00</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Rock William</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Swift Dezire <small>“9856BRU PO”</small>
                                                            </th>
                                                            <td>$847.25</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Jassica</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                            <td>$1337.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Elly Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tesia <small>“68946KUY UK”</small></th>
                                                            <td>$869.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Stone Gold</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Audi 8 <small>“4976ART RU”</small></th>
                                                            <td>$537.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Rock</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Honda City XL <small>“8766ART TU”</small>
                                                            </th>
                                                            <td>$225.50</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Johnson Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Alto XL <small>“3589PMT MB”</small></th>
                                                            <td>$100.00</td>
                                                            <td>May 11, 2018</td>
                                                            <td>John William</td>
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
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <div class="personal-info">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Personal Information</h4>
                                        </div>
                                        <div class="col-lg-6 text-end">
                                            <a href="#"><i class="fas fa-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                    <div class="personal-details">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <x-dashboard-footer></x-dashboard-footer>

    <x-dashboard-js-script></x-dashboard-js-script>

</body>


</html>