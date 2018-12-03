<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FabricantePeriferico
 * 
 * @property float $IdFabricantePeriferico
 * @property string $NomeFabricantePeriferico
 * 
 * @property \Illuminate\Database\Eloquent\Collection $modelo_perifericos
 *
 * @package App\Models
 */
class FabricantePeriferico extends Eloquent
{
	protected $table = 'fabricantePeriferico';
	protected $primaryKey = 'IdFabricantePeriferico';
	public $timestamps = false;

	protected $fillable = [
		'NomeFabricantePeriferico'
	];

	public function modelo_perifericos()
	{
		return $this->hasMany(\App\Models\ModeloPeriferico::class, 'IdFabricantePeriferico');
	}
}
