<?php
class Realisateur {
    private string $nameRealisateur;        
    private string $nomRealisateur;      // surname
    private string $sexeRealisateur;     // gender
    private DateTime $bdayRealisateur;  // birthday

    public function __construct(string $nameRealisateur, string $nomRealisateur, 
                        string $sexeRealisateur, string $bdayRealisateur) 
    {
        $this->nameRealisateur = $nameRealisateur;
        $this->nomRealisateur = $nomRealisateur;
        $this->sexeRealisateur = $sexeRealisateur;
        $this->bdayRealisateur = new DateTime($bdayRealisateur);
    }

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
    public function __toString() {
        return $this->nameRealisateur." ".$this->nomRealisateur;
    }

    //displaying info about Director and his birthday

    public function getInfo():string {

        return $this."<br>sexe: ".$this->sexeRealisateur."<br> date de naissance: ".date_format($this->bdayRealisateur, "d-m-Y")."<br>";
    }
    
}