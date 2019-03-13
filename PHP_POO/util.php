<?php
//Inclure une classe Animal (modèle)
require('Animal.class.php');

// création d'objet Animal
// $aigle = new Animal();
// //Utiliser l'opérateur pointer -> est égal à Point
// // $aigle->couleur = "marron";
// // $aigle->poids = 6;
// // $aigle->ajouter_kilo();

// // echo "L'aigle a pour couleur ".$aigle->couleur." et son poids est ".$aigle->poids;

// $chien = new Animal();
// //set modifie la couleur
// $chien->setCouleur('rouge');
// $chien->setPoids(40);
// $chien->ajouter_kilo();

// echo "Le chien a pour couleur : ".$chien->getCouleur()." et son poids est de : " .$chien->getPoids()."<br>";

// $ours = new Animal();
// $ours->setPoids(300);
// $ours->setCouleur('brun');

// echo "L'ours a pour poids :  ".$ours->getPoids()." et sa couleur est de : " .$ours->getCouleur()."<br>";

// $saumon = new Animal();
// $saumon->setPoids(30);
// $saumon->setCouleur("orange");
// echo "Le saumon a pour couleur: ".$saumon->getCouleur()." et son poids est ".
// $saumon->getPoids()." kg <br>";

// $ours->manger_animal($saumon);
// echo "L'ours a pour couleur: ".$ours->getCouleur()." et son poids est ".
// $ours->getPoids()." kg <br>";
// echo "Le saumon a pour couleur: ".$saumon->getCouleur()." et son poids est ".
// $saumon->getPoids()." kg <br>";


// $chat = new Animal("noir",10);
// echo '<br>'.'Le chat est '.$chat->getCouleur(). " et son poids est de  ".$chat->getPoids()." kg".'<br>';
// unset($chat);

//const nomdelaClasse Animal::POIDS_LEGER
$chat = new Animal("noir",Animal::POIDS_LEGER);
echo '<br>'.'Le chat est '.$chat->getCouleur(). " et son poids est de  ".$chat->getPoids()." kg".'<br>';


//Appel de la class statique se_deplacer
// Animal::se_deplacer();

//Appel de l'attribut class statique
echo "Le nombre de pattes des mammifères est: " .Animal::$pattes;



// EXO du soir
// $poisson1 = new Animal("gris",10);
// echo '<br>'.'Le poids du poisson1 est : '.$poisson1->getPoids()." kg".'<br>';

// $poisson2 = new Animal("rouge",7);
// echo '<br>'.'Le poids du poisson2 est : '  .$poisson2->getPoids()." kg".'<br>';

// $poisson1->manger_animal($poisson2);
// echo '<br>'.'Le nouveau poids du poisson1 est : '.$poisson1->getPoids()." kg".'<br>';

// $poisson2->manger_animal($poisson2);
// echo '<br>'.'Le nouveau poids du poisson2 est : '.$poisson2->getPoids()." kg".'<br>';


?>