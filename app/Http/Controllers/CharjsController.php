<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharjsController extends Controller
{
    public function grafClientes()
    {

        //obtenemos los registros de la tabla clientes
        $clientes = User::get()->count();

        //grafico de usuarios
        $datos_usuarios = DB::table('users')
            ->select(
                DB::raw("YEAR(created_at) as anio"),
                DB::raw("COUNT(*) as total")
            )
            ->groupBy('anio')
            ->orderBy('anio', 'ASC')
            ->get();

        //preparamos los datos para el grafico
        foreach ($datos_usuarios as $usuarios) {
            $anio[] = $usuarios->anio;
            $total[] = $usuarios->total;
        }

        //formatear el grafico
        $label_usuarios = " 'Grafico de crecimiento de clientes' ";
        $anios_usuarios = implode(',',$anio);
        $total_usuarios = implode(',',$total);

        return view('graficos', compact('clientes','label_usuarios','anios_usuarios','total_usuarios'));
    }
}
