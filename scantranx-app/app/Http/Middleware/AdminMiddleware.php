<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in and is an admin
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            // If not, redirect to login page
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
