<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
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
        $user_id = auth()->user()->id;
        return view('resto.index', [
            'menus' => Menu::orderBy('created_at', 'desc')->where('user_id', $user_id)->paginate(6),
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }

    public function show(Menu $menu)
    {
        return view('menuDetail', [
            'menu' => $menu
        ]);
    }

    public function create()
    {
        $user_id = auth()->user()->id;
        $user = Auth::check();
        if ($user) {
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        } else {
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

        $fileName = $request->image->getClientOriginalName();
        $categories = Category::all();
        $categoryName = null;
        foreach ($categories as $category) {
            if($category->id == $request->category_id){
                $categoryName = $category->category;
            }
        }
        $request->image->storeAs("public/gambar/menu/{$categoryName}", $fileName);

        Menu::insert([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'stock'=>$request->stock,
            'image'=>$fileName,
            'category_id'=>$request->category_id,
            'user_id'=>$request->user_id
        ]);

        return redirect('/resto/dashboard');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->image) {
            Storage::delete($menu->image);
        }
        $menu->delete();

        return redirect()->back();
    }
}
