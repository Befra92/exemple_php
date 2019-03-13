<?php 
// Déclaraton d'une variable
$nom = 'toto';
// $age = 22;
$prenom = 'Nina';

// echo $nom;
// echo 'Le nom de la personne est ' . $nom.'<br>';

// echo "Le nom de la personne est $nom".'<br>';

// echo 'Mon nom est ' . $nom . ' Mon prénom est ' . $prenom . ' Mon âge est ' . $age;


$a = "5";
$b = "7";
$res = $a+$b ;
echo $res . ' Le type est : ' .gettype($a.$b);
echo '<br>';
echo gettype($a);
echo '<br>';

$aNum = (int)$a . '<br>';
echo gettype($aNum) . '<br>';
echo $res;
echo '<br>';

//constante
define ('YEUX',2);
echo YEUX. '<br>';

const PIEDS = 2;
echo PIEDS;
?>