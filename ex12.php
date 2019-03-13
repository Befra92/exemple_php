<?php
function salutations($nom){
    echo "Bonjour ".$nom.'<br>';
}
salutations('Brigitte');


function calcul($ht){
    $ttc = $ht + $ht*0.20;
    return $ttc;
}
$prixTtc = calcul(50);
echo $prixTtc.'€';



?>