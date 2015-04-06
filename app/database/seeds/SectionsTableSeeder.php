<?php

class SectionsTableSeeder extends Seeder {

	public function run()
	{
		/*
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
		*/
		$sections = [	
						[
							'class' 			=> 5,
							'section_name' 		=> 'A',
							'teacher_id'		=> 2,
							'created_at' 		=>	date('Y-m-d H-i-s'),
							'updated_at' 		=>	date('Y-m-d H-i-s')
						],

						[
							'class' 			=> 5,
							'section_name' 		=> 'B',
							'teacher_id'		=> 2,
							'created_at' 		=>	date('Y-m-d H-i-s'),
							'updated_at' 		=>	date('Y-m-d H-i-s')
						],

				 ];

		DB::table('sections')->insert($sections);
	}
}
