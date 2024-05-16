<?php

namespace DAO;
require_once('../Modele/BDDManager.php');
class RealiserDAO
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = initialiseConnexionBDD();
    }

    public function findOeuvrebyReal($id){
        $query = "SELECT id_Oeuvre FROM Realiser WHERE id_Real = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        $result = $stmt->fetchColumn();
        return $result !== false ? (int)$result : null;
    }

    public function findRealbyOeuvre($id){
        $query = "SELECT id_Real FROM Realiser WHERE id_Oeuvre = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        $result = $stmt->fetchAll();
    }
}