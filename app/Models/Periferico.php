<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 21:22:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Periferico
 * 
 * @property float $IdPeriferico
 * @property string $StatusPeriferico
 * @property float $IdModeloPeriferico
 * 
 * @property \App\Models\Modeloperiferico $modeloperiferico
 * @property \Illuminate\Database\Eloquent\Collection $movperifericos
 *
 * @package App\Models
 */
class Periferico extends Eloquent
{
	protected $table = 'periferico';
	protected $primaryKey = 'IdPeriferico';
	public $timestamps = false;

	protected $casts = [
		'IdModeloPeriferico' => 'float'
	];

	protected $fillable = [
		'StatusPeriferico',
		'IdModeloPeriferico'
	];

	public function modeloperiferico()
	{
		return $this->belongsTo(\App\Models\Modeloperiferico::class, 'IdModeloPeriferico');
	}

	public function movperifericos()
	{
		return $this->hasMany(\App\Models\Movperiferico::class, 'IdPeriferico');
	}
}
