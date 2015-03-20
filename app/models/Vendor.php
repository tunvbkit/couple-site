<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
 
class Vendor extends Eloquent implements SluggableInterface
{
 
    use SluggableTrait;
 
    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );
	protected $table = 'vendors';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function location()
	{
    	return $this->belongsTo('Location', 'location');
  	}
  	public function category()
  	{
    	return $this->belongsTo('Category', 'category');
  	}
  	public function photoslide()
  	{
  		return $this->hasMany('PhotoSlide','photoslide');
  	}
  	public function rating()
  	{
  		return $this->hasMany('Rating','rating');
  	}
    public function business(){
      return $this->hasOne('Business','vendor');
    }
    public function message(){
      return $this->hasMany('Message','vendor');
    }
    public function album(){
      return $this->hasMany('Album','vendor');
    }
    public function avatar(){
      return $this->hasMany('Avatars','vendor');
    }
}
