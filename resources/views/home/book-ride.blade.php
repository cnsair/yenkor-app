@extends('layouts.app-home')

@section('content')

<style>

.form-check-inline {
    display: flex;
    align-items: center;
    cursor: pointer;
    margin-right: 15px;
}

.form-check-label {
    position: relative;
    padding-left: 30px; 
    cursor: pointer;
    transition: color 0.3s ease;
}

.form-check-label::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    border: 2px solid black;
    border-radius: 50%;
    background-color: #fff;
    transition: background-color 0.3s, border-color 0.3s;
}

.form-check-inline.selected .form-check-label::before {
    background-color: #333333; 
    border-color: #666666;    
}

input[type="radio"] {
    display: none;
}

.form-group.car-options {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px; 
    align-items: center;
}

.car-option {
    text-align: center;
    display: inline-block;
    width: 100px; 
    cursor: pointer;
    margin: 0; 
    transition: transform 0.3s ease-in-out;
}

.car-image {
    display: block;
    border-radius: 50%; 
    width: 80px; 
    height: 80px;
    object-fit: cover; 
    transition: transform 0.3s ease-in-out, border-color 0.3s ease;
}

.car-option:hover .car-image {
    transform: scale(1.3); 
    border: 3px solid rgb(92, 92, 89);
}

.car-image.selected {
    border: 3px solid rgb(11, 11, 12); 
    transform: scale(1.15); 
}

.car-details {
    margin-top: 5px; 
}

.car-details p {
    margin: 0;
    font-size: 14px; 
    font-weight: bold; 
    color: #333; 
}

</style>
    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Let's Ride</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Ride with Yenkor</li>
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
                                    <div class="form-check form-check-inline" data-value="option1">
                                        <label class="form-check-label" for="cash-pay">Cash</label>
                                    </div>
                                    <div class="form-check form-check-inline" data-value="option2">
                                        <label class="form-check-label" for="banking-pay">Net Banking</label>
                                    </div>
                                    <div class="form-check form-check-inline" data-value="option3">
                                        <label class="form-check-label" for="card-pay">Debit Card</label>
                                    </div>
                                </div>
                            </div>
                            <div class="select-car-wrapper">
                                <h2>Selected Car</h2>
                                <div class="selected-car">
                                    <div class="form-group car-options">
                                        <div class="car-option" onclick="selectCar('economy')">
                                            <img src="assets/images/Economy.jpeg" alt="Car" class="car-image" id="economy">
                                            <div class="car-details">
                                                <p>Economy</p>
                                            </div>
                                        </div>
                                        <div class="car-option" onclick="selectCar('standard')">
                                            <img src="assets/images/Standard.jpg" alt="Car" class="car-image" id="standard">
                                            <div class="car-details">
                                                <p>Standard</p>
                                            </div>
                                        </div>
                                        <div class="car-option" onclick="selectCar('luxury')">
                                            <img src="assets/images/Luxury.jpeg" alt="Car" class="car-image" id="luxury">
                                            <div class="car-details">
                                                <p>Luxury</p>
                                            </div>
                                        </div>
                                        <div class="car-option" onclick="selectCar('suv')">
                                            <img src="assets/images/SUV.jpeg" alt="Car" class="car-image" id="suv">
                                            <div class="car-details">
                                                <p>SUV</p>
                                            </div>
                                        </div>
                                        <div class="car-option" onclick="selectCar('minivan')">
                                            <img src="assets/images/Minivan.jpeg" alt="Car" class="car-image" id="minivan">
                                            <div class="car-details">
                                                <p>Minivans</p>
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

<script>
    // Select all form-check-inline elements
const formCheckElements = document.querySelectorAll('.form-check-inline');

// Add click event listeners to each element
formCheckElements.forEach((element) => {
    element.addEventListener('click', () => {
        // Remove "selected" class from all elements
        formCheckElements.forEach((el) => el.classList.remove('selected'));
        
        // Add "selected" class to the clicked element
        element.classList.add('selected');

        // Optionally, handle selected value
        const selectedValue = element.getAttribute('data-value');
        console.log('Selected payment option:', selectedValue);
    });
});

function selectCar(carId) {
    // Deselect all images first
    const allCars = document.querySelectorAll('.car-image');
    allCars.forEach(car => {
        car.classList.remove('selected');
    });

    // Select the clicked car
    const selectedCar = document.getElementById(carId);
    selectedCar.classList.add('selected');
}
</script>
@endsection