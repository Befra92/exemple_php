<?php
// $texte = "Nous étudions PHP qui est un language de script incontournable dans le Web";
// $search = "/php/i";
// $textR = preg_replace($search, "Javascript", $texte);
// echo $textR;

// if(preg_match("/php/",$texte)){
//     echo "le mot php est dans le texte";
// }else{
//     echo "le mot php n'est pas dans le texte";
// }

$texte = "Nous étudions PHP qui est un language de script incontournable dans le Web";
$search = "/\bl|php/i";///\bl tous les mots commençant par l

if(preg_match($search,$texte)){
    echo "les mots commençant par l";
}else{
    echo "Pas de mots commençant par l";
}




?>

