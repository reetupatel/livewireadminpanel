<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <li class="nav-link nav-item d-flex align-items-center" data-toggle="dropdown">
                <img src="{{ asset('assets/images/RonaldCodesLogo.png') }}" class="rounded-circle mr-2" alt="User Image"
                    width="40" height="40">
                <span class="d-none d-md-inline-block">{{ Auth::user()->name ?? 'User Name' }}</span>
            </li>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <div wire:click="logoutUser"class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> Logout
                </div>
            </div>
        </li>

    </ul>
</nav>
