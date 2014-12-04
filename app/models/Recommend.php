<?php

class Recommend extends Eloquent {

	protected $table = 'recommend';

	protected $guarded = array('id');

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function basic()
    {
        return $this->belongsTo('BookBasic', 'book_kind');
    }

    public function activity() {
        return $this->belongsTo('BookActivity', 'act_id');
    }

}

?>