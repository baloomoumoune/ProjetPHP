<?php

namespace DAO;


use Bo\Acteur;

class ActeurDAO {
    private $bdd;

    public function __construct(\PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAllAct() {
        $query = "SELECT * FROM Acteur";
        $stmt = $this->bdd->query($query);
        if ($stmt) {
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
            foreach($stmt as $row ) {
                $resultSet[] = new Acteur($row['id_Act'],$row['nom_Act'],$row['pre_Act'],$row['nat_Act'],new \DateTime($row['dat_nai_Act']));
            }
        }
        return $resultSet;
    }

    public function findAct(int $id) {
        $query = "SELECT * FROM Acteur WHERE id_Act = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        if ($tmt !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet[] = new Acteur($row['id_Act'],$row['nom_Act'],$row['pre_Act'],$row['nat_Act'],new \DateTime($row['dat_nai_Act']));
            }
        }
        return $stmt->fetch();
    }

    public function createActeur($nom_Act,$pre_Act, $nat_Act, $dat_nai_Act) {
        $query = "INSERT INTO Acteur (nom_Act, pre_Act, nat_Act, dat_nai_Act) VALUES (:nomAct,:preAct,:natAct,:datNai)";
        $stmt = $this->bdd->prepare($query);
        return $stmt->execute(array(':nomAct' => $nom_Act,':preAct' => $pre_Act, ':natAct' => $nat_Act,':datNai'=>$dat_nai_Act));
    }


    public function updateActeur($id_Act, $nom_Act,$pre_Act, $nat_Act, $dat_nai_Act) {
        $query = "UPDATE Acteur SET nom_Act=:nomAct, pre_Act=:preAct, nat_Act=natAct, dat_nai_Act=datNai WHERE id_Act=:idAct";
        $stmt = $this->bdd->prepare($query);
        return $stmt->execute(array(':nomAct' => $nom_Act,':preAct' => $pre_Act, ':natAct' => $nat_Act,':datNai'=>$dat_nai_Act,':idAct'=>$id_Act));
    }

    public function deleteActeur($id_Act) {
        $query = "DELETE FROM Acteur WHERE id_Act=:idAct";
        $stmt = $this->bdd->prepare($query);
        return $stmt->execute(array(':idAct' => $id_Act));
    }
}

