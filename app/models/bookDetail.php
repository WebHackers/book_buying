<?php

class BookDetail extends Eloquent {

	protected $table = 'bookDetails';

	protected $guarded = array('id');

	public function basic()
    {
        return $this->belongsTo('bookBasic');
    }

}

?>