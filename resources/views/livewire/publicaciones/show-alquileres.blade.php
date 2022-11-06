<div class="container-fluid pt-5 mt-5">
    @vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css','resources/css/multistep.css', 'resources/css/nucleo-svg.css','resources/js/material-kit.js'])
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <div class="row px-xl-5">

{{--         Sidebar de filtros de busqueda --}}
        <div class="col-lg-3 col-md-12 p-3">
            <div class="card p-3">
                <div class="card-header">
                    <h4 class="card-title">Puede filtrar por:</h4>
                </div>
{{--                 Precio start --}}
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4"><i class="fas fa-dollar-sign text-primary me-3"></i>Precio</h5>
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-outline bg-light rounded">
                                    <label class="form-label">Desde</label>
                                    <input wire:model="precioDesde" type="number" class="form-control" id="precioDesde" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline bg-light rounded">
                                    <label class="form-label">Hasta</label>
                                    <input wire:model="precioHasta" type="number" class="form-control" id="precioHasta" >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
{{--                 Precio end --}}

{{--                Dimensiones start--}}
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4"><i class="fas fa-ruler-combined text-primary me-3"></i>Dimensiones</h5>
                    <form>
                        <div class="form-group mb-4">
                            <label>Desde:</label>
                            <input type="range" value="1" min="0" max="100000" step="500" oninput="this.nextElementSibling.value = this.value">
                            <output>1</output> mts2
                        </div>
                        <div class="form-group mb-4">
                            <label>Hasta:</label>
                            <input type="range" value="15000" min="0" max="100000" step="500" oninput="this.nextElementSibling.value = this.value">
                            <output>15000</output> mts2
                        </div>
                    </form>
                </div>
{{--                 Dimensiones end--}}

{{--                Tipo de propiedad start --}}
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4"><i class="fas fa-home text-primary me-3"></i>Tipo de propiedad</h5>
                    <form>
                        @foreach($tipos as $tipo)
                            <div class="form-check">
                                <input wire:model="tipoPropiedad" class="form-check-input focus" type="checkbox"   value="{{$tipo->id}}" >
                                <label class="form-check-label" >
                                    {{$tipo->nombre_tipo_propiedad}} - ({{count($publicaciones->where('id_tipo_propiedad', $tipo->id))}})
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>

{{--                Tipo de propiedad end --}}

{{--                Ubicacion start --}}
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4"><i class="fas fa-map-marker-alt text-primary me-3"></i>Ubicación</h5>
                    <form>
                        <div class="form-group">
                            <label class="form-label">Provincia</label>

                            <select wire:model="filtroProvincia" class="form-select" aria-label="Default select example" >
                                <option selected="selected" name="provincia" value="0">Seleccione la provincia</option>
                                @foreach($provincias as $provincia)
                                    <option value="{{$provincia->id}}"
                                            @if(old('provincia') == $provincia->id)
                                                selected
                                        @endif
                                    >{{$provincia->nombre_provincia}} - ({{count($publicaciones->where('id_provincia', $provincia->id))}}) </option>
                                @endforeach
                            </select>

                        </div>
                    </form>
                </div>


                @foreach($comodidades as $comodidad)
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4"><i class=" text-primary me-3
{{--                    cambiar el icono dependiendo de cada nombre_comodidad--}}
                    @if($comodidad->nombre_comodidad == 'Accesibilidad')
                        fas fa-wheelchair
                    @elseif($comodidad->nombre_comodidad == 'Servicios')
                        fas fa-concierge-bell
                    @elseif($comodidad->nombre_comodidad == 'Caracteristicas')
                        fas fa-tools
                    @elseif($comodidad->nombre_comodidad == 'Ambientes')
                        fas fa-door-open
                    @endif
                    "></i>{{$comodidad->nombre_comodidad}}</h5>
                    @foreach($caracteristicasComodidades->where('id_comodidad',$comodidad->id) as $caracteristica)
                    <form>
                        <div class="form-check">
                            <input wire:model="filtroComodidades" class="form-check-input" type="checkbox" value="{{$caracteristica->id}}" id="{{$caracteristica->id}}" id="flexCheckDefault3112">
                            <label class="form-check-label" for="flexCheckDefault3112">
                                {{$caracteristica->nombre_caracteristica_comodidad}} {{--- ({{count($publicaciones->where('id_caracteristica_comodidad', $caracteristica->id))}})--}}
                            </label>
                        </div>
                    </form>
                    @endforeach
                </div>
                @endforeach

