<?php
session_start();//Démarrage de ma session

$_SESSION['p'] = 'PHP';
$_SESSION['j'] = 'JAVASCRIPT';
var_dump($_SESSION);

echo $_SESSION['p'].' / '.$_SESSION['j'];

session_destroy();
unset($_SESSION);
var_dump($_SESSION);