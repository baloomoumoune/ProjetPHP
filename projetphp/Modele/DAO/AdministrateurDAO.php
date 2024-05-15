<?php

namespace DAO;

require_once('../Modele/BDDManager.php');

class AdministrateurDAO {
    private $bdd;

    public function __construct()
    {
        $this->bdd = initialiseConnexionBDD();
    }

    public function getAllAdmin() {
        $query = "SELECT * FROM Administrateur";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
    }

    public function findAdmin($id) {
        $query = "SELECT * FROM Administrateur WHERE nom_Admin = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        return $stmt->fetch();
    }

    public function createAdministrateur($nom_Admin, $pre_Admin, $mdp_Admin) {
        $sql = "INSERT INTO Administrateur (nom_Admin, pre_Admin, mdp_Admin) VALUES (?, ?, ?, ?)";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$nom_Admin, $pre_Admin, $mdp_Admin]);
    }


    public function updateAdministrateur($id_Admin, $nom_Admin, $pre_Admin, $mdp_Admin) {
        $sql = "UPDATE Administrateur SET nom_Admin=?, pre_Admin=?, mdp_Admin=? WHERE id_Admin=?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$nom_Admin, $pre_Admin, $mdp_Admin, $id_Admin]);
    }

    public function deleteAdministrateur($id_Admin) {
        $sql = "DELETE FROM Administrateur WHERE id_Admin=?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$id_Admin]);
    }
}

