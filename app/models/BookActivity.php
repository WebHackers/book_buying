<?php

class BookActivity extends Eloquent {

	protected $table = 'bookActivity';

	protected $guarded = array('id');

	public function recommend() {
		return $this->hasMany('Recommend', 'act_id');
	}
}

?>