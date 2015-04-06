<?php

class ResultsTableSeeder extends Seeder {

	public function run()
	{
		/*
			$table->increments('id');
			$table->integer('user_id')				->unsigned();
			$table->integer('teacher_id')			->unsigned();
			$table->integer('subject_id')			->unsigned();
			$table->integer('final_mark');
			$table->integer('midterm_mark');
			$table->integer('total_class');
			$table->integer('present_class');
			$table->enum('term', [1, '2nd', '3rd']);
		*/
		$results = [	
					
						[	
						'user_id'		=> 6,
						'teacher_id'	=> 1,
						'subject_id'	=> 1,
						'final_mark'	=> 82,
						'midterm_mark'	=> 15,
						'total_class'	=> 60,
						'present_class'	=> 47,
						'term'			=> 1,
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')

						],

						[	
						'user_id'		=> 6,
						'teacher_id'	=> 2,
						'subject_id'	=> 2,
						'final_mark'	=> 80,
						'midterm_mark'	=> 17,
						'total_class'	=> 60,
						'present_class'	=> 47,
						'term'			=> 1,
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')

						],

						[	
						'user_id'		=> 6,
						'teacher_id'	=> 3,
						'subject_id'	=> 3,
						'final_mark'	=> 76,
						'midterm_mark'	=> 12,
						'total_class'	=> 60,
						'present_class'	=> 47,
						'term'			=> 1,
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')

						],



						//
						[	
						'user_id'		=> 7,
						'teacher_id'	=> 1,
						'subject_id'	=> 1,
						'final_mark'	=> 89,
						'midterm_mark'	=> 15,
						'total_class'	=> 60,
						'present_class'	=> 47,
						'term'			=> 1,
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')

						],

						[	
						'user_id'		=> 7,
						'teacher_id'	=> 2,
						'subject_id'	=> 2,
						'final_mark'	=> 85,
						'midterm_mark'	=> 17,
						'total_class'	=> 60,
						'present_class'	=> 47,
						'term'			=> 1,
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')

						],

						[	
						'user_id'		=> 7,
						'teacher_id'	=> 3,
						'subject_id'	=> 3,
						'final_mark'	=> 79,
						'midterm_mark'	=> 12,
						'total_class'	=> 60,
						'present_class'	=> 47,
						'term'			=> 1,
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')

						],




				 	];

		DB::table('results')->insert($results);
	}
}
