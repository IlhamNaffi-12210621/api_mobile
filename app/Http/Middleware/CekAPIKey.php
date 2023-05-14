<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekAPIKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $apikey = $request->header('apikey');

        if($apikey != 'randomkode'){
            return response()->json([
                'message' => 'api key invalid'
            ], 401);
        }

        return $next($request);
    }
}
