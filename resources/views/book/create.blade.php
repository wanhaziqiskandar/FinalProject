@extends('layouts.app')
@section('content')
    <div class="m-3">
        <form action="{{ route('book.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mt-3">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" required>
            </div>

            <div class="mt-3">
                <label for="publisher">Publisher</label>
                <input type="text" name="publisher" class="form-control" required>
            </div>

            <div class="mt-3">
                <label for="year">Year</label>
                <input type="text" name="year" class="form-control" required>
            </div>

            <div class="mt-3">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-dark mt-3">Submit</button>

        </form>
    </div>
@endsection
