<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'restaurants' => User::where('role', 3)->get()
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request['role'] = 3;
        // dd($request->all());

        User::create($request->all());

        return redirect('/admin/dashboard');
    }

    public function edit(User $user)
    {
        // dd($user);
        return view('admin.update', [
            'restaurant' => $user
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
