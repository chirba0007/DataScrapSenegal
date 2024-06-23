<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Models\JeuDeDonnees;
use App\Models\Analyse;
use App\Models\Visualisation;

class AdminController extends Controller
{
    public function tableauDeBord()
    {
        // Exemple de récupération des données nécessaires depuis la base de données
        $recentEntreprises = Entreprise::latest()->take(5)->get();
        $recentJeuxDeDonnees = JeuDeDonnees::latest()->take(5)->get();
        $dataCountThisMonth = JeuDeDonnees::whereMonth('created_at', now()->month)->count();
        $collectionStats = [
            // Remplacez par vos propres statistiques de collecte
            (object) ['categorie' => 'Secteur 1', 'count' => 10],
            (object) ['categorie' => 'Région 1', 'count' => 5],
        ];
        $ongoingAnalyses = Analyse::where('statut', 'en_cours')->get();
        $recentVisualisations = Visualisation::latest()->take(5)->get();
        $favoriteVisualisations = Visualisation::where('favori', true)->get();

        return view('dashboard', compact(
            'recentEntreprises',
            'recentJeuxDeDonnees',
            'dataCountThisMonth',
            'collectionStats',
            'ongoingAnalyses',
            'recentVisualisations',
            'favoriteVisualisations'
        ));
    }
}
