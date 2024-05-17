<?php
session_start();
require_once('../Modele/DAO/OeuvreDAO.php');
$bdd=initialiseConnexionBDD();

if(isset($_GET['connect']) && $_GET['connect'] = 'unset') {
    unset($_SESSION['login']);
}
$OeuvreDAO = new \DAO\OeuvreDAO($this->bdd);
$titre = 'accueil';
$mesFilms = $OeuvreDAO->getAllFilm();
$mesSeries = $OeuvreDAO->getAllSerie();
$mesAnimes = $OeuvreDAO->getAllAnime();
if(isset($_SESSION['login'])&&$_SESSION['login']!='' ){
    
    include('../vue/navBarre.php');
}
else{
    include('../vue/navBarreSC.php');
}
include('../vue/vueListeOeuvre.php');
include('../vue/basDePage.php');
