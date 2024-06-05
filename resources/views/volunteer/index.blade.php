@extends('layouts.app')

@section('content')
    <div class="px-5">

        @can('create-volunteers', App\Models\User::class)
            <div class="mx-auto col-md-2">
                <a href="{{ route('volunteer.create') }}" class="d-flex justify-content-center btn btn-dark">Add volunteer</a>
            </div>
        @endcan
        <h2 class="font-weight-bold">Volunteers</h2>
        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>

                    <tr>
                        @foreach ($volunteers as $volunteer)
                    <tr>
                        <td>{{ $volunteer->id }}</td>
                        <td>{{ $volunteer->name }}</td>
                        <td>{{ $volunteer->email }}</td>
                    </tr>
                    @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
