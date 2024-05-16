<?php
require_once('../Modele/DAO/OeuvreDAO.php');
require_once ('../Modele/DAO/ClassificationDAO.php');
require_once('../Modele/DAO/RealiserDAO.php');
require_once ('../Modele/DAO/RealisateurDAO.php');
$OeuvreDAO = new \DAO\OeuvreDAO();
$ClaDAO = new \DAO\ClassificationDAO();
$RealiserDAO = new \DAO\realiserDAO();
$RealisateurDAO = new \DAO\RealisateurDAO();
if(isset($_GET['idOeuvre'])){
    //$mesReal = $RealiserDAO->findRealbyOeuvre($_GET['idOeuvre']);
    $monoeuvre = $OeuvreDAO->findOeuvre($_GET['idOeuvre']);
    $macla = $ClaDAO->findCla($monoeuvre['id_Cla']);
    //$mesRealNoms = $RealisateurDAO->findReal($mesReal);
    $titre = 'détails de l id';
    include_once('../vue/navBarre.php');
    include_once('../vue/vueDetailOeuvre.php');
}