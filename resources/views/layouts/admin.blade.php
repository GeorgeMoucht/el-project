@include('includes.header')
@php
    $currentRoute = request()->route()->getName();

@endphp

<body>
    <div id="app">
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4 scrollable">
                    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action py-2 ripple {{ $currentRoute === 'admin.dashboard' ? 'active' : '' }}" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i>
                        <span>Γρήγορες Λειτουργίες</span>
                    </a>
                    <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action py-2 ripple {{ $currentRoute === 'admin.users' ? 'active' : '' }}">
                        <i class="fas fa-chart-area fa-fw me-3"></i>
                        <span>Όλοι οι χρήστες</span>
                    </a>

                    <a href="{{ route('admin.edit-gallery') }}" class="list-group-item list-group-item-action py-2 ripple {{ $currentRoute === 'admin.edit-gallery' ? 'active' : '' }}">
                        <i class="fas fa-chart-area fa-fw me-3"></i>
                        <span>Αρχείο Εικόνων</span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/vehlektsidis-main-logo.jpg') }}" height="50" alt="" loading="lazy"/>
                </a>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <!-- Icon -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">Πίσω στην σελίδα</a>
                    </li>

                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22" alt="" loading="lazy"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->


        <!--Main layout-->
        <main style="margin-top: 58px">
            <div class="container pt-4">
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('pagespecificscripts')
</body>
</html>