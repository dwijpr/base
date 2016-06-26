<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() === null) {
            return abort('401');
        }

        $actions = $request->route()->getAction();
        $roles = $actions['roles'];

        if ($request->user()->hasAnyRoles($roles) || !$roles) {
            return $next($request);
        }

        return abort('401');
    }
}
