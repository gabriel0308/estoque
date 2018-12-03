<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ModeloPeriferico
 * 
 * @property float $IdModeloPeriferico
 * @property string $NomeModeloPeriferico
 * @property float $IdFabricantePeriferico
 * @property float $IdTipoPeriferico
 * 
 * @property \App\Models\FabricantePeriferico $fabricante_periferico
 * @property \App\Models\TipoPeriferico $tipo_periferico
 * @property \Illuminate\Database\Eloquent\Collection $perifericos
 *
 * @package App\Models
 */
class ModeloPeriferico extends Eloquent
{
	protected $table = 'modeloPeriferico';
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

	public function fabricante_periferico()
	{
		return $this->belongsTo(\App\Models\FabricantePeriferico::class, 'IdFabricantePeriferico');
	}

	public function tipo_periferico()
	{
		return $this->belongsTo(\App\Models\TipoPeriferico::class, 'IdTipoPeriferico');
	}

	public function perifericos()
	{
		return $this->hasMany(\App\Models\Periferico::class, 'IdModeloPeriferico');
	}
}
