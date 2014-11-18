<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookDetail', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('book_id');
			$table->string('buy_time');
			$table->text('book_pic');
			$table->text('book_link');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookDetail');
	}

}
