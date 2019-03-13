<?php
//Inclure Classes Animal1 et Chat(modèle)
require_once('Animal1.class.php');
require_once('Chat.class.php');

//Création de l'objet chat
$chat1 = new Chat();
$chat1->nom="Joe";
$chat1->race="siamois";

echo 'Le nom du chat est '.$chat1->nom. ' et sa race est '.$chat1->race;
?>