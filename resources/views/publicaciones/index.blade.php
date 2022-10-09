<x-app-layout>

    @vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css','resources/css/multistep.css', 'resources/js/multistep.js', 'resources/css/nucleo-svg.css'])

    <x-slot name="title">Registrar Propiedad</x-slot>

{{--    <h1>Registrar Propiedad</h1>--}}

{{--    <a style="color: #7e55c7"  href="{{route('publicaciones.create')}}">Publicar una nueva propiedad</a>--}}

{{--    @foreach($publicaciones as $publicacion)--}}
{{--        <div style="display: flex ; align-items: baseline ">--}}
{{--            <h2><a href="{{route('publicaciones.show',$publicacion->id)}}">{{$publicacion->titulo_publicacion}}</a></h2>&nbsp;--}}
{{--            <a href="{{route('publicaciones.edit',$publicacion)}}" style="color: #00bb00">Editar</a>&nbsp;--}}
{{--            <form action="{{route('publicaciones.destroy',$publicacion)}}" method="POST">--}}
{{--                @csrf @method('DELETE')--}}
{{--                <button type="submit" style="color: red">Desactivar Publicacion</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    @endforeach--}}
    <body>

    <div class="page-header align-items-start min-vh-100">
        <span class="mask bg-gradient-dark opacity-5"></span>

        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="text-white">Consulte sus propiedades</h1>
                </div>
            </div>
            <div class="container mt-sm-5 mt-3">
                <div class="card h-100 align-content-xxl-center">
                    <div class="card">
                        <div class="row text-center py-2 mt-3">
                            <div class="col-4 mx-auto">
                                <div class="input-group input-group-dynamic mb-4">
                                    <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input class="form-control" placeholder="Buscar" type="text" >
                                </div>
                                <div>
                                    <a href="{{route('publicaciones.create')}}" class="btn btn-primary">Publicar una nueva propiedad</a>
                                </div>
                            </div>
                        </div>
                        @foreach($publicaciones as $publicacion)
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">Publicacion</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-15 ps-2">Tipo</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">Estado</th>
{{--                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">Visualizaciones</th>--}}
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-15">Fecha de publicacion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr style="height:100px">
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="img/rents/7.webp" class="avatar avatar-xl me-3" alt="logo">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h3 class="mb-0"><a href="{{route('publicaciones.show',$publicacion->id)}}">{{$publicacion->titulo_publicacion}}</a></h3>
                                                    <p class="text-xs text-secondary mb-0">$.{{$publicacion->precio_publicacion}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold mb-0">Ver como traer el tipo de propiedad
                                                {{--{{$tipoPropiedad->nombre_tipo_propiedad}}--}}</p>
                                            <p class="text-xs text-secondary mb-0">Alquiler(Ver que es esto ?)</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="badge bg-gradient-success">{{$publicacion->estado_publicacion}}</span>
                                        </td>
{{--                                        <td class="align-middle text-center">--}}
{{--                                            <span class="text-secondary text-xs font-weight-normal">420(Ver si implementar)</span>--}}
{{--                                        </td>--}}
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-normal">{{$publicacion->created_at->format('d-m-Y')}}</span>
                                        </td>
                                        <td class="align-middle">
{{--                                            <a href="{{route('publicaciones.edit',$publicacion)}}:" class="fas fa-edit" data-toggle="tooltip" data-original-title="Editar"></a>--}}
                                            <a href="{{route('publicaciones.edit',$publicacion)}}" style="color: #00bb00">Editar</a>
                                        </td>
                                        <td class="align-middle">
                                            <form action="{{route('publicaciones.destroy',$publicacion)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" style="color: red">Desactivar Publicacion</button>
                                            </form>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</x-app-layout>
