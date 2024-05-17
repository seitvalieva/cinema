<?php
class Realisateur {
    private string $nameRealisateur;        
    private string $nomRealisateur;      // surname
    private string $sexeRealisateur;     // gender
    private DateTime $bdayRealisateur;  // birthday

    private array $filmsRealisateur;    // films directed by Realisateur

    public function __construct(string $nameRealisateur, string $nomRealisateur, 
                        string $sexeRealisateur, string $bdayRealisateur) 
    {
        $this->nameRealisateur = $nameRealisateur;
        $this->nomRealisateur = $nomRealisateur;
        $this->sexeRealisateur = $sexeRealisateur;
        $this->bdayRealisateur = new DateTime($bdayRealisateur);

        $this->filmsRealisateur = [];       //initialize empty array of Realisateur's films
    }

    // getters n setters pour acceder et modifier les attribues
    public function getNameRealisateur()
    {
        return $this->nameRealisateur;
    }
 
    public function setNameRealisateur($nameRealisateur)
    {
        $this->nameRealisateur = $nameRealisateur;

        return $this;
    }

    public function getNomRealisateur()
    {
        return $this->nomRealisateur;
    }

    public function setNomRealisateur($nomRealisateur)
    {
        $this->nomRealisateur = $nomRealisateur;

        return $this;
    }

    public function getSexe_realisateur()
    {
        return $this->sexeRealisateur;
    }

    public function setSexe_realisateur($sexeRealisateur)
    {
        $this->sexeRealisateur = $sexeRealisateur;

        return $this;
    }

    public function getBdayRealisateur(): DateTime
    {
        
        return $this->bdayRealisateur;
    }

    public function setBdayRealisateur($bdayRealisateur)
    {
        $this->bdayRealisateur = $bdayRealisateur;

        return $this;
    }
    
    public function getFilmsRealisateur()
    {
        return $this->filmsRealisateur;
    }
 
    public function setFilmsRealisateur($filmsRealisateur)
    {
        $this->filmsRealisateur = $filmsRealisateur;

        return $this;
    }
    //end of getters n setters

    //function toString
    public function __toString() {
        return $this->nameRealisateur." ".$this->nomRealisateur;
    }

    //displaying info about Director and his birthday

    public function getInfo():string {

        return $this."<br>sexe: ".$this->sexeRealisateur."<br> date de naissance: ".$this->bdayRealisateur->format("d-m-Y")."<br>";
        // return $this."<br>sexe: ".$this->sexeRealisateur."<br> date de naissance: ".date_format($this->bdayRealisateur, "d-m-Y")."<br>";
    }

    // function adding a film to Realisateur

    public function addFilmRealisateur(Film $filmRealisateur)
    {
        $this->filmsRealisateur[] = $filmRealisateur;
    }
    

}