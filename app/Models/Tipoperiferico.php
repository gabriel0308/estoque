<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Sep 2018 21:22:23 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tipoperiferico
 * 
 * @property float $IdTipoPeriferico
 * @property string $NomeTipoPeriferico
 * 
 * @property \Illuminate\Database\Eloquent\Collection $modeloperifericos
 *
 * @package App\Models
 */
class Tipoperiferico extends Eloquent
{
	protected $table = 'tipoperiferico';
	protected $primaryKey = 'IdTipoPeriferico';
	public $timestamps = false;

	protected $fillable = [
		'NomeTipoPeriferico'
	];

	public function modeloperifericos()
	{
		return $this->hasMany(\App\Models\Modeloperiferico::class, 'IdTipoPeriferico');
	}
}
