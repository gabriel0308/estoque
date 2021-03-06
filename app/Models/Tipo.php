<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tipo
 * 
 * @property float $IdTipo
 * @property string $NomeTipo
 * 
 * @property \Illuminate\Database\Eloquent\Collection $modelos
 *
 * @package App\Models
 */
class Tipo extends Eloquent
{
	protected $table = 'tipo';
	protected $primaryKey = 'IdTipo';
	public $timestamps = false;

	protected $fillable = [
		'NomeTipo'
	];

	public function modelos()
	{
		return $this->hasMany(\App\Models\Modelo::class, 'IdTipo');
	}
}
