<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Fabricante
 * 
 * @property float $IdFabricante
 * @property string $NomeFabricante
 * 
 * @property \Illuminate\Database\Eloquent\Collection $modelos
 *
 * @package App\Models
 */
class Fabricante extends Eloquent
{
	protected $table = 'fabricante';
	protected $primaryKey = 'IdFabricante';
	public $timestamps = false;

	protected $fillable = [
		'NomeFabricante'
	];

	public function modelos()
	{
		return $this->hasMany(\App\Models\Modelo::class, 'IdFabricante');
	}
}
