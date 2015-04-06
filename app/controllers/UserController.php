<?php

class UserController extends BaseController {

	public function account($id)
	{
		$user =  User::find($id);//->toarray();
		$result= $res = DB::table('results')->where('user_id', $id)->get();

		

	/*	return $result;*/

		/*$name = DB::table('users')-> where('id', '6')->lists('name' , 'roll' );
		$res = DB::table('results')->where('user_id', '6')->lists('final_mark' , 'midterm_mark');*/
		/*return $name ;*/

		/*$res = Result::find(1);
		return $res;*/

		//return $user;


		return View::make('users.account')
						->with('user_id', $id)
						->with('title', 'Account')
						->with('user', $user);

						
	}

	public function update_profile($id)
	{
		$user =  User::find($id);

		return View::make('users.update_profile')
						->with('user', $user);

	}

	public function doUpdate()
	{
		$id = Input::get('user_id');
		$user =  User::find($id);

		$x= Input::get('roles_id');


		$rules = [
			'email'			=>	'required|email',
		];

		$credentials = [

			'email'			=>	Input::get('email'),
			
		];

		$validation = Validator::make($credentials, $rules);

		if($validation->fails())
		{
			
			return Redirect::back()
								->withInput()
								->withErrors($validation);
		}
		else
		{
			if(Input::has('name'))			$user->name			=  Input::get('name');
			if(Input::has('roles_id'))		$user->roles_id 	=  $x;
			if(Input::has('fathers_name'))	$user->fathers_name	=  Input::get('fathers_name');
			if(Input::has('class'))			$user->class		=  Input::get('class');
			if(Input::has('roll'))			$user->roll			=  Input::get('roll');
			if(Input::has('section'))		$user->section		=  Input::get('section');
			if(Input::has('gender'))		$user->gender		=  Input::get('gender');
			if(Input::has('age'))			$user->age			=  Input::get('age');
			if(Input::has('address'))		$user->address		=  Input::get('address');
			if(Input::has('contact'))		$user->contact		=  Input::get('contact');
			if(Input::has('designation'))	$user->designation	=  Input::get('designation');
			if(Input::has('major_sub'))		$user->major_sub	=  Input::get('major_sub');

			
			if($user->save())
			{
				return Redirect::route('account', ['id' => $id]);
			}
			else
			{
				return Redirect::back()
								->withInput()
								->with('error', 'Some error occured! Try again!');
			}
		}
		

	}

	public function remove($id)
	{
		$user =  User::find($id);

		$user->delete();

		return Redirect::route('tabulationList');
						

	}




	public function result($id)
	{
		$user =  User::find($id);
		return View::make('users.result')
						->with('user_id', $id)
						->with('user', $user);
	}


	public function resultInput($student_id, $teacher_id)
	{
		$user =  User::find($student_id);
		return View::make('users.resultInput')
						->with('student_id', $student_id)
						->with('teacher_id', $teacher_id)
						->with('user', $user);
	}

	public function resultUpdate($id, $ter, $sub)
	{
		$result= DB::table('results')->where('user_id', $id)
									->where('term', $ter)
									->where('subject_id', $sub)
									->first();

		return View::make('users.resultUpdate')
						->with('student_id', $id)
						->with('term_id', $ter)
						->with('subject_id', $sub);
	}

