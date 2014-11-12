<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookMessage', function(Blueprint $table)
		{
			$table->increments('id'); 
			$table->timestamps();
			$table->integer('book_id');
			$table->integer('user_id');
			$table->string('user_message');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookMessage');
	}

}
