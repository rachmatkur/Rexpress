<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::check();
        if ($user) {
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        } else {
            $role = '4'; //role 4 guest
            $name = 'Guest';
        }
        return view('admin.index', [
            'restaurants' => User::where('role', 3)->get(),
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }

    public function create()
    {
        $user = Auth::check();
        if ($user) {
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        } else {
            $role = '4'; //role 4 guest
            $name = 'Guest';
        }
        return view('admin.create', [
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $request['role'] = 3;
        $request['profilePicture'] = $request->file('photo')->store('gambar');
        User::create($request->all());

        return redirect('/admin/dashboard');
    }

    public function edit(User $user)
    {
        $currentUser = Auth::check();
        if ($user) {
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        } else {
            $role = '4'; //role 4 guest
            $name = 'Guest';
        }
        return view('admin.update', [
            'restaurant' => $user,
            'role_id' => $role,
            'name' => $name,
            'user' => $currentUser,
        ]);
    }

    public function update(Request $request, User $user)
    {

        if ($request->photo) {
            if ($user->profilePicture) {
                Storage::delete($user->profilePicture);
            }
            // dd($request->file('photo'));
            $request['profilePicture'] = $request->file('photo')->store('gambar');
        }
        $user->update($request->all());

        return redirect('/admin/dashboard');
    }

    public function destroy(User $user)
    {
        if ($user->profilePicture) {
            Storage::delete($user->profilePicture);
        }
        $user->delete();
        return redirect('/admin/dashboard');
    }
}
