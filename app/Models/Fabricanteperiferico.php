<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 21:22:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Fabricanteperiferico
 * 
 * @property float $IdFabricantePeriferico
 * @property string $NomeFabricantePeriferico
 * 
 * @property \Illuminate\Database\Eloquent\Collection $modeloperifericos
 *
 * @package App\Models
 */
class Fabricanteperiferico extends Eloquent
{
	protected $table = 'fabricanteperiferico';
	protected $primaryKey = 'IdFabricantePeriferico';
	public $timestamps = false;

	protected $fillable = [
		'NomeFabricantePeriferico'
	];

	public function modeloperifericos()
	{
		return $this->hasMany(\App\Models\Modeloperiferico::class, 'IdFabricantePeriferico');
	}
}
