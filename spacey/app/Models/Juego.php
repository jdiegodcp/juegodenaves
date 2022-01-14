<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Juego
 * 
 * @property int $idJuego
 * @property int $idUsuario
 * @property int $score
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Juego extends Model
{
	protected $table = 'juego';
	protected $primaryKey = 'idJuego';

	protected $casts = [
		'idUsuario' => 'int',
		'score' => 'int'
	];

	protected $fillable = [
		'idUsuario',
		'score'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'idUsuario');
	}
}
