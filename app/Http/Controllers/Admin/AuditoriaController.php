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

    public function show(Audit $auditorias)
    {
        $usuarios = User::get();
        return view('auditoriamas',compact('auditorias','usuarios'));
    }
//    {
//        $auditorias = Audit::find($request);
//        return view('auditoriamas',compact('auditorias'));
//    }
}
