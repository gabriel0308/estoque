<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Mar 2018 14:00:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tipo
 * 
 * @property float $Idtipo
 * @property string $NomeTipo
 * 
 * @property \Illuminate\Database\Eloquent\Collection $modelos
 *
 * @package App\Models
 */
class Tipo extends Eloquent
{
	protected $table = 'tipo';
	protected $primaryKey = 'Idtipo';
	public $timestamps = false;

	protected $fillable = [
		'NomeTipo'
	];

	public function modelos()
	{
		return $this->hasMany(\App\Models\Modelo::class, 'IdTipo');
	}
}
