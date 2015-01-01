<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooklistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('bookList', function(Blueprint $table){
			$table->increments('id'); 
			$table->integer('book_kind');
			//$table->timestamps();
			$table->date('book_time');
			$table->string('book_status');
			$table->integer('act_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
