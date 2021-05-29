<?php

namespace App\Modules\Auth\Infrastructure\Persistance\Repositories\Auth;

use App\Modules\Auth\Domain\Models\User;

class AuthRepository
{
    //
    public function login(AuthLoginInputRepository $data)
    {
        return User::where([['email', '=', $data->email], ['password', '=', $data->password]])->first();
    }

    public function register($data)
    {
    }

    public function logout($data)
    {
    }
}
