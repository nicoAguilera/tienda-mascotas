<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $guarded = ['id'];
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre'];
	/**
	 * Relationship
	 */
	public function mascotas()
	{
		return $this->hasMany('App\Mascota');
	}
}
