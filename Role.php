<?php

class Role {

    private string $nomPersonnage;

    private array $castings;

    public function __construct(string $nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;
        
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

    public function displayActeurs(){
        $result = "<b>Les acteurs ayant joué le rôle de $this :</b><br>";

        foreach($this->castings as $casting) {
            $result .= $casting->getActeur()."<br>";
        }

        return $result;
    }
}