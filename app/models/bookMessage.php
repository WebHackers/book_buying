<?php

class BookMessage extends Eloquent {

	protected $table = 'bookMessages';

	protected $guarded = array('id');

	public function author()
    {
        return $this->belongsTo('User');
    }

    public function writeFor()
    {
        return $this->belongsTo('bookBasic');
    }

}

?>