@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1>{{ __('Tableau de Bord Administrateur') }}</h1>
            </div>
        </div>

        <!-- Résumé des Activités Récentes -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Résumé des Activités Récentes') }}</div>
                    <div class="card-body">
                        <h5>{{ __('Liste des dernières entreprises recherchées') }}</h5>
                        <!-- Liste des dernières entreprises recherchées -->
                        <ul>
                            @foreach ($recentEntreprises as $rechercheEntreprise)
                                <li>{{ $rechercheEntreprise->nom }}</li>
                            @endforeach
                        </ul>

                        <h5>{{ __('Derniers datasets collectés') }}</h5>
                        <!-- Liste des derniers datasets collectés -->
                        <ul>
                            @foreach ($recentJeuxDeDonnees as $dataset)
                                <li>{{ $dataset->nom }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Données Collectées -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Données Collectées') }}</div>
                    <div class="card-body">
                        <h5>{{ __('Compteur de données collectées ce mois-ci') }}</h5>
                        <p>{{ $dataCountThisMonth }}</p>

                        <h5>{{ __('Statistiques de collecte (par secteur, région, etc.)') }}</h5>
                        <!-- Afficher les statistiques de collecte -->
                        <ul>
                            @foreach ($collectionStats as $stat)
                                <li>{{ $stat->categorie }}: {{ $stat->count }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analyses en Cours -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Analyses en Cours') }}</div>
                    <div class="card-body">
                        <h5>{{ __('Liste des analyses en cours') }}</h5>
                        <!-- Liste des analyses en cours -->
                        <ul>
                            @foreach ($ongoingAnalyses as $analysis)
                                <li>{{ $analysis->titre }}: {{ $analysis->progress }}%</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Visualisations Créées -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Visualisations Créées') }}</div>
                    <div class="card-body">
                        <h5>{{ __('Aperçu des visualisations récentes') }}</h5>
                        <!-- Aperçu des visualisations récentes -->
                        <ul>
                            @foreach ($recentVisualisations as $visualization)
                                <li>{{ $visualization->titre }}</li>
                            @endforeach
                        </ul>

                        <h5>{{ __('Accès rapide aux visualisations favorites') }}</h5>
                        <!-- Accès rapide aux visualisations favorites -->
                        <ul>
                            @foreach ($favoriteVisualisations as $favorite)
                                <li>{{ $favorite->titre }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bouton Register -->
        <div class="row mt-4">
            <div class="col">
                <a href="{{ route('register') }}" class="btn btn-primary">
                    {{ __('Register') }}
                </a>
            </div>
        </div>
    </div>
@endsection
