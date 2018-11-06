<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $guarded = ['id'];
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'sexo', 'fecha_nacimiento', 'fecha_muerte', 'fecha_alta', 'observaciones'];
	/**
	* The attributes that be mutated to dates
	*
	* @var string
	*/
	protected $dates = ['fecha_nacimiento', 'fecha_muerte', 'fecha_alta'];
	/**
	 * Relationship
	 */
	public function especie()
	{
		return $this->belongsTo('App\Especie');
	}
}
