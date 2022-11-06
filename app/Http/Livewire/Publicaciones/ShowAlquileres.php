<?php

namespace App\Http\Livewire\Publicaciones;

use App\Models\CaracteristicaComodidad;
use App\Models\Comodidad;
use App\Models\Imagen;
use App\Models\Provincia;
use App\Models\Publicacion;
use App\Models\TipoPropiedad;
use Database\Seeders\Comodidades;
use DB;
use Livewire\Component;
use Illuminate\Contracts\Support\Renderable;





class ShowAlquileres extends Component
{
    public $search;
    public $precioDesde = "";
    public $precioHasta = "";
    public $tipoPropiedad = [] ;
    public $filtroProvincia = "";
    public $filtroComodidades = [];
    public $ordenar = "asc";

    public function render()
    {


        $publicaciones = Publicacion::where('titulo_publicacion', 'LIKE', '%' . $this->search . '%')
            ->orWhere('descripcion_publicacion', 'LIKE', '%' . $this->search . '%')
            ->orderBy('precio_publicacion', $this->ordenar)
            ->paginate(6);

            if (count($this->filtroComodidades) > 0) {
            $publicaciones = Publicacion::whereHas('caracteristica_comodidades', function ($query) {
                $query->whereIn('id_caracteristica', $this->filtroComodidades);
            })
                ->where('titulo_publicacion', 'LIKE', '%' . $this->search . '%')
                ->get();
//            $publicaciones = $publicaciones->paginate(1);
            }

            if($this->precioHasta != ""){
                $publicaciones = $publicaciones->where('precio_publicacion', '<=', $this->precioHasta);
            }

            if ($this->precioDesde != "") {
                $publicaciones = $publicaciones->where('precio_publicacion', '>=', $this->precioDesde);
            }

//            transformar a eloquent la siguiente consulta SELECT * FROM publicacion WHERE id_tipo = 1 OR id_tipo = 2
            if (count($this->tipoPropiedad) > 0) {
                $publicaciones = $publicaciones->whereIn('id_tipo_propiedad', $this->tipoPropiedad);
            }

            if ($this->filtroProvincia != "") {
                $publicaciones = $publicaciones->where('id_provincia', $this->filtroProvincia);
            }








        $tipooos = $this->filtroComodidades;
        $imagenes = Imagen::all();
        $tipos = TipoPropiedad::all();
        $provincias = Provincia::all();
        $comodidades = Comodidad::all();
        $caracteristicasComodidades = CaracteristicaComodidad::all();

        return view('livewire.publicaciones.show-alquileres', compact('publicaciones', 'imagenes', 'tipos', 'tipooos', 'provincias', 'comodidades', 'caracteristicasComodidades'));
    }
}