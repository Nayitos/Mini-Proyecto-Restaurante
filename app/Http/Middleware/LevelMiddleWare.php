<?php

namespace App\Http\Middleware;

use Closure;

class LevelMiddleware
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
        if ($request-> user() && $request->user() -> level_id !=1)
        {
            return redirect('home');

        }
        return $next($request);
    }
}
