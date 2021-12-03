<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginCompanyController extends Controller
{

    public function create()
    {
        return view('auth.company.login');

    }

    public function store(LoginRequest $request)
    {
        $validated = $request->validated();
    }

}
