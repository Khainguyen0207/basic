<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;

class RedirectIfNotAdmin
{
    public function handle($request, \Closure $next)
    {
        if (! auth()->guard('customer')->check()) { //Điều kiện là admin
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
