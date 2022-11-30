<?php

use App\Http\Controllers\Admin\AuditoriaController;
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

//ruta para graficos


//ruta para recuperar registros de auditoria //Poer si sirve se queda
//Route::get('admin/auditoria', [AuditoriaController::class, 'index']) -> name('admin.auditoria');
//Route::get('admin/auditoria/index') -> name('admin.auditoria.index');
//Route::view('/auditoria/index','admin/auditoria/index')->name('index');

