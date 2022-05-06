<?php

// Définition d'une classe
class Titulaire {
// attributs, propriétés
    private string $nom;

    private string $prenom;
// objet datetime qui renvoit à date de naissance
    private DateTime $dateNaissance;

    private string $ville;

    private array $comptes;



    public function __construct( string $nom, string $prenom, string $dateNaissance, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
        $this->comptes = [];
    }

// ajouter un compte qui reprend la classe compte en l'injectant dans compte
// donc tableau de comptes [] = compte . on met $compte dans un tableau (il pourra y avoir plusieurs comptes dans le tableau ) 
    public function ajouterCompte(Compte $compte) {
        $this->comptes[] = $compte;
    }



// pour chaque compte bancaires on affiche le compte bancaire
    public function getAfficherCompteBancaire()
    {
        foreach($this->comptes as $compte){
            echo $compte. "<br>";
        }
    }


    public function __toString()

        // this pour obtenir afficher compte
    {
        return $this->nom." ".$this->prenom." ".$this->ville;
    }


    // GETTER - SETTER
// nom--------------------------------------------------
    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->$nom;
    }

// prénom--------------------------------------------------
    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->$prenom;
    }

// date naissance--------------------------------------------------
    public function getDate() {
        return $this->dateNaissance;
    }
    public function setDate($dateNaissance) {
        $this->$dateNaissance;
    }

// ville--------------------------------------------------
    public function getVille() {
        return $this->ville;
    }
    public function setVille($ville) {
        $this->$ville;
    }

// compte bancaire--------------------------------------------------
    public function getComptes() {
        return $this->comptes;
    }
    public function setCompte1($comptes) {
        $this->$comptes;
    }
}