<?php

class BookDetail extends Eloquent {

	protected $table = 'bookDetail';

	protected $guarded = array('id');

	public function basic()
    {
        return $this->belongsTo('BookBasic');
    }

}

?>