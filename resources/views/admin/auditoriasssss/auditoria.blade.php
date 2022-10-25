@extends('adminlte::page')

@section('title', 'Easy-Rent')

@section('content_header')
    <h1>Registros de actividad</h1>
@stop

@section('content')


    <div class="card">

        @if($auditorias->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Accion realizada</th>
                    <th>Usuario</th>
{{--                    <th> Accion </th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($auditorias as $auditoria)
                    <tr>
                        <td>{{$auditoria->id}}</td>
                        <td>{{ $auditoria->event }}</td>
                        <td>{{ $auditoria->user_id }}</td>
{{--                        <td width="10px">--}}
{{--                            <form action="{{route('publicaciones.borrado.destroy',$publicacion->id)}}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('delete')--}}
{{--                                <button type="submit" class="btn btn-danger btn-sm ">Eliminar permanentemente</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
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

