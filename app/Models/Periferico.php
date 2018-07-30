<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 18 Jul 2018 22:32:39 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Periferico
 * 
 * @property float $IdPeriferico
 * @property float $IdModelo
 * @property string $StatusPeriferico
 * @property \Carbon\Carbon $DataCadastroPeriferico
 * 
 * @property \App\Models\Modelo $modelo
 * @property \Illuminate\Database\Eloquent\Collection $movperifericos
 *
 * @package App\Models
 */
class Periferico extends Eloquent
{
	protected $table = 'periferico';
	protected $primaryKey = 'IdPeriferico';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IdPeriferico' => 'float',
		'IdModelo' => 'float'
	];

	protected $fillable = [
		'IdModelo',
		'StatusPeriferico',
		'DataCadastroPeriferico'
	];

	public function modelo()
	{
		return $this->belongsTo(\App\Models\Modelo::class, 'IdModelo');
	}

	public function movperifericos()
	{
		return $this->hasMany(\App\Models\Movperiferico::class, 'IdPeriferico');
	}
}
