@extends('layouts.app')
<link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
@section('content')

<div class="container">
    <h2 style="margin-top: 3rem;">Αρχειακό υλικό</h2>


</div>

<div class="container" style="margin-top: 1rem; background-color: red; display:flex; justify-content: center;">
    <div class="row">
        <div class="image-container" style="width: 50%">
            <img src="{{ asset('img/gallery_page/1.png') }}" style="width: 100%;" alt="">
        </div>
        <div class="image-container" style="width: 50%">
            <img src="{{ asset('img/gallery_page/2.png') }}" style="width: 100%;" alt="">
        </div>    
    </div>
</div>
@endsection

@section('pagespecificscripts')
<!-- <script src="{{ asset('js/gallery-script.js') }}"></script> -->
@endsection