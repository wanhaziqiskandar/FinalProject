@extends('layouts.app')
@section('content')
    <div class="px-3">
        <h1 class="mx-5">Create Member</h1>
        <h5 class="mx-5 mb-3">Please enter the member's details</h5>

        <div class="card pt-3 pb-3">
            <form action="{{ route('member.store') }}" method="POST">
                @csrf

                <div class="mx-5">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>


                <div class="mx-5 mb-2">
                    <label for="icNum">IC Number</label>
                    <input type="text" name="icNum" class="form-control" required>
                </div>

                <div class="mx-5 mb-2">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" name="phoneNumber" class="form-control" required>
                </div>

                <div class="mx-5 mb-2">
                    <label for="address">Address</label>
                    <textarea name="address" cols="30" rows="5" class="form-control" required></textarea>
                </div>

                <div class="mx-5 mb-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-dark mx-5 mb-2">Submit</button>

            </form>
        </div>
    </div>
@endsection
