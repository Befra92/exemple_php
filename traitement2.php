<?php
// var_dump($_POST['jours']);
// die();
//méthode ISSET si existence et ! non nullité
//si formulaire est soumis
if(isset($_POST['envoie'])){
    // echo 'formulaire soumis';
    
    if(isset($_POST['pseudo']) && isset($_POST['age'])){
    $pseudo = $_POST['pseudo'];
    $age = (int)$_POST['age'];
    $pwd = md5($_POST['pwd']);//md5 permet de crypter le mdp
    $message = $_POST['message'];
    $formation = $_POST['formation'];
    $tabModule = $_POST['modules'];    
    $tabJours = $_POST['jours'];
    $sexe = $_POST['sexe'];
    echo gettype($age).'<br>';
   

    echo 'Mon pseudo est '.$pseudo."<br>". ' Mon age est : '.$age."<br>". ' Mon mot de passe est : ' .$pwd."<br>". ' Mon message : '.$message."<br>". ' Formations : '.$formation;
    foreach($tabModule as $module){
        echo $module.'<br>';
        }
    foreach($tabJours as $jour => $valeur){
        echo $jour.' passe à ' .$valeur.'<br>';
        }
        echo 'Le genre est : '.$sexe;
    }
}