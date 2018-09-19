<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 21:22:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Movperiferico
 * 
 * @property float $IdMovPeriferico
 * @property float $IdPeriferico
 * @property float $IdAnalista
 * @property float $IdTicket
 * @property string $TipoMovPeriferico
 * @property \Carbon\Carbon $DataMovPeriferico
 * 
 * @property \App\Models\Analistum $analistum
 * @property \App\Models\Ticket $ticket
 * @property \App\Models\Periferico $periferico
 *
 * @package App\Models
 */
class Movperiferico extends Eloquent
{
	protected $table = 'movperiferico';
	protected $primaryKey = 'IdMovPeriferico';
	public $timestamps = false;

	protected $casts = [
		'IdPeriferico' => 'float',
		'IdAnalista' => 'float',
		'IdTicket' => 'float'
	];

	protected $dates = [
		'DataMovPeriferico'
	];

	protected $fillable = [
		'IdPeriferico',
		'IdAnalista',
		'IdTicket',
		'TipoMovPeriferico',
		'DataMovPeriferico'
	];

	public function analistum()
	{
		return $this->belongsTo(\App\Models\Analistum::class, 'IdAnalista');
	}

	public function ticket()
	{
		return $this->belongsTo(\App\Models\Ticket::class, 'IdTicket');
	}

	public function periferico()
	{
		return $this->belongsTo(\App\Models\Periferico::class, 'IdPeriferico');
	}
}
