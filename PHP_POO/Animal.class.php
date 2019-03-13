<?php

// Création d'une classe Animal
Class Animal{
    private $couleur = "gris";
    //ts les animaux ont un poids de 5kg
    private $poids = 5;
    // Déclaration de la variable statique
    public static $pattes = 4;

    //Constante à créer
    const POIDS_LEGER = 5;
    const POIDS_MOYEN = 10;
    const POIDS_LOURD = 15;

    //LE constructeur : Aide à créer notre objet 
    public function __construct($couleur, $poids){
        
        // echo "Appel du constructeur";
        //initialiser var d'instance
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    //accesseurs(accède à la couleur)
    public function getCouleur(){
        return $this->couleur;
    }
    //set modifier la couleur
    public function setCouleur($couleur){
        //couleur : var d'instancet et $couleur est l'attribut
        $this->couleur = $couleur;
    }
    public function ajouter_kilo(){
        //Récupère son poids de base et rajoute +1
        $this->poids = $this->poids +1;
    }
    public function manger_animal(Animal $animal_manger){
        $this->poids = $this->poids + $animal_manger->poids;
        $animal_manger->poids = 0;//son poids n'existe plus
        $animal_manger->couleur="";//sa couleur n'existe plus  
    }


    // Methode static
    public static function se_deplacer(){
        echo "L'animal se déplace";
    }


    /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *

     */ 
    public function setPoids($poids) 
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of pattes
     */ 
    public static function getPattes()
    {
        $this->pattes = $pattes;
    }

    /**
     * Set the value of pattes
     *
     */ 
    public static function setPattes($pattes)
    {
        $this->pattes = $pattes;

        return $this;
    }
}

?>