<?php

class Role {

    private string $nomPersonnage;

    // private Film $film;
    private array $castings;

    public function __construct(string $nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;
        // $this->film = $film;

        // $this->film->addRole($this);
        $this->castings = [];
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
 
    // public function getFilm():Film
    // {
    //     return $this->film;
    // }

    // public function setFilm($film)
    // {
    //     $this->film = $film;

    //     return $this;
    // }
    public function getCastings()
    {
        return $this->castings;
    }
            
    public function setCastings($castings)
    {
        $this->castings = $castings;
            
        return $this;
    }
    //end of getters n setters

    //function toString
    public function __toString() 
    {
        return $this->nomPersonnage." ";
    }

    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }
}