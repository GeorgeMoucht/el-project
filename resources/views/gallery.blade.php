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
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/1.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Souvenir de Constantinople</div>
        <div class="mini-text">Μουσικό ταξίδι ψυχής στη Βασιλεύουσα για πιάνο και βιολί</div>
      </div>
    </div>

    <!-- Gallery Item -->
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/2.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">L’ esperence</div>
        <div class="mini-text">Το βαλς της ελπίδας και της φαντασίας (ένα μουσικό καλειδοσκόπιο αισιοδοξίας, σε σύνθεση Β. Βεηλικτσίδη)</div>
      </div>
    </div>

    <!-- Gallery Item -->
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/3.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Η Σινώπη (βαλς για μπάντα)</div>
        <div class="mini-text">(Σύνθεση Β. Βεηλικτσίδη, αφιερωμένη σε μια εμβληματική για τον Ελληνισμό πόλη)</div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/4.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Τα κάλαντα με μπάντα</div>
        <div class="mini-text">(Τραγούδια του Αγερμού, ενοποιητικά του Ελληνισμού, όπου γης........)</div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/5.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Παρασημαντική της ψαλτικής τέχνης</div>
        <div class="mini-text">(μουσική γραφή)</div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/6.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Φαντασία</div>
        <div class="mini-text">(Συναισθηματική μουσική απόδοση μελωδίας του Β. Βεηλικτσίδη, καταγεγραμμένη σε νότες)</div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/7.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Επερείσεις</div>
        <div class="mini-text">(Τετράδιο γραφής και εφαρμογής των επερείσειον)</div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/8.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Les adieux valse op148 Oscar Fetras (1907)</div>
        <div class="mini-text">(Το βαλς του αποχαιρετισμού σε χειρόγραφη μορφή από τον Β. Βεηλικτσίδη)</div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/9.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Οι στάλες της βροχής</div>
        <div class="mini-text">(Μουσική σύνθεση για πιάνο ξαι χορωδία της Ελπίδας Βεηλικτσίδη)</div>
      </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm">
      <img src="{{ asset('img/gallery_page/10.jpg') }}" alt="Avatar" class="gl-image">
      <div class="middle">
        <div class="text">Αώος</div>
        <div class="mini-text">(Εμβατήριο αφιερωμένο στη διαδρομή μιας απαράμιλλης ομορφιάς ροής του ποταμού Αώου)</div>
      </div>
    </div>

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