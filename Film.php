<?php

class Film {
    private string $titreFilm;
    private DateTime $dateSortie;
    private int $dureeMinutes;
    private string $resume;
    private Genre $filmGenre;
    private Realisateur $realisateurFilm;

    //initializing object Film with its Realisateur and Genre

    public function __construct(string $titreFilm, string $dateSortie, 
                                int $dureeMinutes, string $resume,
                                Realisateur $realisateurFilm, Genre $filmGenre )
    {
        $this->titreFilm = $titreFilm;
        $this->dateSortie = new DateTime($dateSortie);
        $this->dureeMinutes = $dureeMinutes;
        $this->resume = $resume;
        $this->realisateurFilm = $realisateurFilm;
        $this->filmGenre = $filmGenre;
        
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
 
    public function getFilmGenre()
    {
        return $this->filmGenre;
    }

    public function setFilmGenre($filmGenre)
    {
        $this->filmGenre = $filmGenre;

        return $this;
    }

    public function getRealisateurFilm()
    {
        return $this->realisateurFilm;
    }

    public function setRealisateurFilm($realisateurFilm)
    {
        $this->realisateurFilm = $realisateurFilm;

        return $this;
    }
    public function __toString() {

        return $this->titreFilm."<br>".$this->resume."<br>";
    }

    //displaying info about a film with info about its realisateur and genre

    public function getInfo(): string {
        return $this."duree: ".$this->dureeMinutes." minutes<br> annee: ".
        date_format($this->dateSortie, "Y")."<br>realisateur: <br>".$this->realisateurFilm.
        "<br> genre: ".$this->filmGenre;
    }
}