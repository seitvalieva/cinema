<?php

class Genre {

    private string $nom_genre;

    public function __construct(string $nom_genre) {

        $this->nom_genre = $nom_genre;
    }
 
    public function getNom_genre()
    {
        return $this->nom_genre;
    }

    public function setNom_genre($nom_genre)
    {
        $this->nom_genre = $nom_genre;

        return $this;
    }

    public function __toString(){
        return $this->nom_genre;
    }
}