<?php
require_once ('../Modele/BO/Acteur.php');
require_once ('../Modele/DAO/ActeurDAO.php');
require_once ('../Modele/DAO/RealisateurDAO.php');
require_once ('../Modele/DAO/OeuvreDAO.php');
require_once ("../Modele/BDDManager.php");
$bdd=initialiseConnexionBDD();
$ActeurDAO = new \DAO\ActeurDAO($bdd);
$RealisateurDAO = new \DAO\RealisateurDAO();
$OeuvreDAO = new \DAO\oeuvreDAO();


//-----------------find les Réalisateurs----------------
//$monreal = $RealisateurDAO->findReal(2);
//var_dump($monreal);


//-------------oeuvres----------------
//$monoeuvre = $OeuvreDAO->findOeuvre(1);
//var_dump($monoeuvre);

//------------Acteurs-------------
$testgetall = $ActeurDAO->getAllAct();
var_dump($testgetall);
$testfind = $ActeurDAO->findAct(2);
var_dump($testfind);



