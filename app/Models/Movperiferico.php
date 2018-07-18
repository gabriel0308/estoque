<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 18 Jul 2018 22:32:39 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Movperiferico
 * 
 * @property float $IdMovPeriferico
 * @property float $IdPeriferico
 * @property float $IdAnalista
 * @property string $TipoMovPeriferico
 * @property \Carbon\Carbon $DataMovPeriferico
 * @property string $MatriculaUsuario
 * 
 * @property \App\Models\Periferico $periferico
 * @property \App\Models\Analistum $analistum
 *
 * @package App\Models
 */
class Movperiferico extends Eloquent
{
	protected $table = 'movperiferico';
	protected $primaryKey = 'IdMovPeriferico';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IdMovPeriferico' => 'float',
		'IdPeriferico' => 'float',
		'IdAnalista' => 'float'
	];

	protected $dates = [
		'DataMovPeriferico'
	];

	protected $fillable = [
		'IdPeriferico',
		'IdAnalista',
		'TipoMovPeriferico',
		'DataMovPeriferico',
		'MatriculaUsuario'
	];

	public function periferico()
	{
		return $this->belongsTo(\App\Models\Periferico::class, 'IdPeriferico');
	}

	public function analistum()
	{
		return $this->belongsTo(\App\Models\Analistum::class, 'IdAnalista');
	}
}
