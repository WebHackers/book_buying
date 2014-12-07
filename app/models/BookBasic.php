<?php

class BookBasic extends Eloquent {

    public $timestamps = false;

	protected $table = 'bookBasic';

	protected $guarded = array('id');
 
    public function recomInfo()
    {
        return $this->hasOne('BookRecommend', 'book_kind');
    }

    public function message()
    {
        return $this->hasMany('BookMessage', 'book_kind');
    }

    public function like(){
        return $this->hasMany('BookLike', 'book_kind');
    }

    public function bookList() {
        return $this->hasMany('BookList', 'book_kind');
    }

}

?>