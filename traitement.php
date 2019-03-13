<?php
if(isset($_GET['login']) && isset($_GET['password'])){
    $login = $_GET['login'];
    $pass = $_GET['password'];
    echo "Votre login est : ".$login." et votre mot de passe est : ".$pass;
}

$p = "Durand toto";
echo urlencode($p);
echo rawurlencode($p);
?>