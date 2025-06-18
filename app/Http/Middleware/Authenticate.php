<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as CheckAuthenticate;

class Authenticate extends CheckAuthenticate
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login');
        }

        return call_user_func(static::$redirectToCallback, $request);
    }
}
