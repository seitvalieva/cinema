<?php

class Film {
    private string $titreFilm;   //title of a film
    private DateTime $dateSortie;  // Release date
    private int $dureeMinutes;    // duration in minutes
    private string $resume;         // description 
    private Realisateur $realisateur;   //director of a film
    private Genre $filmGenre; 
    
    private array $roles;

    //initializing object Film with its Realisateur and Genre

    public function __construct(string $titreFilm, string $dateSortie, 
                                int $dureeMinutes, string $resume,
                                Realisateur $realisateur, Genre $filmGenre )
    {
        //initialiser des variables/attribues et donner leurs valeurs
        //$this pour designer l'objet currant

        $this->titreFilm = $titreFilm;
        $this->dateSortie = new DateTime($dateSortie); //transformer en date type
        $this->dureeMinutes = $dureeMinutes;
        $this->resume = $resume;
        $this->realisateur = $realisateur;
        $this->filmGenre = $filmGenre;

        $this->realisateur->addFilmRealisateur($this); // added at the same time to the array filmsRealisateur[]
        
        $this->roles = [];
    }
    //  getters n setters
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

    public function getRealisateur():Realisateur
    {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }
    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }
    // end of getters n setters


    // function toString
    public function __toString() {

        return $this->titreFilm." ";
        // return $this->titreFilm."<br>".$this->resume."<br>";
    }

    //displaying info about a film with info about its director and genre
    public function getInfo(): string {

        return $this."duree: ".$this->dureeMinutes." minutes<br> annee: ".
        date_format($this->dateSortie, "Y")."<br>realisateur: ".$this->realisateur.
        "<br> genre: ".$this->filmGenre."<br>";
    }

    // adding a new Role to a Film
    public function addRole(Role $role)
    {
        $this->roles[] = $role;
    }

    // display Film's personnages
    public function displayRoles()
    {
        $result = "<h2> $this roles </h2><br>";

        foreach($this->roles as $role){
            $result .= $role.", ";
        }
        return $result;
    }
}