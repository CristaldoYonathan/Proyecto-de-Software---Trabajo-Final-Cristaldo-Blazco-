@extends('adminlte::page')

@section('title', 'Easy-Rent')

@section('content_header')
    <h1>Publicaciones desactivadas</h1>
@stop

@section('content')


    <div class="card">

        @if($publicaciones->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th> Descripcion</th>
                    <th> Accion </th>
                </tr>
                </thead>
                <tbody>
                @foreach($publicaciones as $publicacion)
                    <tr>
                        <td>{{$publicacion->id}}</td>
                        <td>{{ $publicacion->titulo_publicacion }}</td>
                        <td>{{ $publicacion->descripcion_publicacion }}</td>
                        <td width="10px">
                            <form action="{{route('publicaciones.borrado.destroy',$publicacion->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm ">Eliminar permanentemente</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif

    </div>



@stop

