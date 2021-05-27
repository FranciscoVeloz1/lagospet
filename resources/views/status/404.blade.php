@extends('layouts.app')
@include('partials.navbar')

@section('content')
    <div id="layoutSidenav">
        @include('partials.sidebar')

        <div id="layoutSidenav_content">

            <section class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <h1 class="display-1 pt-5 font-weight-bold">404</h1>
                        <h1 class="display-4 pt-1 pb-3">Pagina no encontrada</h1>
                        <h3 class="font-weight-light text-secondary">
                            La pagina que estas buscando no existe
                        </h3>
                        <a href="/profile" class="btn btn-info mt-3 pt-3 pb-3 pr-4 pl-4">Regresar</a>
                    </div>
                </div>
            </section>

            @include('partials.footer')
        </div>
    </div>

@endsection
