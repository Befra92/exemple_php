<?php
//Connexion à la Bdd
$connect = mysqli_connect("127.0.0.1","admin","admin","bdd");
// if($connect){
    echo "<b>Connexion</b> réussie...";
    $sql="SELECT* FROM personne";
    //Ecrire une requête sql
    $res = mysqli_query($connect,$sql);
    if($res){
        echo ' Nombre de personnes '.mysqli_num_rows($res).'<br>';
        //***** */fetch récupère et affiche en tab assoc
        /*while($donnees=mysqli_fetch_assoc($res)){
            echo 'id : ' .$donnees['Id_personne'].' Nom : ' .$donnees['Nom'].' Prenom : ' .$donnees['Prenom']. ' Age : '.$donnees['Age'].'<br>';
        }*/
        //***** */fetch_row récupère et affiche en tab indexés
        // while($donnees=mysqli_fetch_row($res)){
        //     echo 'id : ' .$donnees[0].' Nom : ' .$donnees[1].' Prenom : ' .$donnees[2]. ' Age : '.$donnees[3].'<br>';
        // }
    }else{
        echo 'Echec lors de l\'execution de la requête';
    }
// }
?>


