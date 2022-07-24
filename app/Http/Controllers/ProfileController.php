<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::check();
        if ($user) {
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        } else {
            $role = '4';
            $name = 'Guest';
        }
        return view('profile', [
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
            'currentUser' => Auth::user()
        ]);
    }
    public function edit()
    {
        $user = Auth::check();
        if ($user) {
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        } else {
            $role = '4';
            $name = 'Guest';
        }
        return view('editProfile', [
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
            'currentUser' => Auth::user()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'name' => ['required', 'min:5'],
            'phoneNumber' => ['required', 'min:10'],
            'address' => ['required', 'min: 20'],
            'description' => ['required', 'min: 30'],
            'profilePicture' => 'required|image|mimes:jpg,jpeg,svg,png'
        ]);

        // dd($request->all());
        // dd($request->profilePicture);
        $profilePicture = $request->name . 'profilePicture.' . $request->profilePicture->getClientOriginalExtension();
        $request->profilePicture->storeAs('public/gambar', $profilePicture);
        $user = User::find(Auth::user()->id);
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->phoneNumber = $request->phoneNumber;
        $user->address = $request->address;
        $user->description = $request->description;
        $user->profilePicture = $profilePicture;
        $user->save();
        return redirect('/profile');
    }
}
