<?php

class User
{
	public $username = 'Jhon';
	public function fullname()
	{
		return 'Bashar naial';

	}

	public function avatar($size = 100)
	{
		return $size;
	}
}

$user = new User;

// echo $user->avatar(120);


var_dump($user->fullname());