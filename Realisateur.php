<?php
class Realisateur {
    private string $nameRealisateur;
    private string $prenomRealisateur;
    private string $sexeRealisateur;
    private DateTime $bdayRealisateur; // Date de naissance 

    public function __construct(string $nameRealisateur, string $prenomRealisateur, 
                        string $sexeRealisateur, string $bdayRealisateur) 
    {
        $this->nameRealisateur = $nameRealisateur;
        $this->prenomRealisateur = $prenomRealisateur;
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

    public function getPrenomRealisateur()
    {
        return $this->prenomRealisateur;
    }

    public function setPrenomRealisateur($prenomRealisateur)
    {
        $this->prenomRealisateur = $prenomRealisateur;

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
        return "name: ".$this->nameRealisateur."<br>prenom: ".$this->prenomRealisateur;
    }

    public function getInfo():string {

        return $this."<br>sexe: ".$this->sexeRealisateur."<br> date de naissance: ".date_format($this->bdayRealisateur, "d-m-Y")."<br>";
    }
    
}