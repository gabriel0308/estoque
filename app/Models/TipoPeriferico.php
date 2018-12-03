<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Dec 2018 19:49:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TipoPeriferico
 * 
 * @property float $IdTipoPeriferico
 * @property string $NomeTipoPeriferico
 * 
 * @property \Illuminate\Database\Eloquent\Collection $modelo_perifericos
 *
 * @package App\Models
 */
class TipoPeriferico extends Eloquent
{
	protected $table = 'TipoPeriferico';
	protected $primaryKey = 'IdTipoPeriferico';
	public $timestamps = false;

	protected $fillable = [
		'NomeTipoPeriferico'
	];

	public function modelo_perifericos()
	{
		return $this->hasMany(\App\Models\ModeloPeriferico::class, 'IdTipoPeriferico');
	}
}
