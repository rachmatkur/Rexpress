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
        $restaurant = null;
        if(!$carts->isEmpty()){
            $cartMenu = Menu::with('restaurant')->where('id',$carts->first()->menu_id)->first();
            $restaurant = $cartMenu->restaurant;
        }
        $total = 0;
        foreach ($carts as $cart) {
            $total += ($cart->menu->price*$cart->qty);
        }
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
            'restaurant' => $restaurant,
            'total' => $total
        ]);
    }

    public function add(Menu $menu){
        // dd($menu->name);
        $userId = Auth::user()->id;
        $carts = Cart::with('menu')->where('user_id', $userId)->get();
        foreach($carts as $cart){
            if($menu->stock <= $cart->qty){
                return back()->with('error', 'Cant add menu, amount in cart exceeds available stock!')->with('id', $menu->id);;
            }
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
    public function remove(Menu $menu){
        $userId = Auth::user()->id;
        $carts = Cart::with('menu')->where('user_id', $userId)->get();
        foreach($carts as $cart){
            if($cart->menu_id == $menu->id){
                $cart->qty--;
                $cart->save();
                if($cart->qty == 0){
                    $cart->delete();
                }
                return back();
            }
        }
    }
    public function checkout(){
        $carts = Cart::all();
        foreach($carts as $cart) {
            $total = $cart->qty * $cart->menu->price;
            Transaction::create([
                'menu_id' => $cart->menu_id,
                'user_id' => $cart->user_id,
                'qty' => $cart->qty,
                'total' => $total,
                'restaurant_id' => $cart->menu->user_id
            ]);
            $menu = $cart->menu;
            $menu->stock -= $cart->qty;
            $menu->save();
            $cart->delete();    
        }
        return redirect()->route('cart.index');
    }
}


