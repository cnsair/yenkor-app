@extends('layouts.app-home')

@section('content')

    <div class="breadcrumb-div">
        <div class="container">
            <h1 class="page-title mb-0">About Us</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About</li>
            </ol>
        </div>
    </div>

    <section class="who-we-are div-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="who-we-are-left-content">
                        <h2 class="who-we-are-title pb-4">About Yenkor</h2>
                        <p>
                            YENKOR is a smart public transportation app developed by AFRICA BLOCKCHAIN CONSORTIUM & DIGITAL ECONOMY LIMITED in collaboration with students from the Ghana Communication Technology University, Accra - Ghana.  Just like popular ride-hailing apps, but tailored for public buses, YENKOR makes traveling easier by helping you find buses going your way — with a few extra features to improve your journey.
                        </p>
                        <p> 
                            With YENKOR, you can: <br>
                            Locate Available Buses: See nearby buses registered on the app and traveling towards your destination. <br>
                            Pin Your Location: Indicate where you’re waiting, so drivers know you’re at the bus-stop. <br>
                            Hop On and Go: Once you board and the bus moves from your location, your pin automatically sets your destination. <br>
                            Pay Easily: No need to carry cash—just scan the bus’s QR code to pay instantly. <br>
                        </p>
                        <p>
                            Whether you’re commuting to work, school, or running errands, YENKOR simplifies your journey by bridging the gap between passengers and drivers. YENKOR helps you plan better, avoid the guesswork and long waits at the bus stop. We are here to make public transportation more reliable, predictable, and stress-free. 
                            Wherever you’re headed, YENKOR connects you to the right bus, fast and hassle-free.  <br>
                            <i><b>YENKOR – Let's Go!</b></i>
                        </p>
                    </div>
                    <div>
                    <h2>Mission</h2>
                        <li class="who-we-are-list-item">     
                            <p> 
                              At YENKOR, our mission is to make public transportation more accessible, efficient, and stress-free. We aim to connect riders and bus drivers seamlessly, helping people find buses traveling to their destination, board with ease, and pay digitally. With YENKOR, public transport becomes simpler and more reliable for everyone.
                            </p>
                        </li>
                    </div>
                    <div>
                    <H2>Vision</H2>
                        <li class="who-we-are-list-item">
                            <p>  
                              Our vision is to revolutionize public transportation by providing a smarter way for people to travel. We aspire to create a world where waiting at bus stops becomes a thing of the past, every ride is convenient, and public buses are just a tap away. YENKOR strives to be the leading platform that transforms the way people move, making public transit easy, predictable, and enjoyable for all.
                            </p>
                        </li>
                    </div>
                    <a href="#" class="who-we-are-btn button button-dark">Read More</a>
                </div>
                <div class="col-12 col-lg-6">
                    <div class=" who-we-are-right-content">
                        <img class="who-we-are-blob" src="assets/assets/images/home/yellow-blob.svg" alt="Yellow blob">
                        <img class="who-we-are-image-1" width="500" src="assets/assets/images/home/who-we-are-01.jpg"
                            alt="Group of people">
                        <img class="who-we-are-image-2" width="300" src="assets/assets/images/home/who-we-are-02.jpg"
                            alt="Group of people">
                        <img class="who-we-are-blob-2" src="assets/assets/images/home/yellow-blob.svg" alt="Yellow blob">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('home.counter')

    @include('home.team')

@endsection