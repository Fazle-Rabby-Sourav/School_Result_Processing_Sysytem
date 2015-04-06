<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		/*
			$table->increments('id');
			$table->integer('roles_id')				->unsigned();
			$table->string('name', 60);
			$table->string('email', 50)				->unique();
			$table->string('password', 30);
			$table->integer('is_teacher');
			$table->string('fathers_name', 60);
			$table->integer('class')				->nullable();
			$table->enum('section', ['A', 'B', 'C'])->nullable();
			$table->integer('roll')					->nullable();
			$table->integer('age');
			$table->enum('gender', ['Male', 'Female']);
			$table->string('contact_no', 20);
			$table->text('adress')					->nullable();
			$table->date('date_of_birth')			->nullable();
			$table->string('major_sub')				->nullable();
			$table->string('remember_token');
			$table->timestamps();
		*/
		$users = [	
					[
						'name' 				=> 'teacher1',
						'roles_id'			=> 1,
						'email' 			=> 'teacher1@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'teacher1Dad',
						'class'				=> 9,
						'section'			=> 'A',
						'roll'				=> 99,
						'age'				=> 40,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> 'Head Master',
						'major_sub'			=>  'Bangla',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'name' 				=> 'teacher2',
						'roles_id'			=> 1,
						'email' 			=> 'teacher2@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'teacher2Dad',
						'class'				=> 9,
						'section'			=> 'A',
						'roll'				=> 99,
						'age'				=> 40,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> 'Senior Teacher',
						'major_sub'			=>  'English',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'name' 				=> 'teacher3',
						'roles_id'			=> 1,
						'email' 			=> 'teacher3@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'teacher3Dad',
						'class'				=> 9,
						'section'			=> 'A',
						'roll'				=> 99,
						'age'				=> 40,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> 'Senior Teacher',
						'major_sub'			=>  'Math',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],


					[
						'name' 				=> 'teacher4',
						'roles_id'			=> 1,
						'email' 			=> 'teacher4@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'teacher4Dad',
						'class'				=> 9,
						'section'			=> 'A',
						'roll'				=> 99,
						'age'				=> 40,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> 'Senior Teacher',
						'major_sub'			=>  'Math',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'name' 				=> 'teacher5',
						'roles_id'			=> 1,
						'email' 			=> 'teacher5@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'teacher5Dad',
						'class'				=> 9,
						'section'			=> 'A',
						'roll'				=> 99,
						'age'				=> 40,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> 'Senior Teacher',
						'major_sub'			=>  'Math',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],



					// STUDENTS

					[
						'name' 				=> 'stud1',
						'roles_id'			=> 2,
						'email' 			=> 'stud1@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'stud1Dad',
						'class'				=> 5,
						'section'			=> 'A',
						'roll'				=> 1,
						'age'				=> 18,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> '',
						'major_sub'			=>  '',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'name' 				=> 'stud2',
						'roles_id'			=> 2,
						'email' 			=> 'stud2@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'stud2Dad',
						'class'				=> 5,
						'section'			=> 'A',
						'roll'				=> 2,
						'age'				=> 18,
						'gender'			=> 'Female',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> '',
						'major_sub'			=>  '',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'name' 				=> 'stud3',
						'roles_id'			=> 2,
						'email' 			=> 'stud3@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'stud3Dad',
						'class'				=> 5,
						'section'			=> 'B',
						'roll'				=> 1,
						'age'				=> 18,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> '',
						'major_sub'			=>  '',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'name' 				=> 'stud4',
						'roles_id'			=> 2,
						'email' 			=> 'stud4@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'stud4Dad',
						'class'				=> 5,
						'section'			=> 'B',
						'roll'				=> 2,
						'age'				=> 18,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> '',
						'major_sub'			=>  '',

						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'name' 				=> 'stud5',
						'roles_id'			=> 2,
						'email' 			=> 'stud5@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'stud1Dad',
						'class'				=> 5,
						'section'			=> 'A',
						'roll'				=> 3,
						'age'				=> 18,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> '',
						'major_sub'			=>  '',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'name' 				=> 'stud6',
						'roles_id'			=> 2,
						'email' 			=> 'stud6@gmail.com',
						'password'			=> 	Hash::make('1'),
						'fathers_name'		=> 'stud6Dad',
						'class'				=> 5,
						'section'			=> 'B',
						'roll'				=> 3,
						'age'				=> 18,
						'gender'			=> 'Male',
						'contact'			=> 111,
						'address'			=> 'Adress: Sylhet',
						'date_of_birth'		=>  date('Y-m-d H-i-s'),
						'designation'		=> '',
						'major_sub'			=>  '',
						'remember_token'	=> 	'',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],
				 ];

		DB::table('users')->insert($users);
	}
}
