<?php

// $_COOKIE['p'] = '-40% dans deux mois';
// echo $_COOKIE['p'];
$temps =  -395*24*3600;
setcookie ('p', "-40% de reduction", time()+$temps);

if(isset($_COOKIE['p'])){
    echo 'votre promo est pour'.$_COOKIE['p'].' est bientôt disponible';
} 