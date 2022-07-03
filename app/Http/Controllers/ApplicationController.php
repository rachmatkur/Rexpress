<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function home(){
        return view('home');
    }
    public function restos(){
        $restos = User::where('role', 3)->get();
        return view('restos', ['restos' => $restos]);
    }

    public function restoDetail($id){
        $resto = User::where('id', $id)->first();
        return view('restaurantDetail',['resto'=>$resto]);
    }

    public function cart(){
        return view('cart');
    }
    public function history(){
        return view('history');
    }
}
