@extends('layouts.app')

@include('partials.navbar')

@section('content')

    <div id="layoutSidenav">
        @include('partials.sidebar')

        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid">
                    <h2 class="mt-4 mb-3">Mis datos</h2>
                </div>
            </main>

            <div class="container-fluid">
                <section id="personal" class="user_info">
                    <h4 class="mb-3">Datos personales</h4>
                    <div class="card_user">
                        <div class="card card_user_info">
                            <p class="p_category">Nombre</p>
                            <p>{{$users->name}}</p>
                            <a href="/profile/edit/name"><i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </section>

                <section id="usuario" class="user_info mb-5">
                    <h4 class="mb-3">Datos de cuenta</h4>
                    <div class="card card_user_info mt-3">
                        <p class="p_category">Email</p>
                        <p>{{$users->email}}</p>
                        <a href="/profile/edit/email"><i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="card card_user_info mt-3">
                        <p class="p_category">Contraseña</p>
                        <p>****************</p>
                        <a href="/profile/edit/pass"><i class="fas fa-angle-right"></i></a>
                    </div>
                </section>
            </div>

            @include('partials.footer')
        </div>
    </div>

@endsection
