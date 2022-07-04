<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('resto.index', [
            'menus' => Menu::orderBy('created_at', 'desc')->paginate(6)
        ]);
    }

    public function create()
    {
        $user_id = auth()->user()->id;

        return view('resto.menu.create', [
            'categories' => Category::where('user_id', $user_id)->get()
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
