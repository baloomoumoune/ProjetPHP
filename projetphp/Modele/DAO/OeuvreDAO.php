<?php

namespace DAO;

require_once('../Modele/BDDManager.php');

class OeuvreDAO {
    private $bdd;

    public function __construct()
    {
        $this->bdd = initialiseConnexionBDD();
    }

    public function getAllOeuvres() {
        $query = "SELECT * FROM Oeuvre";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
    }

    public function findOeuvre($id) {
        $query = "SELECT * FROM Oeuvre WHERE id_Oeuvre = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute(array(':id' => $id));
        return $stmt->fetch();
    }

    public function getAllFilm() {
        $query = "SELECT * FROM Oeuvre WHERE id_Cla = 1";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
    }
    public function getAllSerie() {
        $query = "SELECT * FROM Oeuvre WHERE id_Cla = 2";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
    }
    public function getAllAnime() {
        $query = "SELECT * FROM Oeuvre WHERE id_Cla = 3";
        $stmt = $this->bdd->query($query);
        return $stmt->fetchAll();
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