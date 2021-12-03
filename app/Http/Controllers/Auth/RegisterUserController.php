<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{

    public function create()
    {
        return view('auth.user.register');
    }

    public function store(UserRegisterRequest $request)
    {
        $request->validated();

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('user.resume.index');

    }

}
