<?php
require_once('../Modele/DAO/OeuvreDAO.php');
$OeuvreDAO = new \DAO\OeuvreDAO();
$titre = 'accueil';
$mesFilms = $OeuvreDAO->getAllFilm();
$mesSeries = $OeuvreDAO->getAllSerie();
$mesAnimes = $OeuvreDAO->getAllAnime();
include_once('../vue/navBarre.php');
include('../vue/vueListeOeuvre.php');
