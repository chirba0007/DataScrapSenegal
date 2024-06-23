<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'Entreprises</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .details-btn {
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Recherche d'Entreprises</h1>
    <form action="{{ route('rechercheEntreprises.search') }}" method="GET">
        <label for="nom">Nom de l'entreprise :</label>
        <input type="text" name="nom" id="nom" placeholder="Nom de l'entreprise">

        <label for="secteur">Secteur d'activité :</label>
        <select name="secteur" id="secteur">
            <option value="">Tous</option>
            <option value="Technologie">Technologie</option>
            <option value="Finance">Finance</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Pêche">Pêche</option>
            <option value="Industrie">Industrie</option>
            <option value="Tourisme">Tourisme</option>
            <option value="Transport et logistique">Transport et logistique</option>
            <option value="Énergie">Énergie</option>
            <option value="Télécommunications">Télécommunications</option>
            <option value="Services financiers">Services financiers</option>
            <option value="Commerce">Commerce</option>
            <option value="Éducation">Éducation</option>
            <option value="Santé">Santé</option>
            <option value="Médias et divertissement">Médias et divertissement</option>

            
            <!-- Ajoutez d'autres secteurs si nécessaire -->
        </select>

        <label for="localisation">Localisation géographique :</label>
        <select name="localisation" id="localisation">
            <option value="">Toutes</option>
            <option value="DAKAR">Dakar</option>
            <option value="DIOURBEL">Diourbel</option>
            <option value="FATICK">Fatick</option>
            <option value="KAFFRINE">Kaffrine</option>
            <option value="KAOLACK">Kaolack</option>
            <option value="KEDOUGOU">Kédougou</option>
            <option value="KOLDA">Kolda</option>
            <option value="LOUGA">Louga</option>
            <option value="MATAM">Matam</option>
            <option value="SAINT-LOUIS">Saint-Louis</option>
            <option value="SEDHIOU">Sédhiou</option>
            <option value="TAMBACOUNDA">Tambacounda</option>
            <option value="THIES">Thiès</option>
            <option value="ZIGUINCHOR">Ziguinchor</option>
        </select>

        <label for="taille">Taille de l'entreprise :</label>
        <select name="taille" id="taille">
            <option value="">Toutes</option>
            <option value="petite">Petites</option>
            <option value="moyenne">Moyennes</option>
            <option value="grande">Grandes</option>
        </select>

        <button type="submit">Rechercher</button>
    </form>

    @if(isset($rechercheEntreprises) && count($rechercheEntreprises) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nom de l'entreprise</th>
                    <th>Secteur d'activité</th>
                    <th>Localisation</th>
                    <th>Taille</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rechercheEntreprises as $entreprise)
                    <tr>
                        <td>{{ $entreprise->nom }}</td>
                        <td>{{ $entreprise->secteur }}</td>
                        <td>{{ $entreprise->localisation }}</td>
                        <td>{{ $entreprise->taille }}</td>
                        <td><a href="#" class="details-btn">Voir Détails</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucun résultat trouvé.</p>
    @endif
</body>
</html>
