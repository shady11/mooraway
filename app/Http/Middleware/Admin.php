<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 26.08.17
 * Time: 20:41
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (!Auth::check()) {
            return response('Unauthorized.', 401);
        }elseif(Auth::user()->group !== 'admin'){
            return response('Доступ запрещен.', 403);
        }

        return $next($request);
    }
}