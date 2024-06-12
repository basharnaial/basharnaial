<?php

class User
{
    public $email;

    public function setEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return;
        }
        $this->email = $email;
    }

    public function getEmail()
    {
        return strtolower($this->email);
    }
}

$user = new User;
$user->setEmail("john@laravel-ar.com");
echo $user->getEmail();