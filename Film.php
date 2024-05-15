<?php

class Film {
    private string $titre_film;
    private DateTime $dateSortie;
    private int $duree_min;
    private string $resume;

    public function __construct(string $titre_film, string $dateSortie, 
                                int $duree_min, string $resume)
    {
        $this->titre_film = $titre_film;
        $this->dateSortie = new DateTime($dateSortie);
        $this->duree_min = $duree_min;
        $this->resume = $resume;
    }
 
    public function getTitre_film()
    {
        return $this->titre_film;
    }
 
    public function setTitre_film($titre_film)
    {
        $this->titre_film = $titre_film;

        return $this;
    }
 
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getDuree_min()
    {
        return $this->duree_min;
    }

    public function setDuree_min($duree_min)
    {
        $this->duree_min = $duree_min;

        return $this;
    }

    public function getResume()
    {
        return $this->resume;
    }

    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }
}