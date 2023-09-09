@include('includes.header')
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/vehlektsidis-main-logo.jpg') }}" alt="Logo" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Homepage -->
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Αρχική</a>
                        </li>

                        <!-- Bio Dropdown -->
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                                Βιογραφίες
                            </a>
                            <!-- DropDown List -->
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('vasilis-bio') }}">Βασίλειος Βεηλικτσίδης</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('elpida-bio') }}">Ελπίδα Βεηλικτσίδη</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('music-files') }}" class="nav-link">Μουσικολογικό Αρχείο</a>                         
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('gallery') }}" class="nav-link">Αρχειακό υλικό</a>                         
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Επικοινωνία</a>                         
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" id="dropdownContent">

                                    <!-- Admin Links -->
                                    @if(Auth::user()->admin)
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

@include('includes.footer')
