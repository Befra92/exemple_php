<?php


$fichier = 'compteur.txt';
$vue = file_get_contents($fichier);
$vue++;
echo $vue.' fois';
file_put_contents($fichier, $vue);


