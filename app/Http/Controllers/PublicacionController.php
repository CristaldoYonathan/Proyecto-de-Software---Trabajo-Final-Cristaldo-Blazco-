<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function create()
    {
        return view('publicaciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>['required'],
            'descripcion'=>['required']
        ]);
        $publicacion = new Publicacion;
        //Pagina 1 del formulario
        $publicacion->tipo_propiedad = $request->input('tipo_propiedad');
        $publicacion->subtipo_propiedad = $request->input('subtipo_propiedad');
        //Pagina 2 del formulario
        $publicacion->direccion_propiedad = $request->input('direccion');
        $publicacion->provincia_propiedad = $request->input('provincia');
        //$publicacion->ciudad_propiedad = $request->input('ciudad');
        //Falta Ubicacion

        //Pagina 3 del formulario
        $publicacion->ambientes_propiedad = $request->input('ambientes');
        $publicacion->dormitorios_propiedad = $request->input('dormitorios');
        $publicacion->baños_propiedad = $request->input('baños');
        $publicacion->cochera_propiedad = $request->input('cocheras');
        $publicacion->superficie_cubierta_propiedad = $request->input('cubierta');
        $publicacion->superficie_total_propiedad = $request->input('total_terreno');
        $publicacion->precio_propiedad = $request->input('precio');
        $publicacion->titulo_publicacion_propiedad = $request->input('titulo');
        $publicacion->descripcion_publicacion_propiedad = $request->input('descripcion');
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
            'descripcion'=>['required']
        ]);
        //$publicacion = Publicacion::find($publicacion); Funciona igual porque tenemos  Publicacion $publicacion como segundo parametro
        //Pagina 1 del formulario
        $publicacion->tipo_propiedad = $request->input('tipo_propiedad');
        $publicacion->subtipo_propiedad = $request->input('subtipo_propiedad');
        //Pagina 2 del formulario
        $publicacion->direccion_propiedad = $request->input('direccion');
        $publicacion->provincia_propiedad = $request->input('provincia');
        //$publicacion->ciudad_propiedad = $request->input('ciudad');
        //Falta Ubicacion

        //Pagina 3 del formulario
        $publicacion->ambientes_propiedad = $request->input('ambientes');
        $publicacion->dormitorios_propiedad = $request->input('dormitorios');
        $publicacion->baños_propiedad = $request->input('baños');
        $publicacion->cochera_propiedad = $request->input('cocheras');
        $publicacion->superficie_cubierta_propiedad = $request->input('cubierta');
        $publicacion->superficie_total_propiedad = $request->input('total_terreno');
        $publicacion->precio_propiedad = $request->input('precio');
        $publicacion->titulo_publicacion_propiedad = $request->input('titulo');
        $publicacion->descripcion_publicacion_propiedad = $request->input('descripcion');
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
}
