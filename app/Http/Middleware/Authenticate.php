<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 26.08.17
 * Time: 20:41
 */

namespace App\Http\Middleware;

use Closure;

class Authenticate extends \Illuminate\Auth\Middleware\Authenticate
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
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('/'); // <--- note this
            }
        }

        return $next($request);
    }
}