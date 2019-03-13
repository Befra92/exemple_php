
<?php
$nom = ['A' => 'Julien', 'B' => 'Caroline', 'C' => 'Alice'];
echo sizeof ($nom);
var_dump($nom);
// print_r($nom);

if(in_array('Jules',$nom)){
    echo'Nom trouvé';
}else{
    echo'trouvé'.'<br>';
}


foreach($nom as $n){
    echo $n.'<br>';
}

sort($nom);
foreach($nom as $n){
    echo $n.'<br>';
}

rsort($nom);
foreach($nom as $n){
    echo $n.'<br>';
}

$st = 'Le monde est beau';
$stTab = explode(" ", $st);
echo count($stTab).'<br>';

//Tous les elts de notre tab dans $s
foreach($stTab as $s){
    echo $s.'<br>';
}

//Regrouper les valeurs d'une chaine avec implode
$matieres = ["HTML", "CSS", "JS", "PHP"];

$mChaine = implode("/", $matieres);
echo $mChaine;

array_push($matieres, "angular", "nodejs").'<br>\n';
echo count($matieres).'<br>';
var_dump($matieres).'<br>';

$aleatoire = array_rand($matieres);
echo $matieres[$aleatoire];
?>