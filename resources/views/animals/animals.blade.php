@extends('layouts.app')
@include('partials.navbar')

@section('content')
    <div id="layoutSidenav">
        @include('partials.sidebar')

        <div id="layoutSidenav_content">

            <div class="container-fluid">
                <h2 class="mt-4 mb-3">Animales</h2>
                <div class="breadcrumb mb-4 row justify-content-between aling-items-center">
                    <div class="breadcrumb-item ">Lista de animales</div>

                    <div class="">
                        <button type="button" id="paciente_excel" class="btn btn-primary btn-sm">
                            <i class="fas fa-file-excel"></i>
                        </button>

                        <a href="/animals/add" class="btn btn-primary btn-sm" style="margin-left: 10px;">
                            <i class="fas fa-plus-square"></i> Agregar animal
                        </a>
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
                                <th>Raza</th>
                                <th>Edad</th>
                                <th>Condicion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($animals as $animal)
                                <tr>
                                    <td class="text-left">{{ $animal->id }}</td>
                                    <td class="text-left">{{ $animal->nombre }}</td>
                                    <td class="text-left">{{ $animal->raza }}</td>
                                    <td class="text-left">{{ $animal->edad }}</td>
                                    <td class="text-left">{{ $animal->condicion }}</td>
                                    <td>
                                        <!--BOTÓN ACCIONES-->
                                        <div class="btn-group dropleft">
                                            <div>
                                                <a href="/animals/edit/{{ $animal->id }}"
                                                    class="btn btn-size-right btn-info ml-1">
                                                    Editar
                                                </a>
                                            </div>

                                            <div>
                                                <a href="/animals/delete/{{ $animal->id }}"
                                                    onclick='return confirm("¿Quieres eliminar a {{ $animal->nombre }}?")'
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

            @include('partials.footer')
        </div>
    </div>

@endsection
