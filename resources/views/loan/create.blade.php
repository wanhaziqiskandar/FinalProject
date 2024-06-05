@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <h1 class="mx-5">Create Loan</h1>
    </div>

    <div class="d-flex justify-content-center">
        <h5 class="mx-5 mb-3">Please enter the loan's details</h5>
    </div>

    <div class="d-flex justify-content-center">
        <div class="card pt-3 pb-3 col-md-6 mx-3">
            <div class="px-3">
                <form action="{{ route('loan.store') }}" method="POST">
                    @csrf

                    <div>
                        <label for="book_id">Book ID</label>
                        <input type="text" name="book_id" class="form-control" required>
                    </div>

                    <div>
                        <label for="member_id">Member ID</label>
                        <input type="text" name="member_id" class="form-control" required>
                    </div>

                    <div>
                        <label for="borrowingDate">Borrowing Date</label>
                        <input type="date" name="borrowingDate" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-dark mt-3">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
