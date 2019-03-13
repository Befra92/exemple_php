<?php
$module = "php && Mysql";
// strlen : fonction qui affiche la taille d'une chaine de caractères
$l = strlen($module);
$extraire = substr($module, 9,3);
$pass = '    pass223';
$ln = trim($pass);
$nbM = str_word_count($module);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
b{
color:red;
font-size:18px;
}
</style>
<body>
    <p>La longueur du module étudié est : <b><?php echo $l; ?></b></p>
    <p>Texte modifié : <b><?php echo $extraire; ?></b></p>
    <p>Espace nettoyé et comptage du texte : <b><?php echo strlen($ln); ?></b></p>
    <p>Texte majuscule : <b><?php echo strtoupper($extraire); ?></b></p>
    <p>Texte en minuscule : <b><?php echo strtolower($extraire); ?></b></p>
    <p>1er lettre en majuscule : <b><?php echo ucfirst(strtolower($extraire)); ?></b></p>
    <p>Texte majuscule : <b><?php echo strtolower($extraire); ?></b></p>

    <p>Comptage Texte : <b><?php echo $nbM; ?></b></p>

</body>
</html>