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
}
