<section class="responsive-menu">
    <div class="rep-header">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/assets/images/logo-main.webp') }}" width="122" height="32" alt="Site Logo">
            </a>
        </div>
        <a href="#" title class="close-menu"><i class="lni lni-close"></i></a>
    </div>
    <div class="navbar-collapse" id="navbarSupportedContent1">
        <ul class="mobile-menu navbar-nav me-auto">
            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-home"></i>Home
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">
                    <i class="fas fa-exclamation-circle"></i>About
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('service') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('service') }}">
                    <i class="fas fa-cog"></i>Our Services</a>
            </li>
            <li class="nav-item {{ request()->routeIs('vehicle') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('vehicle') }}">
                    <i class="fas fa-taxi"></i>Our Vehicles
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('package') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('package') }}">
                    <i class="fas fa-cube"></i>Packages</a>
            </li>
            <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('blog') }}">
                    <i class="fas fa-home"></i>Blog
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home.contact') }}">
                    <i class="fas fa-map-marker-alt"></i>Contact Us</a>
            </li>
        </ul>
        <div class="header__upper--right flex-column">
            <a href="{{ route('login') }}" class="button p-3"><i class="far fa-user-astronaut"></i> Drive with us</a>
            <a href="{{ route('book-ride') }}" class="button p-3 my-2"><i class="far fa-taxi"></i> Book a Ride</a>
            <div class="p-3 my-lg-0 d-inline-flex">
                <a href="{{ route('register') }}" class="button button-light big">Get Started</a>
            </div>
        </div>
    </div>
</section>