<?php

class Genre {

    private string $nomGenre;
    private array $filmsParGenre;

    public function __construct(string $nomGenre) {

        $this->nomGenre = $nomGenre;
        $this->filmsParGenre = [];
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
    public function getFilmsParGenre()
    {
        return $filmsParGenre->filmsParGenre;
    }

    public function setFilmsParGenre($filmsParGenre)
    {
        $this->filmsParGenre = $filmsParGenre;

        return $this;
    }

    public function __toString()
    {
        return $this->nomGenre;
    }

    public function addFilmParGenre(Film $filmParGenre){
        $this->filmsParGenre[] = $filmParGenre;
    }

    public function displayFilmsParGenre(){
        $result = "<b> $this films </b> <br>";

        foreach($this->filmsParGenre as $filmParGenre){

            $result .= $filmParGenre." <br>";
        }
        return $result;
    }
}