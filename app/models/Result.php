<?php
class Result extends Eloquent {

    protected $table = 'results';

    public function examinar()
	{
		return $this->belongsTo('User', 'teacher_id');
	}

	public function examinee()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function examSubject()
	{
		return $this->belongsTo('Subject', 'subject_id');
	}

}