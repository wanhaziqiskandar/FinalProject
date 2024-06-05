@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <h1 class="mx-5">Create Book</h1>
    </div>

    <div class="d-flex justify-content-center">
        <h5 class="mx-5 mb-3">Please enter the book's details</h5>
    </div>

    <div class="d-flex justify-content-center">
        <div class="card pt-3 pb-3 col-md-6 mx-3">
            <form action="{{ route('book.store') }}" method="POST">
                @csrf
                <div class="px-3">
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
                </div>




            </form>
        </div>
    </div>
@endsection
