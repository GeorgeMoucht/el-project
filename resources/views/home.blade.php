@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="homepage-background">
        <div class="filter"></div>
    </div>
    <div class="text-wrapper container" style="">
        <h1 id="heading-animation" class="homepage-heading animate__animated animate__backInLeft">Μουσικό Αρχείο της οικογένειας Βεηλικτσίδη</h1>
        <div id="homepageParAnimation" class="container p-container">
            <p class="homepage-paragraph">
                Το Λύκειον των Ελληνίδων Σερρών κληρονόμος του σπάνιου, σημαντικοτάτου και μεγάλου Μουσικού Αρχείου της οικογένειας Βεηλικτσίδη, ενός πραγματικού θησαυρού για την πόλη των Σερρών, αισθάνεται μεγάλη την τιμή και το χρέος προς διαφύλαξη του γιατί είναι η μεγαλύτερη παρακαταθήκη για τις επόμενες γενιές. 
            </p>

            <p class="homepage-paragraph">
                Ο Βασίλειος Βεηλεκτσίδης και η κόρη του Ελπίδα, σεμνοί, αθόρυβοι δάσκαλοι της μουσικής, καλλιέργησαν, μετέδωσαν, μεταλαμπάδευσαν σ’ όλους μας την μουσική τους παιδεία, το ήθος τους και την αγάπη τους για τη νέα τους πατρίδα, την πολυαγαπημένη τους πόλη «τα Σέρρας» όπως επαναλάμβαναν συνεχώς. 
            </p>
            <button type="button" class="white-btn btn btn-outline-secondary btn-lg">
                <a href="https://www.les.gr/" target="_blank"> Περισσότερα</a>
            </button>
        </div>
    </div>
    <!-- <div class="bg-image"></div> -->
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
