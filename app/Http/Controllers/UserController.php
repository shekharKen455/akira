<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate(['email' => 'required|email', 'password' => 'required']);
        $test = "";
        if (!auth()->attempt($validated)) {
            $test = "active";
        }

        return redirect()->back()->with('test', $test);
    }

    public function register(Request $request)
    {
        $validated = $request->validate(['email' => 'required|email', 'password' => 'required', 'name' => 'required']);

        User::create($validated);
        auth()->attempt($validated);
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function account()
    {
        $orders = Order::withCount('orderProduct')->where('user_id', auth()->user()->id)->get();
        return view('account', compact('orders'));
    }
}
