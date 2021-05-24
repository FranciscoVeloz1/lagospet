@extends('layouts.app')

@include('partials.navigation')

@section('content')
    <div id="login" class="container mt-4 mb-5">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 col-12 mx-auto">
                <div class="card text-center login pt-5 pb-5">
                    <div class="card-body">
                        <div class="card-title mb-5">
                            <h2>Iniciar sesión</h2>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group pt-3">
                                <button class="btn btn-primary btn-block pt-2 pb-2">
                                    Iniciar sesión
                                </button>
                            </div>

                            <div class="form-group remember pt-3">
                                <div>
                                    <input type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="recuerdame">Recuérdame</label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Olvidé mi contraseña') }}
                                    </a>
                                @endif
                            </div>

                            <div class="form-group login-register pt-4">
                                <p>¿No tienes ninguna cuenta?</p>
                                <a href="/register">Registrate</a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
