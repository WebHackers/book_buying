<?php

class Activity extends Eloquent {

	protected $table = 'bookActivity';

	protected $guarded = array('id');

	public function book()
    {
        return $this->hasMany('BookBasic');
    }

}

?>