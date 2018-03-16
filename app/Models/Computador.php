<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Mar 2018 14:00:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Computador
 * 
 * @property float $IdComp
 * @property float $IdModelo
 * @property string $SerialComp
 * @property string $HostnameComp
 * @property string $StatusComp
 * @property string $ObservacaoComp
 * 
 * @property \App\Models\Modelo $modelo
 * @property \Illuminate\Database\Eloquent\Collection $movimentacaos
 * @property \Illuminate\Database\Eloquent\Collection $software
 *
 * @package App\Models
 */
class Computador extends Eloquent
{
	protected $table = 'computador';
	protected $primaryKey = 'IdComp';
	public $timestamps = false;

	protected $casts = [
		'IdModelo' => 'float'
	];

	protected $fillable = [
		'IdModelo',
		'SerialComp',
		'HostnameComp',
		'StatusComp',
		'ObservacaoComp'
	];

	public function modelo()
	{
		return $this->belongsTo(\App\Models\Modelo::class, 'IdModelo');
	}

	public function movimentacaos()
	{
		return $this->hasMany(\App\Models\Movimentacao::class, 'IdComp');
	}

	public function software()
	{
		return $this->hasMany(\App\Models\Software::class, 'IdComp');
	}
}
