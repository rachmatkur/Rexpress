<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function login(){
        return view('home');
    }
    public function register(){
        return view('register');
    }
}
