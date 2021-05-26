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
                                <h3>Añadir animal</h3>
                            </div>
                            <div class="card-body">
                                <form action="/animals/add" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="type" name="nombre" placeholder="Nombre" class="form-control" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="raza" placeholder="Raza" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="type" name="edad" placeholder="Edad" class="form-control" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input type="type" name="condicion" placeholder="Condición" class="form-control" autofocus>
                                    </div>


                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block">
                                            Guardar
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
