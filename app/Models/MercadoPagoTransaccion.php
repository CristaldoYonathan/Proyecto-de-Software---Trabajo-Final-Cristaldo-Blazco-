<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MercadoPagoTransaccion extends Model
{
    use HasFactory;

    protected $table = 'mercado-pago-transacciones';


    protected $fillable = [
        'id',
        'id_usuario',
        'id_publicacion',
        'id_mercado_pago',
        'id_mercado_pago_usuario',
        'id_mercado_pago_publicacion',
    ];


//    public function usuario()
//    {
//        return $this->belongsTo(User::class, 'id_usuario');
//    }

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class, 'id_publicacion');
    }
}

