<?php

namespace App\Http\Middleware;

use App\Traits\RestTrait;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    use RestTrait;

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {

        if (!auth('admin')->check() && $this->isAdminCall($request)) {
            return route('admin.login');
        } else if (!$request->expectsJson()) {
            return route('login');
        }
    }
}
