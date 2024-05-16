<?php

namespace DAO;

require_once('../Modele/BDDManager.php');

class RealisateurDAO {
    private $bdd;

    public function __construct()
    {
        $this->bdd = initialiseConnexionBDD();
    }

    public function getAllReal() {
        $query = "SELECT * FROM Realisateur";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
    }

    public function findReal($id) {
        $query = "SELECT * FROM Realisateur WHERE id_Real = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        return $stmt->fetch();
    }

    public function createRealisateur($nom_Real, $pre_Real, $nat_Real, $rec_Real) {
        $sql = "INSERT INTO Realisateur (nom_Real, pre_Real, nat_Real, rec_Real) VALUES (?, ?, ?, ?)";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$nom_Real, $pre_Real, $nat_Real, $rec_Real]);
    }

    public function updateRealisateur($id_Real, $nom_Real, $pre_Real, $nat_Real, $rec_Real) {
        $sql = "UPDATE Realisateur SET nom_Real=?, pre_Real=?, nat_Real=?, rec_Real=? WHERE id_Real=?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$nom_Real, $pre_Real, $nat_Real, $rec_Real, $id_Real]);
    }

    public function deleteRealisateur($id_Real) {
        $sql = "DELETE FROM Realisateur WHERE id_Real=?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$id_Real]);
    }
}
