<?php

namespace App\Modules\Auth\Presentation\Controllers;




use App\Http\Controllers\Controller;
use App\Modules\Auth\Application\Services\Auth\AuthLoginInputService;
use App\Modules\Auth\Application\Services\Auth\AuthRegisterInputService;
use App\Modules\Auth\Application\Services\Auth\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $service = new AuthService();
        $input = new AuthLoginInputService($request->input('email'), $request->input('password'));
        return $service->login($input);
    }

    public function register(Request $request)
    {
        $service = new AuthService();
        $input = new AuthRegisterInputService($request->input('email'), $request->input('password'), $request->input('role'));
        return $service->register($input);
    }

    public function logout(Request $request)
    {
        $service = new AuthService();
    }
}
