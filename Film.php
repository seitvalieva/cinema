<?php

class Film {
    private string $titreFilm;
    private DateTime $dateSortie;
    private int $dureeMinutes;
    private string $resume;
    private Genre $filmGenre;
    private Realisateur $realisateurFilm;

    public function __construct(string $titreFilm, string $dateSortie, 
                                int $dureeMinutes, string $resume)
    {
        $this->titreFilm = $titreFilm;
        $this->dateSortie = new DateTime($dateSortie);
        $this->dureeMinutes = $dureeMinutes;
        $this->resume = $resume;
    }
 
    public function getTitreFilm()
    {
        return $this->titreFilm;
    }
 
    public function setTitreFilm($titreFilm)
    {
        $this->titreFilm = $titreFilm;

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

    public function getDureeMinutes()
    {
        return $this->dureeMinutes;
    }

    public function setDureeMinutes($dureeMinutes)
    {
        $this->dureeMinutes = $dureeMinutes;

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
    public function __toString() {

        return $this->titreFilm."<br>".$this->resume."<br>";
    }
}