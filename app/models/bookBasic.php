<?php

class BookBasic extends Eloquent {

	protected $table = 'bookBasic';

	protected $guarded = array('id');

	public function detail()
    {
        return $this->hasOne('bookDetail');
    }

    public function recomInfo()
    {
        return $this->hasOne('recommend');
    }

    public function message()
    {
        return $this->hasMany('bookMessage');
    }

    public function activity()
    {
        return $this->belongsTo('Activity');
    }

}

?>