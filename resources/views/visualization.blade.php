@extends('layouts.app')

@section('content')
    <h2 class="text-center mt-3">Analyse et Visualisation des Données</h2>
    <hr>
    <form id="visualizationForm">
        <div class="form-group">
            <label for="companyName">Données collectées : </label>
            <input type="text" class="form-control" id="companyName" value="{{ $entreprise['nom'] }}" readonly>
        </div>
        <div class="form-group">
            <label>Options de visualisation :</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="barChart" name="visualizationOption" value="barChart">
                <label class="form-check-label" for="barChart">Graphique en barres</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="lineChart" name="visualizationOption" value="lineChart">
                <label class="form-check-label" for="lineChart">Graphique en lignes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="map" name="visualizationOption" value="map">
                <label class="form-check-label" for="map">Carte géographique</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="pivotTable" name="visualizationOption" value="pivotTable">
                <label class="form-check-label" for="pivotTable">Tableau croisé dynamique</label>
            </div>
        </div>
        <div class="form-group">
            <label for="xAxis">Axe X : </label>
            <select class="form-control" id="xAxis" name="xAxis">
                <!-- Remplacez par vos options -->
                <option value="domain">Domaine</option>
                <option value="country">Pays</option>
            </select>
        </div>
        <div class="form-group">
            <label for="yAxis">Axe Y : </label>
            <select class="form-control" id="yAxis" name="yAxis">
                <!-- Remplacez par vos options -->
                <option value="description">Description</option>
                <option value="sector">Secteur</option>
            </select>
        </div>
        <div class="form-group">
            <label for="colorPalette">Couleurs : </label>
            <select class="form-control" id="colorPalette" name="colorPalette">
                <option value="default">Défaut</option>
                <option value="scheme1">Schéma 1</option>
                <option value="scheme2">Schéma 2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="scale">Échelle : </label>
            <input type="text" class="form-control" id="scale" name="scale" placeholder="Échelle">
        </div>
        <button type="submit" class="btn btn-primary">Générer la Visualisation</button>
    </form>
    <div id="visualizationPreview" class="mt-4">
        <!-- Visualisation générée affichée ici -->
        <h4>Aperçu de la Visualisation</h4>
        <div id="chartContainer"></div>
    </div>
@endsection