	public function doresultInput()
	{

		$rules = [
			'final_mark'		=>	'required',
			'midterm_mark'		=>	'required',
			'present_class'		=> 	'required',
			'total_class'		=>	'required'
		];

		$credentials = [

			'final_mark'		=>	Input::get('final_mark'),
			'midterm_mark'		=>	Input::get('midterm_mark'),
			'present_class'		=> 	Input::get('present_class'),
			'total_class'		=>	Input::get('total_class')

		];

		$validation = Validator::make($credentials, $rules);

		if($validation->fails())
		{
			
			return Redirect::back()
								->withInput()
								->withErrors($validation);
		}
		else
		{

			$result = new Result;

			$result->user_id 		= Input::get('student_id');
			$result->teacher_id 	= Input::get('teacher_id');
			$result->subject_id		= Input::get('subject_id');
			$result->final_mark 	= Input::get('final_mark');
			$result->midterm_mark	= Input::get('midterm_mark');
			$result->total_class	= Input::get('total_class');
			$result->present_class	= Input::get('present_class');
			$result->term			= Input::get('term');

			$oldResult= DB::table('results')->where('user_id', $result->user_id)
									->where('term', $result->term)
									->where('subject_id', $result->subject_id)
									->first();

			if( !is_null($oldResult) )
			{
				return Redirect::back()
									->withInput()
									->with('error', 'Another result was inserted Before, So you need to Update that resut! You cant Insert same result twice');
			}


			if($result->final_mark >100 or $result->midterm_mark >20)
			{
				return Redirect::back()
								->withInput()
								->withErrors("Number must be less than Fullmarks");
			}
			elseif ($result->present_class>$result->total_class) {
				return Redirect::back()
								->withInput()
								->withErrors("Attendence must be less than Total Class");
			}
			else{
				if($result->save())
				{
					return Redirect::route('tabulationList');
				}
				else
				{
					return Redirect::back()
									->withInput()
									->with('error', 'Some error occured! Try again!');
				}
			}
		}
	}

	public function doresultUpdate()
	{

		$rules = [
			'final_mark'		=>	'required',
			'midterm_mark'		=>	'required',
			'present_class'		=> 	'required',
			'total_class'		=>	'required'
		];

		$credentials = [

			'final_mark'		=>	Input::get('final_mark'),
			'midterm_mark'		=>	Input::get('midterm_mark'),
			'present_class'		=> 	Input::get('present_class'),
			'total_class'		=>	Input::get('total_class')

		];

		$validation = Validator::make($credentials, $rules);

		if($validation->fails())
		{
			
			return Redirect::back()
								->withInput()
								->withErrors($validation);
		}
		else
		{

			$student_id 	= Input::get('student_id');
			$ter 	= Input::get('term_id');
			$sub 	= Input::get('subject_id');

			$oldResult= DB::table('results')->where('user_id', $student_id)
									->where('term', $ter)
									->where('subject_id', $sub)
									->first();
			
			$oldId= $oldResult->id;

			$result = Result::find($oldId);


			//$result->user_id 		= Input::get('student_id');
			//$result->teacher_id 	= Input::get('teacher_id');
			//$result->subject_id		= Input::get('subject_id');
			$result->final_mark 	= Input::get('final_mark');
			$result->midterm_mark	= Input::get('midterm_mark');
			$result->total_class	= Input::get('total_class');
			$result->present_class	= Input::get('present_class');
			//$result->term			= Input::get('term');


			if($result->final_mark >100 or $result->midterm_mark >20)
			{
				return Redirect::back()
								->withInput()
								->withErrors("Number must be less than Fullmarks");
			}
			elseif ($result->present_class>$result->total_class) {
				return Redirect::back()
								->withInput()
								->withErrors("Attendence must be less than Total Class");
			}
			else{

				if($result->save())
				{
					return Redirect::route('tabulationList');
				}
				else
				{
					return Redirect::back()
									->withInput()
									->with('error', 'Some error occured! Try again!');
				}
			}
		}
		
		


	}

	/*public function editAccount($id)
	{
		$user = User::find($id);
		
		return View::make('users.editAccount')
						->with('title', 'Edit Account')
						->with('user', $user);
	}

	public function doEditAccount($id)
	{
		$rules = [
			'name'		=>	'required',
			'email'		=>	'required|email'
		];

		$credentials = [
			'name'		=>	Input::get('name'),
			'email'		=>	Input::get('email')
		];

		$validation = Validator::make($credentials, $rules);

		if($validation->fails())
		{
			return Redirect::back()
								->withInput()
								->withErrors($validation);
		}
		else
		{
			$user = User::find($id);
			$user->name = Input::get('name');
			$user->email = Input::get('email');

			if(Input::has('password'))	$user->password = Hash::make(Input::get('password'));

			if($user->save())
			{
				return Redirect::route('account', ['id' => $id]);
			}
			else
			{
				return Redirect::back()
								->withInput()
								->with('error', 'Some error occured! Try again!');
			}
		}
	}*/


}
