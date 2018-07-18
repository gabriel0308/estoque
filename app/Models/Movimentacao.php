<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 18 Jul 2018 22:32:39 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Movimentacao
 * 
 * @property float $IdMovimentacao
 * @property float $IdComp
 * @property float $IdAnalista
 * @property string $TipoMovimentacao
 * @property \Carbon\Carbon $DataMovimentacao
 * @property string $MatriculaUsuario
 * 
 * @property \App\Models\Analistum $analistum
 * @property \App\Models\Computador $computador
 *
 * @package App\Models
 */
class Movimentacao extends Eloquent
{
	protected $table = 'movimentacao';
	protected $primaryKey = 'IdMovimentacao';
	public $timestamps = false;

	protected $casts = [
		'IdComp' => 'float',
		'IdAnalista' => 'float'
	];

	protected $dates = [
		'DataMovimentacao'
	];

	protected $fillable = [
		'IdComp',
		'IdAnalista',
		'TipoMovimentacao',
		'DataMovimentacao',
		'MatriculaUsuario'
	];

	public function analistum()
	{
		return $this->belongsTo(\App\Models\Analistum::class, 'IdAnalista');
	}

	public function computador()
	{
		return $this->belongsTo(\App\Models\Computador::class, 'IdComp');
	}
}
