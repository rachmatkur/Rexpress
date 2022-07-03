<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('resto.category.create', [
            'categories' => Category::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;

        Category::create([
            'user_id' => $user_id,
            'category' => $request->category
        ]);

        return redirect()->back();
    }
}
