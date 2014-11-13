<?php

class Activity extends Eloquent {

	protected $table = 'activity';

	protected $guarded = array('id');

	public function book()
    {
        return $this->hasMany('bookBasic');
    }

}

?>