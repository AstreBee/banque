<?php


// Définition d'une classe
class Compte {
// attributs, propriétés
    private $libelle;

    private $soldeInitiale;

    private $devise;

    private Titulaire $titulaire;
    // fonction construct, qui à l'appel nous permettra d'instancier notre classe
    
    public function __construct($libelle, $soldeInitiale, $devise, Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->soldeInitiale = $soldeInitiale;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $titulaire->ajouterCompte($this);
    }

        // methode crediter le compte (ajout)
        public function crediterCompte($euro)
        {
            $this->soldeInitiale += $euro;
        }

        // methode débiter le compte (soustraire)
        public function debiterCompte($euro)
        {
            $this->soldeInitiale -= $euro;
        }

        // faire les virements d'un compte à l'autre
        public function virement($compteCible, $euro)
        {
            $this->debiterCompte($euro);
            $compteCible->crediterCompte($euro);
            return "Virement effectué !";
            
        }

            // retourner chaque infos lié au compte format string
    public function __toString()
    {
        return $this->titulaire." ".$this->libelle." ".$this->soldeInitiale." ".$this->devise;
    }


    // GETTER & SETTER
// libelle--------------------------------------------------
    public function getLibelle(){
        return $this->libelle;
    }
    public function setLibelle($libelle){
        $this->$libelle;
    }
// solde--------------------------------------------------
    public function getSolde(){
        return $this->solde;
    }
    public function setSolde($solde){
        $this->$solde;
    }
// devise--------------------------------------------------
    public function getDevise(){
        return $this->devise;
    }
    public function setDevise($devise){
        $this->$devise;
    }

// titulaire--------------------------------------------------
    public function getTitulaire(){
        return $this->titulaire;
    }
    public function setTitulaire($titulaire){
        $this->$titulaire;
    }





}
