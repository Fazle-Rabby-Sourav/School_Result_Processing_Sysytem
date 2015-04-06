<?php

class PageController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index(){

		return View::make('pages.home');
	}

	

	public function tabulationList(){


		$users = User::where('roles_id', '=', '2')->get();


		return View::make('pages.tabulationList')
						->with('users', $users);
	}

	public function tabulation($class_id, $section_id){


		$sec= 'A';
		if($section_id==1){
			$users = User::where('roles_id', '=', '2')->where('class', '=', $class_id)->where('section', '=', 'A')->get();
			$sec='A';
		}
		else if($section_id==2){
			$users = User::where('roles_id', '=', '2')->where('class', '=', $class_id)->where('section', '=', 'B')->get();
			$sec='B';
		}
		else{
			$users = User::where('roles_id', '=', '2')->where('class', '=', $class_id)->where('section', '=', 'C')->get();
			$sec='C';
		}

		return View::make('pages.tabulation')
						->with('section_id', $sec)
						->with('class_id', $class_id)
						->with('users', $users);
	}
	
	public function sectionList(){


		$users = User::where('roles_id', '=', '2')->get();


		return View::make('pages.sectionList')
						->with('users', $users);
	}


	public function studentList($class_id, $section_id){

		$sec= 'A';
		if($section_id==1){
			$users = User::where('roles_id', '=', '2')->where('class', '=', $class_id)->where('section', '=', 'A')->get();
			$sec='A';
		}
		else if($section_id==2){
			$users = User::where('roles_id', '=', '2')->where('class', '=', $class_id)->where('section', '=', 'B')->get();
			$sec='B';
		}
		else{
			$users = User::where('roles_id', '=', '2')->where('class', '=', $class_id)->where('section', '=', 'C')->get();
			$sec='C';
		}

		return View::make('pages.studentList')
						->with('section_id', $sec)
						->with('class_id', $class_id)
						->with('users', $users);
	}

	public function teacherList(){

		$users = User::where('roles_id', '=', '1')->get();
		

		return View::make('pages.teacherList')
						->with('users', $users);
	}



}