<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
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
}
