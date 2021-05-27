@extends('layouts.app')
@include('partials.navbar')

@section('content')
    <div id="layoutSidenav">
        @include('partials.sidebar')

        <div id="layoutSidenav_content">

            <div class="container-fluid">
                <h2 class="mt-4 mb-3">Usuarios</h2>
                <div class="breadcrumb mb-4 row justify-content-between aling-items-center">
                    <div class="breadcrumb-item ">Lista de usuarios</div>

                    <div class="">
                        <button type="button" id="user_excel" class="btn btn-primary btn-sm">
                            <i class="fas fa-file-excel"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-body col-xl-10">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th class="text-left">ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td class="text-left">{{ $usuario->id }}</td>
                                    <td class="text-left">{{ $usuario->name }}</td>
                                    <td class="text-left">{{ $usuario->email }}</td>
                                    <td>
                                        <!--BOTÓN ACCIONES-->
                                        <div class="btn-group dropleft">
                                            <div>
                                                <a href="/users/edit/{{ $usuario->id }}"
                                                    class="btn btn-size-right btn-info ml-1">
                                                    Editar
                                                </a>
                                            </div>

                                            <div>
                                                <a href="/users/delete/{{ $usuario->id }}"
                                                    onclick='return confirm("¿Quieres eliminar a {{ $usuario->name }}?")'
                                                    class="btn btn-size-right btn-danger ml-1" id="btn-delete">
                                                    Eliminar
                                                </a>
                                            </div>
                                        </div>
                                        <!--END BOTÓN ACCIONES-->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <script type="module" src="{{ asset('js/excel.js') }}" defer></script>
            @include('partials.footer')
        </div>
    </div>

@endsection
