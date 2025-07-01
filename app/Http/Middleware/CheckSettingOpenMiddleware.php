<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSettingOpenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $seting = Setting::where('active', 1)->first();
        if (!$seting->site_open) {
            return response()->json([
                'status'=>false,
                'message'=>__('api.setting_close'),
            ], 403);
        }
        return $next($request);
    }
}
