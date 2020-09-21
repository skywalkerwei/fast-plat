<?php
namespace App\Http\Middleware;
use Closure;
class AssignGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // 这里的作用是指定当前请求是使用哪种 guard，比如 auth()->shouldUse('users')
        if($guard != null){
            auth()->shouldUse($guard);
        }

        return $next($request);
    }
}


