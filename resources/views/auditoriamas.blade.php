@extends('adminlte::page')

@section('title', 'Easy-Rent')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.auditoria')}}">volver al listado</a>
    <h1>Mas informacion sobre los registros de actividad</h1>
@stop

@section('content')

    <div class="w-full h-max flex flex-col p-1">
{{--        <div class="container">--}}
{{--            <h3 class="text-base text-zinc-800 capitalize">registro de auditoria: cambios</h3>--}}

{{--                <a class="btn btn-primary btn-sm col align-self-end" href="{{route('admin.auditoria')}}">volver al listado</a>--}}

{{--        </div>--}}
        {{-- cabecera de informacion general --}}
        <div class="mx-2 my-2 p-2 mb-4 flex flex-row items-start justify-start border border-zinc-300 border-collapse">
            {{-- informacion de operacion --}}
            <div class="mr-1 p-2">
                <h5 class="text-bold">Informacion de la operación:</h5>
                <div class="flex my-1">
                    <h6 class="text-bold mt-3">Operacion:</h6>
                    <span >{{($auditoria->event)}} de datos.</span>
                </div>
                <div class="flex my-1">
                    <h6 class="text-bold">Fecha de operación:</h6>
                    <span >
                        {{ \Carbon\Carbon::parse($auditoria->created_at)->locale('es_Ar')->format('d-m-Y H:i') }} Hrs.
                    </span>
                </div>
                <div class="flex my-1">
                    <h6 class="text-bold">Tabla afectada:</h6>
                    <span>
                        {{$auditoria->auditable_type}}
                    </span>
                </div>
            </div>
            {{-- informacion del responsable --}}
            <div class="mr-1 p-2 border-l border-zinc-300">
{{--                @if ($auditorias->user->name !== null)--}}
{{--                    <h4 class="block text-sm uppercase font-semibold tracking-wider text-zinc-600">Responsable de operación:</h4>--}}
{{--                    <div class="flex my-1">--}}
{{--                        <h4 class="block text-sm font-semibold tracking-wider text-zinc-600">apellido y nombre:</h4>--}}
{{--                        <span class="text-sm mx-1 px-1 text-zinc-800">--}}
{{--                            @if ($auditorias->user->name->last_name !== null && $auditorias->user->name->first_name !== null)--}}
{{--                                <span>{{ $responsable->last_name }}, {{ $responsable->first_name }}</span>--}}
{{--                            @else--}}
{{--                                <span class="italic">Este usuario aún no completó su perfil.</span>--}}
{{--                            @endif--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="flex my-1">--}}
{{--                        <h4 class="block text-sm font-semibold tracking-wider text-zinc-600">cuenta de acceso:</h4>--}}
{{--                        <span class="text-sm mx-1 px-1 text-zinc-800">{{ __($auditorias->user->name->email) }}</span>--}}
{{--                    </div>--}}
{{--                    <div class="flex my-1">--}}
{{--                        <h4 class="block text-sm font-semibold tracking-wider text-zinc-600">Rol:</h4>--}}
{{--                        <span class="text-sm mx-1 px-1 text-zinc-800">{{ __($auditorias->user->roles->pluck('name')->implode(', ')) }}</span>--}}
{{--                    </div>--}}
{{--                @else--}}
{{--                    <h4 class="block text-sm uppercase font-semibold tracking-wider text-zinc-600">Responsable de operación:</h4>--}}
{{--                    <div class="flex my-1">--}}
{{--                        <h4 class="block text-sm font-semibold tracking-wider text-zinc-600">apellido y nombre:</h4>--}}
{{--                        <span class="text-sm mx-1 px-1 text-zinc-800">esta operacion no tiene responsable.</span>--}}
{{--                    </div>--}}
{{--                @endif--}}
            </div>
        </div>
        {{-- estado actual del registro a la fecha --}}
        <div class="mx-2 my-1 flex flex-col items-start justify-start mt-3">
            <span class="text-bold"
                  title="esta primera tabla detalla el estado de cada atributo del registro segun la fecha de operación">Estado anterior <i class="fa-solid fa-circle-info"></i></span>
        </div>
        <table class="m-2 border border-zinc-300 border-collapse">
            <thead class="bg-zinc-300">
            <tr>
                <th class="p-1 border
                border-zinc-300 border-collapse">Atributo</th>
                <th class="p-1 border
                border-zinc-300 border-collapse">Valor</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($auditoria->old_values as $key => $value)
                <tr>
                    <td class="p-1 border
                    border-zinc-300 border-collapse">{{$key}}</td>
                    <td class="p-1 border
                    border-zinc-300 border-collapse">{{$value}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- estado anterior del registro --}}
        <div class="mx-2 flex flex-col items-start justify-start mt-3">
            <span class="text-bold"
                  title="esta segunda tabla detalla el estado de cada atributo antes de la operación, si existiere">Estado nuevo:  <i class="fa-solid fa-circle-info"></i></span>
        </div>
        <table class="m-2 border border-zinc-300 border-collapse">
            <thead class="bg-zinc-300">
            <tr>
                <th class="p-1 border
                border-zinc-300 border-collapse">atributo</th>
                <th class="p-1 border
                border-zinc-300 border-collapse">valor</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($auditoria->new_values as $key => $value)
                <tr>
                    <td class="p-1 border
                    border-zinc-300 border-collapse">{{$key}}</td>
                    <td class="p-1 border
                    border-zinc-300 border-collapse">{{$value}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop

