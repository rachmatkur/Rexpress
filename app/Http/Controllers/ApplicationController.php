<?php

namespace App\Http\Controllers;

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
        return view('restos');
    }
}
