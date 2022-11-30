<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;

class AuditoriaController extends Controller
{
    public function index()
    {
        $auditorias = Audit::get();
        $usuarios = User::get();
        return view('auditoria',compact('auditorias','usuarios'));
    }

    public function show(Audit $auditoria)
    {
//        $usuarios = User::get();
//        $usuario = User::find($auditorias->user_id);

//        $auditorias = Audit::find($auditorias->id);
//        $auditorias = Audit::find(1);

        $prueba = Audit::find($auditoria->user_type);

        return view('auditoriamas',compact('auditoria','prueba'));
    }
//    {
//        $auditorias = Audit::find($request);
//        return view('auditoriamas',compact('auditorias'));
//    }
}
