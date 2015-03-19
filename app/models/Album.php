<?php
use Cviebrock\EloquentSluggable\SluggableInterface;
 
class Album extends Eloquent
{
 	protected $table = 'albums';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function vendor()
	{
		return $this->belongsTo("Vendor","vendor");
	}
	public function photo(){
		return $this->hasMany("PhotoSlide","vendor");
	}

}