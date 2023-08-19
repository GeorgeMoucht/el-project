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
        
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Διαχείρηση Εικόνων</h5>
                    </div>
                    <div class="table-responsive table-container">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Όνομα αρχείου</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Τίτλος</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Υπότιτλος</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Τελευταία επεξεργασία</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Πρώτο αναίβασμα</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Διαχείρηση</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gallery_images as $gallery_image)
                                    <tr>
                                        <td class="pl-4">{{ $gallery_image->id }}</td>
                                        <td>
                                            {{ $gallery_image->image_name }}
                                        </td>
                                        <td>
                                            <span class="text-muted" style="font-size: 14px;">{{ $gallery_image->title }}</span>
                                        </td>
                                        <td>
                                            <span class="text-muted" style="font-size: 14px;">{{ $gallery_image->text }}</span>
                                        </td>
                                        <td>
                                            @if($gallery_image->created_at === null)
                                                <span class="text-muted" style="font-size: 14px;">-</span>
                                            @else
                                                <span class="text-muted" style="font-size: 14px;">{{ $gallery_image->updated_at }}</span>
                                            @endif

                                        </td>
                                        <td>
                                            @if($gallery_image->created_at === null)
                                                <span class="text-muted" style="font-size: 14px;">-</span>
                                            @else
                                                <span class="text-muted" style="font-size: 14px;">{{ $gallery_image->created_at }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" style="width: 40px; height: 40px; padding: 0px;"><img style="margin-bottom: 0px;" src="{{ asset('img/svg/pencil-fill.svg') }}" alt="edit-icon"> </button>
                                            <button type="button" class="btn btn-outline-danger btn-circle btn-lg btn-circle ml-2" style="width: 40px; height: 40px; margin-left: .5rem; padding: 0px;"><img style="margin-bottom: 0px;" src="{{ asset('img/svg/trash3-fill.svg') }}" alt="edit-icon"> </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
@endsection

@section('pagespecificscripts')
<script src="{{ asset('js/admin-dashboard.js') }}"></script>
@endsection