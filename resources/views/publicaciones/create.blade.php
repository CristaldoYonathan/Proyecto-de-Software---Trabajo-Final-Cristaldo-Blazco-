<x-layouts.app titulo="Publicar una propiedad">

    <h1 class="text-center">Publicar una propiedad</h1>

    <form action="{{route('publicaciones.store')}}" method="POST">
        @csrf
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Tipo de Propiedad"></div>
            <div class="progress-step" data-title="Ubicacion"></div>
            <div class="progress-step" data-title="Caracteristicas"></div>
            <div class="progress-step" data-title="Imagenes"></div>
            <div class="progress-step" data-title="Caracteristicas especificas"></div>
        </div>

        <div class="form-step form-step-active">
            <div class="select-group">
                <label>Tipo de Propiedad</label>
{{--                <input name="tipo_propiedad" type="text" value="{{old('tipo_propiedad')}}">--}}
                <select name="tipo_propiedad">
                    <option>Seleccione el tipo de propiedad</option>
                    <option value="Departamento">Departamento</option>
                    <option value="Casa">Casa</option>
                </select>
                @error('tipo_propiedad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="input-group">
                <label>Subtipo de Propiedad</label>
{{--                <input name="subtipo_propiedad" type="text" value="{{old('subtipo_propiedad')}}">--}}
                <select name="subtipo_propiedad">
                    <option>Seleccione el tipo de propiedad</option>
                    <option value="Chalet">Chalet</option>
                    <option value="Monoambiente">Monoambiente</option>
                </select>
                @error('subtipo_propiedad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label>Direccion (Ingrese calle y altura)</label>
                <input name="direccion" type="text" value="{{old('direccion')}}">
                @error('direccion')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="input-group">
                <label>Provincia</label>
{{--                <input name="provincia" type="text" value="{{old('provincia')}}">--}}
                <select name="provincia">
                    <option>Seleccione la provincia</option>
{{--                    @foreach($publicacion as $publicacions)--}}
{{--                        <option value="{{$publicacions->tipo_propiedad}}">{{$publicacions->tipo_propiedad}}</option>--}}
{{--                    @endforeach--}}
                </select>
                @error('provincia')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="input-group">
                <label>Ciudad</label>
{{--                <input name="ciudad" type="text" value="{{old('ciudad')}}">--}}
                <select name="ciudad" >
                    <option>Seleccione la ciudad</option>
                    <option value="Posadas">Posadas</option>
                </select>
                @error('ciudad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="input-group">
                <label>Ubicacion de la Propiedad</label>
                <input name="#" type="file" value="{{old('#')}}">
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div>
                <label>Caracteristicas Generales</label>
                <div class="input-group">
                    <label>Ambientes</label>
                    <input name="ambientes" type="text" value="{{old('ambientes')}}">
                    @error('ambientes')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <label>Dormitorios</label>
                    <input name="dormitorios" type="text" value="{{old('dormitorios')}}">
                    @error('dormitorios')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <label>Baños</label>
                    <input name="baños" type="text" value="{{old('baños')}}">
                    @error('baños')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <label>Cocheras</label>
                    <input name="cocheras" type="text" value="{{old('cocheras')}}">
                    @error('cocheras')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div>
                <label>Superficie de la propiedad</label><br>
                <div class="input-group">
                    <label>Cubierta(Lo que ocupa la casa)</label>
                    <input name="cubierta" type="text" value="{{old('cubierta')}}">
                    @error('cubierta')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <label>Total(El valor del terreno completo)</label>
                    <input name="total_terreno" type="text" value="{{old('total_terreno')}}">
                    @error('total_terreno')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div>
                <label>Precio</label><br>
                <div class="input-group">
                    <label>Precio Total</label>
                    <input name="precio" type="text" value="{{old('precio')}}">
                    @error('precio')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <label>Descripcion</label>
            <div class="input-group">
                <label>Titulo de la Publicacion</label>
                <input name="titulo" type="text" value="{{old('titulo')}}">
                @error('titulo')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="text-group">
                <label>Descripcion</label>
                <textarea name="descripcion" >{{old('descripcion')}}</textarea>
                @error('descripcion')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label>Foto de la propiedad Puede cargar hasta 3 imagenes en formatro.....</label>
                <input name="ciudad" type="file" value="{{old('ciudad')}}">
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div id="container">
                <div class="tres">
                    <h5>Caracteristicas especificas</h5>
                </div>
                <div class="tres">
                    <li><label>Acceso para personas con discapacidad<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Permiten mascotas<input type="checkbox" value="val" name="name2"></label></li>
                </div>
            </div>
            <div id="container">
                <div class="tres">
                    <h5>Caracteristicas</h5>
                </div>
                <div class="tres">
                    <li><label>Aire acondicionado<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Amoblado<input type="checkbox" value="Amoblado" name="Amoblado"></label></li>
                    <li><label>Calefaccion<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Cocina equipada<input type="checkbox" value="val" name="name2"></label></li>
                </div>
                <div class="tres">
                   <li> <label>Lavarropas<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Termotanque<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Vigilancia<input type="checkbox" value="val" name="name"></label></li>
                </div>
            </div>
            <div id="container">
                <div class="tres">
                    <h5>Servicios</h5>
                </div>
                <div>
                    <li><label>Ascensor<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Internet/Wifi<input type="checkbox" value="val" name="name"></label></li>
                   <li> <label>Lavanderia<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Servicio de limpieza<input type="checkbox" value="val" name="name"></label></li>
                </div>
            </div>
            <div id="container">
                <div class="tres">
                    <h5>Ambientes</h5>
                </div>
                <div class="tres">
                    <li><label>Balcon<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Cocina<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Comedor<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Hall<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Jardin<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Lavadero<input type="checkbox" value="val" name="name"></label></li>
                </div>
                <div class="tres">
                    <li><label>Living<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Living comedor<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Patio<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Sotano<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Terraza<input type="checkbox" value="val" name="name2"></label></li>
                </div>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <button type="submit">Publicar</button>
            </div>
        </div>
    </form>

    <a href="{{route('publicaciones.index')}}">Regresar</a>

</x-layouts.app>
