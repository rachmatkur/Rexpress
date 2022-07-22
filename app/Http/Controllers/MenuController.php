<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
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
        return view('resto.index', [
            'menus' => Menu::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(6),
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }

    public function create()
    {
        $user_id = auth()->user()->id;
        $user = Auth::check();
        if ($user){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        else{
            $role = '4'; //role 4 guest
            $name = 'Guest';
        }
        return view('resto.menu.create', [
            'categories' => Category::where('user_id', $user_id)->get(),
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $request->merge([
            'user_id' => auth()->user()->id
        ]);

        // dd($request->all());

        Menu::create($request->all());

        return redirect('/resto/dashboard');
    }
}
