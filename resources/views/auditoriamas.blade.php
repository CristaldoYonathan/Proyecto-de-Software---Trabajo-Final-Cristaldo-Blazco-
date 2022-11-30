@extends('adminlte::page')

@section('title', 'Easy-Rent')

@section('content_header')
    <h1>Mas informacion sobre los registros de actividad</h1>
@stop

@section('content')

    <div class="w-full h-max flex flex-col p-1">
        <div class="mx-2 flex flex-col items-start justify-start">
            <h3 class="text-base text-zinc-800 capitalize">registro de auditoria: cambios</h3>
            <div>
                <a href="{{route('admin.auditoria')}}">volver al listado</a>
            </div>
            <h1>{{$prueba}}</h1>
        </div>
        {{-- cabecera de informacion general --}}
        <div class="mx-2 my-2 p-2 mb-4 flex flex-row items-start justify-start border border-zinc-300 border-collapse">
            {{-- informacion de operacion --}}
            <div class="mr-1 p-2">
                <h4 class="block text-sm uppercase font-semibold tracking-wider text-zinc-600">Informacion de la operación:</h4>
                <div class="flex my-1">
                    <h4 class="block text-sm font-semibold tracking-wider text-zinc-600">operacion:</h4>
{{--                    <span class="text-sm mx-1 px-1 text-zinc-800 bg-green-300">{{($auditorias->event)}} de datos.</span>--}}
                </div>
                <div class="flex my-1">
                    <h4 class="block text-sm font-semibold tracking-wider text-zinc-600">fecha de operación:</h4>
                    <span class="text-sm mx-1 px-1 text-zinc-800">
{{--                        {{ \Carbon\Carbon::parse($auditorias->created_at)->locale('es_Ar')->format('d-m-Y H:i') }} Hrs.--}}
                    </span>
                </div>
                <div class="flex my-1">
                    <h4 class="block text-sm font-semibold tracking-wider text-zinc-600">tabla afectada:</h4>
                    <span>
                        {{$auditorias->auditable_type}}
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
        <div class="mx-2 my-1 flex flex-col items-start justify-start">
            <span class="block text-sm font-semibold tracking-wider text-zinc-600"
                  title="esta primera tabla detalla el estado de cada atributo del registro segun la fecha de operación">Estado
                del registro a la fecha de cambio: <i class="fa-solid fa-circle-info"></i></span>
        </div>
        <table class="m-2 border border-zinc-300 border-collapse">
{{--            @if (count($auditorias->new_values) !== 0)--}}
{{--                @foreach ($auditorias->new_values as $attribute => $value)--}}
{{--                    <tr>--}}
{{--                        <x-tables.th-cell class="text-left w-1/4">{{ __($attribute) }}</x-tables.th-cell>--}}
{{--                        <x-tables.td-cell>{{ $value }}</x-tables.td-cell>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <tr>--}}
{{--                    <x-tables.td-cell>no existe un estado nuevo.</x-tables.td-cell>--}}
{{--                </tr>--}}
{{--            @endif--}}
        </table>
        {{-- estado anterior del registro --}}
        <div class="mx-2 flex flex-col items-start justify-start">
            <span class="block text-sm font-semibold tracking-wider text-zinc-600"
                  title="esta segunda tabla detalla el estado de cada atributo antes de la operación, si existiere">Estado
                anterior: <i class="fa-solid fa-circle-info"></i></span>
        </div>
        <table class="m-2 border border-zinc-300 border-collapse">
{{--            @if (count($auditorias->old_values) !== 0)--}}
{{--                @foreach ($auditorias->old_values as $attribute => $value)--}}
{{--                    <tr>--}}
{{--                        --}}{{-- cabecera con estilos especiales --}}
{{--                        <th--}}
{{--                            class="px-1 text-xs text-left w-1/4 border border-zinc-300 uppercase font-bold bg-zinc-400 text-white">--}}
{{--                            {{ __($attribute) }}</th>--}}
{{--                        <x-tables.td-cell>{{ $value }}</x-tables.td-cell>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <tr>--}}
{{--                    <x-tables.td-cell>no existe un estado anterior.</x-tables.td-cell>--}}
{{--                </tr>--}}
{{--            @endif--}}
        </table>
    </div>

@stop

