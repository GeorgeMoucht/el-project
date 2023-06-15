<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Animate.css import -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="https://use.fontawesome.com/2897336d5a.js"></script>

</head>
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
                                <li><a class="dropdown-item" href="#">Βασίλειος Βεηλικτσίδης</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Ελπίδα Βεηλικτσίδη</a></li>
                            </ul>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
            <!-- Section: Social media -->
            <section class="foot-soc-section d-flex justify-content-between p-4" style="">
                <!-- Left -->
                <div class="me-5">
                    <span>Βρείτε μας στα social: </span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <!-- Website Λύκειο Ελληνίδων -->
                    <a class="btn btn-primary me-2 social-hover-web" style="background-color: #481449; width: 50px;" href="https://www.les.gr" target="__blank" role="button">
                        <img width="20" src="img/svg/circle-info-solid.svg" alt="website-icon">
                    </a>
                    <!-- Facebook -->
                    <a class="btn btn-primary me-2 social-hover-fa" style="background-color: #3b5998; width: 40px;" href="https://www.facebook.com/profile.php?id=100064362262265&ref=bookmarks" target="__blank" role="button">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <!-- Youtube -->
                    <a class="btn btn-primary me-2 social-hover-yt" style="background-color: #ed302f;" href="https://www.youtube.com/channel/UCMug6a0jl82caMqx3BsXi-Q" target="__blank" role="button">
                        <img width="20" src="img/svg/youtube.svg" alt="youtube-logo">
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <!-- <h6 class="text-uppercase fw-bold">Company name</h6> -->
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('img/logo-les-grayscale.png') }}" alt="Logo" width="120">
                            </a>
                            <!-- <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/> -->
                            <p style="font-size: 12px;">
                                Το Λύκειον των Ελληνίδων Σερρών κληρονόμος του σπάνιου, σημαντικοτάτου και μεγάλου Μουσικού Αρχείου της οικογένειας Βεηλικτσίδη, ενός πραγματικού θησαυρού για την πόλη των Σερρών, αισθάνεται μεγάλη την τιμή και το χρέος προς διαφύλαξη του γιατί είναι η μεγαλύτερη παρακαταθήκη για τις επόμενες γενιές. 
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                                />
                            <p>
                                <a href="#!" class="text-white">MDBootstrap</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">MDWordPress</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">BrandFlow</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Bootstrap Angular</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                                />
                            <p>
                                <a href="#!" class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Επικοινωνία</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                            <!-- Address -->
                            <div class="container d-inline-flex" style="padding: 0px;">
                                <img src="img/svg/house-door-fill.svg" width="20" alt="house-icon">
                                <div style="padding-left: .5rem;">Konstantinoupoleos 33, Sérres</div>                   
                            </div>
                            <!-- Email -->
                            <div class="container d-inline-flex" style="padding: 0px;">
                                <img src="img/svg/envelope-fill.svg" width="20" alt="email-icon">
                                <div style="padding-left: .5rem;">les@les.gr</div>                   
                            </div>
                            <!-- Phone -->
                            <div class="container d-inline-flex" style="padding: 0px;">
                                <img src="img/svg/telephone-fill.svg" width="20" alt="phone-icon">
                                <div style="padding-left: .5rem;">2321 023390</div>                   
                            </div>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">GeorgeMoucht</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->


    </div>
    <!-- jQuerry cdn -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
