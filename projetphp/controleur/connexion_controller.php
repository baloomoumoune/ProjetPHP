<?php
session_start();

require_once ('../Modele/BDDManager.php');
$bdd = initialiseConnexionBDD();

//$_SESSION['login'] = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST["nom"];
    $password = $_POST["password"];
    if($nom != "" && $password != ""){
        $req = $bdd->prepare("SELECT * FROM Administrateur WHERE nom_Admin = :nom AND mdp_Admin = :password");
        $req->bindParam(':nom', $nom);
        $req->bindParam(':password', $password);
        $req->execute();
        $rep = $req->fetch();
        if ($rep){
            $_SESSION['login'] = $nom;
            header("Location: ../controleur/ListeOeuvre.php");
            exit();
        } else {
            $error_message = "Identifiant ou mot de passe incorrect !";
        }
    }

}

include_once ('../vue/vue_connexion.php');
