@extends('layouts.app')
@include('partials.navbar')

@section('content')
    <div id="layoutSidenav">
        @include('partials.sidebar')

        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid">
                    <h2 class="mt-4 mb-3">Administración Adopta Lagos</h2>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>
            </main>

            @include('partials.footer')
        </div>
    </div>

@endsection
