<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    //permite reconocer la tabla por la convencion que pone en plural
    protected $table = 'publicacion';
}
