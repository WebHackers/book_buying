<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookBasicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookBasic', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('act_id');
			$table->string('book_name');
			$table->string('book_author');
			$table->string('book_type');
			$table->string('book_info');
			$table->float('book_price');
			$table->string('book_status');
			$table->integer('like');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookBasic');
	}

}
