<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('results', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')				->unsigned();
			$table->integer('teacher_id')			->unsigned();
			$table->integer('subject_id')			->unsigned();
			$table->integer('final_mark');
			$table->integer('midterm_mark');
			$table->integer('total_class');
			$table->integer('present_class');
			$table->integer('term');
			$table->timestamps();


			$table->foreign('user_id')
					->references('id')->on('users')
					->onUpdate('cascade')
					->onDelete('cascade');

			$table->foreign('teacher_id')
					->references('id')->on('users')
					->onUpdate('cascade')
					->onDelete('cascade');

			$table->foreign('subject_id')
					->references('id')->on('subjects')
					->onUpdate('cascade')
					->onDelete('cascade');
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
		Schema::drop('results');
	}

}
