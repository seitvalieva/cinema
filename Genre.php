<?php

class Genre {

    private string $nomGenre;

    public function __construct(string $nomGenre) {

        $this->nomGenre = $nomGenre;
    }
 
    public function getNomGenre()
    {
        return $this->nomGenre;
    }

    public function setNomGenre($nomGenre)
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }

    public function __toString(){
        return $this->nomGenre;
    }
}