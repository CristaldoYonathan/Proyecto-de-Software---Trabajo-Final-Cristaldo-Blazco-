<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicacion extends Model
{
    use HasFactory, SoftDeletes;

    //permite reconocer la tabla por la convencion que pone en plural
    protected $table = 'publicacion';

//    declaración de atributos necesarios con su respectiva protección
//    protected $fillable = [
//        'estado_publicacion',
//        'calle_publicacion',
//        'altura_publicacion',
//        'dormitorios_publicacion',
//        'banios_publicacion',
//        'cochera_publicacion',
//        'ambientes_publicacion',
//        'superficie_cubierta_casa',
//        'imagen_uno_publicacion',
//        'imagen_dos_publicacion',
//        'imagen_tres_publicacion',
//        'superficie_total_terreno',
//        'precio_publicacion',
//        'titulo_publicacion',
//        'descripcion_publicacion',
//    ];
//
//    //declaración de atributos que no se quieren mostrar
//    protected $hidden = [
//        'created_at',
//        'updated_at',
//    ];
//
//    //declaración de atributos que no se quieren mostrar
//    protected $casts = [
//        'created_at' => 'datetime',
//        'updated_at' => 'datetime',
//    ];
//
//    //declaración de atributos que no se quieren mostrar
//    protected $dates = [
//        'created_at',
//        'updated_at',
//    ];
//
//    //declaración de atributos que no se quieren mostrar
//    protected $dateFormat = 'Y-m-d H:i:s';
//
//    //declaración de atributos que no se quieren mostrar
//    protected $connection = 'mysql';
//
//    //declaración de atributos que no se quieren mostrar
//    protected $primaryKey = 'id_publicacion';
//
//    //declaración de atributos que no se quieren mostrar
//    protected $keyType = 'int';
//
//    //declaración de atributos que no se quieren mostrar
//    public $incrementing = true;
//
//    //declaración de atributos que no se quieren mostrar
//    public $timestamps = true;
//
//    //declaración de atributos que no se quieren mostrar
//    public $with = [];
//
//    //declaración de atributos que no se quieren mostrar
//    public $withCount = [];
//
//    //declaración de atributos que no se quieren mostrar
//    public $perPage = 15;
//
//    //declaración de atributos que no se quieren mostrar
//    public $exists = false;
//
//    //declaración de atributos que no se quieren mostrar
//    public $wasRecentlyCreated = false;
//
//    //declaración de atributos que no se quieren mostrar
//    protected $attributes = [];
}
