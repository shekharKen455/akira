<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $data['orders'] = Order::count();
        $data['products'] = Product::count();
        $data['cat'] = Categories::count();
        $data['rev'] = Order::sum('total_amount');
        $data['monthRev'] = Order::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->sum('total_amount');

        // dd($orders, $products, $rev, $monthRev);

        return view('admin.index', compact('data'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function checkLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($validated)) {
            return redirect()->back()->withErrors(['Invalid Credentials!']);
        }

        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }

    public function profile()
    {
        return view('admin.profile');
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


// INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Super Admin', 'admin@user.com', '2023-12-20 21:56:52', '$2y$12$yewQ0Kn15WnaeG7qFfJwXOF.Hes4qfoT/LXSn6apNvz86PrHqksrK', NULL, '2023-12-20 21:56:52', '2023-12-20 21:56:52');
