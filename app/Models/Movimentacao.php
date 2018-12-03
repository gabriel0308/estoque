<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Movimentacao
 * 
 * @property float $IdMovimentacao
 * @property float $IdComp
 * @property float $IdAnalista
 * @property float $IdTicket
 * @property string $TipoMovimentacao
 * @property \Carbon\Carbon $DataMovimentacao
 * 
 * @property \App\Models\Computador $computador
 * @property \App\Models\Analistum $analistum
 * @property \App\Models\Ticket $ticket
 *
 * @package App\Models
 */
class Movimentacao extends Eloquent
{
	protected $table = 'movimentacao';
	protected $primaryKey = 'IdMovimentacao';
	public $timestamps = false;

	protected $casts = [
		'IdComp' => 'float',
		'IdAnalista' => 'float',
		'IdTicket' => 'float'
	];

	protected $dates = [
		'DataMovimentacao'
	];

	protected $fillable = [
		'IdComp',
		'IdAnalista',
		'IdTicket',
		'TipoMovimentacao',
		'DataMovimentacao'
	];

	public function computador()
	{
		return $this->belongsTo(\App\Models\Computador::class, 'IdComp');
	}

	public function analistum()
	{
		return $this->belongsTo(\App\Models\Analistum::class, 'IdAnalista');
	}

	public function ticket()
	{
		return $this->belongsTo(\App\Models\Ticket::class, 'IdTicket');
	}
}
