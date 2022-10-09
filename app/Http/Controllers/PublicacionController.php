<?php

namespace App\Http\Controllers;

use App\Models\CaracteristicaComodidad;
use App\Models\Ciudad;
use App\Models\Comodidad;
use App\Models\Imagen;
use App\Models\Provincia;
use App\Models\Publicacion;
use App\Models\TipoPropiedad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PublicacionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::get()->where('id_usuario',Auth::user()->id);
        $tipoPropiedad = TipoPropiedad::get()->where('tipo_propiedad',TipoPropiedad::with('publicacion')->get());

        return view('publicaciones.index',['publicaciones'=> $publicaciones , 'tipoPropiedad' => $tipoPropiedad]);
    }

    public function show(Publicacion $publicacion)
    {
        //return $publicacion;
        //return Publicacion::findOrFail($publicacion);
        return view('publicaciones.show',['publicacion'=> $publicacion]);
    }

    public function create(Provincia $provincia, TipoPropiedad $tipoPropiedad, Ciudad $ciudad, Comodidad $comodidad, CaracteristicaComodidad $caracteristicaComodidad)
    {
        $provincias = Provincia::get();
        $tiposPropiedad = TipoPropiedad::get();
        $ciudades = Ciudad::get();
        $comodidades = Comodidad::get();
        $caracteristicasComodidades = CaracteristicaComodidad::get();

        return view('publicaciones.create', compact('provincias', 'tiposPropiedad', 'ciudades', 'comodidades', 'caracteristicasComodidades'));
    }

