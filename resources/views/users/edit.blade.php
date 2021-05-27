@extends('layouts.app')
@include('partials.navbar')

@section('content')
    <div id="layoutSidenav">
        @include('partials.sidebar')

        <div id="layoutSidenav_content">

            <div class="menu_info container mt-5">
                <div class="row">
                    <div class="col-md-6 col-xl-4 mx-auto">
                        <div class="card text-center">
                            <div class="card-header">
                                <h3>Editar usuario</h3>
                            </div>
                            <div class="card-body">
                                <form action="/users/edit/{{ $usuario->id }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="type" name="name" value="{{ $usuario->name }}"
                                            placeholder="Nombre" class="form-control" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="email" value="{{ $usuario->email }}" placeholder="Email"
                                            class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block">
                                            Editar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('partials.footer')
        </div>
    </div>

@endsection
