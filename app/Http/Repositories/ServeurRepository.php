<?php

namespace App\Http\Repositories;

use App\Models\Serveur;

class ServeurRepository
{
    protected $serveur;
    public function __construct(Serveur $serveur)
    {
        $this->serveur = $serveur;
    }

    private function save(Serveur $serveur, array $inputs)
    {
        $serveur->ip = $inputs['ip'];
        $serveur->type = $inputs['type'];
        $serveur->os = $inputs['os'];
        $serveur->reseau = $inputs['reseau'];
        $serveur->save();
        return $serveur;
    }

    public function store(array $inputs)
    {
        $serveur = new $this->serveur;
        return $this->save($serveur, $inputs);

    }

    public function create(array $data)
    {
        (Auth::user()->hasRole('technicien') && Auth::user()->can('gestion des serveurs')){
            abort(403);
        }

    }


    public function update(Serveur $serveur, array $inputs)
    {
        if (Auth::user()->hasRole('technicien') && Auth::user()->can('gestion des serveurs')){
            abort(403);
        }
        return $this->save($serveur, $inputs);
    }


}