//    {
//        $provincias = Provincia::get();
//        return view('publicaciones.create',['provincias'=> $provincias]);
//    }

    public function store(Request $request, Provincia $provincia)
    {
        $request->validate([
            'titulo'=>['required'],
            'descripcion'=>['required'],
            'file'=>['image'],  //| mimes:jpeg,png,jpg,gif,svg
        ]);

        $publicacion = new Publicacion;
        $imageness = new Imagen;

        $publicacion->calle_publicacion = $request->input('calle');
        $publicacion->estado_publicacion = "Activo";
        $publicacion->altura_publicacion = $request->input('altura');
        $publicacion->ambientes_publicacion = $request->input('ambientes');
        $publicacion->dormitorios_publicacion = $request->input('dormitorios');
        $publicacion->banios_publicacion = $request->input('baños');
        $publicacion->cochera_publicacion = $request->input('cocheras');
        $publicacion->superficie_cubierta_casa = $request->input('cubierta');
        $publicacion->superficie_total_terreno = $request->input('total_terreno');
        $publicacion->precio_publicacion = $request->input('precio');
        $publicacion->titulo_publicacion = $request->input('titulo');
        $publicacion->descripcion_publicacion = $request->input('descripcion');
        $publicacion->id_tipo_propiedad = $request->input('tipo_propiedad');
        $publicacion->id_provincia = $request->input('provincia');
        $publicacion->id_ciudad = $request->input('ciudad');
//        obtener el usuario logueado
        $publicacion->id_usuario = auth()->user()-> getAuthIdentifier();
        //Se obtiene la imagen
        $imagenes = $request->file('file')->store('public/imagenes');
        $imagenes1 = $request->file('file1')->store('public/imagenes');
        $imagenes2 = $request->file('file2')->store('public/imagenes');
        $imagenes3 = $request->file('file3')->store('public/imagenes');
        $imagenes4 = $request->file('file4')->store('public/imagenes');

        $url = Storage::url($imagenes);
        $url1 = Storage::url($imagenes1);
        $url2 = Storage::url($imagenes2);
        $url3 = Storage::url($imagenes3);
        $url4 = Storage::url($imagenes4);

        $imageness->url_imagen = $url;
        $imageness->url_imagen = $url1;
        $imageness->url_imagen = $url2;
        $imageness->url_imagen = $url3;
        $imageness->url_imagen = $url4;


        $publicacion->save();
        //Se guarda la imagen despues que se creo la publicacion
        $imageness->id_publicacion = $publicacion->id;
        $imageness->save();

        session()->flash('estado_publicacion','Se publico de manera exitosa la Propiedad');

        return to_route('publicaciones.index');
    }

    public function edit(Publicacion $publicacion, Provincia $provincia, TipoPropiedad $tipoPropiedad, Ciudad $ciudad)
    {
        $provincias = Provincia::get();
        $tiposPropiedad = TipoPropiedad::get();
        $ciudades = Ciudad::get();

        return view('publicaciones.edit', compact('publicacion', 'provincias', 'tiposPropiedad', 'ciudades'));
    }




    public function update(Request $request, Publicacion $publicacion)
    {
        $request->validate([
            'titulo'=>['required'],
            'descripcion'=>['required'],
        ]);
        //$publicacion = Publicacion::find($publicacion); Funciona igual porque tenemos  Publicacion $publicacion como segundo parametro
        //Pagina 1 del formulario
        //$publicacion->tipo_propiedad = $request->input('tipo_propiedad');
        //$publicacion->subtipo_propiedad = $request->input('subtipo_propiedad');
        //Pagina 2 del formulario
        //$publicacion->direccion_propiedad = $request->input('direccion');
        //$publicacion->provincia_propiedad = $request->input('provincia');
        //$publicacion->ciudad_propiedad = $request->input('ciudad');
        //Falta Ubicacion

        //Pagina 3 del formulario
        $publicacion->ambientes_publicacion = $request->input('ambientes');
        $publicacion->calle_publicacion = $request->input('calle');
        $publicacion->dormitorios_publicacion = $request->input('dormitorios');
        $publicacion->banios_publicacion = $request->input('baños');
        $publicacion->cochera_publicacion = $request->input('cocheras');
        $publicacion->superficie_cubierta_casa = $request->input('cubierta');
        $publicacion->superficie_total_terreno = $request->input('total_terreno');
        $publicacion->precio_publicacion = $request->input('precio');
        $publicacion->titulo_publicacion = $request->input('titulo');
        $publicacion->descripcion_publicacion = $request->input('descripcion');
        $publicacion->id_tipo_propiedad = $request->input('tipo_propiedad');

//        $publicacion->id_provincia = $request->input('provincia');
        //Pagina 4 del formulario
        //Falta imagen

        //Pagina 5 del formulario
        //Falta los checkboxs

        $publicacion->save();

        session()->flash('estado_publicacion','Se modifico de manera exitosa la Publicacion');

        //return to_route('publicaciones.index');
        return to_route('publicaciones.index',$publicacion);
    }

    public function destroy(Request $request, Publicacion $publicacion)
    {
        $publicacion->delete();

        return to_route('publicaciones.index')->with('estado_publicacion','Se elimino de manera exitosa la Publicacion');
    }

    public function borrado()
    {
        $publicaciones = Publicacion::onlyTrashed()->get();

        return view('admin.publicaciones.borradores',['publicaciones'=> $publicaciones]);
    }

    public function borradoUsuario()
    {
        $publicaciones = Publicacion::onlyTrashed()->get();

        return view('publicaciones.borradores.borradores',['publicaciones'=> $publicaciones]);
    }

    public function eliminarPublicacionesBasura($id)
    {
        $publicaciones = Publicacion::onlyTrashed()->findOrFail($id);
        $publicaciones->forceDelete();
        return to_route('publicaciones.index')->with('estado_publicacion','Se restauro de manera exitosa la Publicacion');
        //Esta ruta tiene que cambiarse para que te lleve a la parte de adminLTE
    }

    public function restaurarPublicacion($id)
    {
        $publicaciones = Publicacion::onlyTrashed()->findOrFail($id);
        $publicaciones->restore();

        return to_route('publicaciones.index')->with('estado_publicacion','Se restauro de manera exitosa la Publicacion');
    }
}
