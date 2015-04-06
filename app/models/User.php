<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function assignedRole()
	{
		return $this->belongsTo('Role', 'roles_id');
	}

	public function examine()
	{
		return $this->hasMany('Result', 'teacher_id');
	}

	public function givenExam()
	{
		return $this->hasMany('Result', 'user_id');
	}

}
