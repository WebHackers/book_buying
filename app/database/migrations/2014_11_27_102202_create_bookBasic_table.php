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
			//$table->timestamps();
			$table->string('book_isbn');
			//$table->integer('act_id');
			$table->string('book_name');
			$table->string('book_author');
			$table->string('book_pub');
			$table->string('book_type');
			$table->string('book_edit');
			$table->text('book_info');
			$table->text('book_pic');
			$table->text('book_link');
			$table->float('book_price');
			//$table->string('book_status');
			$table->integer('favour');
			//$table->integer('dislike');
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
