<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 21:22:23 +0000.
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
 * @property \Illuminate\Database\Eloquent\Collection $movimentacaos
 * @property \Illuminate\Database\Eloquent\Collection $movperifericos
 *
 * @package App\Models
 */
class Ticket extends Eloquent
{
	protected $table = 'ticket';
	protected $primaryKey = 'IdTicket';
	public $timestamps = false;

	protected $fillable = [
		'MatriculaUsuario',
		'RamalUsuario',
		'DepartamentoUsuario',
		'UnidadeUsuario',
		'NumeroTicket'
	];

	public function movimentacaos()
	{
		return $this->hasMany(\App\Models\Movimentacao::class, 'IdTicket');
	}

	public function movperifericos()
	{
		return $this->hasMany(\App\Models\Movperiferico::class, 'IdTicket');
	}
}
