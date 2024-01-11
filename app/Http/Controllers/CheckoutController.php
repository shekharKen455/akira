<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // $user = auth()->user();
        // $cart = Cart::with('product')->where('user_id', $user->id)->get();

        $cart = [];
        $cartSess = session()->get('cart') ?? [];
        foreach ($cartSess as $key => $value) {
            $cart[$key] = is_array($value) ? collect($value) : $value;
        }

        return view('checkout', compact('cart'));
    }
}
