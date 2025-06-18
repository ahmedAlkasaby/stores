<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $auth = auth()->user();

        if($auth && $auth->type =='admin'){
            app()->setLocale($auth->lang);
            return $next($request);
        }else{
            auth()->logout();
            return redirect()->route('dashboard.login.view')->withErrors(['email' => __('auth.not_permission_for_this_action')]);
        }

        return $next($request);
    }
}
