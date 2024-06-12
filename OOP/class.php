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

echo $user->avatar(120);


// we use class need to write more code but we can make every things alone