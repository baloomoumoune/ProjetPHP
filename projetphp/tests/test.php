<?php
require_once ('../Modele/DAO/ActeurDAO.php');
require_once ('../Modele/DAO/RealisateurDAO.php');
require_once ('../Modele/DAO/OeuvreDAO.php');
require_once('../Modele/DAO/RealiserDAO.php');

$ActeurDAO = new \DAO\acteurDAO();
$RealisateurDAO = new \DAO\RealisateurDAO();
$OeuvreDAO = new \DAO\oeuvreDAO();
$RealiserDAO = new \DAO\realiserDAO();

////afficher des reals////
$mesReal = $RealiserDAO->findRealbyOeuvre(2);
var_dump($mesReal);
$mesRealNoms = $RealisateurDAO->findReal($mesReal);
var_dump($mesRealNoms);
echo $mesRealNoms['pre_Real'];

$monreal = $RealisateurDAO->findReal(2);

$monoeuvre = $OeuvreDAO->findOeuvre(1);
$testgetall = $ActeurDAO->getAllAct();
//var_dump($testgetall);
//var_dump($monreal);



