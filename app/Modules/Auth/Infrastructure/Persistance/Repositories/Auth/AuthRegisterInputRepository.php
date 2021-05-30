<?php

namespace App\Modules\Auth\Infrastructure\Persistance\Repositories\Auth;



class AuthRegisterInputRepository
{
    public $email;
    public $password;
    public $role;
    public function __construct($email, $password, $role)
    {
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
}
