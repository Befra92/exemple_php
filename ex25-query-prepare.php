<?php
require_once('connex.php');
// Requête préparée pour éviter les intrusions
$sql = "SELECT * FROM personne
-- Requête préparée avec ? = pointeur
        WHERE Id_personne=?";

// Préparation de la requête
$res = mysqli_prepare($connect,$sql);

// Liaison de donnée à la requête (bind=lier)
mysqli_stmt_bind_param($res,'i',$num);
$num = 2;
//Execution de la requête
$ok = mysqli_stmt_execute($res);

//Recupère les données de la requête
// mysqli_stmt_bind_result($res,$nom,$prenom,$age);
//affichage par colonne
mysqli_stmt_bind_result($res,$num, $nom, $prenom,$age,$id_langue);

//Affichage de la donnée
while(mysqli_stmt_fetch($res)){
    // echo $nom." " . $prenom." " . $age." ";
    echo $nom." " . $prenom;
}
?>