{{--                 Pet friendly start --}}
{{--                <div class="border-bottom mb-4 pb-4">--}}
{{--                    <h5 class="font-weight-semi-bold mb-4"><i class="fas fa-paw text-primary me-3"></i>Pet friendly</h5>--}}
{{--                    <form>--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault35">--}}
{{--                            <label class="form-check-label" for="flexCheckDefault35">--}}
{{--                                Si--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault789">--}}
{{--                            <label class="form-check-label" for="flexCheckDefault789">--}}
{{--                                No--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                 Pet friendly end --}}

{{--                 Cochera start --}}
{{--                <div class="border-bottom mb-4 pb-4">--}}
{{--                    <h5 class="font-weight-semi-bold mb-4"><i class="fas fa-car text-primary me-3"></i>Cochera</h5>--}}
{{--                    <form>--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault089">--}}
{{--                            <label class="form-check-label" for="flexCheckDefault089">--}}
{{--                                Si--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault345">--}}
{{--                            <label class="form-check-label" for="flexCheckDefault345">--}}
{{--                                No--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                 Cochera end --}}

            </div>
        </div>
{{--         Shop Sidebar End --}}

{{--        @foreach($tipooos as $tipoo)--}}
{{--            <h3>{{$tipoo}}</h3>--}}
{{--        @endforeach--}}
{{--         Shop Product Start --}}
        <div class="col-lg-9 col-md-12 p-3">
            <div class="card p-3">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">

                            <div class="input-group input-group-dynamic mb-4">
                                <span class="input-group-text"><i class="fas fa-search text-primary mt-1" aria-hidden="true"></i></span>
                                <input wire:model="search" class="form-control" placeholder="Buscar" type="text" id="buscador" >
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <label class="mb-0 me-2">Ordenar por:</label>
                                    <select wire:model="ordenar" class="form-select form-select-sm">
                                        <option selected value="desc">Recomendación</option>
                                        <option value="desc">Mayor precio</option>
                                        <option value="asc">Menor precio</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                      Publicaciones start --}}
                    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                        @foreach($publicaciones as $publicacion)
                            <div class="col">
                                <div class="card" style="--bs-btn-hover-bg:100">
                                    <a href="{{route('publicaciones.show',$publicacion->id)}}" target="_blank" class="position-relative overflow-hidden">
                                        <div class="ratio ratio-1x1">
                                            <div id="carousel-12" class="carousel slide" data-bs-ride="false">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active ratio ratio-1x1"><img class="w-100 d-block card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="
                                                    @foreach($imagenes as $imagen)
                                                        @if($imagen->id_publicacion == $publicacion->id)
                                                            {{asset($imagen->url_imagen)}}
                                                            @break
                                                        @endif
                                                    @endforeach" alt="Slide Image" /></div>
                                                    <div class="carousel-item ratio ratio-1x1"><img class="w-100 d-block card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="../../assets/img/rents/2.webp" alt="Slide Image" /></div>
                                                    <div class="carousel-item ratio ratio-1x1"><img class="w-100 d-block card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="../../assets/img/rents/3.webp" alt="Slide Image" /></div>
                                                </div>
                                                <div><a class="carousel-control-prev" href="#carousel-12" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-12" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                                                <ol class="carousel-indicators">
                                                    <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                                                    <li data-bs-target="#carousel-12" data-bs-slide-to="1"></li>
                                                    <li data-bs-target="#carousel-12" data-bs-slide-to="2"></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="{{route('publicaciones.show',$publicacion->id)}}">{{$publicacion->titulo_publicacion}}</a> </h5>
                                        <h2 class="card-text">$ {{ number_format($publicacion->precio_publicacion, 0, ',', '.')  }} ARS</h2>
                                        <p class="card-text"><a target="_blank" title="{{$publicacion->descripcion_publicacion}}">{{substr($publicacion->descripcion_publicacion,0,30)}}@if(strlen($publicacion->descripcion_publicacion)>30)...@endif

                                            </a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--                    Publicaciones end      --}}

{{--                    Paginación            --}}
                    <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                            <ul class="pagination
                            @if($publicaciones->lastPage() == 1)
                                d-none
                            @endif
                                justify-content-center mb-3">
                                <li class="page-item
                                @if($publicaciones->currentPage() == 1)
                                    disabled
                                @endif
                                    ">
                                    <a class="page-link" href="{{ $publicaciones->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                </li>
                                @for($i = 1; $i <= $publicaciones->lastPage(); $i++)
                                    <li class="page-item
                                    @if($publicaciones->currentPage() == $i)
                                        active
                                    @endif
                                        "><a class="page-link" href="{{ $publicaciones->url($i) }}">{{ $i }}</a></li>
                                @endfor
                                <li class="page-item
                                @if($publicaciones->currentPage() == $publicaciones->lastPage())
                                    disabled
                                @endif
                                    ">
                                    <a class="page-link" href="{{ $publicaciones->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                </div>
            </div>
        </div>
    </div>
{{--     Shop Product End --}}
</div>
