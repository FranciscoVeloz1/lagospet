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
                                <h3>Editar email</h3>
                            </div>
                            <div class="card-body">
                                <form action="/profile/edit/email" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{ $users->email }}" placeholder="Nombre"
                                            class="form-control" required autofocus>
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
