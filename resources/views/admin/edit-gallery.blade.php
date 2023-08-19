@extends('layouts.admin')
@section('pagespecificstyles')
<link href="{{ asset('css/admin-dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/admin-edit-gallery.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        @if(session('flashMessage'))
            <div class="alert alert-success">
                {{ session('flashMessage') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.edit-gallery.upload') }}" enctype="multipart/form-data">
                            @csrf
                            <h5 class="card-title text-uppercase mb-3">Αναίβασμα νέας εικόνας</h5>
                            <div class="input-group flex-nowrap mb-3">
                                <input type="text" name="title" class="form-control" placeholder="Ξενόγλωσσος Τίτλος" aria-label="Title" aria-describedby="addon-wrapping">
                            </div>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group flex-nowrap mb-3">
                                <input type="text" name="text" class="form-control" placeholder="Ελληνικός Τίτλος" aria-label="text" aria-describedby="addon-wrapping">
                            </div>
                            @error('text')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group mb-3">
                                <input type="file"  name="uploadedImage" class="form-control">
                            </div>
                            @error('uploadedImage')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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