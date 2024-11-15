<div class="app-sidebar-wrapper">
    <div class="app-sidebar sidebar-shadow bg-dark sidebar-text-light">
        <div class="app-header__logo">

            @if ( Auth::user()->isAdmin() )

                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/assets/images/logo-main.webp') }}" data-toggle="tooltip" data-placement="bottom" title="Yenkor Admin" alt="Site Logo">
                </a>

            @endif

            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <div class="scrollbar-sidebar scrollbar-container">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">Menu</li>
                    <li class="mm-active">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="metismenu-icon pe-7s-rocket"></i>
                            Dashboard
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <a  class="mm-active" href="index-2.html">Analytics</a>
                        <a href="management-dashboard.html">Management</a>
                        <a href="advertisement-dashboard.html">Advertisement</a>
                        <a href="helpdesk-dashboard.html">Helpdesk</a>
                        <a href="monitoring-dashboard.html">Monitoring</a>
                        <a href="crypto-dashboard.html">Cryptocurrency</a>
                        <a href="pm-dashboard.html">Project Management</a>
                        <a href="product-dashboard.html">Product</a>
                        <a href="statistics-dashboard.html">Statistics</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-browser"></i>
                            Pages
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="pages-login.html">
                                    <i class="metismenu-icon"></i>
                                    Login
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>