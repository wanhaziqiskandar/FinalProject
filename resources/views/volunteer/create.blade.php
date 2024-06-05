@extends('layouts.app')
@section('content')
    <div class="m-3">
        <form action="{{ route('volunteer.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-dark mt-3">Submit</button>

        </form>
    </div>
@endsection
