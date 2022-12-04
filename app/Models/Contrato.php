<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contrato';


    protected $fillable = [
        'id_publicacion',
        'id_usuario',
        'fecha_inicio',
        'fecha_fin',
        'monto',
        'porcentaje_aumento',
        'periodo_aumento',
        'intervalo_pago',//desde que momento se paga hasta que momento se paga 1 a 15
        'restraso_maximo',//cuantos dias de retraso se puede tener
        'estado_contrato',
//        'id_garante'
    ];

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class, 'id_publicacion');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

//    public function inquilino()
//    {
//        return $this->belongsTo(User::class, 'id_inquilino');
//    }
//
//    public function garante()
//    {
//        return $this->belongsTo(User::class, 'id_garante');
//    }
//
//    public function pagos()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato');
//    }
//
//    public function pagosPendientes()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Pendiente');
//    }
//
//    public function pagosPagados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Pagado');
//    }
//
//    public function pagosVencidos()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Vencido');
//    }
//
//    public function pagosCancelados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Cancelado');
//    }
//
//    public function pagosAtrasados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado');
//    }
//
//    public function pagosAtrasadosPagados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Pagado');
//    }
//
//    public function pagosAtrasadosVencidos()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Vencido');
//    }
//
//    public function pagosAtrasadosCancelados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Cancelado');
//    }
//
//    public function pagosAtrasadosPendientes()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Pendiente');
//    }
//
//    public function pagosAtrasadosPagadosPendientes()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Pagado Pendiente');
//    }
//
//    public function pagosAtrasadosPagadosVencidos()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Pagado Vencido');
//    }
//
//    public function pagosAtrasadosPagadosCancelados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Pagado Cancelado');
//    }
//
//    public function pagosAtrasadosVencidosPendientes()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Vencido Pendiente');
//    }
//
//    public function pagosAtrasadosVencidosPagados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Vencido Pagado');
//    }
//
//    public function pagosAtrasadosVencidosCancelados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Vencido Cancelado');
//    }
//
//    public function pagosAtrasadosCanceladosPendientes()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Cancelado Pendiente');
//    }
//
//    public function pagosAtrasadosCanceladosPagados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Cancelado Pagado');
//    }
//
//    public function pagosAtrasadosCanceladosVencidos()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Atrasado Cancelado Vencido');
//    }
//
//    public function pagosVencidosPendientes()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Vencido Pendiente');
//    }
//
//    public function pagosVencidosPagados()
//    {
//        return $this->hasMany(Pago::class, 'id_contrato')->where('estado_pago', 'Vencido Pagado');
//    }

}
