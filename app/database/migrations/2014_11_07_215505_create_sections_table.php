<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('sections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('class');
			$table->string('section_name');
			$table->integer('teacher_id')-> unsigned();
			$table->timestamps();

			$table->foreign('teacher_id')
					->references('id')->on('users')
					->onUpdate('cascade')
					->onDelete('cascade');

		});

		/*Schema::table('sections', function($table) {
       		$table->foreign('teacher_id')->references('id')->on('users');
   		});*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('sections');
	}

}
