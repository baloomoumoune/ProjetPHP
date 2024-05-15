<?php

namespace DAO;

require_once('../Modele/BDDManager.php');

class ActeurDAO {
    private $bdd;

    public function __construct()
    {
        $this->bdd = initialiseConnexionBDD();
    }

    public function getAllAct() {
        $query = "SELECT * FROM Acteur";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
    }

    public function findAct($id) {
        $query = "SELECT * FROM Acteur WHERE id_Act = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        return $stmt->fetch();
    }

    public function createActeur($nom_Act,$pre_Act, $nat_Act, $dat_nai_Act) {
        $query = "INSERT INTO acteur (nom_Act, pre_Act, nat_Act, dat_nai_Act) VALUES (:nomAct,:preAct,:natAct,:datNai)";
        $stmt = $this->bdd->prepare($query);
        return $stmt->execute(array(':nomAct' => $nom_Act,':preAct' => $pre_Act, ':natAct' => $nat_Act,':datNai'=>$dat_nai_Act));
    }


    public function updateActeur($id_Act, $nom_Act,$pre_Act, $nat_Act, $dat_nai_Act) {
        $query = "UPDATE acteur SET nom_Act=:nomAct, pre_Act=:preAct, nat_Act=natAct, dat_nai_Act=datNai WHERE id_Act=:idAct";
        $stmt = $this->bdd->prepare($query);
        return $stmt->execute(array(':nomAct' => $nom_Act,':preAct' => $pre_Act, ':natAct' => $nat_Act,':datNai'=>$dat_nai_Act,':idAct'=>$id_Act));
    }

    public function deleteActeur($id_Act) {
        $query = "DELETE FROM acteur WHERE id_Act=:idAct";
        $stmt = $this->bdd->prepare($query);
        return $stmt->execute(array(':idAct' => $id_Act));
    }
}

