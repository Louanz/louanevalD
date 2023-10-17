<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
{
    if (!session ()->has ('locale')) {
        session (['locale' => $request->getPreferredLanguage (config ('app.locales'))]);
    }
    $locale = session ('locale');
    app ()->setLocale ($locale);
    setlocale (LC_TIME, app()->environment('local') ? $locale : config('locale.languages')[$locale][1]);
    return $next ($request);
}

    }
}

