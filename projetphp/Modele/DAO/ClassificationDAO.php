<?php

namespace DAO;
require_once ('../Modele/BDDManager.php');
class ClassificationDAO {
    public function __construct()
    {
        $this->bdd = initialiseConnexionBDD();
    }

    public function getAllCla() {
        $query = "SELECT * FROM Classification";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
    }

    public function findCla($id) {
        $query = "SELECT * FROM Classification WHERE id_Cla = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        return $stmt->fetch();
    }

    public function createClassification($lib_Cla) {
        $sql = "INSERT INTO classification (lib_Cla) VALUES (?, ?)";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$lib_Cla]);
    }


    public function updateClassification($id_Cla, $lib_Cla) {
        $sql = "UPDATE classification SET lib_Cla=? WHERE id_Cla=?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$lib_Cla, $id_Cla]);
    }

    public function deleteClassification($id_Cla) {
        $sql = "DELETE FROM classification WHERE id_Cla=?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$id_Cla]);
    }
}