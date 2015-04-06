<?php

class AuthController extends BaseController {

	public function login()
	{

		return View::make('auth.login');
	}

	public function doLogin()
	{
		$rules = [
			'email'		=>	'required|email',
			'password'	=>	'required'
		];

		$credentials = [
			'email'		=>	Input::get('email'),
			'password'	=>	Input::get('password')
		];

		
		/*$users = DB::table('users')->where('email', 'sourav@gmail.com' )->get();*/
		


		$validation = Validator::make($credentials, $rules);
		
		if($validation->fails())
		{
			return Redirect::back()
								->withInput()
								->withErrors($validation);
		}
		else
		{
			if(Auth::attempt($credentials))
			{
				
				return Redirect::route('home');
			}
			else
			{
				
				return Redirect::back()
								->withInput()
								->with('error', 'Error in email address or password!');
			}
		}
	}



	public function doLogout()
	{
		Auth::logout();
		return Redirect::route('login')
							->with('success', 'You have logged out successfully.');
	}



	public function registrationList()
	{
		return View::make('auth.registrationList')
						->with('title', 'RegistrationList');
	}





	public function registrationStudent()
	{
		return View::make('auth.registrationStudent')
						->with('roles_id', '2');
	}






	public function registrationTeacher()
	{
		return View::make('auth.registrationTeacher')
						->with('roles_id', '1');
	}






	public function doRegistration()
	{
		$rules = [
			'name'			=>	'required',
			'fathers_name'	=> 	'required',
			'age'			=> 	'required',
			'gender'		=>	'required',
			/*'address'		=> 	'required',*/
			'email'			=>	'required|email',
			'password'		=>	'required'
		];

		$credentials = [
			'name'			=>	Input::get('name'),
			'fathers_name'	=> 	Input::get('fathers_name'),
			'gender'		=>  Input::get('gender'),
			'age'			=>  Input::get('age'),
			'address'		=>  Input::get('address'),
			'contact'		=>  Input::get('contact'),

			'email'			=>	Input::get('email'),
			'password'		=>	Input::get('password')
		];

		//return $credentials;

		$validation = Validator::make($credentials, $rules);

		if($validation->fails())
		{
			return 'validation failss';
			/*return Redirect::back()
								->withInput()
								->withErrors($validation);*/
		}
		else
		{

			$user = new User;

			$user->name			=  Input::get('name');
			$user->roles_id 	=  Input::get('roles_id');
			$user->fathers_name	=  Input::get('fathers_name');
			$user->class		=  Input::get('class');
			$user->roll			=  Input::get('roll');
			$user->section		=  Input::get('section');
			$user->gender		=  Input::get('gender');
			$user->age			=  Input::get('age');
			$user->address		=  Input::get('address');
			$user->contact		=  Input::get('contact');
			$user->designation	=  Input::get('designation');
			$user->major_sub	=  Input::get('major_sub');

			$user->email		=	Input::get('email');
			$user->password		=	Hash::make(Input::get('password'));


			if($user->save())
			{
				return Redirect::route('registrationList')
									->with('success', 'You have registered successfully.');
			}
			else
			{
				return Redirect::back()
								->withInput()
								->with('error', 'An error occured! Try again!');
			}
		}
	}
}
