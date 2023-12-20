<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.index');
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
}


// INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Super Admin', 'admin@user.com', '2023-12-20 21:56:52', '$2y$12$yewQ0Kn15WnaeG7qFfJwXOF.Hes4qfoT/LXSn6apNvz86PrHqksrK', NULL, '2023-12-20 21:56:52', '2023-12-20 21:56:52');
