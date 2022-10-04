<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Provincia;
use App\Models\Publicacion;
use App\Models\TipoPropiedad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $publicaciones = Publicacion::get();

        return view('publicaciones.index',['publicaciones'=> $publicaciones]);
    }

    public function show(Publicacion $publicacion)
    {
        //return $publicacion;
        //return Publicacion::findOrFail($publicacion);
        return view('publicaciones.show',['publicacion'=> $publicacion]);
    }

    public function create(Provincia $provincia, TipoPropiedad $tipoPropiedad, Ciudad $ciudad)
    {
        $provincias = Provincia::get();
        $tiposPropiedad = TipoPropiedad::get();
        $ciudades = Ciudad::get();

        return view('publicaciones.create', compact('provincias', 'tiposPropiedad', 'ciudades'));
    }

//    {
//        $provincias = Provincia::get();
//        return view('publicaciones.create',['provincias'=> $provincias]);
//    }

    public function store(Request $request, Provincia $provincia)
    {
        $request->validate([
            'titulo'=>['required'],
            'descripcion'=>['required']
        ]);
        $publicacion = new Publicacion;
        //Pagina 1 del formulario
        //$publicacion->titulo_publicacion = $request->input('tipo_propiedad');
        //$publicacion->subtipo_propiedad = $request->input('subtipo_propiedad');
        //Pagina 2 del formulario
        //$publicacion->direccion_propiedad = $request->input('direccion');
//        $publicacion->provincia_propiedad = $request->input('provincia');
        //$publicacion->ciudad_propiedad = $request->input('ciudad');
        //Falta Ubicacion

        //Pagina 3 del formulario
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
        //Pagina 4 del formulario
        //Falta imagen

        //Pagina 5 del formulario
        //Falta los checkboxs

        $publicacion->save();

        session()->flash('estado_publicacion','Se publico de manera exitosa la Propiedad');

        return to_route('publicaciones.index');
    }

    public function edit(Publicacion $publicacion)
    {
        return view('publicaciones.edit',['publicacion'=> $publicacion]);
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
        $publicacion->dormitorios_publicacion = $request->input('dormitorios');
        $publicacion->banios_publicacion = $request->input('baños');
        $publicacion->cochera_publicacion = $request->input('cocheras');
        $publicacion->superficie_cubierta_casa = $request->input('cubierta');
        $publicacion->superficie_total_terreno = $request->input('total_terreno');
        $publicacion->precio_publicacion = $request->input('precio');
        $publicacion->titulo_publicacion = $request->input('titulo');
        $publicacion->descripcion_publicacion = $request->input('descripcion');
        //Pagina 4 del formulario
        //Falta imagen

        //Pagina 5 del formulario
        //Falta los checkboxs

        $publicacion->save();

        session()->flash('estado_publicacion','Se modifico de manera exitosa la Publicacion');

        //return to_route('publicaciones.index');
        return to_route('publicaciones.show',$publicacion);
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
