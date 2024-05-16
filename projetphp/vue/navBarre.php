<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de navigation</title>
    <link href="../css/navBarre.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"rel="stylesheet" type="text/css">
    <link href="../css/vueListeOeuvres.css"rel="stylesheet" type="text/css">
</head>
<body>

<nav style="margin-top: 20px;">
  <a href="../index.php" class="nav-item is-active" data-active-color="orange" data-target="Bienvenue">Bienvenue</a>
  <a href="#" class="nav-item" data-active-color="green" data-target="Films">Films</a>
  <a href="#" class="nav-item" data-active-color="blue" data-target="Séries">Séries</a>
  <a href="#" class="nav-item" data-active-color="red" data-target="Manga">Manga</a>
  <a href="#" class="nav-item" data-active-color="rebeccapurple" data-target="Gérer oeuvres">Gérer oeuvres</a>
  <span class="nav-indicator"></span>
  <a href="ListeOeuvre.php?connect=unset" class="nav-item" data-active-color="black" data-target="Se connecter" style="margin-left: auto;">Se déconnecter</a>
</nav>
