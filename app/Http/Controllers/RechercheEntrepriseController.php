<?php
namespace App\Http\Controllers;

use App\Models\RechercheEntreprise;
use Illuminate\Http\Request;

class RechercheEntrepriseController extends Controller
{
    public function index()
    {
        return view('rechercheEntreprises.index');
    }

    public function search(Request $request)
    {
        $query = RechercheEntreprise::query();

        if ($request->filled('nom')) {
            $query->where('nom', 'like', '%' . $request->nom . '%');
        }

        if ($request->filled('secteur')) {
            $query->where('secteur', $request->secteur);
        }

        if ($request->filled('localisation')) {
            $query->where('localisation', $request->localisation);
        }

        if ($request->filled('taille')) {
            $query->where('taille', $request->taille);
        }

        $rechercheEntreprises = $query->get();

        return view('rechercheEntreprises.index', compact('rechercheEntreprises'));
    }
}
