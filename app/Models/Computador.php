<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 21:22:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Computador
 * 
 * @property float $IdComp
 * @property float $IdModelo
 * @property float $IdAnalista
 * @property string $SerialComp
 * @property string $HostnameComp
 * @property string $StatusComp
 * @property string $ObservacaoComp
 * @property string $LacreComp
 * @property \Carbon\Carbon $DataCadastroComp
 * 
 * @property \App\Models\Modelo $modelo
 * @property \App\Models\Analistum $analistum
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
		'IdModelo' => 'float',
		'IdAnalista' => 'float'
	];

	protected $dates = [
		'DataCadastroComp'
	];

	protected $fillable = [
		'IdModelo',
		'IdAnalista',
		'SerialComp',
		'HostnameComp',
		'StatusComp',
		'ObservacaoComp',
		'LacreComp',
		'DataCadastroComp'
	];

	public function modelo()
	{
		return $this->belongsTo(\App\Models\Modelo::class, 'IdModelo');
	}

	public function analistum()
	{
		return $this->belongsTo(\App\Models\Analistum::class, 'IdAnalista');
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
