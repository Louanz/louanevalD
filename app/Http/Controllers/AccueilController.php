<?php

namespace App\Http\Controllers;
use App\Models\Reseau;
use App\Models\Ordinateur;
use App\Models\Serveur;
use App\Models\Accueil;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reseau = Reseau::all();
        $ordinateur = Ordinateur::all();
        $serveur = Serveur::all();
        return view('accueil.index', compact('reseau','ordinateur','serveur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Accueil $accueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accueil $accueil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accueil $accueil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accueil $accueil)
    {
        //
    }
}
