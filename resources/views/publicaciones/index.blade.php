<x-app-layout>
    <x-slot name="title">Registrar Propiedad</x-slot>

    <h1>Registrar Propiedad</h1>

    <a href="{{route('publicaciones.create')}}">Publicar una nueva propiedad</a>

    @foreach($publicaciones as $publicacion)
        <div style="display: flex ; align-items: baseline ">
            <h2><a href="{{route('publicaciones.show',$publicacion->id)}}">{{$publicacion->titulo_publicacion}}</a></h2>&nbsp;
            <a href="{{route('publicaciones.edit',$publicacion)}}" style="color: #00bb00">Editar</a>&nbsp;
            <form action="{{route('publicaciones.destroy',$publicacion)}}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" style="color: red">Desactivar Publicacion</button>
            </form>
        </div>
    @endforeach
</x-app-layout>
