<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //kalo ada histori login, klo ada izinin akses halaman
        if (Auth::check()) {
            return $next($request);
        }
        //kalo tidak ada histori arahin ke halaman login
        return redirect('/')->with('notAllowed', 'silahkan login terebih dahulu');
    }
}
