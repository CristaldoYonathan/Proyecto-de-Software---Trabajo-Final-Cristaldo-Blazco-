@extends('adminlte::page')

@section('title', 'Easy Rent')

@section('content_header')
    <h1>ACÁ VA UN TITULO</h1>
@stop

@section('content')

{{--    en esa seccion se crea la visualizacion de datos de la tabla users--}}

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Listado de usuarios</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
