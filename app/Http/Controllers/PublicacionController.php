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
use Illuminate\Support\Facades\Http;

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
        //si el usuario tiene el rol de inquilino mostrar solo las publicaciones que esten alquiladas para ese usuario
        if(Auth::user()->hasRole('inquilino')){
            $publicaciones = Publicacion::where('estado_publicacion', 'Alquilado')->where('id_usuario', Auth::user()->id)->get();
        }elseif(Auth::user()->hasRole('propietario')){
            $publicaciones = Publicacion::where('id_usuario', Auth::user()->id)->get();
        }
        //mostrar las publicaciones que tengan el estado en 'Activo' y que pertenezcan al usuario autenticado
//        $publicaciones = Publicacion::where('estado_publicacion', 'Activo')->where('id_usuario', Auth::user()->id)->get();


//        $publicaciones = Publicacion::get()->where('id_usuario',Auth::user()->id);
        $tiposPropiedades = TipoPropiedad::get();
        $imagenes = Imagen::get();

        return view('publicaciones.index',compact('publicaciones','tiposPropiedades', 'imagenes'));
    }

    public function pagar(Publicacion $publicacion, Request $request){

        $payment_id = $request->get('payment_id');

        $respuesta = Http::get("https://api.mercadopago.com/v1/payments/$payment_id" . "?access_token=APP_USR-141489167613208-102209-72a86348e61a8e789f1e8739cf212924-1222873954");
        $respuesta = json_decode($respuesta);

        $status = $respuesta->status;//Aprobado o Rechazado o Pendiente
        $payment_method_id = $respuesta->payment_method_id;//Obtener el metodo de pago(visa, mastercard, etc)
        $payment_type_id = $respuesta->payment_type_id;//Obtener el tipo de pago(credit_card, ticket, etc)

        if($status == 'approved'){
            $publicacion->estado_publicacion = 'Alquilado';
            $publicacion->save();

            return redirect()->route('publicaciones.index');
        }
    }

    public function show(Publicacion $publicacion, CaracteristicaComodidad $caracteristicaComodidad)
    {

        $caracteristicaComodidades = CaracteristicaComodidad::get()->where('id_publicacion',$publicacion->id);
        $imagenes = Imagen::get();

        return view('publicaciones.show',compact('publicacion','caracteristicaComodidades', 'imagenes'));
//        return view('publicaciones.show',['publicacion'=> $publicacion]);
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
        $publicacion->longitud_publicacion = $request->input('longitud');
        $publicacion->latitud_publicacion = $request->input('latitud');
//        obtener el usuario logueado
        $publicacion->id_usuario = auth()->user()-> getAuthIdentifier();




        //Se obtiene la imagen
        $imagenes = $request->file('file')->store('public/imagenes');
        $imagenes1 = $request->file('file1')->store('public/imagenes');
        $imagenes2 = $request->file('file2')->store('public/imagenes');
        $imagenes3 = $request->file('file3')->store('public/imagenes');
        $imagenes4 = $request->file('file4')->store('public/imagenes');

//        $url = Storage::url($imagenes);
//        $url1 = Storage::url($imagenes1);
//        $url2 = Storage::url($imagenes2);
//        $url3 = Storage::url($imagenes3);
//        $url4 = Storage::url($imagenes4);

        $publicacion->save();
        $publicacion->caracteristica_comodidades()->attach($request->input('caracteristicas'));


        //Se guarda las imagenes en la tabla imagenes despues que se creo la publicacion
        $url = Storage::url($imagenes);
        $imageness->url_imagen = $url;
        $imageness->id_publicacion = $publicacion->id;
        $imageness->save();

        $url1 = Storage::url($imagenes1);
        $imageness->url_imagen = $url1;
        $imageness->id_publicacion = $publicacion->id;
        $imageness->save();

        $url2 = Storage::url($imagenes2);
        $imageness->url_imagen = $url2;
        $imageness->id_publicacion = $publicacion->id;
        $imageness->save();

        $url3 = Storage::url($imagenes3);
        $imageness->url_imagen = $url3;
        $imageness->save();
        $imageness->id_publicacion = $publicacion->id;
//        $imageness->save();

        $url4 = Storage::url($imagenes4);
        $imageness->url_imagen = $url4;
        $imageness->id_publicacion = $publicacion->id;


        $imageness->save();

        session()->flash('estado_publicacion','Se publico de manera exitosa la Propiedad');

        return to_route('publicaciones.index');
    }

    public function edit(Publicacion $publicacion, Provincia $provincia, TipoPropiedad $tipoPropiedad, Ciudad $ciudad, Comodidad $comodidad, CaracteristicaComodidad $caracteristicaComodidad)
    {
        $provincias = Provincia::get();
        $tiposPropiedad = TipoPropiedad::get();
        $ciudades = Ciudad::get();
        $comodidades = Comodidad::get();
        $caracteristicasComodidades = CaracteristicaComodidad::get();

        return view('publicaciones.edit', compact('publicacion', 'provincias', 'tiposPropiedad', 'ciudades', 'comodidades', 'caracteristicasComodidades'));
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
        $publicacion->longitud_publicacion = $request->input('longitud');
        $publicacion->latitud_publicacion = $request->input('latitud');
        $publicacion->caracteristica_comodidades()->sync($request->input('caracteristicas'));

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
        //cambiar el valor de estado de activo a descativado
//        $publicacion->estado_publicacion = 0;
        $publicacion->estado_publicacion = "Desactivado";
        $publicacion->save();
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
        $tiposPropiedades = TipoPropiedad::get();

        return view('publicaciones.borradores.borradores',['publicaciones'=> $publicaciones,'tiposPropiedades' => $tiposPropiedades]);
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
        $publicaciones->estado_publicacion ='Activo';
//        $publicaciones->save();
        $publicaciones->restore();

        return to_route('publicaciones.index')->with('estado_publicacion','Se restauro de manera exitosa la Publicacion');
    }
}
