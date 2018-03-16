<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Mar 2018 14:00:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Analistum
 * 
 * @property float $IdAnalista
 * @property string $MatriculaAnalista
 * @property string $NomeAnalista
 * @property string $SenhaAnalista
 * 
 * @property \Illuminate\Database\Eloquent\Collection $movimentacaos
 *
 * @package App\Models
 */
class Analistum extends Eloquent
{
	protected $primaryKey = 'IdAnalista';
	public $timestamps = false;

	protected $fillable = [
		'MatriculaAnalista',
		'NomeAnalista',
		'SenhaAnalista'
	];

	public function movimentacaos()
	{
		return $this->hasMany(\App\Models\Movimentacao::class, 'IdAnalista');
	}
}
