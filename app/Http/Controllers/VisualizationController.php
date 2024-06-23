<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizationController extends Controller
{
    public function show(Request $request)
    {
        // Récupérer les données de l'entreprise passées via la session ou autre moyen
        $entreprise = session('entreprise');

        // Vérifiez si des données sont disponibles
        if (!$entreprise) {
            return redirect()->route('collect-data')->with('error', 'Aucune information disponible pour cette entreprise.');
        }

        return view('visualization', compact('entreprise'));
    }
}
