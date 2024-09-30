<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'], // Ubah 'username' menjadi 'string'
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');

        }
        return back()->withErrors([
            'message' => 'Username atau password yang Anda masukkan salah.', // Pastikan 'message' di sini benar
        ])->withInput(); // Tambahkan ini untuk mengembalikan input sebelumnya
    }

}
