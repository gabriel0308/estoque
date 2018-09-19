<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 21:22:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Software
 * 
 * @property float $IdSoftware
 * @property float $IdComp
 * @property string $NomeSoftware
 * @property string $VersaoSoftware
 * @property string $SerialSoftware
 * 
 * @property \App\Models\Computador $computador
 *
 * @package App\Models
 */
class Software extends Eloquent
{
	protected $primaryKey = 'IdSoftware';
	public $timestamps = false;

	protected $casts = [
		'IdComp' => 'float'
	];

	protected $fillable = [
		'IdComp',
		'NomeSoftware',
		'VersaoSoftware',
		'SerialSoftware'
	];

	public function computador()
	{
		return $this->belongsTo(\App\Models\Computador::class, 'IdComp');
	}
}
