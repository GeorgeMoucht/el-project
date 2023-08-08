@extends('layouts.admin')
@section('pagespecificstyles')
<link href="{{ asset('css/admin-dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/admin-edit-gallery.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.edit-gallery.upload') }}" enctype="multipart/form-data">
                            @csrf
                            <h5 class="card-title text-uppercase mb-3">Αναίβασμα νέας εικόνας</h5>
                            <div class="input-group mb-3">
                                <input type="file"  name="uploadedImage" class="form-control">
                                <label class="input-group-text">Upload</label>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagespecificscripts')
<script src="{{ asset('js/admin-dashboard.js') }}"></script>
@endsection