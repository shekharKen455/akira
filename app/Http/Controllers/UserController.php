<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate(['email' => 'required|email', 'password' => 'required']);
        if (!auth()->attempt($validated)) {
            return redirect()->back()->withErrors(['loginError' => 'Invalid Credentials !!']);
        }
        return redirect()->route('account');
    }

    public function register(Request $request)
    {
        $validated = $request->validate(['email' => 'required|email', 'password' => 'required', 'name' => 'required']);
        $validated['password'] = Hash::make($request->password);

        User::create($validated);

        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('account');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function account()
    {
        $user = auth()->user();
        $orders = Order::withCount('orderProduct')
            ->where('user_id', $user->id)
            ->orWhere('email', 'LIKE', "%$user->email%")
            ->get();
        return view('account', compact('orders'));
    }

    public function profile(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'email' => 'unique:users,email,' . $user->id,
        ]);

        $data = $request->only(['email', 'name']);
        $user->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function changePassword(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Check if the old password matches the user's current password
        if (!\Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect']);
        }

        // Update the user's password
        $user->password = \Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully');
    }
}
