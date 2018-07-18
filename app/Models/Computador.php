<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 18 Jul 2018 22:32:39 +0000.
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
 * @property string $LacreComp
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
		'ObservacaoComp',
		'LacreComp'
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
