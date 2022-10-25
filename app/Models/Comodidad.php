<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Comodidad
 *
 * @property int $id
 * @property string $nombre_comodidad
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|CaracteristicaComodidad[] $caracteristica_comodidads
 *
 * @package App\Models
 */
class Comodidad extends Model implements Auditable
{
	use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
	protected $table = 'comodidad';

	protected $fillable = [
		'nombre_comodidad'
	];

	public function caracteristica_comodidads()
	{
		return $this->hasMany(CaracteristicaComodidad::class, 'id_comodidad');
	}
}
