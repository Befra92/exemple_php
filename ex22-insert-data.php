<?php
require_once('connex.php');
$sql = "INSERT INTO personne (Nom, Prenom, Age, Id_langue) 
        VALUES('Martin', 'Jacques', 72, 1)
";
$res = mysqli_query($connect,$sql);
if($res){
    echo'Insertion de données réussie';
}
mysqli_close($connect);
?>

