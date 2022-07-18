<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function create()
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
        return view('resto.category.create', [
            'categories' => Category::where('user_id', auth()->user()->id)->get(),
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        Category::create([
            'user_id' => $user_id,
            'category' => $request->category,
        ]);
        return redirect()->back();
    }
}
