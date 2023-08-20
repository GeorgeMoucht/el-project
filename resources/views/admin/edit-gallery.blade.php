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
                                    <th scope="col" class="border-0 text-uppercase font-medium">Εικόνα</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Τίτλος</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Υπότιτλος</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Τελευταία επεξεργασία</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Πρώτο αναίβασμα</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Διαχείρηση</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gallery_images as $gallery_image)
                                    <tr class="gallery-it">
                                        <td class="pl-4">{{ $gallery_image->id }}</td>
                                        <td>
                                            {{ $gallery_image->image_name }}
                                        </td>
                                        <td>
                                            <span class="text-muted" style="font-size: 14px;">{{ $gallery_image->title }}</span>
                                        </td>
                                        <td>
                                            <img width="250" src="{{ asset('storage/images/gl/' . $gallery_image->image_name) }}" class="img-thumbnail" alt="">
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
                                            <button type="button" class="btn btn-outline-danger btn-circle btn-lg btn-circle ml-2 open-modl"  data-modal="modal{{ $gallery_image->id }}" style="width: 40px; height: 40px; margin-left: .5rem; padding: 0px;"><img style="margin-bottom: 0px;" src="{{ asset('img/svg/trash3-fill.svg') }}" alt="edit-icon"> </button>
                                        </td>
                                        <td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        @foreach ($gallery_images as $gallery_image)
            <div class="modal" tabindex="-1" id="modal{{ $gallery_image->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Διαγραφή Εικόνας</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal{{ $gallery_image->id }}" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Είστε σίγουρος πως θέλετε να διαγράψετε οριστικά την εικόνα με όνομα <b style="text-decoration: underline;">{{ $gallery_image->image_name }}</b> </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-modal-btn" data-bs-dismiss="modal{{ $gallery_image->id }}">Πίσω</button>
                            <form method="post" action="{{ route('admin.edit-gallery.delete', ['id' => $gallery_image->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Διαγραφή</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- Mini image modal -->
        <div class="modal-cnt" id="imageModal">
            <div class="modal-content">
                <span class="close" style="font-size: 45px; color: black; font-weight: lighter;">&times;</span>
                <img id="miniModalImage" src="" alt="">
            </div>
        </div>

    </div>

    
@endsection

@section('pagespecificscripts')
<script src="{{ asset('js/admin-dashboard.js') }}"></script>
<script src="{{ asset('js/edit-gallery.js') }}"></script>
@endsection

<script>
// $(document).ready(function() {
//     $('.close-modal-btn').on('click', function() {
//         var galleryId = $(this).data('gallery-id');
//         // Send an AJAX request to delete the row
//         $.ajax({
//             url: '/admin/delete-gallery/' + galleryId,
//             type: 'DELETE',
//             success: function(response) {
//                 // Handle success response if needed
//             },
//             error: function (xhr) {
//                 // Handle error response if needed
//             }
//         });
//     });
// });
</script>