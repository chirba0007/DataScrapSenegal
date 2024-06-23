<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{
    public function index()
    {
        // Récupérer toutes les entreprises
        $entreprises = DB::table('recherche_entreprises')->get();

        // Vous pouvez maintenant accéder aux informations de chaque entreprise
        foreach ($entreprises as $entreprise) {
            $nom = $entreprise->nom;
            $secteur = $entreprise->secteur;
            $localisation = $entreprise->localisation;
            $taille = $entreprise->taille;

            // Faites ce que vous voulez avec ces informations, par exemple les afficher
            echo "Nom : $nom, Secteur : $secteur, Localisation : $localisation, Taille : $taille <br>";
        }
    }
}
