<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request['role'] = 1;
        // dd($request->all());

        User::create($request->all());

        return redirect('/login');
    }

    public function home()
    {
        return view('home');
    }
    public function restos()
    {
        return view('restos');
    }
}
