<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLogin()
    {
        // Jika admin sudah login, langsung ke dashboard
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.home');
        }

        return view('auth.login');
    }

    /**
     * Proses login admin
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->route('admin.home');
        }

        return back()
            ->withInput()
            ->with('error', 'Username atau Password Salah');
    }

    /**
     * Logout admin
     */
public function logout(Request $request)
{
    Auth::guard('admin')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}