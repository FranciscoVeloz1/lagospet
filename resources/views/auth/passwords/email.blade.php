@extends('layouts.app')

@include('partials.navigation')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card text-center login pt-4 pb-4">
                    <div class="card-body">
                        <div class="card-title mb-5">
                            <h2>{{ __('Reestablecer contraseña') }}</h2>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12 mb-3 mx-auto">
                                    <input id="email" type="email" placeholder="Email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 mx-auto">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Enviar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
