<?php

namespace App\Http\Repositories;

use App\Models\Reseau;

class ReseauRepository
{
    protected $reseau;
    public function __construct(Reseau $reseau)
    {
        $this->reseau = $reseau;
    }

    private function save(Reseau $reseau, array $inputs)
    {
        $reseau->libelle = $inputs['libelle'];
        $reseau->lan = $inputs['lan'];
        $reseau->is_disponible = $inputs['is_disponible'];
        $reseau->save();
        return $reseau;
    }

   public function store(array $inputs)
    {
        $serveur = new $this->serveur;
        return $this->save($serveur, $inputs);

    }

    public function create(array $data)
    {
        (Auth::user()->hasRole('administrateur') && Auth::user()->can('gestion de reseaux'));

    }


    public function update(Reseau $serveur, array $inputs)
    {
        (Auth::user()->hasRole('administrateur') && Auth::user()->can('gestion de reseaux '));
        return $this->save($serveur, $inputs);
    }
}
