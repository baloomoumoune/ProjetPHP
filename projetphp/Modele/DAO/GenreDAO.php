<?php

namespace DAO;
require_once ('../Modele/BDDManager.php');
class GenreDAO
{
    public function __construct()
    {
        $this->bdd = initialiseConnexionBDD();
    }

    public function getAllGen() {
        $query = "SELECT * FROM Genre";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
    }

    public function findGen($id) {
        $query = "SELECT * FROM Genre WHERE id_Gen = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        return $stmt->fetch();
    }

    public function createGen($lib_Gen) {
        $query = "INSERT INTO genre (lib_Gen) VALUES (:libGen)";
        $stmt = $this->bdd->prepare($query);
         $stmt->execute(array(':libGen'=>$lib_Gen));
        var_dump($stmt);
    }

    public function updateGen($id_Gen, $lib_Gen) {
        $query = "UPDATE genre SET lib_Gen=:libgen WHERE id_Gen=:idgen";
        $stmt = $this->bdd->prepare($query);
        return $stmt->execute(array(':libgen' => $lib_Gen,':idgen' => $id_Gen));
    }

    public function deleteGen($id_Gen) {
        $query = "DELETE FROM genre WHERE id_Gen=:idgen";
        $stmt = $this->bdd->prepare($query);
        return $stmt->execute(array(':idgen' => $id_Gen));
    }
}