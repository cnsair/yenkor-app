<!doctype html>

<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rider - {{ Auth()->user()->firstname }}</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/yenkor-favicon.ico">

    <x-css-links></x-css-links>
</head>

<body class="theme-2">
    
<x-dashboard-header></x-dashboard-header>

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Let's Ride</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('rider.dashboard') }}">Home</a></li>
                <li>Ride with Carrgo</li>
            </ol>
        </div>
    </div>
    <div class="div-padding our-vehicles-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="booking-form">
                        <form action="#">
                            <div class="from-group destination">
                                <label for="inputFrom">From</label>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="frominputDestination" placeholder="Select Pickup"
                                    id="inputFrom" class="form-control">
                            </div>
                            <div class="from-group destination">
                                <label for="inputDestination">Where to?</label>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="desctination" placeholder="Select Destination"
                                    id="inputDestination" class="form-control">
                            </div>
                            <div class="payment-options-wrapper">
                                <h2>Payment Method</h2>
                                <div class="from-group payment-options">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="cash-pay"
                                            value="option1">
                                        <label class="form-check-label" for="cash-pay">Cash</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts"
                                            id="banking-pay" value="option2">
                                        <label class="form-check-label" for="banking-pay">Net Banking</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="card-pay"
                                            value="option3">
                                        <label class="form-check-label" for="card-pay">Debit Card</label>
                                    </div>
                                </div>
                            </div>
                            <div class="select-car-wrapper">
                                <h2>Selected Car</h2>
                                <div class="selected-car">
                                    <div class="from-group car-options">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="scooter"
                                                value="option1">
                                            <label class="form-check-label" for="scooter">
                                                <img src="assets/images/dashboard/car-1.webp" alt="car">
                                            </label>
                                            <div class="car-details">
                                                <h4>1x</h4>
                                                <p>Scooter</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="alto"
                                                value="option2">
                                            <label class="form-check-label" for="alto">
                                                <img src="assets/images/dashboard/car-2.webp" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>2x</h4>
                                                <p>Alto</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="swift"
                                                value="option3">
                                            <label class="form-check-label" for="swift">
                                                <img src="assets/images/dashboard/car-3.webp" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>3x</h4>
                                                <p>Swift dzire</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="luxury"
                                                value="option3">
                                            <label class="form-check-label" for="luxury">
                                                <img src="assets/images/dashboard/car-4.webp" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>4x</h4>
                                                <p>Luxury</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="tourist"
                                                value="option3">
                                            <label class="form-check-label" for="tourist">
                                                <img src="assets/images/dashboard/car-5.webp" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>5x</h4>
                                                <p>Tourist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="button button-dark">Book Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ride-map-area">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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