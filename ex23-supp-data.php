<?php
require_once('connex.php');
$sql = "DELETE FROM personne 
        WHERE Nom='Martin';
";

$res = mysqli_query($connect,$sql);
if($res){
    echo'Suppression réussie';
}
mysqli_close($connect);
?>

