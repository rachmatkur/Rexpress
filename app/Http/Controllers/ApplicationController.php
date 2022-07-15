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
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:2']
        ]);
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
        $restos = User::where('role', 3)->get();
        return view('restos', ['restos' => $restos]);
    }

    public function restoDetail($id)
    {
        $resto = User::where('id', $id)->first();
        $menus = User::find($id)->menu;
        return view('restaurantDetail',['resto'=>$resto, "menus" => $menus]);
    }

    public function cart()
    {
        return view('cart');
    }
    public function history()
    {
        return view('history');
    }
}
