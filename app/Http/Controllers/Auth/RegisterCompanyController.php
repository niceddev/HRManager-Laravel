<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RegisterCompanyController extends Controller
{

    public function create()
    {
        return view('auth.company.register');
    }

    public function store(Request $request)
    {
        Route::get();
    }

}
