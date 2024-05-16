<?php
require_once('../Modele/DAO/OeuvreDAO.php');
require_once ('../Modele/DAO/ClassificationDAO.php');
$OeuvreDAO = new \DAO\OeuvreDAO();
$ClaDAO = new \DAO\ClassificationDAO();
if(isset($_GET['idOeuvre'])){
    $monoeuvre = $OeuvreDAO->findOeuvre($_GET['idOeuvre']);
    $macla = $ClaDAO->findCla($monoeuvre['id_Cla']);
    $titre = 'détails de l id';
    include_once('../vue/navBarre.php');
    include_once('../vue/vueDetailOeuvre.php');
}