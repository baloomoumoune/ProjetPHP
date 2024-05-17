<?php
session_start();
require_once('../Modele/DAO/OeuvreDAO.php');
$OeuvreDAO = new \DAO\OeuvreDAO();
if(isset($_GET['idOeuvre'])){
    $monoeuvre = $OeuvreDAO->findOeuvre($_GET['idOeuvre']);
    $titre = 'détails de l id';
    if(isset($_SESSION['login'])&&$_SESSION['login']!='' ){

        include('../vue/navBarre.php');
    }
    else{
        include('../vue/navBarreSC.php');
    }
    include_once('../vue/vueDetailOeuvre.php');
}