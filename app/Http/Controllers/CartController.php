<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::check();
        $carts = Cart::with('menu')->where('user_id', Auth::user()->id)->get();

        $cartMenu = Menu::with('restaurant')->where('id',$carts->first()->menu_id)->first();
        $restaurant = $cartMenu->restaurant;
        if ($user){
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        }
        else{
            $role = '4';
            $name = 'Guest';
        }
        return view('cart',[
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
            'carts' => $carts,
            'restaurant' => $restaurant
        ]);
    }

    public function add(Menu $menu){
        $userId = Auth::user()->id;
        $carts = Cart::with('menu')->where('user_id', $userId)->get();
        foreach($carts as $cart){
            $currentMenu = Menu::with('restaurant')->where('id', $cart->menu_id)->first();
            if($currentMenu->restaurant->id != $menu->restaurant->id){
                return back()->with('error', 'Cant add menu from different restaurant, clear your cart first!')->with('id', $menu->id);;
            }
            if($cart->menu_id == $menu->id){
                $cart->qty++;
                $cart->save();
                return back()->with('message','Item added succesfully')->with('id', $menu->id);
            }
        }
        $cart = Cart::create([
            'user_id' => $userId,
            'menu_id' => $menu->id,
        ]);
        return back()->with('message','Item added succesfully')->with('id', $menu->id);
    }
}
