<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 21:22:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Modeloperiferico
 * 
 * @property float $IdModeloPeriferico
 * @property string $NomeModeloPeriferico
 * @property float $IdFabricantePeriferico
 * @property float $IdTipoPeriferico
 * 
 * @property \App\Models\Fabricanteperiferico $fabricanteperiferico
 * @property \App\Models\Tipoperiferico $tipoperiferico
 * @property \Illuminate\Database\Eloquent\Collection $perifericos
 *
 * @package App\Models
 */
class Modeloperiferico extends Eloquent
{
	protected $table = 'modeloperiferico';
	protected $primaryKey = 'IdModeloPeriferico';
	public $timestamps = false;

	protected $casts = [
		'IdFabricantePeriferico' => 'float',
		'IdTipoPeriferico' => 'float'
	];

	protected $fillable = [
		'NomeModeloPeriferico',
		'IdFabricantePeriferico',
		'IdTipoPeriferico'
	];

	public function fabricanteperiferico()
	{
		return $this->belongsTo(\App\Models\Fabricanteperiferico::class, 'IdFabricantePeriferico');
	}

	public function tipoperiferico()
	{
		return $this->belongsTo(\App\Models\Tipoperiferico::class, 'IdTipoPeriferico');
	}

	public function perifericos()
	{
		return $this->hasMany(\App\Models\Periferico::class, 'IdModeloPeriferico');
	}
}
