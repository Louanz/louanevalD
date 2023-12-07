<?php

namespace App\Http\Repositories;

use App\Models\Ordinateur;

class OrdinateurRepository
{
    protected $ordinateur;
    public function __construct(Ordinateur $ordinateur)
    {
        $this->ordinateur = $ordinateur;
    }

    private function save(Ordinateur $ordinateur, array $inputs)
    {
        $ordinateur->num_serie = $inputs['num_serie'];
        $ordinateur->modele = $inputs['modele'];
        $ordinateur->marque = $inputs['marque'];
        $ordinateur->reseau = $inputs['reseau'];
        $ordinateur->save();
        return $ordinateur;
    }

   public function store(array $inputs)
    {
        $serveur = new $this->serveur;
        return $this->save($serveur, $inputs);

    }

    public function create(array $data)
    {
        if (Auth::user()->hasRole('technicien') && Auth::user()->can('gestion des serveurs')){
            abort(403);
        }

    }


    public function update(Ordinateur $serveur, array $inputs)
    {
        if (Auth::user()->hasRole('technicien') && Auth::user()->can('gestion des serveurs')){
            abort(403);
        }


        return $this->save($serveur, $inputs);
    }
}
