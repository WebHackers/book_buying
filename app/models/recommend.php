<?php

class Recommend extends Eloquent {

	protected $table = 'recommends';

	protected $guarded = array('id');

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function basic()
    {
        return $this->belongsTo('bookBasic');
    }

}

?>