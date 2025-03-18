<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AuthMiddlewear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::user()) {
            
            return redirect()->route('admin')->with('error', 'Please log in to access this page.');
        }
        if ($request->is('user')) {
            return redirect('/admin/dashboard')->with('success', 'You are logged in.');
        }
        return $next($request);
    }
}   