@extends('layouts.admin')
@section('pagespecificstyles')
<link href="{{ asset('css/admin-dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- https://www.bootdey.com/snippets/view/manage-users#html -->
    <div class="container">
        <div class="row">
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
        </div>
    </div>

@endsection

@section('pagespecificscripts')
<script src="{{ asset('js/admin-dashboard.js') }}"></script>
@endsection