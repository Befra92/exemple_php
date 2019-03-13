<?php
session_start();
echo $_SERVER ['REMOTE_ADDR'];//REtourne le port
echo $_SERVER ['PHP_SELF'];//REtourne le nom du fichier
echo $_SERVER ['REQUEST_METHOD'];//Retourne la méthode GET
echo $_SERVER ['REQUEST_METHOD'];//Retourne la méthode GET
echo $_SERVER ['HTTP_ACCEPT_LANGUAGE'];
echo $_SESSION['p'].' / '.$_SESSION['j'];