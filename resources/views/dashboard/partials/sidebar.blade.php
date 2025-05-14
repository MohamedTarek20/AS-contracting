{{-- <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-th-large"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#"
                    onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"
                    class="dropdown-item">
                    <i class="fas fa-angle-left mr-2"></i>Logout
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('dashboard/dist/img/logo.png') }}" alt="{{ env('APP_NAME') }} Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8;">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @can('admins')
                    <li class="nav-item">
                        <a href="{{ route('admin.admins.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Admins</p>
                        </a>
                    </li>
                @endcan
                @can('roles')
                    <li class="nav-item">
                        <a href="{{ route('admin.roles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                @endcan
                <li class="nav-header">Home Page</li>
                <li class="nav-item">
                    <a href="{{ route('admin.sliders.index') }}"
                        class="nav-link @if (request()->routeIs('admin.sliders.*')) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Banners</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.testimonials.index') }}"
                        class="nav-link  @if (request()->routeIs('admin.testimonials.*')) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Testimonials</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}"
                        class="nav-link @if (request()->routeIs('admin.categories.*')) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}"
                        class="nav-link @if (request()->routeIs('admin.products.*')) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-header">About Page</li>
                <li class="nav-item">
                    <a href="{{ route('admin.about.index') }}"
                        class="nav-link  @if (request()->routeIs('admin.about.*')) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-header">Contact Page</li>
                <li class="nav-item">
                    <a href="{{ route('admin.contacts.index') }}"
                        class="nav-link  @if (request()->routeIs('admin.contacts.*')) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Contacts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.messages.index') }}"
                        class="nav-link  @if (request()->routeIs('admin.messages.*')) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Message</p>
                    </a>
                </li>

                <li class="nav-header">Configration</li>
                <li class="nav-item">
                    <a href="{{ route('admin.settings.index') }}"
                        class="nav-link  @if (request()->routeIs('admin.settings.*')) active @endif">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside> --}}


<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="{{ route('admin.dashboard') }}" target="_blank">
            <img src="{{ asset('logo.svg') }}" class="navbar-brand-img" alt="main_logo">
            {{-- <span class="ms-1 text-sm text-dark">Creative Tim</span> --}}
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.dashboard')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.dashboard') }}">
                    <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.sliders.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.sliders.index') }}">
                    <i class="material-symbols-rounded opacity-5">window</i>
                    <span class="nav-link-text ms-1">Sliders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.services.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.services.index') }}">
                    <i class="material-symbols-rounded opacity-5">work</i>
                    <span class="nav-link-text ms-1">Services</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.testimonials.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.testimonials.index') }}">
                    <i class="material-symbols-rounded opacity-5">reviews</i>
                    <span class="nav-link-text ms-1">Testimonials</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.partners.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.partners.index') }}">
                    <i class="material-symbols-rounded opacity-5">handshake</i>
                    <span class="nav-link-text ms-1">Partners</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.projects.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.projects.index') }}">
                    <i class="material-symbols-rounded opacity-5">domain</i>
                    <span class="nav-link-text ms-1">Projects</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.about.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.about.index') }}">
                    <i class="material-symbols-rounded opacity-5">info</i>
                    <span class="nav-link-text ms-1">About</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.contacts.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.contacts.index') }}">
                    <i class="material-symbols-rounded opacity-5">contacts</i>
                    <span class="nav-link-text ms-1">Contacts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.messages.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.messages.index') }}">
                    <i class="material-symbols-rounded opacity-5">message</i>
                    <span class="nav-link-text ms-1">Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.settings.*')) active  bg-gradient-dark text-white @else text-dark @endif"
                    href="{{ route('admin.settings.index') }}">
                    <i class="material-symbols-rounded opacity-5">settings</i>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
