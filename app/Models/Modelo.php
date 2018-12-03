<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Modelo
 * 
 * @property float $IdModelo
 * @property float $IdFabricante
 * @property float $IdTipo
 * @property string $NomeModelo
 * 
 * @property \App\Models\Fabricante $fabricante
 * @property \App\Models\Tipo $tipo
 * @property \Illuminate\Database\Eloquent\Collection $computadors
 *
 * @package App\Models
 */
class Modelo extends Eloquent
{
	protected $table = 'modelo';
	protected $primaryKey = 'IdModelo';
	public $timestamps = false;

	protected $casts = [
		'IdFabricante' => 'float',
		'IdTipo' => 'float'
	];

	protected $fillable = [
		'IdFabricante',
		'IdTipo',
		'NomeModelo'
	];

	public function fabricante()
	{
		return $this->belongsTo(\App\Models\Fabricante::class, 'IdFabricante');
	}

	public function tipo()
	{
		return $this->belongsTo(\App\Models\Tipo::class, 'IdTipo');
	}

	public function computadors()
	{
		return $this->hasMany(\App\Models\Computador::class, 'IdModelo');
	}
}
