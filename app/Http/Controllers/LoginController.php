<?php

namespace App\Http\Controllers;

use App\Action\LoginAction;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginAction $action, LoginRequest $request)
    {
        return $action->handle($request);
    }

}
