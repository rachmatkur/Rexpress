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
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
            'name' => ['required', 'min:5'],
            'phoneNumber' => ['required', 'min:10'],
            'address' => ['required', 'min: 20'],
            'description' => ['required', 'min: 30'],
            'profilePicture' => 'required|image|mimes:jpg,jpeg,svg,png'
        ]);

        // dd($request->all());
        // dd($request->profilePicture);
        $profilePicture = $request->name.'profilePicture.'.$request->profilePicture->getClientOriginalExtension();
        $request->profilePicture->storeAs('/public/gambar', $profilePicture);
        User::create([
            'role' => 1,
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'phoneNumber' => $request->phoneNumber,
            'address' => $request->address,
            'description' => $request->description,
            'profilePicture' => $profilePicture
        ]);
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
}
