<?php

namespace App\Modules\Auth\Application\Services\Auth;

use App\Modules\Auth\Application\Resources\AuthResource;
use App\Modules\Auth\Infrastructure\Persistance\Repositories\Auth\AuthLoginInputRepository;
use App\Modules\Auth\Infrastructure\Persistance\Repositories\Auth\AuthRepository;

class AuthService
{
    //
    public function login(AuthLoginInputService $data)
    {
        $repository = new AuthRepository();
        $input = new AuthLoginInputRepository($data->email, $data->password);
        return new AuthResource($repository->login($input));
    }

    public function register($data)
    {
    }

    public function logout($data)
    {
    }
}
