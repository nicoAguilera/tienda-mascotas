<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $guarded = ['id'];
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];
	/**
	 * Relationship
	 */
	public function mascotas()
	{
		return $this->hasMany('App\Pet');
	}
}
