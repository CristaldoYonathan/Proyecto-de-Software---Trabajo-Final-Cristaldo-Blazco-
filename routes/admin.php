<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

//Route::get('admin', function () { si es que no agregamos prefijo al grupo de rutas

Route::get('', [HomeController::class, 'index']);
