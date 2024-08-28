<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login
        if (!session()->has('logged_in')) {
            // Jika belum, arahkan ke halaman login
            return redirect('/login')->with('error', 'Silahkan Login dulu ya mas.');
        }

        return $next($request);
    }
}
