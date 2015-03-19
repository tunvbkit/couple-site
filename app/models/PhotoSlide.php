<?php

class PhotoSlide extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'photoslide';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function album()
	{
		return $this->belongsTo('Album','vendor');
	}

	

}
