<?php

namespace DAO;

require_once ('ActeurDAO.php');
require_once ('GenreDAO.php');
require_once ('RealisateurDAO.php');
use Bo\Oeuvre;


class OeuvreDAO {
    private $bdd;

    public function __construct(\PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAllOeuvre() : ?array
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM Oeuvre';
        $rqtResult = $this->bdd->query($query);
        if ($rqtResult) {
            $rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
            foreach($rqtResult as $row ) {
                $dao = new ClassificationDAO($this->bdd);
                $laCla = $dao->findCla($row['id_Cla']);
                $resultSet[] = new Oeuvre($row['id_Oeuvre'],$row['tit_ori_Oeuvre'],$row['tit_fr_Oeuvre'],$row['anne_sort_Oeuvre'],$row['res_Oeuvre'],$row['nb_ep_Oeuvre'],$row['img_Oeuvre'],$laCla);
	    }
        }
        return $resultSet;
    }

    public function findOeuvre(int $id) : ?Oeuvre
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM Oeuvre WHERE id_Oeuvre=:idOeuvre;';
        $reqPrep = $this->bdd->prepare($query);
        $res = $reqPrep->execute([':idOeuvre' => $id]);
        if ($res !== FALSE) {
            $row = $reqPrep->fetch(\PDO::FETCH_ASSOC);
            if(!is_null($row)) {
                $daoReal = new \DAO\RealisateurDAO($this->bdd);
                $daoGen = new \DAO\GenreDAO($this->bdd);
                $daoAct = new \DAO\ActeurDAO($this->bdd);
                $dao = new \DAO\ClassificationDAO($this->bdd);
                $laCla = $dao->findCla($row['id_Cla']);
                $resultSet = new Oeuvre($row['id_Oeuvre'],$row['tit_ori_Oeuvre'],$row['tit_fr_Oeuvre'],$row['anne_sort_Oeuvre'],$row['res_Oeuvre'],$row['nb_ep_Oeuvre'],$row['img_Oeuvre'],$laCla);

                $acteurs = $daoAct->getAllActByOeuvre($row['id_Oeuvre']);
                if ($acteurs === null) {
                    $acteurs = [];
                }
                $resultSet->setActeurs($acteurs);


                $acteursP = $daoAct->getAllActPByOeuvre($row['id_Oeuvre']);
                if ($acteursP === null) {
                    $acteursP = [];
                }
                $resultSet->setActeurP($acteursP);

                $genre = $daoGen->getAllGenByOeuvre($row['id_Oeuvre']);
                if ($genre === null) {
                    $genre = [];
                }
                $resultSet->setMesgenres($genre);

                $real = $daoReal->getAllRealByOeuvre($row['id_Oeuvre']);
                if ($real === null) {
                    $real = [];
                }
                $resultSet->setMesrealisateurs($real);
            }
        }
        return $resultSet;
    }

    public function getAllFilm() : ?array
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM Oeuvre WHERE id_Cla = 1';
        $rqtResult = $this->bdd->query($query);
        if ($rqtResult) {
            $rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
            foreach($rqtResult as $row ) {
                $dao = new ClassificationDAO($this->bdd);
                $laCla = $dao->findCla($row['id_Cla']);
                $resultSet[] = new Oeuvre($row['id_Oeuvre'],$row['tit_ori_Oeuvre'],$row['tit_fr_Oeuvre'],$row['anne_sort_Oeuvre'],$row['res_Oeuvre'],$row['nb_ep_Oeuvre'],$row['img_Oeuvre'],$laCla);
            }
        }
        return $resultSet;
    }
    public function getAllSerie() : ?array
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM Oeuvre WHERE id_Cla = 2';
        $rqtResult = $this->bdd->query($query);
        if ($rqtResult) {
            $rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
            foreach($rqtResult as $row ) {
                $dao = new ClassificationDAO($this->bdd);
                $laCla = $dao->findCla($row['id_Cla']);
                $resultSet[] = new Oeuvre($row['id_Oeuvre'],$row['tit_ori_Oeuvre'],$row['tit_fr_Oeuvre'],$row['anne_sort_Oeuvre'],$row['res_Oeuvre'],$row['nb_ep_Oeuvre'],$row['img_Oeuvre'],$laCla);
            }
        }
        return $resultSet;
    }
    public function getAllAnime() : ?array
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM Oeuvre WHERE id_Cla = 3';
        $rqtResult = $this->bdd->query($query);
        if ($rqtResult) {
            $rqtResult->setFetchMode(\PDO::FETCH_ASSOC);
            foreach($rqtResult as $row ) {
                $dao = new ClassificationDAO($this->bdd);
                $laCla = $dao->findCla($row['id_Cla']);
                $resultSet[] = new Oeuvre($row['id_Oeuvre'],$row['tit_ori_Oeuvre'],$row['tit_fr_Oeuvre'],$row['anne_sort_Oeuvre'],$row['res_Oeuvre'],$row['nb_ep_Oeuvre'],$row['img_Oeuvre'],$laCla);
            }
        }
        return $resultSet;
    }

    public function createOeuvre($tit_ori_Oeuvre, $tit_fr_Oeuvre, $anne_sort_Oeuvre, $res_Oeuvre, $nb_ep_Oeuvre, $img_Oeuvre, $id_Cla) {
        $sql = "INSERT INTO Oeuvre (tit_ori_Oeuvre, tit_fr_Oeuvre, anne_sort_Oeuvre, res_Oeuvre, nb_ep_Oeuvre, img_Oeuvre, id_Cla) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$tit_ori_Oeuvre, $tit_fr_Oeuvre, $anne_sort_Oeuvre, $res_Oeuvre, $nb_ep_Oeuvre, $img_Oeuvre, $id_Cla]);
    }

    public function updateOeuvre($id_Oeuvre, $tit_ori_Oeuvre, $tit_fr_Oeuvre, $anne_sort_Oeuvre, $res_Oeuvre, $nb_ep_Oeuvre, $img_Oeuvre, $id_Cla) {
        $sql = "UPDATE Oeuvre SET tit_ori_Oeuvre=?, tit_fr_Oeuvre=?, anne_sort_Oeuvre=?, res_Oeuvre=?, nb_ep_Oeuvre=?, img_Oeuvre=?, id_Cla=? WHERE id_Oeuvre=?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$tit_ori_Oeuvre, $tit_fr_Oeuvre, $anne_sort_Oeuvre, $res_Oeuvre, $nb_ep_Oeuvre, $img_Oeuvre, $id_Cla, $id_Oeuvre]);
    }

    public function deleteOeuvre($id_Oeuvre) {
        $sql = "DELETE FROM Oeuvre WHERE id_Oeuvre=?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$id_Oeuvre]);
    }
}