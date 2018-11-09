<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $guarded = ['id'];
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'gender', 'birthdate', 'death_date', 'discharge_date', 'observation'];
	/**
	* The attributes that be mutated to dates
	*
	* @var string
	*/
	protected $dates = ['birthdate', 'death_date', 'discharge_date'];
	/**
	 * Relationship
	 */
	public function species()
	{
		return $this->belongsTo('App\Species');
	}
}
