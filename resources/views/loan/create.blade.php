@extends('layouts.app')
@section('content')
    

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
@endsection
