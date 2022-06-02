<?php

namespace Ibrhaim13\Admin\Middleware;

use Closure;
use Ibrhaim13\Admin\Facades\Admin;
use Illuminate\Http\Request;

class Bootstrap
{
    public function handle(Request $request, Closure $next)
    {
        Admin::bootstrap();

        return $next($request);
    }
}
