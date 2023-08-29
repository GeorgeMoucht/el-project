@extends('layouts.admin')
@section('pagespecificstyles')
<link href="{{ asset('css/admin-dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- https://www.bootdey.com/snippets/view/manage-users#html -->
    <div class="container">
        
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card"  style="height: 400px;">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0">Διαχείρηση Χρηστών</h5>
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
                            @endforeach
                        </tbody>
                    </table>
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
                            <form method="post" action="{{ route('admin.edit-gallery.delete', ['id' => $user->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Διαγραφή</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-0">Διαχείρηση Χρηστών</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Όνομα</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Κωδικός</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Είδος</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Εγγραφή</th>
                                    <th scope="col" class="border-0 text-uppercase font-medium">Διαχείρηση</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="pl-4">{{ $user->id }}</td>
                                        <td>
                                            <h5 class="font-medium mb-0">{{ $user->name }}</h5>
                                        </td>
                                        <td>
                                            <span class="text-muted">{{ $user->email }}</span>
                                        </td>
                                        <td>
                                            <span class="text-muted">Reset Password</span>
                                        </td>
                                        <td>
                                            @if($user->admin === 1)
                                                <span class="text-muted">Διαχειριστής</span>
                                            @elseif ($user->admin === 0)
                                                <span class="text-muted">Χρήστης</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->created_at === null)
                                                <span class="text-muted">-</span>
                                            @else
                                                <span class="text-muted">{{ $user->created_at }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" style="margin-left: .5rem;"><i class="fa fa-trash"></i> </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

@endsection

@section('pagespecificscripts')
<script src="{{ asset('js/admin-dashboard.js') }}"></script>
<script src="{{ asset('js/edit-users-dashboard.js') }}"></script>
@endsection