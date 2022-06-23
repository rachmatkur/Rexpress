<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function login(){
        return view('master');
    }
    public function register(){
        return view('register');
    }
}
