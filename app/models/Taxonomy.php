<?php
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
 
class Taxonomy extends Eloquent implements SluggableInterface
{
 
    use SluggableTrait;
 
    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */	
	public function article()
	{
		return $this->hasMany("Article",'taxonomy');

	}

}