<header class="theme-1">
    <div class="header__upper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="header__upper--left">
                        <div class="d-none d-lg-block logo">
                            <a href="{{ route('home') }}"><img src="assets/assets/images/logo-main.webp" alt="Site Logo"></a>
                        </div>
                        <div class="d-block d-lg-none logo w-49px">
                            <a href="{{ route('home') }}"><img src="assets/assets/images/logo-icon.webp" alt="Site Logo"></a>
                        </div>
                        <div class="search-bar">
                            <form class="form">
                                <span class="icon icon-left"><i class="fas fa-map-marker-alt"></i></span>
                                <input class="form-control" type="search" name="search-bar"
                                    placeholder="Tell us your location" id="search-bar" aria-label="search-bar">
                                <button class="button button-dark" type="submit" aria-label="search-btn">
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                        <button type="button" class="nav-toggle-btn a-nav-toggle ms-auto d-block d-lg-none"
                            aria-label="toggle-nav">
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
                        <!-- <nav class="navigation">
                            <ul>
                                <li>
                                    <a href="my-driver-dashboard.html">Driver Dashboard</a>
                                </li>
                            </ul>
                        </nav> -->
                        <a href="{{ route('register') }}" class="button p-0"><i class="far fa-user-astronaut"></i> Drive with
                            us</a>
                        <a href="{{ route('book-ride') }}" class="button p-0"><i class="far fa-taxi"></i> Book a
                            Ride</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__lower">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-block col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> 

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto">
                                <!-- ->has('home') -->
                                <li class="nav-item {{ route('home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('home') }}">
                                        <i class="fas fa-home"></i>Home
                                    </a>
                                </li>
                                <li class="nav-item {{ route('about') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('about') }}">
                                        <i class="fas fa-exclamation-circle"></i>About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('service') }}">
                                        <i class="fas fa-cog"></i>Our Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('vehicle') }}">
                                        <i class="fas fa-taxi"></i>Our
                                        Vehicles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('package') }}"><i class="fas fa-cube"></i>Packages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blog') }}">
                                        <i class="fas fa-home"></i>Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">
                                        <i class="fas fa-map-marker-alt"></i>Contact Us</a>
                                </li>
                            </ul>
                            <div class="my-2 my-lg-0 d-inline-flex">
                                <a href="{{ route('login') }}" class="button button-light big">Sign In</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>