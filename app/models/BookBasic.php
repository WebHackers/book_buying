<?php

class BookBasic extends Eloquent {

	protected $table = 'bookBasic';

	protected $guarded = array('id');

	public function detail()
    {
        return $this->hasOne('BookDetail');
    }
 
    public function recomInfo()
    {
        return $this->hasOne('Recommend');
    }

    public function message()
    {
        return $this->hasMany('BookMessage');
    }

    public function activity()
    {
        return $this->belongsTo('Activity');
    }

}

?>