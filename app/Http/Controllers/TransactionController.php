<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function history()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();
        $user = Auth::check();
        if ($user) {
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        } else {
            $role = '4';
            $name = 'Guest';
        }
        return view('history', [
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
            'transactions' => $transactions
        ]);
    }
    public function resto_history()
    {
        $transactions = Transaction::where('restaurant_id', Auth::user()->id)->get();
        $user = Auth::check();
        if ($user) {
            $role = Auth::user()->role;
            $name = Auth::user()->name;
        } else {
            $role = '4';
            $name = 'Guest';
        }
        return view('resto_history', [
            'role_id' => $role,
            'name' => $name,
            'user' => $user,
            'transactions' => $transactions
        ]);
    }
}
