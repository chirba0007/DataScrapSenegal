<!DOCTYPE html>
<html>
<head>
    <title>Collecte de Données</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Collecte de Données</h2>
    <form action="/collect-data" method="POST">
        @csrf
        <div class="form-group">
            <label for="company_name">Entreprise sélectionnée :</label>
            <input type="text" class="form-control" id="company_name" name="company_name" required>
        </div>
        <div class="form-group">
            <label>Sources de données :</label><br>
            <input type="checkbox" name="sources[]" value="official_website"> Site web officiel<br>
            <input type="checkbox" name="sources[]" value="social_media"> Réseaux sociaux<br>
            <input type="checkbox" name="sources[]" value="public_database"> Base de données publique<br>
            <!-- Add other sources if necessary -->
        </div>
        <div class="form-group">
            <label for="start_date">Date de début :</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">Date de fin :</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="form-group">
            <label for="keywords">Mots-clés :</label>
            <input type="text" class="form-control" id="keywords" name="keywords" required>
        </div>
        <button type="submit" class="btn btn-primary">Lancer le Scraping</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    @if (session('results'))
        <div class="mt-3">
            <h4>Résultats du scraping :</h4>
            <ul>
                @foreach (session('results') as $result)
                    <li>{{ $result }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>
