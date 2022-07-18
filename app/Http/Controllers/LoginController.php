<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {   
        $user = Auth::check();
        if($user){
            return redirect()->intended(route('home'));
        }
        else{
            return view('auth.login');
        }
    }

    public function store(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:2']
        ]);
        if (Auth::attempt($user)) {
            $data = User::where('email', $request->email)->first();
            $request->session()->regenerate();
            // dd($data);
            return redirect()->intended(route('home'));
        }
        else{
            return redirect('login')->withErrors('Wrong credentials, please try again!');
        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('login');
}
}