<?php

class Acteur {

    private string $nameActeur;
    private string $nomActeur;
    private string $sexeActeur;
    private string $bdayActeur;

    public function __construct(string $nameActeur, string $nomActeur, 
                            string $sexeActeur, $bdayActeur){
        $this->nameActeur = $nameActeur;
        $this->nomActeur = $nomActeur;
        $this->sexeActeur = $sexeActeur;
        $this->bdayActeur  = $bdayActeur;                 
 }
 
    public function getNameActeur()
    {
        return $this->nameActeur;
    }

    public function setNameActeur($nameActeur)
    {
        $this->nameActeur = $nameActeur;

        return $this;
    }
 
    public function getNomActeur()
    {
        return $this->nomActeur;
    }
 
    public function setNomActeur($nomActeur)
    {
        $this->nomActeur = $nomActeur;

        return $this;
    }

    public function getSexeActeur()
    {
        return $this->sexeActeur;
    }

    public function setSexeActeur($sexeActeur)
    {
        $this->sexeActeur = $sexeActeur;

        return $this;
    }
 
    public function getBdayActeur()
    {
        return $this->bdayActeur;
    }

    public function setBdayActeur($bdayActeur)
    {
        $this->bdayActeur = $bdayActeur;

        return $this;
    }
    public function __toString(){
        return $this->nameActeur." ".$this->nomActeur;
    }
}