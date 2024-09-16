<header class="theme-2">
    <div class="header__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__upper--left">
                        <div class="d-none d-lg-block logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/assets/images/logo-main.webp') }}" alt="Site Logo">
                            </a>
                        </div>
                        <div class="d-block d-lg-none logo w-49px">
                            <a href="index.html"><img src="assets/images/logo-icon.webp" alt="Site Logo"></a>
                        </div>
                        <button type="button" class="nav-toggle-btn a-nav-toggle ms-auto d-block d-lg-none">
                            <span class="nav-toggle nav-toggle-sm">
                                <span class="stick stick-1"></span>
                                <span class="stick stick-2"></span>
                                <span class="stick stick-3"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <div class="header__upper--right">
                        <nav class="navigation">
                            <ul>
                                <li class="m-0">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h6 class="m-0">Passenger <i class="fas fa-angle-down"></i></h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="on-ride.html">On Ride</a>
                                            <a class="dropdown-item" href="passenger-profile.html">Passenger</a>
                                            <a class="dropdown-item" href="ride-with-Yenkor.html">Ride with
                                                Cargo</a>
                                            <a class="dropdown-item" href="ride-with-Yenkor-booked.html">Ride with
                                                Cargo Booked</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-0">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h6 class="m-0">Driver <i class="fas fa-angle-down"></i></h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="partner-profile.html">Partner Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-0">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h6 class="m-0">Login <i class="fas fa-angle-down"></i></h6>

                                                </div>
                                            </div>
                                        </a>
                                        <!-- <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="sign-in.html">Sign In</a>
                                            <a class="dropdown-item" href="sign-up.html">Sign up</a>
                                        </div> -->
                                    </div>
                                </li>
                                <li class="m-0"><a href="contact-us.html">Help</a></li>
                                <li class="m-0"><a href="contact-us.html"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </nav>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="media">
                                    <img height="30" width="30" class="me-3" src="assets/assets/images/partner-img.webp"
                                        alt>
                                    <div class="media-body">
                                        <h6 class="m-0"> {{ Auth()->user()->firstname." ".Auth()->user()->lastname }}
                                            <i class="fas fa-angle-down"></i>
                                        </h6>
                                        <p class="m-0">Ghana</p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Profile</a>
                                
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <button>Logout Now</button>
                                </form>

                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>