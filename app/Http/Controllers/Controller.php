<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // if (Auth::user()->can('')) {
        // return view('auth.php', compact(''));
        // }

        // abort(401);
}



// public function language(String $locale)
// {
//     $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');
//     session(['locale' => $locale]);
//     return back();
//}
//il faudrait un middleware (locale) qui va vérifier si on a une locale en session
