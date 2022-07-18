<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::check();
        if ($user){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        else{
            $role = '4'; //role 4 guest
            $name = 'Guest';
        }
        return view('home',[
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }

    public function restos()
    {
        $user = Auth::check();
        if ($user){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        else{
            $role = '4';
            $name = 'Guest';
        }
        $restos = User::where('role', 3)->get();
        return view('restos', 
        ['restos' => $restos,
        'role_id' => $role,
        'name' => $name,
        'user' => $user,]);
    }

    public function restoDetail($id)
    {
        $user = Auth::check();
        if ($user){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        else{
            $role = '4';
            $name = 'Guest';
        }
        $resto = User::where('id', $id)->first();
        $menus = User::find($id)->menu;
        return view('restaurantDetail',
        ['resto'=>$resto, "menus" => $menus, 
        'role_id' => $role,
        'name' => $name,
        'user' => $user]);
    }

    public function cart()
    {
        $user = Auth::check();
        if ($user){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        else{
            $role = '4';
            $name = 'Guest';
        }
        return view('cart',[
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }
    public function history()
    {
        $user = Auth::check();
        if ($user){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        else{
            $role = '4';
            $name = 'Guest';
        }
        return view('history',[
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }
    public function profile(){       
        $user = Auth::check();
        if ($user){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        else{
            $role = '4';
            $name = 'Guest';
        }
        return view('profile',[
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }

}
