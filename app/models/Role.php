
<?php

class Role extends Eloquent {

    protected $table = 'roles';

    public function assignedUser()
	{
		return $this->hasMany('User', 'roles_id');
	}

}