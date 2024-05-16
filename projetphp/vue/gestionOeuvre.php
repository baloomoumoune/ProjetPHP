<?php include('navBarre.php'); ?>
<?php include('basdePage.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadres avec Boutons</title>
    <link href="../css/gestionOeuvre.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="cadre" id="oeuvre">
            <h2>Oeuvre</h2>
            <div class="boutonsOeuvre">
                <button id="ajouterOeuvre">Ajouter</button>
                <button id="modifierOeuvre">Modifier</button>
                <button id="supprimerOeuvre">Supprimer</button>
            </div>
        </div>
        <div class="cadre" id="acteur">
            <h2>Auteur</h2>
            <div class="boutonsActeur">
                <button id="ajouterActeur">Ajouter</button>
                <button id="modifierActeur">Modifier</button>
                <button id="supprimerActeur">Supprimer</button>
            </div>
        </div>
        <div class="cadre" id="realisateur">
            <h2>Réalisateur</h2>
            <div class="boutonsRealisateur">
                <button id="ajouterRealisateur">Ajouter</button>
                <button id="modifierRealisateur">Modifier</button>
                <button id="supprimerRealisateur">Supprimer</button>
            </div>
        </div>
        <!-- Deux nouveaux cadres identiques -->
        <div class="cadre" id="genre">
            <h2>Genre</h2>
            <div class="boutonsGenre">
                <button id="ajouterGenre">Ajouter</button>
                <button id="modifierGenre">Modifier</button>
                <button id="supprimerGenre">Supprimer</button>
            </div>
        </div>
        <div class="cadre" id="catégorie">
            <h2>Catégorie</h2>
            <div class="boutonsCategorie">
                <button id="ajouterCategorie">Ajouter</button>
                <button id="modifierCategorie">Modifier</button>
                <button id="supprimerCategorie">Supprimer</button>
            </div>
        </div>
    </div>
</body>
</html>




