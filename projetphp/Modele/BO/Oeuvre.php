<?php

namespace BO;

class Oeuvre {
    private int $idOeuvre;
    private string $titreOriginal;
    private string $titreFrancais;
    private int $anneeSortie;
    private string $resume;
    private int $nombreEpisodes;
    private string $image;
    private Classification $classification;

    public function __construct(int $idOeuvre, string $titreOriginal, string $titreFrancais, int $anneeSortie, string $resume, int $nombreEpisodes, string $image, Classification $classification)
    {
        $this->idOeuvre = $idOeuvre;
        $this->titreOriginal = $titreOriginal;
        $this->titreFrancais = $titreFrancais;
        $this->anneeSortie = $anneeSortie;
        $this->resume = $resume;
        $this->nombreEpisodes = $nombreEpisodes;
        $this->image = $image;
        $this->classification = $classification;
    }

    public function getIdOeuvre(): int
    {
        return $this->idOeuvre;
    }

    public function setIdOeuvre(int $idOeuvre): void
    {
        $this->idOeuvre = $idOeuvre;
    }

    public function getTitreOriginal(): string
    {
        return $this->titreOriginal;
    }

    public function setTitreOriginal(string $titreOriginal): void
    {
        $this->titreOriginal = $titreOriginal;
    }

    public function getTitreFrancais(): string
    {
        return $this->titreFrancais;
    }

    public function setTitreFrancais(string $titreFrancais): void
    {
        $this->titreFrancais = $titreFrancais;
    }

    public function getAnneeSortie(): int
    {
        return $this->anneeSortie;
    }

    public function setAnneeSortie(int $anneeSortie): void
    {
        $this->anneeSortie = $anneeSortie;
    }

    public function getResume(): string
    {
        return $this->resume;
    }

    public function setResume(string $resume): void
    {
        $this->resume = $resume;
    }

    public function getNombreEpisodes(): int
    {
        return $this->nombreEpisodes;
    }

    public function setNombreEpisodes(int $nombreEpisodes): void
    {
        $this->nombreEpisodes = $nombreEpisodes;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getClassification(): Classification
    {
        return $this->classification;
    }

    public function setClassification(Classification $classification): void
    {
        $this->classification = $classification;
    }
}
