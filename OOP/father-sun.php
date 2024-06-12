<?php


	class Model
	{
		protected $dates = [];

		public function __get($property)
		{
			if(in_array($property, $this->dates)){
				return new DAtetime($this->{$property});

			}
			return $this->{$property};
		}
 }


	class User extends Model

	{
		protected $dates = ['createdAt'];
		public $createdAt = '2020-12-01 14:30:00';

	}

	$user = new User;
	var_dump($user->createdAt->format('H:i'));