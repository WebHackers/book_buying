<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookActivity', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('act_period');
			$table->integer('act_budget');
			$table->integer('act_cost');
			$table->integer('act_sum');
			$table->boolean('act_status');
			$table->string('act_message');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookActivity');
	}

}
