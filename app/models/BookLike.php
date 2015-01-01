<?php 
	/**
	* 
	*/
	class BookLike extends Eloquent
	{
		public $timestamps = false;
		
		protected $table = 'bookLike';

		protected $guarded = array('id');
		
		public function user () {
			return $this->belongsTo('User');
		}

		public function book() {
			return $this->belongsTo('BookBasic', 'book_kind');
		}
	}

 ?>