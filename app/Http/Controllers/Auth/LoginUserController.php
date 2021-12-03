<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{

    public function create()
    {
        return view('auth.user.login');
    }

    public function store(LoginRequest $request)
    {
        $validated = $request->validated();

        if(Auth::attempt($validated)){
            session()->regenerate();
            return redirect()->route('user.resume.index');
        }else{
            return redirect()->back()->with('auth_fail', 'Неправильные данные для входа, попробуйте еще.');
        }

    }

}
