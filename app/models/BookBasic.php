<?php

class BookBasic extends Eloquent {

	protected $table = 'bookBasic';

	protected $guarded = array('id');
 
    public function recomInfo()
    {
        return $this->hasOne('Recommend', 'book_kind');
    }

    public function message()
    {
        return $this->hasMany('BookMessage', 'book_kind');
    }

    public function like(){
        return $this->hasMany('BookLike', 'book_kind');
    }

    public function list() {
        return $this->hasMany('BookList', 'book_kind');
    }

}

?>