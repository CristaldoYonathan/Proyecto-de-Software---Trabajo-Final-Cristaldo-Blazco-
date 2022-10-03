<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PublicacionController;

//Route::get('admin', function () { si es que no agregamos prefijo al grupo de rutas

Route::get('', [HomeController::class, 'index']) -> name('admin.home');

//ruta de usuarios con nombre admin.users   UserControlller es el que controla la vista dentro de esa clase estaran todas las funcionalodades de ña vista de usuarios
Route::resource('users', UserController::class) -> names('admin.users'); // esta ruta se va a llamar en el archivo de configuracion de adminlte.php con el nombre admin.users.index

Route::resource('roles', RoleController::class) -> names('admin.roles');

Route::get('/publicaciones/borrado',[PublicacionController::class,'borrado'])->name('publicaciones.borrado');
//Route::resource('publicaciones/', PublicacionController::class) -> names('admin.publicaciones');


