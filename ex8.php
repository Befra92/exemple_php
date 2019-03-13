<?php 

//TABLEAUX indexés
$jours = Array('Lundi', 'Mardi', 'Mercredi', 'Jeudi');
$jours [3]= "Dimanche";
echo $jours[3];

// BOUCLE FOR Compteur i
echo "<ol>";
    for ($i = 0; $i < count($jours); $i++){
        echo "<li> $jours[$i]</li>";
}
    echo "</ol>";

$personne = ["Simon", "Antoine", 25];
echo $personne [2];
 //Use foreach car on ne connait pas le nbre d'elt
foreach($personne as $p){
    echo $p. '<br>';
}

//Tableau associatif (+clef 'ab')
$tabAssoc = array ('ni' => 'Nicolas ', 'ro' => 'Rokhaya ', 'ab' => 'Abdel ');
echo $tabAssoc ['ab'];

foreach($tabAssoc as $cle => $tab){
    echo 'la clef ' . $cle.' a pour valeur : ' .$tab . '<br>';
}



$tabs = [
    ['id' => 1, 'nom' => 'Simon', 'age' => 80, 'url' => 'images/img1.jpg'],
    ['id' => 2, 'nom' => 'Landry', 'age' => 25,  'url' => 'images/img1.jpg'],
    ['id' => 3, 'nom' => 'Pierre', 'age' => 42,  'url' => 'images/img1.jpg'],
    ['id' => 4, 'nom' => 'Claire', 'age' => 50,  'url' => 'images/img1.jpg']
];
// foreach($tabs as $cle => $tabs){
//     echo 'id' . $cle.' 'nom' : ' .$tabs . '<br>';

// var_dump($tabs[0]['age']);

for ($i=0; $i<count($tabs);$i++){
    echo $tabs [$i]['id'].' ' .$tabs [$i]['nom'].'' .$tabs [$i]['age'].'' .$tabs [$i]['url'].'<br>';
};


echo'
    <table>
    <tr>
    <th>Id</th><th>Nom</th><th>Age</th><th>url</th>    
    </tr>';
    for ($i=0; $i<count($tabs);$i++){
        echo'<tr>
            <td>'.$tabs[$i]["id"].'</td>
            <td>'.$tabs[$i]["nom"].'</td>
            <td>'.$tabs[$i]["age"].'</td>
            <td><img src='.$tabs[$i]["url"].' width="100"></td>
        </tr>';
    }
echo '</table>';



?>
