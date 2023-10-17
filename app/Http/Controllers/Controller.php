<?php

namespace App\Http\Controllers;

use App\Repositories\OrdinateurRepository;
use App\Repositories\ServeurRepository;
use App\Repositories\ReseauRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $ordinateurRepository;
    protected $serveurRepository;
    protected $reseauRepository;

    public function __construct(
        OrdinateurResitory $ordinateurRepository,
        ServeurResitory $serveurRepository,
        ReseauRepository $reseauRepository
    ){
        $this->ordinateurRepository = $ordinateurRepository;
        $this->serveurRepository = $serveurRepository;
        $this->reaseauRepository = $reseauRepository;

    }


}



// public function language(String $locale)
// {
//     $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');
//     session(['locale' => $locale]);
//     return back();
//}
//il faudrait un middleware (locale) qui va vérifier si on a une locale en session
