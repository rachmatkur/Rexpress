<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {

        $user_id = auth()->user()->id;
        return view('resto.index', [
            'menus' => Menu::orderBy('created_at', 'desc')->where('user_id', $user_id)->paginate(6)
        ]);
    }

    public function show(Menu $menu)
    {
        // dd('menu');
        return view('menuDetail', [
            'menu' => $menu
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

        Menu::create($request->all());

        return redirect('/resto/dashboard');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->back();
    }
}
