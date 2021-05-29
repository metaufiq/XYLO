<?php

namespace App\Modules\Auth\Infrastructure\Persistance\Repositories\Auth;



class AuthLoginInputRepository
{
    public $email;
    public $password;
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
}
