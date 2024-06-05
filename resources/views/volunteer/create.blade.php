@extends('layouts.app')
@section('content')
    <div class="px-3">
        <div class="d-flex justify-content-center">
            <h1 class="mx-5">Register Volunteer</h1>
        </div>

        <div class="d-flex justify-content-center">
            <h5 class="mx-5 mb-3">Please enter the volunteer's details</h5>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card pt-3 pb-3 col-md-6">
                <div class="mx-3">
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

            </div>
        </div>

    </div>
@endsection
