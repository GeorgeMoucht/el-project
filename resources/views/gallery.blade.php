@extends('layouts.app')
<link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
@section('content')

<div class="container" style="margin-bottom: 2rem;">
    <h2 style="margin-top: 3rem;">Αρχειακό υλικό</h2>
</div>

<!-- Gallery section -->
<div class="container">

  <div class="row gallery-b-cnt" id="modalBtn1">
    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/1.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>

    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/2.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>

    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/3.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>
  </div>

  <div class="row gallery-b-cnt">
    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/4.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>

    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/5.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>


    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/6.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>
  </div>

  <div class="row gallery-b-cnt">
    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/7.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>

    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/8.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>


    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/9.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>
  </div>

  <div class="row gallery-b-cnt">
    <!-- Gallery Item -->
    <div class="gallery-itm">
      <img src="{{ asset('img/gallery_page/10.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">John Doe</div>
      </div>
    </div>
    <!-- Gallery Item -->
    <div class="gallery-itm"></div>
    <!-- Gallery Item -->
    <div class="gallery-itm"></div>
  </div>

</div>

<div class="modal-cnt" id="modal1">
  <div class="modal-content">
    <span class="close">$times;</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cupiditate sed possimus porro! Perferendis dolore doloribus modi repellat minima laborum, aliquid nisi alias? Molestias velit cupiditate aliquid inventore repellendus placeat?</p>
  </div>
</div>


@endsection

@section('pagespecificscripts')
<!-- <script src="{{ asset('js/gallery-script.js') }}"></script> -->
<script src="{{ asset('js/gallery-archieve-script.js') }}"></script>
@endsection