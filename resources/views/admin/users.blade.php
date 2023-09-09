<script>
var assetBaseUrl = "{{ asset('') }}";   // Init the path of images so we can use it in our js files.
</script>
@extends('layouts.admin')
@section('pagespecificstyles')
<link href="{{ asset('css/admin-dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/edit-users-dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- https://www.bootdey.com/snippets/view/manage-users#html -->
    <div class="container">
        


    @if(session('flashMessage'))
        <div class="alert alert-success">
            {{ session('flashMessage') }}
        </div>
    @endif

    @if(session('flashMessageDanger'))
        <div class="alert alert-danger">
            {{ session('flashMessageDanger') }}
        </div>
    @endif

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card" style="max-height: 400px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase mb-0">Διαχείρηση Χρηστών</h5>
                        </div>
                        <div class="insert-btn-cnt col">
                            <button id="insertUserBtn" data-modal="newUserModal">
                                <span>
                                    <img style="margin-bottom: 0px;" src="{{ asset('img/svg/plus-lg.svg') }}" alt="plus-icon">
                                </span>
                                Εισαγωγή νέος χρήστη
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-container">
                    <table class="table no-wrap user-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Όνομα</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Κωδικός</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Διαχείρηση</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <!-- Change the color of the row if the user is admin -->
                                @if($user->admin == 1)
                                    <tr class="gallery-it">
                                        <td class="pl-4" style="background-color: rgba(252, 249, 55, 0.403)">
                                            <span class="text-muted" style="font-size: 14px;">{{ $user->id }}</span>
                                        </td>
                                        <td  style="background-color: rgba(252, 249, 55, 0.403)">
                                            <span class="text-muted" style="font-size: 14px;">{{ $user->name }}</span>
                                        </td>
                                        <td  style="background-color: rgba(252, 249, 55, 0.403)">
                                            <span class="text-muted" style="font-size: 14px;">{{ $user->email }}</span>
                                        </td>
                                        <td  style="background-color: rgba(252, 249, 55, 0.403)">
                                            <span class="text-muted" style="font-size: 14px;">••••••••••••••••</span>
                                        </td>
                                        <td  style="background-color: rgba(252, 249, 55, 0.403)">
                                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2 edit-btn" data-modal-edit="editModal{{ $user->id }}" style="width: 40px; height: 40px; padding: 0px;"><img style="margin-bottom: 0px;" src="{{ asset('img/svg/pencil-fill.svg') }}" alt="edit-icon"> </button>
                                        </td>
                                    </tr>
                                @else
                                    <tr class="gallery-it">
                                        <td class="pl-4">
                                            <span class="text-muted" style="font-size: 14px;">{{ $user->id }}</span>
                                        </td>
                                        <td>
                                            <span class="text-muted" style="font-size: 14px;">{{ $user->name }}</span>
                                        </td>
                                        <td>
                                            <span class="text-muted" style="font-size: 14px;">{{ $user->email }}</span>
                                        </td>
                                        <td>
                                            <span class="text-muted" style="font-size: 14px;">••••••••••••••••</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2 edit-btn" data-modal-edit="editModal{{ $user->id }}" style="width: 40px; height: 40px; padding: 0px;"><img style="margin-bottom: 0px;" src="{{ asset('img/svg/pencil-fill.svg') }}" alt="edit-icon"> </button>
                                            <button type="button" class="btn btn-outline-danger btn-circle btn-lg btn-circle ml-2 open-modl"  data-modal="modal{{ $user->id }}" style="width: 40px; height: 40px; margin-left: .5rem; padding: 0px;"><img style="margin-bottom: 0px;" src="{{ asset('img/svg/trash3-fill.svg') }}" alt="delete-icon"> </button>
                                        </td>
                                    </tr>
                                @endif  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Insert new user modal -->
        <div class="modal" tabindex="-1" id="newUserModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Εισαγωγή νέου χρήστη</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="closeInsertUserModal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('admin.users.insert') }}"  enctype="multipart/form-data" id="isertUserForm">
                           @csrf
                            <div class="input-group flex-nowrap mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Όνομα Χρήστη" aria-label="Name" aria-describedby="addon-wrapping">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group flex-nowrap mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Ηλεκτρονική διεύθυνση" aria-label="Email" aria-describedby="addon-wrapping">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-group flex-nowrap mb-3">
                                <input type="password" id="passwordField" name="password" class="form-control" placeholder="Κωδικός πρόσβασης" aria-label="Password" aria-describedby="addon-wrapping">
                                <div class="show-password" id="passwordFieldToggle">
                                    <img src="{{ asset('img/svg/eye-fill.svg') }}" alt="" id="passwordSvg">
                                </div>
                                <div class="generate-password" id="generatePasswordBtn">
                                    <img src="{{ asset('img/svg/arrow-counterclockwise.svg') }}" alt="">
                                </div>
                            </div>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-modal-btn" data-bs-dismiss="closeInsertUserModalDown">Πίσω</button>
                            <button class="btn btn-primary" type="submit">Αναίβασμα</button>
                        </form> 
                    </div>
                   
                </div>

                </div>
            </div>
        </div>

        <!-- Delete buttons modal -->

        @foreach ($users as $user)
            <div class="modal" tabindex="-1" id="modal{{ $user->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Διαγραφή Χρήστη</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal{{ $user->id }}" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Είστε σίγουρος πως θέλετε να διαγράψετε οριστικά την εικόνα με όνομα <b style="text-decoration: underline;">{{ $user->name }}</b> </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-modal-btn" data-bs-dismiss="modal{{ $user->id }}">Πίσω</button>
                            <form method="post" action="{{ route('admin.users.delete', ['id' => $user->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Διαγραφή</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('pagespecificscripts')
<script src="{{ asset('js/admin-dashboard.js') }}"></script>
<script src="{{ asset('js/edit-users-dashboard.js') }}"></script>
@endsection