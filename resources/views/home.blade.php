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
                    <div class="card-header" style="background-color: #E3E1D9">Volunteers</div>
                    <div class="card-body" style="background-color: #F2EFE5">
                        <a href="{{ route('volunteer.index') }}" class="btn btn-dark">Go to Volunteers page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #E3E1D9">Supervisors</div>
                    <div class="card-body" style="background-color: #F2EFE5">
                        <a href="{{ route('supervisor.index') }}" class="btn btn-dark">Go to Supervisor page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #E3E1D9">Members</div>
                    <div class="card-body" style="background-color: #F2EFE5">
                        <a href="{{ route('member.index') }}" class="btn btn-dark">Go to Member page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #E3E1D9">Books</div>
                    <div class="card-body" style="background-color: #F2EFE5">
                        <a href="{{ route('book.index') }}" class="btn btn-dark">Go to Book page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #E3E1D9">Loans</div>
                    <div class="card-body" style="background-color: #F2EFE5">
                        <a href="{{ route('loan.index') }}" class="btn btn-dark">Go to Loan page</a>
                    </div>
                </div>
                {{-- End card --}}

            </div>
        </div>
    </div>
@endsection
