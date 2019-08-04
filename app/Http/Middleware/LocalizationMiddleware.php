<?php

namespace App\Http\Middleware;

use Closure;

class LocalizationMiddleware
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
        // Cek apakah session 'locale' ada?
        if ($request->session()->has('locale')) {
            // Jika ada, maka set App Locale sesuai nilai yang ada di session 'locale'.
            \App::setLocale($request->session()->get('locale'));
        }
        
        // Lanjutkan request.
        return $next($request);
    }
}
