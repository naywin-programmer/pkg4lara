<?php

namespace NayWin\Pkg4Lara\Middleware;

use Closure;

class CodeNameGenerator
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
        if($request->name === 'naywin') {
            return redirect('/');
        }
        
        return $next($request);
    }
}
