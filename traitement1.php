<?php

//méthode ISSET si existence et ! non nullité
//si formulaire est soumis
if(isset($_GET['envoie'])){
    // echo 'formulaire soumis';
    
    if(isset($_GET['pseudo']) && isset($_GET['age'])){
    $pseudo = $_GET['pseudo'];
    $age = (int)$_GET['age'];
    echo gettype($age).'<br>';
    echo 'Mon pseudo est '.$pseudo. ' et mon age est : '.$age;
    }
}