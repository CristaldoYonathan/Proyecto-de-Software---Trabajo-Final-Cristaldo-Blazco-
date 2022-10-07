<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CaracteristicaComodidad
 * 
 * @property int $id
 * @property string $nombre_caracteristica_comodidad
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $id_comodidad
 * 
 * @property Comodidad $comodidad
 * @property Collection|Publicacion[] $publicacions
 *
 * @package App\Models
 */
class CaracteristicaComodidad extends Model
{
	use SoftDeletes;
	protected $table = 'caracteristica_comodidad';

	protected $casts = [
		'id_comodidad' => 'int'
	];

	protected $fillable = [
		'nombre_caracteristica_comodidad',
		'id_comodidad'
	];

	public function comodidad()
	{
		return $this->belongsTo(Comodidad::class, 'id_comodidad');
	}

	public function publicacions()
	{
		return $this->belongsToMany(Publicacion::class, 'caracteristica_comodidad_publicacion', 'id_caracteristica', 'id_publicacion')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
