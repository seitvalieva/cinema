<?php

class Film {
    private string $titreFilm;   //title of a film
    private DateTime $dateSortie;  // Release date
    private int $dureeMinutes;    // duration in minutes
    private string $resume;         // description 
    private Realisateur $realisateurFilm;   //director of a film
    private Genre $filmGenre; 
    private array $acteurs;      
    

    //initializing object Film with its Realisateur and Genre

    public function __construct(string $titreFilm, string $dateSortie, 
                                int $dureeMinutes, string $resume,
                                Realisateur $realisateurFilm, Genre $filmGenre )
    {
        //initialiser des variables/attribues et donner leurs valeurs
        //$this pour designer l'objet currant

        $this->titreFilm = $titreFilm;
        $this->dateSortie = new DateTime($dateSortie); //transformer en date type
        $this->dureeMinutes = $dureeMinutes;
        $this->resume = $resume;
        $this->realisateurFilm = $realisateurFilm;
        $this->filmGenre = $filmGenre;
        $this->acteur->addFilm($this);
        $this->acteurs = [];
        
    }
 
    public function getTitreFilm():string
    {
        return $this->titreFilm;
    }
 
    public function setTitreFilm($titreFilm)
    {
        $this->titreFilm = $titreFilm;

        return $this;
    }
 
    public function getDateSortie():DateTime
    {
        return $this->dateSortie;
    }

    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getDureeMinutes():int
    {
        return $this->dureeMinutes;
    }

    public function setDureeMinutes($dureeMinutes)
    {
        $this->dureeMinutes = $dureeMinutes;

        return $this;
    }

    public function getResume():string
    {
        return $this->resume;
    }

    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }
 
    public function getFilmGenre():Genre
    {
        return $this->filmGenre;
    }

    public function setFilmGenre($filmGenre)
    {
        $this->filmGenre = $filmGenre;

        return $this;
    }

    public function getRealisateurFilm():Realisateur
    {
        return $this->realisateurFilm;
    }

    public function setRealisateurFilm($realisateurFilm)
    {
        $this->realisateurFilm = $realisateurFilm;

        return $this;
    }
    public function getActeurs():array
    {
        return $this->acteurs;
    }

    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;

        return $this;
    }
    public function __toString() {

        return $this->titreFilm."<br>".$this->resume."<br>";
    }
    //displaying info about a film with info about its director and genre

    public function getInfo(): string {

        return $this."duree: ".$this->dureeMinutes." minutes<br> annee: ".
        date_format($this->dateSortie, "Y")."<br>realisateur: ".$this->realisateurFilm.
        "<br> genre: ".$this->filmGenre;
    }
    // add each new acteur to film
    
    public function addActeur(Acteur $acteur)
    {
        $this->acteurs[] = $acteur;
    }

}