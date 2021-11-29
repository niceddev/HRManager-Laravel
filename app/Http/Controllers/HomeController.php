<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index(){
        $array = [1, 2, 3, 4];

        $random = Arr::random($array);

        return view('layouts.home')->with('randPerson', $random);
    }
}
