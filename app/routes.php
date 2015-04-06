<?php

Route::get('/', ['as'=> 'home', 'uses' => 'PageController@index']);
Route::get('/account/{id}', ['as'=> 'account', 'uses' => 'UserController@account']);



//Guest
Route::group(['before' => 'guest'], function() {
	Route::get('/login', ['as'=> 'login', 'uses' => 'AuthController@login']);
	Route::post('/login', ['as'=> 'login', 'uses' => 'AuthController@doLogin']);
});


Route::group(['before' => 'auth'], function() {
	Route::get('/logout', ['as'=> 'logout', 'uses' => 'AuthController@doLogout']);
	
	Route::get('/registrationList', ['as'=> 'registrationList', 'uses' => 'AuthController@registrationList']);
	Route::get('/registrationTeacher', ['as'=> 'registrationTeacher', 'uses' => 'AuthController@registrationTeacher']);
	Route::get('/registrationStudent', ['as'=> 'registrationStudent', 'uses' => 'AuthController@registrationStudent']);
	Route::post('/registration', ['as'=> 'registration', 'uses' => 'AuthController@doRegistration']);
	
	Route::get('/tabulation/{clss_id}/{section_id}', ['as'=> 'tabulation', 'uses' => 'PageController@tabulation']);
	Route::get('/tabulationList', ['as'=> 'tabulationList', 'uses' => 'PageController@tabulationList']);
	
	Route::get('/sectionList', ['as'=> 'sectionList', 'uses' => 'PageController@sectionList']);
	Route::get('/studentList/{cass_id}/{section_id}', ['as'=> 'studentList', 'uses' => 'PageController@studentList']);
	
	Route::get('/teacherList', ['as'=> 'teacherList', 'uses' => 'PageController@teacherList']);


	Route::get('/result/{id}', ['as'=> 'result', 'uses' => 'userController@result']);
	Route::get('/resultUpdate/{id}/{term}/{sub}', ['as'=> 'resultUpdate', 'uses' => 'userController@resultUpdate']);


	Route::get('/update_profile/{id}', ['as'=> 'update_profile', 'uses' => 'userController@update_profile']);
	Route::post('/update', ['as'=> 'update', 'uses' => 'userController@doUpdate']);

	Route::get('/remove/{id}', ['as'=> 'remove', 'uses' => 'userController@remove']);

	Route::get('/resultInput/{student_id}/{teacher_id}', ['as'=> 'resultInput', 'uses' => 'userController@resultInput']);
	Route::post('/doResultInput', ['as'=> 'doResultInput', 'uses' => 'userController@doResultInput']);
	Route::post('/doResultUpdate', ['as'=> 'doResultUpdate', 'uses' => 'userController@doResultUpdate']);


	// edit account
	/*Route::get('/account/{id}/edit', ['as'=> 'account.edit', 'uses' => 'UserController@editAccount']);*/
	/*Route::put('/account/{id}/edit', ['as'=> 'account.edit', 'uses' => 'UserController@doEditAccount']);*/
});

