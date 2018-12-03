<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ticket
 * 
 * @property float $IdTicket
 * @property string $MatriculaUsuario
 * @property string $RamalUsuario
 * @property string $DepartamentoUsuario
 * @property string $UnidadeUsuario
 * @property float $NumeroTicket
 * 
 * @property \Illuminate\Database\Eloquent\Collection $mov_perifericos
 * @property \Illuminate\Database\Eloquent\Collection $movimentacaos
 *
 * @package App\Models
 */
class Ticket extends Eloquent
{
	protected $table = 'ticket';
	protected $primaryKey = 'IdTicket';
	public $timestamps = false;

	protected $casts = [
		'NumeroTicket' => 'float'
	];

	protected $fillable = [
		'MatriculaUsuario',
		'RamalUsuario',
		'DepartamentoUsuario',
		'UnidadeUsuario',
		'NumeroTicket'
	];

	public function mov_perifericos()
	{
		return $this->hasMany(\App\Models\MovPeriferico::class, 'IdTicket');
	}

	public function movimentacaos()
	{
		return $this->hasMany(\App\Models\Movimentacao::class, 'IdTicket');
	}
}
