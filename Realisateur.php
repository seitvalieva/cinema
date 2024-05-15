<?php
class Realisateur {
    private string $name_realisateur;
    private string $prenom_realisateur;
    private string $sexe_realisateur;
    private DateTime $bday_realisateur;

    public function __construct(string $name_realisateur, string $prenom_realisateur, 
                        string $sexe_realisateur, string $bday_realisateur) 
    {
        $this->name_realisateur = $name_realisateur;
        $this->prenom_realisateur = $prenom_realisateur;
        $this->sexe_realisateur = $sexe_realisateur;
        $this->bday_realisateur = new DateTime($bday_realisateur);
    }

    public function getName_realisateur()
    {
        return $this->name_realisateur;
    }
 
    public function setName_realisateur($name_realisateur)
    {
        $this->name_realisateur = $name_realisateur;

        return $this;
    }

    public function getPrenom_realisateur()
    {
        return $this->prenom_realisateur;
    }

    public function setPrenom_realisateur($prenom_realisateur)
    {
        $this->prenom_realisateur = $prenom_realisateur;

        return $this;
    }

    public function getSexe_realisateur()
    {
        return $this->sexe_realisateur;
    }

    public function setSexe_realisateur($sexe_realisateur)
    {
        $this->sexe_realisateur = $sexe_realisateur;

        return $this;
    }

    public function getDateNaiss_realisateur()
    {
        return $this->dateNaiss_realisateur;
    }

    public function setDateNaiss_realisateur($dateNaiss_realisateur)
    {
        $this->dateNaiss_realisateur = $dateNaiss_realisateur;

        return $this;
    }
    public function __toString() {
        return $this->name_realisateur." ".$this->prenom_realisateur;
    }
}