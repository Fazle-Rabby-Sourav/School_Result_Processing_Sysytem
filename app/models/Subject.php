
<?php

class Subject extends Eloquent {

    protected $table = 'subjects';

    public function exam()
	{
		return $this->hasMany('Result', 'subject_id');
	}
	

}