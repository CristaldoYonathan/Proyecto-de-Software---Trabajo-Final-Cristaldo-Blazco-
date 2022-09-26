<x-layouts.app titulo="Registrar Propiedad">
    <h1>Registrar Propiedad</h1>

    <a href="{{route('publicaciones.create')}}">Publicar una nueva propiedad</a>

    @foreach($publicaciones as $publicacion)
        <div style="display: flex ; align-items: baseline ">
            <h2><a href="{{route('publicaciones.show',$publicacion->id)}}">{{$publicacion->titulo_publicacion_propiedad}}</a></h2>&nbsp;
            <a href="{{route('publicaciones.edit',$publicacion)}}">Editar</a>&nbsp;
            <form action="{{route('publicaciones.destroy',$publicacion)}}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>

    @endforeach
</x-layouts.app>
