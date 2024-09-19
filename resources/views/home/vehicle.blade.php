@extends('home-layouts.home-app')

@section('content')

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">Our vehicles</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Our vehicles</li>
            </ol>
        </div>
    </div>

    <div class="div-padding our-vehicles-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">Our vehicles</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="vehicle-tab-nav">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab"
                                    data-toggle="tab" class="active">All</a></li>
                            <li role="presentation"><a href="#scooty" aria-controls="scooty" role="tab"
                                    data-toggle="tab">Scooter</a></li>
                            <li role="presentation"><a href="#economy" aria-controls="economy" role="tab"
                                    data-toggle="tab">Economy</a></li>
                            <li role="presentation"><a href="#luxury" aria-controls="luxury" role="tab"
                                    data-toggle="tab">Luxury</a></li>
                            <li role="presentation"><a href="#suv" aria-controls="suv" role="tab"
                                    data-toggle="tab">SUV</a></li>
                            <li role="presentation"><a href="#Limousine" aria-controls="Limousine" role="tab"
                                    data-toggle="tab">Limousine</a></li>
                        </ul>
                    </div>
                    <div class="tab-content vehicle-tab-content">
                        <div role="tabpanel" class="tab-pane active" id="all">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-vehicle-box">
                                        <div class="single-vehilce-img">
                                            <img src="assets/assets/images/dashboard/vehicle-1.webp" alt="vehicle img">
                                        </div>
                                        <div class="vehicle-box-hover">
                                            <h4>Car Name here</h4>
                                            <p>LXI Optional998 cc,<br /> Manual,<br /> Petrol,<br /> 24.07 kmpl</p>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-vehicle-box">
                                        <div class="single-vehilce-img">
                                            <img src="assets/assets/images/23_our_vehicles.webp" alt="vehicle img">
                                        </div>
                                        <div class="vehicle-box-hover">
                                            <h4>Car Name here</h4>
                                            <p>LXI Optional998 cc,<br /> Manual,<br /> Petrol,<br /> 24.07 kmpl</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="scooty">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-vehicle-box">
                                        <div class="single-vehilce-img">
                                            <img src="assets/assets/images/23_our_vehicles.webp" alt="vehicle img">
                                        </div>
                                        <div class="vehicle-box-hover">
                                            <h4>Car Name here</h4>
                                            <p>LXI Optional998 cc,<br /> Manual,<br /> Petrol,<br /> 24.07 kmpl</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="economy">
                            <div class="row">
                                
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-vehicle-box">
                                        <div class="single-vehilce-img">
                                            <img src="assets/assets/images/22_our_vehicles.webp" alt="vehicle img">
                                        </div>
                                        <div class="vehicle-box-hover">
                                            <h4>Car Name here</h4>
                                            <p>LXI Optional998 cc,<br /> Manual,<br /> Petrol,<br /> 24.07 kmpl</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="luxury">
                            
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-vehicle-box">
                                        <div class="single-vehilce-img">
                                            <img src="assets/assets/images/dashboard/vehicle-1.webp" alt="vehicle img">
                                        </div>
                                        <div class="vehicle-box-hover">
                                            <h4>Car Name here</h4>
                                            <p>LXI Optional998 cc,<br /> Manual,<br /> Petrol,<br /> 24.07 kmpl</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="suv">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-vehicle-box">
                                        <div class="single-vehilce-img">
                                            <img src="assets/assets/images/dashboard/vehicle-1.webp" alt="vehicle img">
                                        </div>
                                        <div class="vehicle-box-hover">
                                            <h4>Car Name here</h4>
                                            <p>LXI Optional998 cc,<br /> Manual,<br /> Petrol,<br /> 24.07 kmpl</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-vehicle-box">
                                        <div class="single-vehilce-img">
                                            <img src="assets/assets/images/dashboard/vehicle-1.webp" alt="vehicle img">
                                        </div>
                                        <div class="vehicle-box-hover">
                                            <h4>Car Name here</h4>
                                            <p>LXI Optional998 cc,<br /> Manual,<br /> Petrol,<br /> 24.07 kmpl</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Limousine">
                            
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-vehicle-box">
                                        <div class="single-vehilce-img">
                                            <img src="assets/assets/images/dashboard/vehicle-1.webp" alt="vehicle img">
                                        </div>
                                        <div class="vehicle-box-hover">
                                            <h4>Car Name here</h4>
                                            <p>LXI Optional998 cc,<br /> Manual,<br /> Petrol,<br /> 24.07 kmpl</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="page navigation" class="page-navigation">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">115</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

@endsection