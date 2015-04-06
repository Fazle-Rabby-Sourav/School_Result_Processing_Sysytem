<?php

class SubjectsTableSeeder extends Seeder {

	public function run()
	{
		/*
			$table->increments('id');
			$table->string('title')->unique();
			$table->text('details');
			$table->timestamps();
		*/
		$subjects = [	
					
						

						[
							'title' 			=> 'ENG05',
							'details' 			=> '',
							'created_at' 		=>	date('Y-m-d H-i-s'),
							'updated_at' 		=>	date('Y-m-d H-i-s')
						],

						[
							'title' 			=> 'BAN05',
							'details' 			=> '',
							'created_at' 		=>	date('Y-m-d H-i-s'),
							'updated_at' 		=>	date('Y-m-d H-i-s')
						],

						[
							'title' 			=> 'MATH05',
							'details' 			=> 'Math of class five',
							'created_at' 		=>	date('Y-m-d H-i-s'),
							'updated_at' 		=>	date('Y-m-d H-i-s')
						],

						[
							'title' 			=> 'GSCIENCE05',
							'details' 			=> '',
							'created_at' 		=>	date('Y-m-d H-i-s'),
							'updated_at' 		=>	date('Y-m-d H-i-s')
						],

						[
							'title' 			=> 'SSCIENCE05',
							'details' 			=> '',
							'created_at' 		=>	date('Y-m-d H-i-s'),
							'updated_at' 		=>	date('Y-m-d H-i-s')
						],


				 ];

		DB::table('subjects')->insert($subjects);
	}
}
