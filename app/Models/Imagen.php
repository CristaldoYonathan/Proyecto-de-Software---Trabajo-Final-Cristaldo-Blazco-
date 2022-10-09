<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Imagen
 * 
 * @property int $id
 * @property string $url_imagen
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $id_publicacion
 * 
 * @property Publicacion $publicacion
 *
 * @package App\Models
 */
class Imagen extends Model
{
	use SoftDeletes;
	protected $table = 'imagen';

	protected $casts = [
		'id_publicacion' => 'int'
	];

	protected $fillable = [
		'url_imagen',
		'id_publicacion'
	];

	public function publicacion()
	{
		return $this->belongsTo(Publicacion::class, 'id_publicacion');
	}
}
