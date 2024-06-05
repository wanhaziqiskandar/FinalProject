@extends('layouts.app')

@section('content')
    <h1>Book: {{ $book->title }}</h1>

    <div class="mx-5">
        <h2 class="font-weight-bold mt-3">Active Loan</h2>

        <div class="card">
            <div class="card-body">

                <table class="table table-striped">
                    <tr>
                        <th>Loan ID</th>
                        <th>Book ID</th>
                        <th>Book title</th>
                        <th>Member IC</th>
                        <th>Member name</th>
                        <th>Borrow</th>
                        <th colspan="2">Return</th>
                    </tr>
                    @foreach ($loans as $loan)
                        <tr>
                            <td>{{ $loan->id }}</td>
                            <td>{{ $loan->book->id }}</td>
                            <td>{{ $loan->book->title }}</td>
                            <td>{{ $loan->member->icNum }}</td>
                            <td>{{ $loan->member->name }}</td>
                            <td>{{ $loan->borrowingDate }}</td>

                            <form action="{{ route('loan.update', $loan) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <td>
                                    <input type="date" name="returnDate">
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-primary">Return</button>
                                </td>

                            </form>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>


        <h2 class="font-weight-bold mb-3">Loan Records</h2>

        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Loan ID</th>
                        <th>Book ID</th>
                        <th>Book title</th>
                        <th>Member IC</th>
                        <th>Member name</th>
                        <th>Borrow</th>
                        <th>Return</th>
                    </tr>
                    @foreach ($records as $loan)
                        <tr>
                            <td>{{ $loan->id }}</td>
                            <td>{{ $loan->book->id }}</td>
                            <td>{{ $loan->book->title }}</td>
                            <td>{{ $loan->member->icNum }}</td>
                            <td>{{ $loan->member->name }}</td>
                            <td>{{ $loan->borrowingDate }}</td>
                            <td>{{ $loan->returnDate }}</td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection
