<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use App\Traits\RestTrait;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    use RestTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null): Response
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect('/admin');
        //     }
        // }

        if (Auth::guard('admin')->check() && $this->isAdminCall($request)) {
            // return redirect('/admin');
        }
        //ToDo Check $guards
        if (Auth::guard($guard)->check() && !$this->isAdminCall($request)) {
            return redirect('/');
        }

        return $next($request);
    }
}
