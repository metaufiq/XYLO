<?php

namespace App\Modules\Auth\Application\Services\Auth;




class AuthLoginInputService
{
    public $email;
    public $password;
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
}
