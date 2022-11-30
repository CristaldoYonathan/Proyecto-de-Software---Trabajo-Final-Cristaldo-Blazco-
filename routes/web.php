<?php

use App\Http\Controllers\Admin\AuditoriaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\OCRController;
use App\Http\Controllers\WebHooksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\CharjsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//DB::listen(function($query){
//    //Imprimimos la consulta ejecutada
//    echo " {$query->sql }";
//});



//Pagina de Inicio
Route::view('/','welcome')->name('inicio');

//Prueba OCR
Route::get('/ocr', [OCRController::class, 'ocr'])->name('ocr');
Route::post('/upload', [OCRController::class, 'upload'])->name('upload');

//Pagina de Graficos
Route::get('/admin/graficos',[CharjsController::class,'grafClientes'])->name('admin.graficos');


//Pagina Borrado de Publicaciones
Route::get('/publicaciones/borrado',[PublicacionController::class,'borrado'])->name('publicaciones.borrado');
Route::get('/publicaciones/borradores/borrado',[PublicacionController::class,'borradoUsuario'])->name('publicaciones.borradoUsuario');
Route::post('/publicaciones/borrado/{id}/restaurar',[PublicacionController::class,'restaurarPublicacion'])->name('publicaciones.borrado.restaurar');
Route::post('/publicaciones/borrado/{id}/destroy',[PublicacionController::class,'eliminarPublicacionesBasura'])->name('publicaciones.borrado.destroy');

//Pagina de Auditoria//No funcionaba en otros lados
Route::get('/admin/auditoria', [AuditoriaController::class, 'index']) -> name('admin.auditoria');
Route::get('/admin/auditoriamas/{auditoria}', [AuditoriaController::class, 'show']) -> name('admin.auditoriamas');

//Pagina de Publicaciones
Route::get('/registroPropiedad',[PublicacionController::class, 'index'])->name('publicaciones.index');//Pagina principal para el registro de propiedad
Route::get('/registroPropiedad/create',[PublicacionController::class, 'create'])->name('publicaciones.create');//Crear Publicacion
Route::post('/registroPropiedad',[PublicacionController::class,'store'])->name('publicaciones.store');//Alcenar en la base de datos
Route::get('/registroPropiedad/{publicacion}',[PublicacionController::class, 'show'])->name('publicaciones.show');//Consultar Publicacion
Route::get('/registroPropiedad/{publicacion}/edit',[PublicacionController::class, 'edit'])->name('publicaciones.edit');//Modificar Publicacion
Route::get('/registroPropiedad/{publicacion}/pagar',[PublicacionController::class, 'pagar'])->name('publicaciones.pagar');//Pagar Publicacion
Route::patch('/registroPropiedad/{publicacion}',[PublicacionController::class, 'update'])->name('publicaciones.update');//Cambiar en BD Publicacion
Route::delete('/registroPropiedad/{publicacion}',[PublicacionController::class, 'destroy'])->name('publicaciones.destroy');//Eliminar Publicacion

//Pagina de Alquileres
Route::view('/alquileres','alquileres')->name('alquileres');

//Ruta para webhooks
Route::post('/webhooks', WebHooksController::class);


//Ruta about
Route::view('/about','about')->name('about');

Route::get('/', function () {
    return view('welcome');
});

//Ruta para creacion de PDF
Route::get('admin/users/pdf', [UserController::class, 'pdf'])->name('admin.users.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
