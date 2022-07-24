<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user->update($request->all());

        return redirect('/admin/dashboard');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/dashboard');
    }
}
