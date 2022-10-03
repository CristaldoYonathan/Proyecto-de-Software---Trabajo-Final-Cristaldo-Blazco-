<x-app-layout>
    <x-slot name="title">Registrar Propiedad</x-slot>

    <h1>Publicaciones desactivadas</h1>

    @foreach($publicaciones as $publicacion)
        <div style="display: flex ; align-items: baseline ">
            <h2>{{$publicacion->titulo_publicacion}}</h2>&nbsp;
            <form action="{{route('publicaciones.borrado.destroy',$publicacion->id)}}" method="POST">
                @csrf
                <button type="submit" style="color: rgba(161,58,49,0.76)">Eliminar Permanentemente</button>
            </form>
            <form action="{{route('publicaciones.borrado.restaurar',$publicacion->id)}}" method="POST">
                @csrf
                <button type="submit" style="color: rgb(64,161,49)">Restaurar Publicacion</button>
            </form>
        </div>

    @endforeach
</x-app-layout>
