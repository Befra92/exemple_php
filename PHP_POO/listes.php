<?php
require_once('connex.php');


$sql = "SELECT * FROM personne";
$res = $conn->query($sql);

echo 'Nombre de personne '.$res->rowCount();
while($donnees = $res->fetch()){
    echo "Nom :  ".$donnees['Nom']." Prénom :  ".$donnees['Prenom']." Age : ".$donnees['Age'].'<br>';
}
?>