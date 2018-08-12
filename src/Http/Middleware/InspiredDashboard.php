<?php

namespace Tetravalence\Inspired\Http\Middleware;

use Closure;

class InspiredDashboard
{
    public function handle($request, Closure $next)
    {
        /* if (! $request->user()->hasRole($role)) {
            abort(403, 'Unauthorized Action');
        } */

        if ($request->route()->named('template')) {
            dd(public_path());
        }

        return $next($request);
    }
}
