<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class AuthController extends Controller
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Ambil data username dan password dari Firebase
        $firebaseUsername = $this->database->getReference('auth/username')->getValue();
        $firebasePassword = $this->database->getReference('auth/password')->getValue();

        // Bandingkan input dengan data di Firebase
        if ($request->username === $firebaseUsername && $request->password === $firebasePassword) {
            // Set session untuk menandakan user sudah login
            session(['logged_in' => true]);
            // Jika berhasil, redirect ke halaman dashboard atau home
            return redirect('/')->with('info', 'Login berhasil!');
        } else {
            // Jika gagal, kembalikan dengan pesan error
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        // Hapus session login
        session()->forget('logged_in');
        return redirect('/login')->with('info', 'Logout berhasil.');
    }
}
