<?php

class Acteur {

    private string $nameActeur;
    private string $nomActeur;
    private string $sexeActeur;
    private string $bdayActeur;
    private array $films;

    public function __construct(string $nameActeur, string $nomActeur, 
                            string $sexeActeur, string $bdayActeur){
        $this->nameActeur = $nameActeur;
        $this->nomActeur = $nomActeur;
        $this->sexeActeur = $sexeActeur;
        $this->bdayActeur  = new DateTime($bdayActeur);    
        $this->filmsActeur = []; 
        $this->film->addActeur($this);  

 }
 
    public function getNameActeur():string
    {
        return $this->nameActeur;
    }

    public function setNameActeur($nameActeur)
    {
        $this->nameActeur = $nameActeur;

        return $this;
    }
 
    public function getNomActeur():string
    {
        return $this->nomActeur;
    }
 
    public function setNomActeur($nomActeur)
    {
        $this->nomActeur = $nomActeur;

        return $this;
    }

    public function getSexeActeur():string
    {
        return $this->sexeActeur;
    }

    public function setSexeActeur($sexeActeur)
    {
        $this->sexeActeur = $sexeActeur;

        return $this;
    }
 
    public function getBdayActeur():DateTime
    {
        return $this->bdayActeur;
    }

    public function setBdayActeur($bdayActeur)
    {
        $this->bdayActeur = $bdayActeur;

        return $this;
    }
    
    public function getFilmsActeur():array
    {
        return $this->filmsActeur;
    }
 
    public function setFilmsActeur($filmsActeur)
    {
        $this->filmsActeur = $filmsActeur;
        
        return $this;
    }
    public function __toString():string
    {
        return $this->nameActeur." ".$this->nomActeur;
    }
    public function addFilm(Film $filmActeur) {
        $this->filmsActeur[] = $filmActeur;
    }
}