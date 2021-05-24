@extends('layouts.app')

@include('partials.navigation')

@section('content')
    <div id="signup" class="container container-auth mt-4 mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <div class="card login pt-4 pb-4">
                    <div class="card-body">
                        <div class="card-title text-center mb-5">
                            <h2>Registrate</h2>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <input id="name" placeholder="Nombre" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="email" placeholder="Email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" placeholder="Contraseña"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Contraseña"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group remember pt-3">
                                <p class="p-terms">Al hacer clic en Registrarse, acepto que he leído y aceptado los <a
                                        href="#">Términos de uso y la Política de privacidad</a></p>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block">
                                    Registrarse
                                </button>
                            </div>

                            <div class="form-group login-register pt-4">
                                <p>¿Ya tienes una cuenta?</p>
                                <a href="/login">Iniciar sesión</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
