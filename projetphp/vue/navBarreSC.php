<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barre de navigation</title>
<link href="css/navBarreSC.css" rel="stylesheet" type="text/css">
<style>
  body {
        margin: 0; /* Supprime les marges par défaut du corps de la page */
        padding: 0; /* Supprime les rembourrages par défaut du corps de la page */
        display: flex; /* Utiliser Flexbox pour centrer le cadre */
        justify-content: center; /* Centrer horizontalement */
        align-items: center; /* Centrer verticalement */
        height: 100vh; /* Hauteur de la vue */
        background-color: #202020; /* Couleur de fond */
    }
/* On fait en sorte que chaque élément contienne sa marge interne avec box-sizing et on retire les traits qui sont par défaut sur les liens */
* {
  box-sizing: border-box;
  text-decoration: none;
}

/* On modernise notre balise de navigation avec une petite ombre. On mets tous les éléments du menu les uns bien à côté des autres avec flexbox (display: flex) */
nav {
  background-color: #181818;
  padding: 0 20px;
  border-radius: 40px;
  box-shadow: 0 10px 40px #454545;
  display: flex;
  overflow: hidden;
  overflow-x: auto;
  position: fixed; /* Position fixe pour que la barre reste en haut de la page */
  width: auto; /* Occupera toute la largeur de l'écran */
  top: 0; /* Collé en haut */
  z-index: 999; /* Pour s'assurer que la barre est au-dessus du contenu */
  left: 0; /* Centrage horizontal */
  right: 0; /* Centrage horizontal */
  margin: auto; /* Centrage horizontal */
}


/* On stylise chaque élément */
.nav-item {
  color: #FFF;
  font-family: arial, sans-serif;
  padding: 20px;
  margin: 0 6px;
  position: relative;
}

/* Ici on met juste un petit élément avant chaque élément pour le rendre plus beau visuellement */
.nav-item:before {
  content: "";
  position: absolute;
  bottom: -6px;
  background-color: #dfe2ea;
  height: 5px;
  width: 100%;
  border-radius: 8px 8px 0 0;
  left: 0;
  transition: .3s;
}

/* Avec les dernières nouveautés de CSS, on peut changer les propriétés des éléments selon des conditions avec not */
.nav-item:not(.is-active):hover:before {
  bottom: 0;
}
.nav-item:not(.is-active):hover {
  color: #333;
}

/* Stylisons notre indicateur */
.nav-indicator {
  position: absolute;
  left: 0;
  bottom: 0;
  height: 5px;
  transition: .4s;
  border-radius: 8px 8px 0 0;
}

/* Stylisons le titre de la page */
.page-title {
  color: #83818c;
  font-family: arial, sans-serif;
  padding: 20px;
  margin-left: auto;
}
  
</style>
</head>
<body>
<nav style="margin-top: 20px;">
  <a href="../index.php" class="nav-item is-active" data-active-color="orange" data-target="Bienvenue">Bienvenue</a>
  <a href="index.php?page=listeOeuvres" class="nav-item" data-active-color="green" data-target="Films">Films</a>
  <a href="#" class="nav-item" data-active-color="blue" data-target="Séries">Séries</a>
  <a href="#" class="nav-item" data-active-color="red" data-target="Manga">Manga</a>
  <a href="index.php?page=gestionOeuvres" class="nav-item" data-active-color="rebeccapurple" data-target="Gérer oeuvres">Gérer oeuvres<a>
  <span class="nav-indicator"></span>
</nav>
</body>
</html>
