@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- start card --}}
                {{-- <div class="card mb-3">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div> --}}
                {{-- End card --}}


                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header">Volunteers</div>
                    <div class="card-body">
                        <a href="{{ route('volunteer.index') }}" class="btn btn-dark">Go to Volunteers page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header">Supervisors</div>
                    <div class="card-body">
                        <a href="{{ route('supervisor.index') }}" class="btn btn-dark">Go to Supervisor page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header">Members</div>
                    <div class="card-body">
                        <a href="{{ route('member.index') }}" class="btn btn-dark">Go to Member page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header">Books</div>
                    <div class="card-body">
                        <a href="{{ route('book.index') }}" class="btn btn-dark">Go to Book page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header">Loans</div>
                    <div class="card-body">
                        <a href="{{ route('loan.index') }}" class="btn btn-dark">Go to Loan page</a>
                    </div>
                </div>
                {{-- End card --}}

            </div>
        </div>
    </div>
@endsection
