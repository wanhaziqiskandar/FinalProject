@extends('layouts.app')

@section('content')
    <div class="px-5">
        <h2 class="font-weight-bold">Volunteers</h2>
        @can('create-volunteers', App\Models\User::class)
            <a href="{{ route('volunteer.create') }}" class="btn btn-dark">Add volunteer</a>
        @endcan

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
