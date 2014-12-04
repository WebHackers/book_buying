<?php 
	/**
	* 
	*/
	class BookList extends Eloquent
	{
		protected $table = 'bookList';

		protected $guarded = array('id');
		
		public function user () {
			return $this->belongsTo('User');
		}

		public function book() {
			return $this->belongsTo('BookBasic', 'book_kind')
		}
	}

 ?>