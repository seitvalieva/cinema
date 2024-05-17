<?php

class Role {

    private string $nomPersonnage;
    private Film $film;

    public function __construct(string $nomPersonnage, Film $film)
    {
        $this->nomPersonnage = $nomPersonnage;
        $this->film = $film;

        $this->film->addRole($this);
    }
    // getters n setters
    public function getNomPersonnage():string
    {
        return $this->nomPersonnage;
    }
 
    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }
 
    public function getFilm():Film
    {
        return $this->film;
    }

    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }
    //end of getters n setters

    //function toString
    public function __toString() 
    {
        return $this->nomPersonnage." ";
    }
}