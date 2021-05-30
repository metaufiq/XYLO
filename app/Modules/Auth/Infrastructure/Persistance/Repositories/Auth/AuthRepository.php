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

    public function register(AuthRegisterInputRepository $data)
    {
        $user = new User();
        $user->email = $data->email;
        $user->password = $data->password;
        $user->role = $data->role;
        $user->save();
        return $user;
    }

    public function logout($data)
    {
    }
}
