@extends('layouts.app')
@section('pagespecificstyles')
  <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="container" style="margin-bottom: 2rem;">
    <h2 style="margin-top: 3rem;">Αρχειακό υλικό</h2>
</div>

  <!-- Gallery section -->
<div class="container">
  <div class="row gallery-b-cnt" id="modalBtn1">
    <!-- Gallery Items -->
    @foreach ($data as $index => $item)
      <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-itm" data-modal="modal{{ $index }}">
        <img src="{{ asset('storage/images/gl/' . $item->image_name) }}" alt="{{ $item->title }}" class="gl-image">
        <div class="middle">
          <div class="text">{{ $item->title }}</div>
          <div class="mini-text">{{ $item->text }}</div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<!-- Gallery Modals -->
@foreach ($data as $index => $item)
<div class="modal-cnt" id="modal{{ $index }}">
  <div class="modal-content">
  <span class="close" style="font-size: 45px; color: black; font-weight: lighter;">&times;</span>
    <img src="{{ asset('storage/images/gl/' . $item->image_name) }}" alt="{{ $item->title }}">
  </div>
</div>
@endforeach


@endsection

@section('pagespecificscripts')
<!-- <script src="{{ asset('js/gallery-script.js') }}"></script> -->
<script src="{{ asset('js/gallery-archieve-script.js') }}"></script>
@endsection