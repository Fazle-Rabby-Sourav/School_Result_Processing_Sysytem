
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('roles_id')				->unsigned();
			$table->string('name');
			$table->string('email')					->unique();
			$table->string('password');
			$table->string('fathers_name');
			$table->integer('age');
			$table->enum('gender', ['Male', 'Female']);
			$table->text('address')					->nullable();
			$table->string('contact', 20)			->nullable();
			$table->date('date_of_birth')			->nullable();

			//for student
			$table->integer('class')				->nullable();
			$table->enum('section', ['A', 'B', 'C'])->nullable();
			$table->integer('roll')					->nullable();

			// For teacher 
			$table->string('designation')			->nullable();
			$table->string('major_sub')				->nullable();

			$table->string('remember_token');
			$table->timestamps();

			$table->foreign('roles_id')
					->references('id')->on('roles')
					->onUpdate('cascade')
					->onDelete('cascade');
		});

		/*Schema::table('users', function($table) {
       	$table->foreign('roles_id')->references('id')->on('roles');
   		});*/
	}

	public function down()
	{
		Schema::drop('users');
	}

}
