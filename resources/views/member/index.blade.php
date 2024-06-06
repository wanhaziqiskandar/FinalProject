@extends('layouts.app')
@section('content')
    <div class="mx-5">
        <div class="mx-auto col-md-2">
            <a href="{{ route('member.create') }}" class="d-flex justify-content-center btn btn-dark">Register member</a>
        </div>
        <h2 class="font-weight-bold mb-3">Member</h2>
        <div>
            <div class="card card-body mt-3">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Ic Number</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->icNum }}</td>
                            <td>{{ $member->phoneNumber }}</td>
                            <td>{{ $member->address }}</td>
                            <td>{{ $member->email }}</td>
                            <td> <a href="{{ route('member.show', $member) }}" class="btn btn-dark">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{$members->links()}}
            </div>
        </div>

    </div>
@endsection
