@extends('adminlte::page')

@section('title', 'Easy-Rent')

@section('content_header')
    <h1>Registros de actividad</h1>
@stop

@section('content')

    <div class="card">

        @if($auditorias->count())
        <div class="card-body">
            <table class="table table-striped ">
                <thead>
                <tr class="text-center">
{{--                    <th>ID</th>--}}
                    <th>Nombre</th>
                    <th>Id del usuario</th>
                    <th>Tipo de Usuario</th>
                    <th>Accion realizada</th>
                    <th></th>
{{--                    Agregar boton para mostrar mas info--}}
{{--                    <th>Informacion Antigua</th>--}}
{{--                    <th>Informacion Nueva</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($auditorias as $auditoria)
                    <tr class="text-center">
{{--                        <td>{{$auditoria->id}}</td>--}}
                        <td>{{$auditoria->user->name}}</td>
                        <td >{{$auditoria->user_id}}</td>
                        <td>{{$auditoria->user->roles->pluck('name')->implode(', ')}}</td>
                        <td>{{$auditoria->event }}</td>
                        <td>
{{--                            @foreach($auditoria->old_values as $old_value)--}}
{{--                                *{{$old_value}}<br>--}}
{{--                            @endforeach--}}
{{--                                {{$auditoria->old_values['titulo_publicacion']}}--}}
{{--                            {{json_encode($auditoria->old_values->titulo_publicacion)}}--}}
{{--                            {{$auditoria->old_values->descripcion_publicacion}}--}}
{{--                            {{$auditoria->old_values->precio_publicacion}}--}}
{{--                            {{$auditoria->old_values->direccion_publicacion}}--}}
{{--                            {{$auditoria->old_values->tipo_publicacion}}--}}
{{--                            {{$auditoria->old_values->estado_publicacion}}--}}
{{--                            {{$auditoria->old_values->ciudad_publicacion}}--}}
{{--                            {{$auditoria->old_values->comuna_publicacion}}--}}
{{--                            {{$auditoria->old_values->habitaciones_publicacion}}--}}
{{--                            {{$auditoria->old_values->banos_publicacion}}--}}
{{--                            {{$auditoria->old_values->superficie_publicacion}}--}}
{{--                            {{$auditoria->old_values->estacionamientos_publicacion}}--}}
{{--                            {{$auditoria->old_values->latitud_publicacion}}--}}
{{--                            {{$auditoria->old_values->longitud_publicacion}}--}}
{{--                            {{$auditoria->old_values->user_id}}--}}
                        </td>
                        <td>
{{--                            @foreach($auditoria->new_values as $new_value)--}}
{{--                                *{{$new_value}}<br>--}}
{{--                            @endforeach--}}
                        </td>
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
