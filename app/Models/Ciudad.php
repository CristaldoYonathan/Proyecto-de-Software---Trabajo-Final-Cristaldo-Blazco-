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
 * Class Ciudad
 *
 * @property int $id
 * @property string $nombre_ciudad
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Publicacion[] $publicaciones
 *
 * @package App\Models
 */
class Ciudad extends Model
{
	use SoftDeletes;
	protected $table = 'ciudad';

	protected $fillable = [
		'nombre_ciudad'
	];

	public function publicacion()
	{
		return $this->hasMany(Publicacion::class, 'id_ciudad');
	}
}
