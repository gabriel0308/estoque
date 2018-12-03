<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
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
 * @property \App\Models\ModeloPeriferico $modelo_periferico
 * @property \Illuminate\Database\Eloquent\Collection $mov_perifericos
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

	public function modelo_periferico()
	{
		return $this->belongsTo(\App\Models\ModeloPeriferico::class, 'IdModeloPeriferico');
	}

	public function mov_perifericos()
	{
		return $this->hasMany(\App\Models\MovPeriferico::class, 'IdPeriferico');
	}
}
