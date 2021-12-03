<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
//        if(Auth::check()){
//            echo Auth::check();
//        }else{
//            foreach (session()->all() as $data => $d){
//                if(is_array($d)){
//                    foreach ($d as $v => $c) {
//                        echo $data.' ===> '.$v.'</br>';
//                    }
//                }else{
//                    echo $data.' ===> '.$d.'</br>';
//                }
//            }
//        }

        $array = [1, 2, 3, 4];

        $random = Arr::random($array);

        return view('home')->with('randPerson', $random);
    }

}
