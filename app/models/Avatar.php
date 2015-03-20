<?php

class Avatar extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'avatars';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function vendor()
	{
		return $this->belongsTo("Vendor","vendor");
	}

}