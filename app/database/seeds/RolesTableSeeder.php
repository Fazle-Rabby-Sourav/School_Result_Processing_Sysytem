<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		/*
			$table->string('name', 60);
			$table->string('email', 50)->unique();
			$table->integer('can_post');

			$table->increments('id');
			$table->string('role_name');
			$table->timestamps();
		*/
		$roles = [	

					[	
						'role_name'		=> 'Teacher',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')

					],

					[
						'role_name'		=> 'Student',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

					[
						'role_name'		=> 'Staff',
						'created_at' 		=>	date('Y-m-d H-i-s'),
						'updated_at' 		=>	date('Y-m-d H-i-s')
					],

				 ];

		DB::table('roles')->insert($roles);
	}
}
