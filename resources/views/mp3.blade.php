@extends('layouts.app')
<link href="{{ asset('css/mp3.css') }}" rel="stylesheet">


@section('content')

<div class="container my-4 mb-5">
    <div class="row">
        <div class="col-md-6 mb-4" style="padding: 6rem; padding-top: 1rem; padding-bottom: 0rem; padding-right: 2rem;">
            <!-- Card 1 -->
            <div class="card">
                <!-- Card content -->
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="card-img-top" src="{{  asset('img/mp3_files/img/Α_Συναυλία_Χορωδίας_Αποφοίτων_31_03_1982.png ')  }}"
                    alt="Card image cap">
                    <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body text-center">

                    <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Συναυλία Χορωδίας Αποφοίτων 1982</a></h5>
                    <!-- <p class="mb-0">Urban Bachata remix</p> -->

                    <audio id="music" preload="true" controls>
                        <source src="{{  asset('img/mp3_files/mp3/Α_Συναυλία_Χορωδίας_Αποφοίτων_31_03_1982.mp3 ')  }}">
                    </audio>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4" style="padding: 6rem; padding-top: 1rem; padding-bottom: 0rem; padding-left: 2rem;">
            <!-- Card 2 -->
            <div class="card">
                <!-- Card content -->
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="card-img-top" src="{{  asset('img/mp3_files/img/Γιορτή_της_Μητέρας_1987.png')  }}"
                    alt="Card image cap">
                    <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body text-center">

                    <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Γιορτή της Μητέρας 1987</a></h5>
                    <!-- <p class="mb-0">Urban Bachata remix</p> -->

                    <audio id="music" preload="true" controls>
                        <source src="{{  asset('img/mp3_files/mp3/Γιορτή_της_Μητέρας_1987.mp3 ')  }}">
                    </audio>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4" style="padding: 6rem; padding-top: 1rem; padding-bottom: 0rem; padding-right: 2rem;">
            <!-- Card 3 -->
            <div class="card">
                <!-- Card content -->
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="card-img-top" src="{{  asset('img/mp3_files/img/Συναλία_Χορωδίας_1988.png')  }}"
                    alt="Card image cap">
                    <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body text-center">

                    <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Συναυλία Χορωδίας 1988</a></h5>
                    <!-- <p class="mb-0">Urban Bachata remix</p> -->

                    <audio id="music" preload="true" controls>
                        <source src="{{  asset('img/mp3_files/mp3/Συναλία_Χορωδίας_1988.mp3 ')  }}">
                    </audio>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4" style="padding: 6rem; padding-top: 1rem; padding-bottom: 0rem; padding-left: 2rem;">
            <!-- Card 4 -->
            <div class="card">
                <!-- Card content -->
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="card-img-top" src="{{  asset('img/mp3_files/img/Τιμητική_βραδιά_Ελ_Βεηλικτσίδου _1993.png')  }}"
                    alt="Card image cap">
                    <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body text-center">

                    <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Τιμιτική Βραδιά Ελ.Βεηλικτσίδου 1993</a></h5>
                    <!-- <p class="mb-0">Urban Bachata remix</p> -->

                    <audio id="music" preload="true" controls>
                        <source src="{{  asset('img/mp3_files/mp3/Τιμητική_βραδιά_Ελ_Βεηλικτσίδου _1993.mp3')  }}">
                    </audio>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




<!--                 
<div class="col-md-3 col-sm-6">
    <div class="card" style="width: 18rem;">
        <img src="{{  asset('img/mp3_files/img/Α_Συναυλία_Χορωδίας_Αποφοίτων_31_03_1982.png ')  }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div> -->
@endsection

<!-- Set JavaScript variables with Blade syntax -->
@php
    $playFillImage = asset('img/svg/play-fill.svg');
    $pauseFillImage = asset('img/svg/pause-fill.svg');
@endphp


@section('pagespecificscripts')
<script src="{{ asset('js/mp3-script.js') }}"></script>
@endsection