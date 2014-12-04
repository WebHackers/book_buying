<?php

class BookMessage extends Eloquent {

	protected $table = 'bookMessage';

	protected $guarded = array('id');

	public function author()
    {
        return $this->belongsTo('User');
    }

    public function writeFor()
    {
        return $this->belongsTo('BookBasic', 'book_kind');
    }

}

?>