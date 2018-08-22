<?php

namespace Tetravalence\Inspired\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Tetravalence\Inspired\InspiredTemplate as Template;

class InspiredDashboard
{
    public function handle($request, Closure $next)
    {
        if (! (Auth::check() && $request->user()->id == 1)) {
            abort(403, 'Unauthorized Action');
        }

        if ($request->route()->named('template') && Template::validateLink()) {
            // File exists
            return $next($request);
        }

        // Display an error message.

        if ($request->route()->named('admin.template')) {
            // Creates the default link.
            Template::createLink();
        }

        return $next($request);
    }
}
