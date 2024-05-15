<?php
session_start();

function initialiseConnexionBDD() {
    $bdd = null;
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=projetphp;charset=utf8',
            'root',
            ''
        );
    } catch(Exception $e) {
        die('Erreur connexion BDD : '.$e->POSTMessage());
    }

    return $bdd;
}

