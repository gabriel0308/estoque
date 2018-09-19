<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 20:30:17 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * Class Analistum
 * 
 * @property float $IdAnalista
 * @property string $MatriculaAnalista
 * @property string $NomeAnalista
 * @property string $SenhaAnalista
 * @property string $remember_token
 * @property string $guard
 * 
 * @property \Illuminate\Database\Eloquent\Collection $computadors
 * @property \Illuminate\Database\Eloquent\Collection $movimentacaos
 * @property \Illuminate\Database\Eloquent\Collection $movperifericos
 *
 * @package App\Models
 */

class Analistum extends Eloquent implements
AuthenticatableContract,
AuthorizableContract,
CanResetPasswordContract
{
	
	use Authenticatable, Authorizable, CanResetPassword;

	protected $primaryKey = 'IdAnalista';
	public $timestamps = false;

	protected $hidden = [
		'remember_token'
	];

	protected $fillable = [
		'MatriculaAnalista',
		'NomeAnalista',
		'SenhaAnalista',
		'remember_token',
		'guard'
	];

	public function computadors()
	{
		return $this->hasMany(\App\Models\Computador::class, 'IdAnalista');
	}

	public function movimentacaos()
	{
		return $this->hasMany(\App\Models\Movimentacao::class, 'IdAnalista');
	}

	public function movperifericos()
	{
		return $this->hasMany(\App\Models\Movperiferico::class, 'IdAnalista');
	}
}
