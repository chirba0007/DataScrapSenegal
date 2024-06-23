<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataScrap Sénégal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Bienvenue sur DataScrap Sénégal</h1>
            <p class="lead">Découvrez les entreprises au Sénégal grâce à notre plateforme de datascrapping et de datavisualisation.</p>
            <hr class="my-4">
            <p>Accédez aux données des entreprises et visualisez-les facilement.</p>
            <a class="btn btn-primary btn-lg" href="/recherche-entreprises" role="button">En savoir plus</a>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h3>Fonctionnalités Clés</h3>
                <ul class="list-unstyled">
                    <li><i class="fas fa-database"></i> Collecte de données automatisée</li>
                    <li><i class="fas fa-chart-bar"></i> Visualisations interactives</li>
                    <li><i class="fas fa-chart-line"></i> Analyses approfondies</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Témoignages d'utilisateurs</h3>
                <blockquote class="blockquote">
                    <p class="mb-0">Cette plateforme a transformé notre manière de recueillir et d'analyser les données.</p>
                    <footer class="blockquote-footer"></footer>
                </blockquote>
                <blockquote class="blockquote">
                    <p class="mb-0">Les visualisations sont incroyablement intuitives et utiles.</p>
                    <footer class="blockquote-footer"></footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <h3>Accès Administrateur</h3>
                <a href="/login" class="btn btn-secondary">Connexion Administrateur</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
